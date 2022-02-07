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
    $veraderd_besteld = 10;

    if($veraderd_besteld > 10) {
        $prijs = 1.50;
        echo 1.50;
    } 
    elseif($veraderd_besteld < 20) {
        $prijs = 1.25;
        echo 1.25;
    } else {
        $prijs = 1.00;
        echo $prijs;
    }
    echo (" ");
    
    if($veraderd_besteld = 10) {
        $prijs = 1.50;
        echo $prijs ;
    } 
    elseif($veraderd_besteld < 20) {
        $prijs = 1.25;
        echo 1.25;
    } else {
        $prijs = 1.00;
        echo 1.00;
    }
    
    echo (" ");
    
    if($veraderd_besteld > 10) {
        $prijs = 1.50;
        echo $prijs ;
    } 
    elseif($veraderd_besteld == 20) {
        $prijs = 1.25;
        echo 1.25;
    } else {
        $prijs = 1.00;
        echo 1.00;
    }
    ?>
</body>
</html>