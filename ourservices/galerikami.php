<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php 
   include_once "../admin/config/dbconnect.php";
   $status = $_POST['status'];

   $sql="SELECT * from category WHERE category_id = $status";
   $result=$conn-> query($sql);
   if ($result-> num_rows > 0){
    while ($row=$result-> fetch_assoc()) {
        ?>
        <title>CreativEnt Indonesia - <?=$row["category_name"]?> Gallery</title>         
        <?php
    }
}
  ?>
  <!-- css file link -->
  <link rel="stylesheet" href="vendors/meyer-reset.min.css">
  <link rel='stylesheet' href='vendors/swiper.min.css'>
  <link rel="stylesheet" href="vendors/style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="swiper-container main-slider loading">
  <div class="swiper-wrapper">
    <?php 
    include_once "../admin/config/dbconnect.php";
    $status = $_POST['status'];

    $sql = "SELECT * from galeri_images WHERE category_id = $status";
    $result=$conn-> query($sql);
    if ($result-> num_rows > 0){
    while ($row=$result-> fetch_assoc()) {
        ?>
           <div class="swiper-slide">
            <figure class="slide-bgimg" style="background-image:url(../admin<?=$row["upload_images"]?>)">
                <img src="../admin<?=$row["upload_images"]?>" class="entity-img" />
            </figure>
            <div class="content">
                <p class="title">CreativEnt Indonesia</p>
                <span class="caption">Made by CreativEnt Indonesia</span>
            </div>
    </div>    
        <?php
        }
    }
    ?>
  </div>
  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev swiper-button-white"></div>
  <div class="swiper-button-next swiper-button-white"></div>
</div>

<!-- Thumbnail navigation -->
<div class="swiper-container nav-slider loading">
  <div class="swiper-wrapper" role="navigation">
  <?php 
    include_once "../admin/config/dbconnect.php";
    $status = $_POST['status'];

    $sql = "SELECT * from galeri_images WHERE category_id = $status";
    $result=$conn-> query($sql);
    if ($result-> num_rows > 0){
    while ($row=$result-> fetch_assoc()) {
        ?>
        <div class="swiper-slide">
            <figure class="slide-bgimg" style="background-image:url(../admin<?=$row["upload_images"]?>)">
                <img src="../admin<?=$row["upload_images"]?>" class="entity-img" />
            </figure>
            <div class="content">
                <p class="title">CreativEnt Indonesia</p>
            </div>
        </div>
        <?php
        }
    }
    ?>
  </div>
</div>
<!-- partial -->
  <script src='vendors/swiper.min.js'></script>
  <script  src="vendors/script.js"></script>

</body>
</html>
