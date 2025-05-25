<?php
    include_once "../config/dbconnect.php";

    $benefit_id=$_POST['benefit_id'];
    $judul= $_POST['judul'];
    $isi= $_POST['isi'];

    if( isset($_FILES['newImage']) ){
        
        $location="./icon/";
        $img = $_FILES['newImage']['name'];
        $tmp = $_FILES['newImage']['tmp_name'];
        $dir = '../icon/';
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
    $updateItem = mysqli_query($conn,"UPDATE benefit SET 
        judul='$judul', 
        isi = '$isi',
        icon='$final_image' 
        WHERE benefit_id=$benefit_id");


    if($updateItem)
    {
        echo "true";
    }else{
        echo mysqli_error($conn);
    }
?>