<?php
$username='root';
$password='root';
$server="localhost";
$database='test';

$connection=mysqli_connect($server,$username,$password,$database);
if ($connection){

}
else{ 
    die("no connection");
}
?>