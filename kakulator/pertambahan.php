<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertambahan</title>
</head>
<body>
    <form action="" method="get" >

    <label for="tingi">Masukan tinggi  : </label>
    <input type="text" name="tingi" id="tingi">
    <br>
    <label for="alas">Masukan Alas : </label>
    <input type="text" name="alas" id="alas">
    <br>
    <button type="submit" id="hasil">Tambah</button>
    </form>

    <?php
    $_GET['hasil'] = $_GET['tingi'] * $_GET['alas'];
    ?>

    <h1><?= $_GET["hasil"] ?></h1>
</body>
</html>