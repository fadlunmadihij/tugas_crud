<?php

namespace App\Http\Controllers;

use App\Models\keranjang;
use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    public function index()
    {
        $data['data'] = keranjang::tampil();
        // dd($data);
        return view('keranjang.index', $data);
    }

    public function ranjang($id)
    {
        keranjang::Adata($id);
        // dd($data);
        return redirect('/keranjang');
    }
}
