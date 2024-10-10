<?php

namespace App\Http\Controllers\Admin;

use App\Models\Warga;  // Menggunakan model Warga
use Gate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\StoreWargaRequest;
use App\Http\Requests\UpdateWargaRequest;
use App\Http\Requests\MassDestroyWargaRequest;  // Jika ada mass destroy request untuk Warga

class WargaController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('warga_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $wargas = Warga::all();  // Mengambil semua data Warga
    
        return view('admin.wargas.index', compact('wargas'));  // Menampilkan view index Warga
    }

    public function create()
    {
        abort_if(Gate::denies('warga_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
    
        return view('admin.wargas.create');  // Menampilkan form untuk menambahkan Warga baru
    }

    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'nama_warga' => 'required|string|max:255',
            'nik' => 'required|string|max:16',
            'alamat' => 'nullable|string',
            'tanggal_lahir' => 'nullable|date',
            'umur' => 'nullable|integer',
            'pekerjaan' => 'nullable|string|max:255',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'status_perkawinan' => 'nullable|in:Belum Menikah,Menikah,Duda,Janda',
            'agama' => 'nullable|string',
            'status_kewarganegaraan' => 'required|in:WNI,WNA',  // Validasi untuk status kewarganegaraan
        ]);
    
        // Simpan data ke database
        Warga::create($validatedData);
    
        // Redirect atau kembalikan response setelah berhasil menyimpan
        return redirect()->route('admin.wargas.index')->with('success', 'Warga berhasil ditambahkan.');
    }
    

    public function edit($id)
    {
        $warga = Warga::findOrFail($id);  // Mengambil data Warga berdasarkan ID
    
        return view('admin.wargas.edit', compact('warga'));  // Menampilkan form edit Warga
    }

    public function update(Request $request, Warga $warga)
    {
        $warga->update($request->all());  // Memperbarui data Warga

        return redirect()->route('admin.wargas.index');  // Redirect ke halaman daftar Warga
    }

    public function show(Warga $warga)
    {
        abort_if(Gate::denies('warga_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.wargas.show', compact('warga'));  // Menampilkan detail Warga
    }

    public function destroy(Warga $warga)
    {
        abort_if(Gate::denies('warga_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $warga->delete();  // Menghapus data Warga

        return back();  // Kembali ke halaman sebelumnya
    }

    public function massDestroy(MassDestroyWargaRequest $request)
    {
        $wargas = Warga::find(request('ids'));  // Menemukan Warga berdasarkan ID yang dikirimkan

        foreach ($wargas as $warga) {
            $warga->delete();  // Menghapus data Warga
        }

        return response(null, Response::HTTP_NO_CONTENT);  // Response setelah mass delete
    }
}
