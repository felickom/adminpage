<?php

    include_once "../config/dbconnect.php";
    
    $id=$_POST['record'];
    $query="DELETE FROM testimoni where id='$id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"Testimoni Deleted";
    }
    else{
        echo"Not be able to delete";
    }
    
?>