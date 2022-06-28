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
$string='kitty';
echo "<h1>Hello $string</h1>";
echo var_dump($string);//type(length) word

$number=6766;
echo "<h1>This $number</h1>";
echo var_dump($number);//type(word)


$number=69.8;
echo "<h1>This Float $number</h1>";
echo var_dump($number);//type(word)

$number=array(69.8,898);
echo "<h1>This Float $number</h1>";
echo var_dump($number);//array(2) { [0]=> float(69.8) [1]=> int(898) }


?>
</body>
</html>
