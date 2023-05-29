<?php
 if (isset($_GET['hasil'])) {
    if($_GET["jenis"] == 'mobil'){

        switch ($_GET["jam"]) {
            case '1':
                $harga = "10.000";
            break;
            case '2':
                $harga = "50.000";
            break;
            case '3':
                $harga = "100.000";
            break;
            
            default:
              $harga = "500.000";
                break;
        }
    } elseif($_GET["jenis"] == 'motor'){
    
        switch ($_GET["jam"]) {
            case '1':
                $harga = "5.000";
            break;
            case '2':
                $harga = "25.000";
            break;
            case '3':
                $harga = "50.000";
            break;
            
            default:
              $harga = "100.000";
                break;
        }
    } else {
        $harga = "1.000.000";
    };
 }

    ?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parkir 1</title>
</head>

<body>
    <h1>Parkir</h1>
    <form action="" method="get">
        <ul>
            <li>
                <label for="jenis">Jenis Kendaraan : </label>
                <input type="text" name="jenis" id="jenis">
            </li>
            <li>
                <label for="jam">Jam : </label>
                <input type="number" name="jam" id="jam">
            </li>
        </ul>

        <button type="submit" name="hasil">chekout</button>
    </form>

    <?php if(isset($_GET['hasil'])) : ?>
    <h1><?php echo $harga; ?></h1>
    <?php endif ?>
    

    

   



</body>

</html>