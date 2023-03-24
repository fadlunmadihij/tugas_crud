<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use App\Models\produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index() {
        $data = produk::all();
        return view('produk/index',compact(['data']));
    }

    public function create() {

        $data['kategori'] = kategori::all();
        return view('produk/create', $data);
    }

    public function store(Request $request) {
        //dd($request->except());
        produk::tambah($request);
        // dd($data);
        return redirect('/produk');
    }

    public function edit($id) {
        $data['kategori'] = kategori::all();
        $data['produk'] = produk::find($id);
        return view('produk/edit', $data);
    }

    public function update($id, Request $request) {
        $produk = produk::where("id", $id)->update([
            "nama_produk" => $request['nama_produk'],
            "harga_produk" => $request['harga_produk'],
            "deskripsi" => $request['deskripsi'],
            "id_kategori" => $request['id_kategori'],
        ]);
        // dd($produk);
        // $produk->update($request);
        return redirect('/produk');
    }

    public function destroy($id) {
        $data = produk::destroy($id);
        // $produk->delete($data);
        // dd($data);
        return redirect('/produk');

    }
}
