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
    <h1>Data Pembelian</h1>
        <table border=1>
           <tr>
              <th>Id Pembelian</th>
              <th>Nama Barang</th>
              <th>Nama Suplier</th>
              <th>Qty</th>
              <th>Tanggal</th>
            </tr>
            @foreach($data as $item)
              <tr>
              <td align="center">{{ $item->id_pembelian }}</td>
              <td>{{ $item->nama_barang }}</td>
              <td>{{ $item->nama_suplier }}</td>
              <td align="center">{{ $item->qty }}</td>
              <td align="center">{{ $item->tgl }}</td>
              </tr>
            @endforeach
        </table>
      </center>
   </body>
</html>
