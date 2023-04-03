@extends('layout.main')
@section('content')
<div class="container"><br>
          <div class="card">
            <div class="card-header">
                <h1 class="" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif">Keranjang</h1>
              <div class="" style="text-align: center"><input type="number" id="total" name="totalsemua" onkeyup="InputSub()" readonly></div>
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
                    <td><input type="text" id="harga{{$p}}" value="{{$item->harga_produk}}" name="harga" readonly></td>
                    <td>
                            <input type="text" name="jumlahbarang" id="jumlahbarang{{$p}}" onkeyup="InputSub({{$p}});">
                    </td>
                    <td><input type="text" id="subtutal{{$p}}" name="subtutal" onkeyup="InputSub();" readonly></td>
                    <td>{{$item->deskripsi}}</td>
                  </tr>
                </tbody>
                @endforeach
              </table>
            </div>
          </div>
</div>
<script>
  function InputSub(number_id) {
        var harga =  parseInt(document.getElementById('harga'+number_id).value);
        var jumlahbarang =  parseInt(document.getElementById('jumlahbarang'+number_id).value);
        var hasil = parseInt(harga) * parseInt(jumlahbarang);
        if (!isNaN(hasil)) {
          document.getElementById('subtutal'+number_id).value = hasil;
          console.log(hasil)
        };
        var arr = document.getElementsByName('totalsemua');
        for(var i=0;i<arr.length;i++){
            if(parseInt(arr[i].value))
                hasil += parseInt(arr[i].value); 
            }
        document.getElementById('total').value = hasil;
      }
</script>
@endsection