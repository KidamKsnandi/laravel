<!DOCTYPE html>
<html>
   <head>
      <title>Document</title>
   </head>
   <body>
       <center><h1>Data Biodata</h1>
      <table border=1>
         <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Agama</th>
            <th>Umur</th>
            <th>Hobi</th>
          </tr>
          @foreach($query as $item)
            <tr>
            <td align="center">{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td align="center">{{ $item->bornDate }}</td>
            <td align="center">{{ $item->gender }}</td>
            <td>{{ $item->address }}</td>
            <td align="center">{{ $item->religion }}</td>
            <td>{{ $item->age }} Tahun</td>
            <td>{{ $item->hobby }}</td>
            </tr>
          @endforeach
      </table>
    </center>
   </body>
</html>
