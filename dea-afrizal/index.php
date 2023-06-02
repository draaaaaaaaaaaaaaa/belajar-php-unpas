<?php
 include "db.php"; 
 $query = "SELECT * FROM minuman";
 $db = $conn -> query($query)
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test PHP</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Publiser</td>
            <td>Expired</td>
        </tr>
        <?php while($data = mysqli_fetch_assoc($db)) : ?>
            <tr>
                <td><?= $data['id'] ?></td>
                <td><?= $data['nama_barang'] ?></td>
                <td><?= $data['penerbit'] ?></td>
                <td><?= $data['kadaluarsa'] ?></td>
            </tr>
        <?php endwhile ?>
    </table>
</body>
</html>