<!DOCTYPE html>
<html>
   <head>
      <title>Document</title>
   </head>
   <body>
       <center>
       <a href="barang">Barang</a>
       <a href="pembeli">Pembelian</a>
       <a href="suplier">Suplier</a>
       <a href="pesanan">Pesanan</a>
       <a href="pembelian">Pembelian</a>
    <h1>Data Barang</h1>
        <table border=1>
           <tr>
              <th>Id Barang</th>
              <th>Nama</th>
              <th>Varian</th>
              <th>Harga Beli</th>
              <th>Harga Jual</th>
            </tr>
            @foreach($data as $item)
              <tr>
              <td align="center">{{ $item->id_barang }}</td>
              <td>{{ $item->nama }}</td>
              <td align="center">{{ $item->varian }}</td>
              <td align="center">{{ $item->harga_beli }}</td>
              <td align="center">{{ $item->harga_jual}}</td>
              </tr>
            @endforeach
        </table>
      </center>
   </body>
</html>
