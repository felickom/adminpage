<?php
    include_once "../config/dbconnect.php";

    $testimoni_id=$_POST['v_id'];
    $p_name= $_POST['p_name'];

    if( isset($_FILES['newImage']) ){       
        $location="./galeri/";
        $img = $_FILES['newImage']['name'];
        $tmp = $_FILES['newImage']['tmp_name'];
        $dir = '../galeri/';
        $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
        $valid_extensions = array('jpeg', 'jpg', 'png');
        $image =rand(1000,1000000).".".$ext;
        $final_image=$location. $image;
        if (in_array($ext, $valid_extensions)) {
            // $path = UPLOAD_PATH . $image;
            move_uploaded_file($tmp, $dir.$image);
        }
    }else{
        $final_image=$_POST['existingImage'];
    }
   
    $updateItem = mysqli_query($conn,"UPDATE galeri_images SET 
        upload_images='$final_image'  
        WHERE testimoni_id=$testimoni_id");


    if($updateItem)
    {
        echo "true";
    }
?>