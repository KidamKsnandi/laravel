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
    <h1>Data Suplier</h1>
        <table border=1>
           <tr>
              <th>Id Suplier</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>Kode Pos</th>
              <th>Kota</th>
            </tr>
            @foreach($data as $item)
              <tr>
              <td align="center">{{ $item->id_suplier }}</td>
              <td>{{ $item->nama }}</td>
              <td align="center">{{ $item->alamat }}</td>
              <td align="center">{{ $item->kode_pos }}</td>
              <td align="center">{{ $item->kota }}</td>
              </tr>
            @endforeach
        </table>
      </center>
   </body>
</html>
