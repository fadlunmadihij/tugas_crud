<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class kategori extends Model
{
    use HasFactory;
    protected $table = 'kategori';


    //     protected $fillable = [
    //     'nama_kategori'
    // ];

    protected function tambah($data)
    {
        $tambah_kategori = $data->input('tambah_kategori');

        return DB::insert("insert into kategori (nama_kategori) values ('$tambah_kategori')");
    }

    protected function hapus($data)
    {
        return DB::delete("delete from kategori where id='$data'");
    }

    public function produk()
    {
        return $this->hasMany(produk::class);
    }
}
