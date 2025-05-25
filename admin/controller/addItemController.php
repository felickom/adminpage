<?php
    include_once "../config/dbconnect.php";
    
    $desc= $_POST['p_desc'];
    $category = $_POST['category'];
    
        
    $name = $_FILES['file']['name'];
    $temp = $_FILES['file']['tmp_name'];

    $location="./uploads/";
    $image=$location.$name;

    $target_dir="../uploads/";
    $finalImage=$target_dir.$name;

    move_uploaded_file($temp,$finalImage);

    $insert = mysqli_query($conn,"INSERT INTO services
    (category_id,product_desc,product_image) 
    VALUES ('$category','$desc','$image')");

    if($insert){
        echo "true";
    }
        
?>