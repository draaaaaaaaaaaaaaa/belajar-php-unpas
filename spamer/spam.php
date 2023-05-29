

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>alat spam</title>
</head>

<body>
    <h1>Alat spam</h1>
    <form action="" method="post">
        <label for="kata">kata : </label>
        <input type="text" name="kata" id="kata">
        <br>
        <label for="jumlah"> jumlah : </label>
        <input type="number" name="jumlah" id="jumlah">

        <button type="submit" name="hasil">start</button>
    </form>



    <?php  if(isset($_POST["hasil"])) :?>
        <?php for($i = 0; $i <= $_POST["jumlah"]; $i++) : ?>
            <h1><?= $_POST["kata"] ?></h1><br>
        <?php endfor ?>
    <?php endif ?>

   

   

</body>

</html>