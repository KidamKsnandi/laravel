<!DOCTYPE html>
<html>
   <head>
      <title>Document</title>
   </head>
   <body>
       <center><h1>Data Biodata</h1>
      <table border=1>
         <tr>
            <th>Nama</th>
            <th>TTL</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Agama</th>
            <th>Umur</th>
          </tr>
          @foreach($query as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->bornDate }}</td>
                <td>{{ $item->gender }}</td>
                <td>{{ $item->address }}</td>
                <td>{{ $item->religion }}</td>
                <td>{{ $item->age }} Tahun</td>
            </tr>
          @endforeach
      </table>
    </center>
   </body>
</html>
