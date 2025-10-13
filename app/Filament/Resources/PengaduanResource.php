<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Livewire\Component as Livewire;
use App\Models\Pelapor;
use App\Models\Regency;
use Filament\Forms\Form;
use App\Models\Pengaduan;
use Filament\Tables\Table;
use App\Enums\StatusPengaduan;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Exports\PengaduanExport;
use App\Models\RiwayatPengaduan;
use Filament\Resources\Resource;
use App\Exports\PengaduanExporter;
use Filament\Tables\Actions\Action;
use Filament\Tables\Filters\Filter;
use Maatwebsite\Excel\Facades\Excel;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Wizard;
use App\Events\StatusPengaduanUpdated;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Actions\ExportAction;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\Wizard\Step;
use Filament\Tables\Actions\DropdownAction;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Forms\Components\DateTimePicker;
use Filament\Tables\Actions\DeleteBulkAction;
use App\Filament\Resources\PengaduanResource\Pages;

class PengaduanResource extends Resource
{
    protected static ?string $model = Pengaduan::class;
    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document';
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
    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('created_at', 'desc')
            ->columns([
                Tables\Columns\TextColumn::make('nomor_registrasi')
                    ->label('Nomor Registrasi')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('perihal')
                    ->label('Perihal')
                    ->searchable()
                    ->limit(35)
                    ->tooltip(fn($state) => $state),

                // [PERBAIKAN 1] Gunakan BadgeColumn untuk tampilan status yang lebih baik
                BadgeColumn::make('status')
                    ->colors([
                        'primary' => StatusPengaduan::Draft->value,
                        'warning' => StatusPengaduan::Proses->value,
                        'success' => StatusPengaduan::Selesai->value,
                        'danger'  => 'Ditolak', // Contoh jika ada status lain
                    ])
                    ->sortable(),

                Tables\Columns\TextColumn::make('user.name')
                    ->label('Pelapor Utama')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Tanggal Dibuat')
                    ->dateTime('d M Y H:i')
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->options(StatusPengaduan::class),
                SelectFilter::make('unit')
                    ->relationship('unit', 'name')
                    ->searchable()
                    ->preload()
                    ->label('Unit Kejadian'),
                SelectFilter::make('province')
                    ->relationship('province', 'name')
                    ->searchable()
                    ->preload()
                    ->label('Provinsi'),
                SelectFilter::make('regency')
                    ->relationship('regency', 'name')
                    ->searchable()
                    ->preload()
                    ->label('Kota/Kabupaten'),
                SelectFilter::make('jabatan_pelapor')
                    ->label('Jabatan Pelapor')
                    ->options(fn() => Pelapor::distinct()->whereNotNull('jabatan')->pluck('jabatan', 'jabatan'))
                    ->query(function (Builder $query, array $data): Builder {
                        $value = $data['value'];
                        if (blank($value)) {
                            return $query;
                        }
                        return $query->whereHas('pelapors', function (Builder $query) use ($value) {
                            $query->where('jabatan', $value);
                        });
                    }),
                // Filter berdasarkan Tahun
                SelectFilter::make('tahun')
                    ->label('Tahun Dibuat')
                    ->options(
                        Pengaduan::selectRaw('YEAR(created_at) as year')
                            ->distinct()
                            ->orderBy('year', 'desc')
                            ->pluck('year', 'year')
                    )
                    ->query(function (Builder $query, array $data): Builder {
                        if (isset($data['value'])) {
                            return $query->whereYear('created_at', $data['value']);
                        }
                        return $query;
                    }),

                // Filter berdasarkan Bulan
                SelectFilter::make('bulan')
                    ->label('Bulan Dibuat')
                    ->options([
                        '01' => 'Januari',
                        '02' => 'Februari',
                        '03' => 'Maret',
                        '04' => 'April',
                        '05' => 'Mei',
                        '06' => 'Juni',
                        '07' => 'Juli',
                        '08' => 'Agustus',
                        '09' => 'September',
                        '10' => 'Oktober',
                        '11' => 'November',
                        '12' => 'Desember',
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        if (isset($data['value'])) {
                            return $query->whereMonth('created_at', $data['value']);
                        }
                        return $query;
                    }),
                // Filter berdasarkan Rentang Tanggal
                Filter::make('created_at')
                    ->form([
                        DatePicker::make('created_from')->label('Dari Tanggal'),
                        DatePicker::make('created_until')->label('Sampai Tanggal'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['created_from'],
                                fn(Builder $query, $date): Builder => $query->whereDate('created_at', '>=', $date),
                            )
                            ->when(
                                $data['created_until'],
                                fn(Builder $query, $date): Builder => $query->whereDate('created_at', '<=', $date),
                            );
                    })
                    ->label('Rentang Tanggal Dibuat'),
            ])
            ->headerActions([
                Action::make('export_excel')
                    ->label('Export Excel')
                    ->icon('heroicon-o-document-arrow-down')
                    // Tambahkan parameter $livewire untuk mengakses data tabel
                    ->action(function (Livewire $livewire) {
                        // 1. Ambil query yang sudah difilter dari tabel
                        $query = $livewire->getFilteredTableQuery();

                        // 2. Eager load relasi yang diperlukan untuk data di Excel
                        $records = $query->with(['user', 'pelapor', 'unit', 'province', 'regency'])->get();

                        // 3. Beri nama file
                        $fileName = 'data-pengaduan-' . now()->format('d-m-Y') . '.xlsx';

                        // 4. Panggil Laravel Excel dengan data Collection yang sudah difilter
                        return Excel::download(new PengaduanExport($records), $fileName);
                    })

            ])
            ->actions([
                ActionGroup::make([
                    ViewAction::make()->label('Detail'),
                    Tables\Actions\EditAction::make(),

                    // [PERBAIKAN 3] Aksi ubah status yang lebih terstruktur
                    Action::make('ubahStatus')
                        ->label('Ubah Status')
                        ->icon('heroicon-o-tag')
                        ->form([
                            Select::make('status')
                                ->label('Status Baru')
                                ->options(StatusPengaduan::class)
                                ->required()
                                ->reactive(),
                            Textarea::make('alasan_tolak')
                                ->label('Alasan Penolakan')
                                ->required(fn(callable $get) => $get('status') === 'Ditolak')
                                ->visible(fn(callable $get) => $get('status') === 'Ditolak'),
                            Textarea::make('catatan')
                                ->label('Catatan (Opsional)')
                        ])
                        ->action(function (array $data, Pengaduan $record): void {
                            // $record->ubahStatus(
                            //     StatusPengaduan::from($data['status']),
                            //     $data['catatan'],
                            //     auth()->id()
                            // );

                            $record->status = $data['status'];
                            $record->catatan = $data['catatan'] ?? null;

                            if ($data['status'] === 'Ditolak') {
                                $record->alasan_tolak = $data['alasan_tolak'] ?? null;
                            } else {
                                $record->alasan_tolak = null;
                            }

                            $record->save();

                            // Simpan ke riwayat jika kamu punya model RiwayatPengaduan
                            RiwayatPengaduan::create([
                                'pengaduan_id' => $record->id,
                                'status' => $data['status'],
                                'catatan' => $data['catatan'] ?? null,
                                'user_id' => auth()->id(),
                            ]);

                            Notification::make()
                                ->title('Status berhasil diubah')
                                ->success()
                                ->send();
                        }),

                    Action::make('chat')
                        ->label('Chat')
                        ->icon('heroicon-o-chat-bubble-left-right')
                        ->color('success')
                        ->url(fn(Pengaduan $record): string => static::getUrl('chat', ['record' => $record])),

                    Tables\Actions\DeleteAction::make(),
                ]),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPengaduans::route('/'),
            'create' => Pages\CreatePengaduan::route('/create'),
            'edit' => Pages\EditPengaduan::route('/{record}/edit'),
            'chat' => Pages\Chat::route('/{record}/chat'),
        ];
    }
}
