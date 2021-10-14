<!DOCTYPE html>
<html>
   <head>
      <title></title>
      <style>
       body {
           background-color: skyblue;
       }
   </style>
   </head>
   <body>
      <center><h1> Web ini di buat oleh Kidam Kusnandi </h1></center>
   </body>
</html>

Route::get('pesan/{makanan?}/{minuman?}/{cemilan?}', function ($makanan = "",$minuman = "",$cemilan = "") {
    if ($makanan == "" && $minuman == "" && $cemilan == "") {
        $output = "Anda Tidak Memesan, Silahkan Pulang";
    }
            if ($makanan != "" ) {
            $output = "Anda Pesan Makan : $makanan <br>";
        }
        if ($makanan != "" && $minuman != "" ) {
            $output = "Anda Pesan Makan : $makanan <br>"
            . "Minum : $minuman <br>";
        }

        if ($makanan != "" && $minuman != "" && $cemilan != "") {
            $output = "Anda Pesan Makan : $makanan <br>"
            . "Minum : $minuman <br>"
            . "Cemilan : $cemilan";
}

    return "$output";
});
