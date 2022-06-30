<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="main-container">
        <div class="main-text">
            <h2>Welcome</h2>
            <p>Please fill all the details carefully. This from can change your life.</p>
         <input type='submit' class='check-btn' value='Check Form'>
        </div>
        <div class='inside-container'>
            <h1>Apply for web developer post</h1>
            <div class='inputs'>
                <form action="" method='POST'>
                    <input type="text" name="name" placeholder='Enter your name' required>
                    <input type="text" name="degree" placeholder='Enter your qualification' required>
                    <input type="tel" name="mobile" placeholder='Enter your mobile no.' required>
                    <input type="email" name="email" placeholder='Enter your email id' required>
                    <input type="date" name="dob" placeholder='Date of Birth' required>
                    <input type="number" min='10000'  name="salary" placeholder='Salary range' required>
                    <input type='submit' class='submit-btn' name='register' value='Register'>
                </form>
            </div>
        </div>
    </div>
</body>
</html>


<?php
include 'database.php';
if (isset($_POST['register'])){
    $name=$_POST['name'];
    $degree=$_POST['degree'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $dob=$_POST['dob'];
    $salary=$_POST['salary'];

    $insertQuery="insert into Login(name,degree,mobile,email,dob,salary) values('$name','$degree','$mobile','$email','$dob','$salary')";

    $res=mysqli_query($connection,$insertQuery);
    if ($res){    
    }
    else{
        
    }
}
 ?>
