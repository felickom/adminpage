<?php
    include_once "../config/dbconnect.php";

    $id=$_POST['id'];

    if( isset($_FILES['newImage']) ){       
        $location="./banner/";
        $img = $_FILES['newImage']['name'];
        $tmp = $_FILES['newImage']['tmp_name'];
        $dir = '../banner/';
        $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
        $valid_extensions = array("mp4", 'webm', 'avi', 'flv');
        $image =rand(1000,1000000).".".$ext;
        $final_image=$location. $image;

        if (in_array($ext, $valid_extensions)) {
            move_uploaded_file($tmp, $dir.$image);
        }
    }else{
        $final_image=$_POST['existingImage'];
    }
    $updateItem = mysqli_query($conn,"UPDATE banner SET 
        video_url='$final_image' 
        WHERE id=$id");


    if($updateItem)
    {
        echo "true";
    }else{
        echo mysqli_error($conn);
    }
?>