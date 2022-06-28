<?php
// Passing by value:-
// function Hello($a){
//     $a="Hello";
// }
// $b="Hii";
// Hello($b);
// echo $b;//Hii


// Passing by Reference:-
function hello(&$c){
    $c="Hello";
}
$d="Hii";
hello($d);
echo $d;//Hello
?>