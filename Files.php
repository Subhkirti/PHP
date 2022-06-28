<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="image">
        <br>
        <br>
        <input type="submit">
    </form>
    <?php
    echo "<pre>";
    print_r($_FILES['image']);
    echo "</pre>";
    $file_name=$_FILES['image']['name'];
    $file_type=$_FILES['image']['type'];
    $file_size=$_FILES['image']['size'];
    $file_temp_name=$_FILES['image']['tmp_name'];

    // for saving the image on server: 1st--temp_name, 2nd-- destination/path

        move_uploaded_file($file_temp_name,"upload-images/".$file_name);
        echo "uplodded successfully!";
    ?>
</body>
</html>