<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\Regency;
use App\Models\Province;
use App\Models\Pengaduan;
use Illuminate\Http\Request;
use App\Models\Pengaduanfile;
use Illuminate\Support\Facades\Storage;

class PengaduanController extends Controller
{
    public function index()
    {
        // $pengaduan = Pengaduan::all();
        // $pengaduan = Pengaduan::orderBy('waktu_kejadian', 'desc')->get();
        $pengaduan = Pengaduan::where('user_id', auth()->id())
            ->orderBy('waktu_kejadian', 'desc')
            ->get();

        return view('frontend.home.pengaduan.index', compact('pengaduan'));
    }

    public function createStepOne(Request $request)
    {
        $pengaduan = $request->session()->get('pengaduan');
        $provinces = Province::all();
        $regencies = Regency::all();
        $units     = Unit::all();

        return view('frontend.home.create-step-one', compact('pengaduan', 'provinces', 'regencies', 'units'));
    }

    public function postCreateStepOne(Request $request)
    {
        $validatedData = $request->validate([
            'perihal'          => 'required|string',
            'alamat_kejadian'   => 'required|string',
            'tanggal_kejadian'  => 'required|date',
            'waktu_kejadian'    => 'required|date_format:H:i',
            'unit_id'          => 'required|exists:units,id',
            'province_id'      => 'required|exists:provinces,id',
            'regency_id'       => 'required|exists:regencies,id',
            'uraian'           => 'required|string',
        ]);
        $request->session()->put('pengaduan', $validatedData);

        return redirect()->route('pengaduan.create.step.two');
    }

    public function getRegencies($province_id)
    {
        $regencies = Regency::where('province_id', $province_id)->get();
        return response()->json($regencies);
    }

    public function createStepTwo(Request $request)
    {
        $pengaduan = $request->session()->get('pengaduan');
        $pelapor = $request->session()->get('pelapor', []); // konsisten pakai 'pelapor'

        return view('frontend.home.create-step-two', compact('pengaduan', 'pelapor'));
    }

    public function postCreateStepTwo(Request $request)
    {
        // Kalau tombol "Lanjut" ditekan
        if ($request->has('lanjut')) {
            return redirect()->route('pengaduan.create.step.three');
        }

        $pelaporList = session()->get('pelapor', []);
        // Ambil semua input
        $nama    = $request->input('nama');
        $nip     = $request->input('nip');
        $unit    = $request->input('unit');
        $jabatan = $request->input('jabatan');
        // Kalau semua field kosong → otomatis jadi Anonim
        if (empty($nama) && empty($nip) && empty($unit) && empty($jabatan)) {
            $pelaporList[] = [
                'nama'    => 'Anonim',
                'nip'     => null,
                'unit'    => null,
                'jabatan' => null,
            ];
        } else {
            // Kalau ada salah satu field diisi → validasi wajib isi semua
            $validated = $request->validate([
                'nama'    => 'required|string|max:255',
                'nip'     => 'required|string|max:100',
                'unit'    => 'required|string|max:255',
                'jabatan' => 'required|string|max:255',
            ]);
            $pelaporList[] = $validated;
        }
        // Simpan kembali ke session
        session()->put('pelapor', $pelaporList);
        return redirect()->route('pengaduan.create.step.two')
            ->with('success', 'Data pelapor berhasil ditambahkan ke session');
    }

