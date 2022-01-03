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
    $var1 = 3;
    $var2 = 10;

    if($var1 < 10 && $var1 > 5) {
    echo "het getal zit tussen de 10 en de 5!";
    }  
    else($var1 == 2 ! $var1) {
    echo "het getal is groter dan 10 of kleiner dan 5!";
    }

    if($var2 == 10 || $var2 > 5) {
    echo "het getal is groter dan 5 en is 10!";
    } else($var2 xor 9) {
    echo "er is een getal!";
    }
    //graag uitleg krijgen over dit ben vast gelopen
    ?>
    
</body>
</html>