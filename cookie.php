<?php
// setcookie(variable_name,value,time,path,domain,secure,httponly)
$name="Name";
$value="Kirti";
setcookie($name,$value,time()+24000,'/');
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
    <?php
    // if (!isset($_COOKIE[$name])){
    //     echo 'Cookie is not set';
    // }
    // echo $_COOKIE[$name];
    ?>
</body>
</html>