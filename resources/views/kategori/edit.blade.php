@extends('layout.main')
@section('content')
<form action="/kategori/{{$kategori->id}}" method="post">
  @csrf
  @method('put')
  <div class="mb-3">
    <label for="exampleInpuNamaKategori" class="form-label">Edit Kategori</label>
    <input type="edit_kategori" class="form-control" name="nama_kategori" value="{{$kategori->nama_kategori}}" id="exampleInputEditKategori">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection