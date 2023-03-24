@extends('layout.main')
@section('content')
<form action="/produk/{{$produk->id}}" method="POST">
  @method('put')
  @csrf
  <div class="mb-3">
    <label for="nama_produk" class="form-label">Nama produk</label>
    <input type="text" class="form-control" value="{{$produk->nama_produk}}" id="nama_produk" name="nama_produk">
  </div>
  <div class="mb-3">
    <label for="harga_produk" class="form-label">Harga produk</label>
    <input type="text" class="form-control" value="{{$produk->harga_produk}}" id="harga_produk" name="harga_produk">
  </div>
  <div class="mb-3">
    <label for="deskripsi" class="form-label">Deskripsi</label>
    <input type="text" class="form-control" value="{{$produk->deskripsi}}" id="deskripsi" name="deskripsi">
  </div>
  <select class="form-select" aria-label="Default select example" name="id_kategori">
    <option selected>Pilihan Kategori</option>
    @foreach ($kategori as $item)
        <option value="{{$item->id}}" {{$produk->id_kategori == $item->id ? 'selected' : ''}}>{{$item->nama_kategori}}</option>
    @endforeach
  </select><br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
