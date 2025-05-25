<?php
    include_once "../config/dbconnect.php";

      $category = $_POST['category'];         
      $name = $_FILES['file']['name'];
      $temp = $_FILES['file']['tmp_name'];
      
      $sql="SELECT * from galeri_images where category_id=$category";
      $result=$conn-> query($sql);

      if($result->num_rows == 3){
         echo 'errorBatas';
      }
      else
      {
         $location="./galeri/";
         $image=$location.$name;

         $target_dir="../galeri/";
         $finalImage=$target_dir.$name;

         move_uploaded_file($temp,$finalImage);

         $insert = mysqli_query($conn,"INSERT INTO galeri_images
         (category_id,upload_images) 
         VALUES ('$category','$image')");

         if($insert)
         {
            echo "true";     
         }else{
            echo mysqli_error($conn);
         }
      }

      
?>