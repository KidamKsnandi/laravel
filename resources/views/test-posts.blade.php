<!DOCTYPE html>
<html>
   <head>
      <title>Document</title>
   </head>
   <body>
       <center><h1>Data Post</h1></center>
          @foreach($data as $item)
            <h2>{{ $item->title }}</h2>
            <p>{{ $item->content }}</p>
            <hr>
          @endforeach

   </body>
</html>
