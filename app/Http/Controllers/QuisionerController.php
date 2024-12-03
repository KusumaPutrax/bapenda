<?php

namespace App\Http\Controllers;

use App\Models\Responden;
use App\Models\Pelayanan;
use App\Models\Penilaian;
use App\Models\Quisioner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class QuisionerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $quisioners = Quisioner::with(['responden', 'pelayanan', 'penilaian'])->get();
        $data['title'] = 'Daftar Quisioner';
        $data['quisioners'] = $quisioners;

        return view('quisioner.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['title'] = 'Tambah Quisioner';
        return view('quisioner.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        // dd($request->all());
        // Validasi data
        $validatedData = $request->validate([
            'gender' => 'required|string',
            'age' => 'required|integer',
            'education' => 'required|string',
            'employment' => 'required|string',
            'tempat_kerja' => 'required|string',
            'jenis_layanan' => 'required|string',
            'soal1' => 'required|string',
            'soal2' => 'required|string',
            'soal3' => 'required|string',
            'soal4' => 'required|string',
            'soal5' => 'required|string',
            'soal6' => 'required|string',
            'soal7' => 'required|string',
            'soal8' => 'required|string',
            'soal9' => 'required|string',
            'soal10' => 'required|string',
            'soal11' => 'required|string',
            'soal12' => 'required|string',
            'soal13' => 'required|string',
            'comments' => 'nullable|string',
        ]);

        try {
            // Menyimpan data responden
            $responden = Responden::create([
                'gender' => $validatedData['gender'],
                'age' => $validatedData['age'],
                'education' => $validatedData['education'],
                'employment' => $validatedData['employment'],
            ]);

            // Menyimpan data pelayanan
            $pelayanan = Pelayanan::create([
                'tempat_kerja' => $validatedData['tempat_kerja'],
                'jenis_layanan' => $validatedData['jenis_layanan'],
            ]);

            // Menyimpan data penilaian
            $penilaian = Penilaian::create([
                'soal1_A' => $validatedData['soal1'],
                'soal2_A' => $validatedData['soal2'],
                'soal3_A' => $validatedData['soal3'],
                'soal4_A' => $validatedData['soal4'],
                'soal5_A' => $validatedData['soal5'],
                'soal6_A' => $validatedData['soal6'],
                'soal7_A' => $validatedData['soal7'],
                'soal8_A' => $validatedData['soal8'],
                'soal1_B' => $validatedData['soal9'],
                'soal2_B' => $validatedData['soal10'],
                'soal3_B' => $validatedData['soal11'],
                'soal4_B' => $validatedData['soal12'],
                'soal5_B' => $validatedData['soal13'],
                'komentar' => $validatedData['comments'],
            ]);

            // Menyimpan data quisioner
            Quisioner::create([
                'id_responden' => $responden->id_responden,
                'id_pelayanan' => $pelayanan->id_pelayanan,
                'id_penilaian' => $penilaian->id_penilaian,
            ]);

            return redirect()->route('quisioner.index')->with('success', 'Quisioner berhasil dikirim');
        } catch (\Exception $e) {
            Log::error('Error saving quisioner: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Quisioner $quisioner)
    {
        // Logic untuk menampilkan detail quisioner
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Quisioner $quisioner)
    {
        // Logic untuk menampilkan form edit quisioner
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Quisioner $quisioner)
    {
        // Logic untuk memperbarui quisioner
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Quisioner $quisioner)
    {
        // Logic untuk menghapus quisioner
    }
}
