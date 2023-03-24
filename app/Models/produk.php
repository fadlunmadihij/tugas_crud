<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class produk extends Model
{
    use HasFactory;
    protected $table = 'produk';
    
    protected function tambah($data)
    {
        $nama_produk = $data->input('nama_produk');
        $harga_produk = $data->input('harga_produk');
        $deskripsi = $data->input('deskripsi');
        $id_kategori = $data->input('id_kategori');

        return DB::insert("insert into produk (nama_produk, harga_produk, deskripsi, id_kategori) values ('$nama_produk', '$harga_produk', '$deskripsi', '$id_kategori')");
    }

    public function kategori()
    {
        return $this->belongsTo(kategori::class);
    }

    public function keranjang()
    {
        return $this->hasMany(keranjang::class);
    }

}
