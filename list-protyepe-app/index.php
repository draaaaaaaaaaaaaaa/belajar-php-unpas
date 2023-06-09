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
                <input type="boolean" name="gender" placeholder="Jenis Kelamin">
           </li>
        </ul>
        <button type="submit">submit</button>
    </form>


    <?php if($_POST["gender"] == "true"): ?>
        <p><?= "Nama Saya {$_POST["name"]} umur saya {$_POST["age"]} saya adalah seorang laki laki " ?></p>
    <?php endif ?> <?php if($_POST["gender"] == "false"): ?>
        <p><?= "Nama Saya {$_POST["name"]} umur saya {$_POST["age"]} saya adalah seorang Perempuan " ?></p>
    <?php endif ?>


</body>
</html>