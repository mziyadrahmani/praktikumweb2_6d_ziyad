<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use Illuminate\Http\Request;

class PendudukController extends Controller
{

    public function index()
    {
        $penduduks = Penduduk::orderBy('nik_kk', 'ASC')->get();
        return view('penduduk.penduduk', compact('penduduks'));
    }

    public function create()
    {
        return view('penduduk.create');
    }

    public function store(Request $request)
    {;

        $simpan = new Penduduk();

        $simpan->nik_kk = $request->input('nik');

        $simpan->nama_kk = $request->input('nama');

        $simpan->jeniskelamin_kk = $request->input('jeniskelamin');

        $simpan->tgllahir_kk = $request->input('tgllahir');

        $simpan->pendidikan_kk = $request->input('pendidikan');
        $simpan->pekerjaan_kk = $request->input('pekerjaan');

        $simpan->penghasilan_kk = $request->input('penghasilan');

        $simpan->alamat_kk = $request->input('alamat');

        $simpan->save();

        return redirect()->route('penduduk.index')->with('pesan', 'Data Berhasil Ditambahkan');
    }


    public function show(string $id)
    {
        $data = Penduduk::where('nik_kk', $id)->first();

        return view('penduduk.show', compact('data'));
    }

    public function edit(string $id)
    {
        $data = Penduduk::where('nik_kk', $id)->first();

        return view('penduduk.edit', compact('data'));
    }

    public function update(Request $request, string $id)
    {

        $ubah = Penduduk::where('nik_kk', $request->input('nik'))->first();

        $ubah->nama_kk = $request->input('nama');

        $ubah->jeniskelamin_kk = $request->input('jeniskelamin');

        $ubah->tgllahir_kk = $request->input('tgllahir');

        $ubah->pendidikan_kk = $request->input('pendidikan');

        $ubah->pekerjaan_kk = $request->input('pekerjaan');

        $ubah->penghasilan_kk = $request->input('penghasilan');

        $ubah->alamat_kk = $request->input('alamat');

        $ubah->save();

        return redirect()->route('penduduk.index')->with('pesan', 'Data Berhasil ubah');
    }


    public function destroy(string $id)
    {
        $hapus = Penduduk::findOrFail($id);
        $hapus->delete();
        return redirect()->route('penduduk.index')->with('pesan', 'Data berhasil dihapus');
    }
}
