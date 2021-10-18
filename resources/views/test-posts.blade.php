<!DOCTYPE html>
<html>
   <head>
      <title>Document</title>
   </head>
   <body>
       <center><h1>Data Post</h1>
      <table border=1>
         <tr>
            <th>Judul</th>
            <th>Isi</th>
          </tr>
          @foreach($query as $item)
            <tr>
                <td>{{ $item->title }}</td>
                <td>{{ $item->content }}</td>
            </tr>
          @endforeach
      </table>
    </center>
   </body>
</html>
