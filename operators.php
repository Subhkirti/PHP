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
    // arithmetic-- +,-,*,**,%,++,--
        echo 89+67," <br>";
        echo '34'+'hello',"<br>";//34
        echo 3*'llo',"<br>";//0
        echo 4-45,"<br>";//-41
        echo 6/10,"<br>";//0.6
        echo 15%7,"<br>";//1
        echo floor(6/10),"<br>";//0
        echo 3**2,"<br>";//9
        // pre and post
        echo "<h1>Post and pre increment</h1>";
        $x=2;
        echo "post ",$x++,"<br>";
        echo "pre ",++$x;
    // Assignment-- +=,-=,*=,/=,%=,**=
    // Logical-- &&,||,!,and,or
    // comparison ==,===,!=,<>(also not equal),!==,>,<,>=,<=,<=>(spaceship operator-- if less= -1,if equal- 0,if greater= +1)
        echo "<h1>Comparison</h1>";//if true then 1, if false then ' '
        $y=2;
        $z=2;
        echo $y<=>$z;

        ?>
</body>
</html>