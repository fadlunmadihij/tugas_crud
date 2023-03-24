@extends('layout.main')
@section('content')
<form action="/kategori/store" method="POST">
  @csrf
  <div class="mb-3">
    <label for="exampleInpuNamaKategori" class="form-label">Tambah Kategori</label>
    <input type="text" class="form-control" name="tambah_kategori">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
