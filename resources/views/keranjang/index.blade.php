@extends('layout.main')
@section('content')
<div class="container"><br>
          <div class="card">
            <div class="card-header">
                <h1 class="" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif">Keranjang</h1>
              <div class="" style="text-align: center"><input type="text"></div>
            </div>
            <div class="card-body">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Jumlah Barang</th>
                    <th scope="col">Total Harga</th>
                    <th scope="col">Deskripsi</th>
                  </tr>
                </thead>
                @php $p=1 @endphp
                @foreach ($data as $item)
                <tbody>
                  <tr>
                    <th scope="row">{{$p++}}</th>
                    <td>{{$item->nama_produk}}</td>
                    <td>{{$item->harga_produk}}</td>
                    <td>
                            <input type="number" name="jumlahbarang">
                    </td>
                    <td><input type="text"></td>
                    <td>{{$item->deskripsi}}</td>
                  </tr>
                </tbody>
                @endforeach
              </table>
            </div>
          </div>
</div>
@endsection