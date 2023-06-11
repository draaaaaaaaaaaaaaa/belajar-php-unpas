<?php

$kulkas = ['teh botol', 'teh gelas', 'fanta', 'sprit', 'cola', 'natadecoo'];
$data = $_POST["data"];

// Menemukan nilai sebelum "teh gelas"
$key = array_search($data,$kulkas);

if ( $key !== false) {
    //menemukan nilai sebelum 
    $keybefor = ($key > 0) ? $kulkas[$key - 1] : null;

    //nilai sesudah
    $keyafter = isset($kulkas[$key + 1]) ? $kulkas[$key + 1] : null;


 // Menampilkan hasil
  echo "Nilai sebelum: " . ($keybefor ?? "Tidak ada") . "\n";
  echo "Nilai sesudah: " . ($keyafter ?? "Tidak ada") . "\n";
} else {
  echo "Nilai tidak ditemukan dalam array.\n";
}





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kulkas</title>
</head>
<body>
<form method="POST" action="">
  <input type="text" name="data">
  <input type="submit" value="Submit">
</form>

</body>
</html>