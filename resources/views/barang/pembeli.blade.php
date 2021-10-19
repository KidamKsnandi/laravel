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
    <h1>Data Pembeli</h1>
        <table border=1>
           <tr>
              <th>Id pembeli</th>
              <th>Nama</th>
              <th>Jenis Kelamin</th>
              <th>Alamat</th>
              <th>Kode Pos</th>
              <th>Kota</th>
              <th>Tanggal Lahir</th>
            </tr>
            @foreach($data as $item)
              <tr>
              <td align="center">{{ $item->id_pembeli }}</td>
              <td>{{ $item->nama }}</td>
              <td align="center">{{ $item->jns_kelamin }}</td>
              <td align="center">{{ $item->alamat }}</td>
              <td align="center">{{ $item->kode_pos }}</td>
              <td align="center">{{ $item->kota }}</td>
              <td align="center">{{ $item->tgl_lahir }}</td>
              </tr>
            @endforeach
        </table>
      </center>
   </body>
</html>
