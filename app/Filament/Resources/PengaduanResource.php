<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Regency;
use Filament\Forms\Form;
use App\Models\Pengaduan;
use Filament\Tables\Table;
use Filament\Tables\Actions\DropdownAction;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Exports\PengaduanExport;
use Filament\Resources\Resource;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\ActionGroup;
use Maatwebsite\Excel\Facades\Excel;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Components\Wizard\Step;
use App\Filament\Resources\PengaduanResource\Pages;

class PengaduanResource extends Resource
{
    protected static ?string $model = Pengaduan::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document';
    protected static ?string $navigationGroup = 'Layanan';

    public static function getNavigationLabel(): string
    {
        return 'Pengaduan';
    }

    public static function shouldRegisterNavigation(): bool
    {
        return auth()->user()?->can('view_any_pengaduan');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Wizard::make([
                    Step::make('Informasi Pengaduan')
                        ->columns(2)
                        ->schema([
                            Forms\Components\TextInput::make('perihal')
                                ->label('Perihal')
                                ->columnSpan(2)
                                ->required()
                                ->maxLength(255),
                            Forms\Components\TextInput::make('alamat_kejadian')
                                ->label('Alamat Kejadian')
                                ->columnSpan(2)
                                ->required(),
                            Forms\Components\Select::make('province_id')
                                ->label('Provinsi')
                                ->relationship('province', 'name')
                                ->searchable()
                                ->preload()
                                ->reactive()
                                ->required()
                                ->afterStateUpdated(function ($set) {
                                    $set('regency_id', null);
                                }),

                            Forms\Components\Select::make('regency_id')
                                ->label('Kab/Kota')
                                ->options(function ($get) {
                                    $provinceId = $get('province_id');
                                    if (!$provinceId) {
                                        return [];
                                    }
                                    return Regency::where('province_id', $provinceId)
                                        ->pluck('name', 'id');
                                })
                                ->searchable()
                                ->preload()
                                ->required()
                                ->reactive(),

                            Forms\Components\Select::make('unit_id')
                                ->label('Unit')
                                ->relationship('unit', 'name')
                                ->searchable()
                                ->preload()
                                ->columnSpan(2)
                                ->required(),

                            Forms\Components\DateTimePicker::make('waktu_kejadian')
                                ->label('Waktu Kejadian')
                                ->required(),
                            Forms\Components\Textarea::make('uraian')
                                ->label('Uraian')
                                ->columnSpan(2)
                                ->required(),
                        ]),

                    Step::make('Pelapor')
                        ->schema([
                            Forms\Components\Repeater::make('pelapor')
                                ->label('Data Pelapor')
                                ->relationship()
                                ->columns(2)
                                ->schema([
                                    Forms\Components\TextInput::make('nama')
                                        ->label('Nama')
                                        ->default('Anonim')
                                        ->columnSpan(2),
                                    Forms\Components\TextInput::make('nip')
                                        ->label('NIP')
                                        ->nullable(),
                                    Forms\Components\TextInput::make('unit')
                                        ->label('Unit')
                                        ->nullable(),
                                    Forms\Components\TextInput::make('jabatan')
                                        ->label('Jabatan')
                                        ->nullable(),
                                ]),
                        ]),

                    Step::make('Lampiran')
                        ->schema([
                            Forms\Components\Repeater::make('files')
                                ->relationship('files')
                                ->label('Lampiran')
                                ->schema([
                                    Forms\Components\FileUpload::make('file_path')
                                        ->label('File')
                                        ->directory('lampiran_pengaduan')
                                        ->preserveFilenames()
                                        ->maxSize(2048)
                                        ->downloadable()
                                        ->openable()
                                        ->previewable(true)
                                        ->required()
                                        ->columnSpan(2),

                                    Forms\Components\TextInput::make('file_name')
                                        ->label('Nama File (opsional)')
                                        ->maxLength(255),
                                ])
                                ->createItemButtonLabel('Tambah Lampiran')
                                ->columnSpan(2),
                        ]),

                ])
                    ->skippable()
                    ->persistStepInQueryString()
                    ->columnSpan(2),
            ])
            ->columns(2);
    }

    // public static function table(Table $table): Table
    // {
    //     return $table
    //         ->columns([
    //             Tables\Columns\TextColumn::make('nomor_registrasi')
    //                 ->label('Nomor Registrasi')
    //                 ->sortable()
    //                 ->searchable(),
    //             Tables\Columns\TextColumn::make('perihal')
    //                 ->label('Perihal')
    //                 ->searchable(),
    //             Tables\Columns\TextColumn::make('status')
    //                 ->badge()
    //                 ->colors([
    //                     'warning' => 'Draft',
    //                     'info' => 'Proses',
    //                     'success' => 'Selesai',
    //                 ]),
    //             Tables\Columns\TextColumn::make('waktu_kejadian')
    //                 ->label('Waktu Kejadian')
    //                 ->dateTime('d M Y H:i'),
    //         ])
    //         ->filters([])
    //         ->actions([
    //             Tables\Actions\Action::make('detail')
    //                 ->label('Detail')
    //                 ->icon('heroicon-o-eye')
    //                 ->url(fn(Pengaduan $record) => route('pengaduan.show', $record))
    //                 ->openUrlInNewTab(), // bisa diubah ke modal juga
    //             Tables\Actions\EditAction::make(),
    //             Tables\Actions\DeleteAction::make(),
    //         ]);
    // }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nomor_registrasi')
                    ->label('Nomor Registrasi')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('perihal')
                    ->label('Perihal')
                    ->searchable(),
                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->colors([
                        'warning' => 'Draft',
                        'info' => 'Proses',
                        'success' => 'Selesai',
                    ]),
                Tables\Columns\TextColumn::make('waktu_kejadian')
                    ->label('Waktu Kejadian')
                    ->dateTime('d M Y H:i'),
            ])
            ->filters([])
            ->headerActions([
                ActionGroup::make([
                    Action::make('export_excel')
                        ->label('Export Excel')
                        ->icon('heroicon-o-document')
                        ->action(function () {
                            return Excel::download(new PengaduanExport, 'pengaduan.xlsx');
                        }),
                    Action::make('export_pdf')
                        ->label('Export PDF')
                        ->icon('heroicon-o-document-text')
                        ->url(route('pengaduan.export.pdf', request()->all())) // pakai route
                        ->openUrlInNewTab(), // opsional agar buka di tab baru
                ])->label('Export')
                    ->icon('heroicon-o-document'),
            ])



            ->actions([
                Tables\Actions\Action::make('changeStatus')
                    ->label(fn(Pengaduan $record) => $record->status === 'Draft' ? 'Proses' : ($record->status === 'Proses' ? 'Closed' : ''))
                    ->icon(fn(Pengaduan $record) => $record->status === 'Draft' ? 'heroicon-o-play' : 'heroicon-o-check-circle')
                    ->color(fn(Pengaduan $record) => $record->status === 'Draft' ? 'warning' : 'success')
                    ->visible(fn(Pengaduan $record) => in_array($record->status, ['Draft', 'Proses']))
                    ->action(function (Pengaduan $record) {
                        if ($record->status === 'Draft') {
                            $record->update(['status' => 'Proses']);
                        } elseif ($record->status === 'Proses') {
                            $record->update(['status' => 'Selesai']);
                        }
                    }),

                Tables\Actions\Action::make('detail')
                    ->label('Detail')
                    ->icon('heroicon-o-eye')
                    ->url(fn(Pengaduan $record) => route('pengaduan.show', $record))
                    ->openUrlInNewTab(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ]);
    }


    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPengaduans::route('/'),
            'create' => Pages\CreatePengaduan::route('/create'),
            'edit' => Pages\EditPengaduan::route('/{record}/edit'),
        ];
    }
}
