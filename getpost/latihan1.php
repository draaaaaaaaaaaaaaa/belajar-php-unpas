<?php
//variable scope/lingkup variable

//$x = 10;

//function variablex(){
//    global $x;
//echo $x;
//}

//variablex();



//super global scope

//$_GET

$_GET["nama"] = "DAFFA";
$_POST["alamat"] = "Bogor";

var_dump($_GET["nama"]);




$minuman = [
    [
        "nama" => "teh pucuk",
        "tempat" => "rak 3",
        "kadaluarsa" => " 2 sep 2023"
    ],

    [
        "nama" => "teh gelas",
        "tempat" => "rak 1",
        "kadaluarsa" => "5 feb 2023"
    ],

    [
        "nama" => "teh kotak",
        "tempat" => "rak 2",
        "kadaluarsa" => "5 mar 2023"
    ],

]

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan get </title>
</head>
<body>
    <?php foreach( $minuman as $m) : ?>
        <ul>
            <li><a href="test.php?name=<?= $m["nama"] ;?>&place=<?= $m["tempat"]; ?>&basi=<?= $m["kadaluarsa"] ?>"><?= $m["nama"]; ?></a></li>
        </ul>
    <?php endforeach ?>
</body>
</html>