    public function postStepTwo(Request $request)
    {
        $pelapor = $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'nullable|string',
            'telepon' => 'nullable|string',
        ]);
        // Ambil data pelapor dari session, kalau belum ada buat array kosong
        $pelaporList = session()->get('pelapor', []);
        // Tambahkan pelapor baru ke list
        $pelaporList[] = $pelapor;
        // Simpan kembali ke session
        session()->put('pelapor', $pelaporList);
        return redirect()->back()->with('success', 'Pelapor berhasil ditambahkan.');
    }

    public function removePelapor(Request $request, $index)
    {
        $pelapor = $request->session()->get('pelapor', []);
        if (isset($pelapor[$index])) {
            unset($pelapor[$index]);
            $pelapor = array_values($pelapor); // reindex ulang
            $request->session()->put('pelapor', $pelapor);
            return redirect()->back()->with('success', 'Pelapor berhasil dihapus.');
        }
        return redirect()->back()->with('error', 'Pelapor tidak ditemukan.');
    }

    public function createStepThree(Request $request)
    {
        $pengaduan = $request->session()->get('pengaduan');
        return view('frontend.home.create-step-three', compact('pengaduan'));
    }

    public function postCreateStepThree(Request $request)
    {
        $request->validate([
            'lampiran.*' => 'file|max:20480|mimes:pdf,doc,docx',
        ]);
        $sessionPengaduan = $request->session()->get('pengaduan');
        $pelaporList = $request->session()->get('pelapor', []);
        // $pengaduan = Pengaduan::create($sessionPengaduan);
        $pengaduan = Pengaduan::create(array_merge(
            $sessionPengaduan,
            ['user_id' => auth()->id()] // otomatis ambil user login
        ));
        foreach ($pelaporList as $p) {
            $pengaduan->pelapor()->create($p);
        }
        $lampiranSession = $request->session()->get('pengaduan_lampiran', []);

        foreach ($lampiranSession as $file) {
            $filename = $file['file_name'];
            $tempPath = $file['file_tmp'];
            $finalPath = 'lampiran_pengaduan/' . $filename;
            if (Storage::exists($tempPath)) {
                Storage::move($tempPath, 'public/' . $finalPath);
            }
            Pengaduanfile::create([
                'pengaduan_id' => $pengaduan->id,
                'file_path' => $finalPath,
                'file_name' => $filename,
            ]);
        }
        // Hapus session
        $request->session()->forget(['pengaduan', 'pelapor', 'pengaduan_lampiran']);
        return redirect()->route('pengaduan.index')->with('success', 'Pengaduan berhasil dibuat!');
    }

    public function addLampiranStepThree(Request $request)
    {
        $request->validate([
            'lampiran.*' => 'required|file|max:20480|mimes:pdf,doc,docx',
        ]);
        $lampiranSession = session()->get('pengaduan_lampiran', []);
        if ($request->hasFile('lampiran')) {
            foreach ($request->file('lampiran') as $file) {
                $lampiranSession[] = [
                    'file_name' => $file->getClientOriginalName(),
                    'file_tmp'  => $file->store('temp_lampiran'), // simpan sementara
                ];
            }
        }
        session()->put('pengaduan_lampiran', $lampiranSession);
        return redirect()->back()->with('success', 'Lampiran berhasil ditambahkan ke session.');
    }


    public function removeLampiranStepThree($index)
    {
        $lampiranSession = session()->get('pengaduan_lampiran', []);
        if (isset($lampiranSession[$index])) {
            Storage::delete($lampiranSession[$index]['file_tmp']); // hapus file temp
            unset($lampiranSession[$index]);
            session()->put('pengaduan_lampiran', array_values($lampiranSession));
        }
        return redirect()->back()->with('success', 'Lampiran berhasil dihapus.');
    }

    public function editStepOne(Request $request, $id)
    {
        $pengaduan = Pengaduan::findOrFail($id);
        $provinces = Province::all();
        $regencies = Regency::all();
        $units     = Unit::all();
        // Simpan sementara di session
        $request->session()->put('pengaduan_edit', $pengaduan->toArray());
        return view('frontend.home.edit-step-one', compact('pengaduan', 'provinces', 'regencies', 'units'));
    }

    public function postEditStepOne(Request $request, $id)
    {
        $validatedData = $request->validate([
            'perihal' => 'required|string',
            'alamat_kejadian' => 'required|string',
            'tanggal_kejadian' => 'required|date',
            'waktu_kejadian' => 'required|date_format:H:i',
            'unit_id' => 'required|exists:units,id',
            'province_id' => 'required|exists:provinces,id',
            'regency_id' => 'required|exists:regencies,id',
            'uraian' => 'required|string',
        ]);
        $request->session()->put('pengaduan_edit', $validatedData);
        return redirect()->route('pengaduan.edit.step.two', $id);
    }

    // public function editStepTwo(Request $request, $id)
    // {
    //     $pengaduan = Pengaduan::findOrFail($id);
    //     $pelapor = $pengaduan->pelapor()->get()->toArray();

    //     // Simpan sementara di session
    //     $request->session()->put('pelapor_edit', $pelapor);

    //     return view('frontend.home.edit-step-two', compact('pengaduan', 'pelapor'));
    // }

    public function editStepTwo(Request $request, $id)
    {
        $pengaduan = Pengaduan::findOrFail($id);
        // Ambil dari session kalau ada
        $pelapor = $request->session()->get('pelapor_edit');
        if (!$pelapor) {
            // Kalau session kosong, isi dari DB
            $pelapor = $pengaduan->pelapor()->get()->toArray();
            $request->session()->put('pelapor_edit', $pelapor);
        }
        return view('frontend.home.edit-step-two', compact('pengaduan', 'pelapor'));
    }

    public function postEditStepTwo(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'nip' => 'required|string|max:100',
            'unit' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
        ]);

        $pelaporList = session()->get('pelapor_edit', []);
        $pelaporList[] = $validated;
        session()->put('pelapor_edit', $pelaporList);

        return redirect()->back()->with('success', 'Data pelapor berhasil diperbarui.');
    }

    public function removePelaporSession($id, $index)
    {
        $pelaporList = session()->get('pelapor_edit', []);
        if (isset($pelaporList[$index])) {
            unset($pelaporList[$index]);
            session()->put('pelapor_edit', array_values($pelaporList)); // reindex array
        }
        return redirect()->back()->with('success', 'Pelapor berhasil dihapus.');
    }

    public function postEditStepThree(Request $request, $id)
    {
        $request->validate([
            'lampiran.*' => 'file|max:20480|mimes:pdf,doc,docx',
        ]);
        $pengaduan = Pengaduan::findOrFail($id);

        // Update data pengaduan dari session
        $sessionPengaduan = $request->session()->get('pengaduan_edit');
        if ($sessionPengaduan) {
            $pengaduan->update($sessionPengaduan);
        }

        // Update pelapor
        $pelaporList = $request->session()->get('pelapor_edit', []);
        $pengaduan->pelapor()->delete();
        foreach ($pelaporList as $p) {
            $pengaduan->pelapor()->create($p);
        }

        // Upload lampiran baru
        if ($request->hasFile('lampiran')) {
            foreach ($request->file('lampiran') as $file) {
                if ($file->isValid()) {
                    $path = $file->store('lampiran_pengaduan', 'public');
                    Pengaduanfile::create([
                        'pengaduan_id' => $pengaduan->id,
                        'file_path' => $path,
                        'file_name' => $file->getClientOriginalName(),
                    ]);
                }
            }
        }

        $request->session()->forget(['pengaduan_edit', 'pelapor_edit']);

        return redirect()->route('pengaduan.index')->with('success', 'Pengaduan berhasil diperbarui.');
    }

    public function addLampiranEditStepThree(Request $request, $id)
    {
        $request->validate([
            'lampiran.*' => 'required|file|max:20480|mimes:pdf,doc,docx',
        ]);

        $lampiranSession = session()->get('pengaduan_lampiran', []);

        if ($request->hasFile('lampiran')) {
            foreach ($request->file('lampiran') as $file) {
                $lampiranSession[] = [
                    'file_name' => $file->getClientOriginalName(),
                    'file_tmp'  => $file->store('temp_lampiran'),
                ];
            }
        }

        session()->put('pengaduan_lampiran', $lampiranSession);

        return redirect()->back()->with('success', 'Lampiran berhasil ditambahkan ke session.');
    }

    public function editStepThree($id)
    {
        $pengaduan = Pengaduan::with('files')->findOrFail($id);

        $lampiranDB = $pengaduan->files->map(function ($f) {
            return [
                'source'    => 'db',
                'id'        => $f->id,
                'file_name' => $f->file_name,
                'file_path' => $f->file_path,
                'is_temp'   => false,
            ];
        })->toArray();


        $sessionKey = 'pengaduan_lampiran';
        $lampiranSessionRaw = session()->get($sessionKey, []);

        $lampiranSession = [];
        foreach ($lampiranSessionRaw as $index => $f) {
            $lampiranSession[] = [
                'source'    => 'session',
                'id'        => $index, // id lokal untuk hapus dari session
                'file_name' => $f['file_name'],
                'file_path' => $f['file_tmp'], // path sementara, mis. "temp_lampiran/abc123.pdf"
                'is_temp'   => true,
            ];
        }

        // 3) gabungkan
        $lampiranGabungan = array_merge($lampiranDB, $lampiranSession);

        // 4) kirim ke view
        return view('frontend.home.edit-step-three', compact('pengaduan', 'lampiranGabungan'));
    }


    public function removeLampiranEditStepThree($index)
    {
        $lampiranSession = session()->get('pengaduan_lampiran', []);
        if (isset($lampiranSession[$index])) {
            Storage::delete($lampiranSession[$index]['file_tmp']); // hapus file sementara
            unset($lampiranSession[$index]);
            session()->put('pengaduan_lampiran', array_values($lampiranSession));
        }

        return redirect()->back()->with('success', 'Lampiran berhasil dihapus.');
    }

    public function show($id)
    {
        // Pastikan 'riwayat' ada di dalam array .with()
        $pengaduan = Pengaduan::with(['files', 'unit', 'pelapor', 'province', 'regency', 'riwayat'])
            ->findOrFail($id);

        return view('frontend.home.show', compact('pengaduan'));
    }

    public function destroy($id)
    {
        $pengaduan = Pengaduan::findOrFail($id);

        if ($pengaduan->files) {
            foreach ($pengaduan->files as $file) {
                if ($file->path && file_exists(storage_path('app/public/' . $file->path))) {
                    unlink(storage_path('app/public/' . $file->path));
                }
                $file->delete();
            }
        }
        $pengaduan->delete();
        return redirect()->route('pengaduan.index')->with('success', 'Pengaduan berhasil dihapus.');
    }
}
