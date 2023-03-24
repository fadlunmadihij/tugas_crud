@extends('layout.main')
@section('content')
<form action="/produk/store" method="POST">
  @csrf
  <div class="mb-3">
    <label for="tambah_produk" class="form-label">Tambah produk</label>
    <input type="text" class="form-control" id="tambah_produk" name="tambah_produk">
  </div>
  <div class="mb-3">
    <label for="harga_produk" class="form-label">Harga produk</label>
    <input type="text" class="form-control" id="harga_produk" name="harga_produk">
  </div>
  <div class="mb-3">
    <label for="deskripsi" class="form-label">Deskripsi</label>
    <input type="text" class="form-control" id="deskripsi" name="deskripsi">
  </div>
  <select class="form-select" aria-label="Default select example" name="id_kategori">
    <option selected>Pilihan Kategori</option>
    @foreach ($kategori as $item)
        <option value="{{$item->id}}">{{$item->nama_kategori}}</option>
    @endforeach
  </select><br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
