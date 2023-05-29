<?php
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
    <title>kasir</title>
</head>

<body>


    <?php foreach ($minuman as $m) : ?>
        <table style="width: 100%; border: 1px solid black;">
            <tr>
                <td>Nama Barang : <?= $m["nama"];?></td>
                <td>Tempat : <?= $m["tempat"] ?></td>
                <td>kadaluarsa : <?= $m["kadaluarsa"] ?></td>
            </tr>
        </table>
    <?php endforeach ?>

</body>

</html>