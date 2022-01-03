<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $prod_besteld = 12;

    if($prod_besteld < 10) {
    $prijs = 1.50;
    } elseif($prod_besteld < 20) {
    $prijs = 1.25;
    } else {
    $prijs = 1.00;
    }
    ?>
</body>
</html>