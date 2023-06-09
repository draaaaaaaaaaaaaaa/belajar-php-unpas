<?php
$allowedGenders_men = ['cowo', 'pria', 'laki-laki'];
$gender1 = $_POST["gender"];
$allowedGenders_woman = ['cewe', 'perempuan', 'wanita'];


if (isset($_POST["gender"])) {
    if (empty($gender1)) {
        $error = true;
    } elseif (in_array($gender1, $allowedGenders_men)) {
        $resault = "Nama Saya".$_POST["name"]. "umur saya ".$_POST["age"] ."saya adalah seorang laki-laki";
    } elseif (in_array($gender1, $allowedGenders_woman)) {
        $resault = 'Nama Saya ' . $_POST["name"] . ' umur saya ' . $_POST["age"] . ' saya adalah seorang perempuan';
    } else {
        $error = true;
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>try php list</title>
</head>
<body>
    <h1>nama - nama</h1>
    <?php if($error == true) : ?>
        <p style="font-style: italic; color: red;">Yang bener-bener Ajah Kontol</p>
    <?php endif ?>
    <form action="" method="post">
        <ul>
            <li>
                <input type="text" name="name" placeholder="Nama">
            </li>
            <br>
           <li>
                <input type="number" name="age" placeholder="Umur">
           </li>
           <br>
           <li>
                <input type="text" name="gender" placeholder="Jenis Kelamin">
           </li>
        </ul>
        <button type="submit" name="hasil">submit</button>

        <?php if(isset($_POST["hasil"])) : ?>
        <h1><?php echo $resault ?></h1>
        <?php endif ?>
    </form>


   


</body>
</html>