<!-- 
    OPERATORS ARE THESE TYPES:-
    Arithmetic operators
    Assignment operators
    Comparison operators
    Increment/Decrement operators
    Logical operators
    String operators
    Array operators
    Conditional assignment operators 
    -->

    <?php
    // Arithmatic:-
    $x=15;
    $y=10;
    echo("<h1>ARITHMETIC OPERATORS:-</h1>");
    echo($x+$y);
    echo("<br>");
    echo($x-$y);
    echo("<br>");
    echo($x*$y);
    echo("<br>");
    echo($x/$y);
    echo("<br>");
    echo($x%$y);
    echo("<br>");
    echo($x**$y);
    echo("<br>");

    // Assignment:-
    $x=15;
    $y=10;
    echo("<h1>ASSIGNMENT OPERATORS:-</h1>");
    echo($x+=$y);
    echo("<br>");
    echo($x-=$y);
    echo("<br>");
    echo($x*=$y);
    echo("<br>");
    echo($x/=$y);
    echo("<br>");
    echo($x%=$y);
    echo("<br>");
    echo($x=$y);

    // Comparison:-If false then It will give empty string if it's true then it will give 1
    $x=15;
    $y=10;
    echo("<h1>COMPARISAON OPERATORS:-</h1>");
    echo($x==$y);
    echo("<br>");
    echo($x===$y);
    echo("<br>");
    echo($x!=$y);
    echo("<br>");
    echo($x<>$y);
    echo("<br>");
    echo($x!==$y);
    echo("<br>");
    echo($x>$y);
    echo("<br>");
    echo($x<$y);
    echo("<br>");
    echo($x>=$y);
    echo("<br>");
    echo($x<=$y);
    echo("<br>");
    echo($x<=>$y);
    echo("<br>");

    // INCREMENT/DECREMENT:-
    echo("<h1>INCREMENT/DECREMENT OPERATORS:-</h1>");
    $x=10;
    echo(++$x);
    echo("<br>");
    echo($x++);
    echo("<br>");
    echo(--$x);
    echo("<br>");
    echo($x--);
    echo("<br>");

    // LOGICAL OPERATORS:-
    echo("<h1>LOGICAL OPERATORS:-</h1>");
    $x=15;
    $y=10;
    echo($x and $y);
    echo("<br>");
    echo($x or $y);
    echo("<br>");
    echo($x && $y);
    echo("<br>");
    echo($x || $y);
    echo("<br>");
    echo($x!=$y);

    // STRING OPERATIONS:-
    $x=10;
    $y=15;
    echo("<h1>STRING OPERATORS:-</h1>");
    echo($x.$y);
    echo("<br>");
    echo($x.=$y);
    echo("<br>");

    // AARAY OPERATORS:-
    $x=[1,2,3];
    $y=[5,6,7];
    echo("<h1>ARITHMETIC OPERATORS:-</h1>");
    echo($x+$y);
    echo("<br>");
    echo($x==$y);
    echo("<br>");
    echo($x===$y);
    echo("<br>");
    echo($x!=$y);
    echo("<br>");
    echo($x<>$y);
    echo("<br>");
    echo($x!=$y);
    echo("<br>");

    // CONDITIONAL OPERATORS:-
    $x=10;
    $y=20;
    echo("<h1>ARITHMETIC OPERATORS:-</h1>");
    echo($x>$y?$x." is greater":$y." is greater");
    echo("<br>");
    echo($x>$y??" is Greater");
    

    ?>