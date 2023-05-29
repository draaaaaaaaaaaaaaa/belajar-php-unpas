<?php
$level = 1 ;
$makslevel = 15;

// while ($level < $makslevel) {
//    $level = $level + 1;
//    echo "level mu sekarang adalah $level";
//    echo "<br/>";
   
// }

//for

for($p = 1;$p < 15; $p++) {
echo "test $p";

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
<?php  switch($_GET["hasil"]) : ?>

<?php case 1 : ?>
    <h1>30.000</h1>
<?php break; ?>
<?php case 2 : ?>
    <h1>50.000</h1>
<?php break; ?>
<?php case 3 : ?>
    <h1>100.00</h1>
<?php break; ?>
<?php default ?>
    <h1>500.000</h1>
<?php break; ?>
<?php endswitch; ?>
</body>
</html>