<div class="container p-5">

<h4>Edit Galeri kami</h4>
<?php
    include_once "../config/dbconnect.php";
	$ID=$_POST['record'];
	$qry=mysqli_query($conn, "SELECT * from galeri_images ti JOIN category c ON c.category_id = ti.category_id Where testimoni_id='$ID'");
	$numberOfRow=mysqli_num_rows($qry);
	if($numberOfRow>0){
		while($row1=mysqli_fetch_array($qry)){
      $catID=$row1["category_id"];
?>
<form id="update-Items" onsubmit="updateGaleri()" enctype='multipart/form-data'>
	  <div class="form-group">
      <input type="text" class="form-control" id="v_id" value="<?=$row1['testimoni_id']?>" hidden>
    </div>

    <div class="form-group">
      <label for="name">Category Name:</label>
      <input type="text" class="form-control" id="p_name" value="<?=$row1['category_name']?>" readonly>
    </div>

    <div class="form-group">
         <img width='200px' height='150px' src='<?=$row1["upload_images"]?>'>
         <div>
            <label for="file">Choose Image:</label>
            <input type="text" id="existingImage" class="form-control" value="<?=$row1['upload_images']?>" hidden>
            <input type="file" id="newImage" value="">
         </div>
    </div>

    <div class="form-group">
      <button type="submit" style="height:40px" class="btn btn-primary">Update Galeri Kami</button>
    </div>
    <?php
    		}
    	}
    ?>
  </form>

  
</div>