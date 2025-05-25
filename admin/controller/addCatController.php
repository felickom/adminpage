<?php
    include_once "../config/dbconnect.php";

    $catname = $_POST['c_name'];
    
    $insert = mysqli_query($conn,"INSERT INTO category
    (category_name) 
    VALUES ('$catname')");

    if($insert){
        header("Location: ../index.php"); 
        exit();
    }
        
?>