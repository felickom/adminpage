<?php
    include_once "../config/dbconnect.php";
       
      $name = $_FILES['file']['name'];
      $temp = $_FILES['file']['tmp_name'];

      $location="./testimoni/";
      $image=$location.$name;

      $target_dir="../testimoni/";
      $finalImage=$target_dir.$name;

      move_uploaded_file($temp,$finalImage);

      $insert = mysqli_query($conn,"INSERT INTO testimoni
      (upload_images) 
      VALUES ('$image')");

      if($insert)
      {
         echo "true";     
      }else{
        echo mysqli_error($conn);
      }
?>