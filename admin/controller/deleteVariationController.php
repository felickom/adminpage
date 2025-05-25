<?php

    include_once "../config/dbconnect.php";
    
    $id=$_POST['record'];
    $query="DELETE FROM galeri_images where testimoni_id='$id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"Galeri Deleted";
    }
    else{
        echo"Not able to delete";
    }
    
?>