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

    function geefTienProcent(){
        $koopprijs = 75;
     $korting = 10;
        return $koopprijs = $koopprijs * ((100-$korting) / 100);
    }

    function zetAllesgroot(){
        echo 'Het totaalbedrag is ' . geefTienProcent() . ' euro';
    }

    zetAllesgroot();
    ?>
</body>
</html>