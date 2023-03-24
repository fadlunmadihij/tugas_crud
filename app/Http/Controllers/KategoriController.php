<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index() {
        $data = kategori::all();
        return view('kategori/index',compact(['data']));
    }

    public function create() {
        return view('kategori/create');
    }

    public function store(Request $request) {
        //dd($request->except());
        kategori::tambah($request);
        // dd($data);
        return redirect('/kategori');
    }

    public function edit($id) {
        $kategori = kategori::find($id);
        return view('kategori/edit', compact('kategori'));
    }

    public function update($id, Request $request) {
        $kategori = kategori::where("id", $id)->update([
            "nama_kategori" => $request['nama_kategori']
        ]);
        // dd($kategori);
        // $kategori->update($request);
        return redirect('/kategori');
    }

    public function destroy($id) {
        $data = kategori::hapus($id);
        // $kategori->delete($data);
        // dd($data);
        return redirect('/kategori');

    }
}
