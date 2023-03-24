<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class keranjang extends Model
{
    use HasFactory;
    protected $table = 'keranjang';
    // protected $fillable = [
    //     'jumlah_barang',
    //     'total_harga'
    // ];

    protected function Adata($data)
    {
        return DB::insert("insert into keranjang (id_produk) values ('$data')");
    }

    protected function tampil()
    {
        return DB::select("select * from keranjang join produk on keranjang.id_produk = produk.id");
    }

    public function produk()
    {
        return $this->belongsTo(produk::class);
    }

}
