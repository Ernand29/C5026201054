<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BukuController extends Controller
{
    public function index()
    {

        $buku = DB::table('buku')->paginate(5);
        // mengirim data pegawai ke view index
        return view('buku.index', ['buku' => $buku]);
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
        $buku = DB::table('buku')
            ->where('merkbuku', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data pegawai ke view index
        return view('buku.index', ['buku' => $buku]);
    }

    // method untuk menampilkan view form tambah pegawai
    public function tambah()
    {
        $buku = DB::table('buku')->orderBy('merkbuku', 'asc')->get();
        return view('buku.tambah', ['buku' => $buku]);
    }

    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('buku')->insert([
            'merkbuku' => $request->merk,
            'stockbuku' => $request->stock,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/buku');
    }
    // method untuk edit data pegawai
    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $buku = DB::table('buku')->where('kodebuku', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('buku.edit', ['buku' => $buku]);
    }

    // method untuk edit detail pegawai
    public function detail($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $buku = DB::table('buku')->where('kodebuku', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('buku.detail', ['buku' => $buku]);
    }
    // update data pegawai
    public function update(Request $request)
    {
        // update data pegawai
        DB::table('buku')->where('kodebuku', $request->id)->update([
            'merkbuku' => $request->merk,
            'stockbuku' => $request->stock,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/buku');
    }
    // method untuk hapus data pegawai
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('buku')->where('kodebuku', $id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/buku');
    }
}
