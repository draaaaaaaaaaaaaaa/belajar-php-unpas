<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan satu</title>
    <style>
        .kotak{
            height: 30px;
            width: 30px;
            background-color: blueviolet;
            text-align: center;
            line-height: 30px;
            float: left;
            margin: 3px;
            transition: 2s;
        }

        .kotak:hover{
            transform: rotate(360deg);
        }
    </style>
</head>
<body>

<?php
$angka = [1,2,3,4,5];
?>
    
<?php foreach( $angka as $a) : ?>
<div class="kotak"><?=  $a; ?></div>
<?php endforeach; ?>

</body>
</html>