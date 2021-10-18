<!DOCTYPE html>
<html>
   <head>
      <title>Data</title>
   </head>
   <body>
      @foreach($posts as $data)
        <ul>
            id : {{ $data['id'] }} <br>
            Nama : {{ $data['name'] }} <br>
            Username : {{ $data['username'] }} <br>
            Email : {{ $data['email'] }} <br>
            Alamat : {{ $data['alamat'] }} <br>
            Mata Pelajaran  :
            @foreach($data['mapel'] as $data2)
            <ul><li>{{ $data2 }}</li></ul>
            @endforeach
        </ul>
        <hr>
      @endforeach
   </body>
</html>
