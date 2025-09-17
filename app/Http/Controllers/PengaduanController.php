<?php

namespace App\Http\Controllers;

use App\Models\Regency;
use App\Models\Province;
use App\Models\Pengaduan;
use App\Models\Pengaduanfile;
use App\Models\Unit;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    public function index()
    {
        // $pengaduan = Pengaduan::all();
        $pengaduan = Pengaduan::orderBy('waktu_kejadian', 'desc')->get();
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
            // 'tanggalKejadian'  => 'required|date',
            // 'waktuKejadian'    => 'required|date_format:H:i',
            'uraian'           => 'required|string',
        ]);

        if (empty($request->session()->get('pengaduan'))) {
            $pengaduan = new Pengaduan();
            $pengaduan->fill($validatedData);
            $request->session()->put('pengaduan', $pengaduan);
        } else {
            $pengaduan = $request->session()->get('pengaduan');
            $pengaduan->fill($validatedData);
            $request->session()->put('pengaduan', $pengaduan);
        }

        return redirect()->route('pengaduan.create.step.two');
    }


    public function getRegencies($province_id)
    {
        $regencies = Regency::where('province_id', $province_id)->get();
        return response()->json($regencies);
    }

    // public function createStepTwo(Request $request)
    // {
    //     $pengaduan = $request->session()->get('pengaduan');
    //     return view('frontend.home.create-step-two', compact('pengaduan'));
    // }

    // public function postCreateStepTwo(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'nama'    => 'required|string|max:255',
    //         'nip'     => 'required|string|max:50',
    //         'unit'    => 'required|string|max:100',
    //         'jabatan' => 'required|string|max:100',
    //     ]);

    //     $pengaduan = $request->session()->get('pengaduan');
    //     $pengaduan->fill($validatedData);
    //     $request->session()->put('pengaduan', $pengaduan);
    //     return redirect()->route('pengaduan.create.step.three'); 
    // }


    public function createStepTwo(Request $request)
    {
        $pengaduan = $request->session()->get('pengaduan');
        // ambil pelapor dari session (kalau ada)
        $pelapors = $request->session()->get('pelapors', []);

        return view('frontend.home.create-step-two', compact('pengaduan', 'pelapors'));
    }

    // public function postCreateStepTwo(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'nama.*'    => 'required|string|max:255',
    //         'nip.*'     => 'required|string|max:50',
    //         'unit.*'    => 'required|string|max:100',
    //         'jabatan.*' => 'required|string|max:100',
    //     ]);

    //     // simpan array pelapor ke session
    //     $pelapors = [];
    //     foreach ($request->nama as $i => $nama) {
    //         $pelapors[] = [
    //             'nama'    => $nama,
    //             'nip'     => $request->nip[$i],
    //             'unit'    => $request->unit[$i],
    //             'jabatan' => $request->jabatan[$i],
    //         ];
    //     }

    //     $request->session()->put('pelapors', $pelapors);

    //     return redirect()->route('pengaduan.create.step.three');
    // }

    public function postStepTwo(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'nip' => 'required|string|max:100',
            'unit' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
        ]);

        // Ambil pelapor yang sudah ada di session
        $pelaporList = session()->get('pelapor', []);

        // Tambahkan pelapor baru
        $pelaporList[] = $validated;

        // Simpan lagi ke session
        session()->put('pelapor', $pelaporList);

        return redirect()->route('pengaduan.create.step.two')
            ->with('success', 'Data pelapor berhasil ditambahkan ke session');
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

        // ambil pengaduan dari session
        $pengaduan = $request->session()->get('pengaduan');
        $pengaduan->save(); // simpan ke DB

        // simpan file ke table pengaduan_files
        if ($request->hasFile('lampiran')) {
            foreach ($request->file('lampiran') as $file) {
                $path = $file->store('lampiran_pengaduan', 'public');

                Pengaduanfile::create([
                    'pengaduan_id' => $pengaduan->id,
                    'file_path'    => $path,
                    'file_name'    => $file->getClientOriginalName(),
                ]);
            }
        }

        // hapus session setelah selesai
        $request->session()->forget('pengaduan');

        return redirect()->route('pengaduan.index')
            ->with('success', 'Pengaduan berhasil dibuat!');
    }
}
