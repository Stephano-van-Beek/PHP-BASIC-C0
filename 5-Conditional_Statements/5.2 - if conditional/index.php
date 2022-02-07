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

$_test1_ = 10;
$_test2_ = 6;

if($_test1_ == $_test2_) {
    echo "gelijk";
}
echo "<br>";
if($_test1_ != $_test2_) {
    echo "ongelijk";
}
if($_test1_ < $_test2_) {
    echo "kleiner dan";
}
echo "<br>";
if($_test1_ === $_test2_) {
    echo "identiek";
}
echo "<br>";
if($_test1_ > $_test2_) {
    echo "test1 is groter dan test2";
}
echo "<br>";
if($_test1_ >= $_test2_) {
    echo "test1 is groter of gelijk aan test2  ";
}
echo "<br>";
if($_test1_ <= $_test2_) {
    echo "kleiner of gelijk aan";
    ?>
</body>
</html>