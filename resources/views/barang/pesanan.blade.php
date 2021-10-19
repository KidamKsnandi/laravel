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
    <h1>Data Pesanan</h1>
        <table border=1>
           <tr>
              <th>Id Pesanan</th>
              <th>Nama Pelanggan</th>
              <th>Nama Barang</th>
              <th>Qty</th>
              <th>Tanggal Pesan</th>
            </tr>
            @foreach($data as $item)
              <tr>
              <td align="center">{{ $item->id_pesanan }}</td>
              <td>{{ $item->nama_pelanggan }}</td>
              <td>{{ $item->nama_barang }}</td>
              <td align="center">{{ $item->qty }}</td>
              <td align="center">{{ $item->tgl_pesan }}</td>
              </tr>
            @endforeach
        </table>
      </center>
   </body>
</html>
