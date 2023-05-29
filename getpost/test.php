<?php
//untuk mengecekapakah tidak ada data di get
if( !isset($_GET["name"]) || !isset($_GET["place"])){
    //redirect
    //header berfungsi untuk meredirect kehalaman yang di tentukan
    header("Location:latihan1.php");
    //exit berfungsi agar  kode dibawah nya tidak di esekusi
    exit;
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><?php echo $_GET["name"] ?></li>
        <li><?php echo $_GET["place"] ?></li>
        <li><?php echo $_GET["basi"] ?></li>

    </ul>
   
</body>
</html>