
<div class="container p-5">

<h4>Edit Services Detail</h4>
<?php
    include_once "../config/dbconnect.php";
	$ID=$_POST['record'];
	$qry=mysqli_query($conn, "SELECT * FROM services JOIN category ON services.category_id = category.category_id WHERE product_id='$ID'");
	$numberOfRow=mysqli_num_rows($qry);
	if($numberOfRow>0){
		while($row1=mysqli_fetch_array($qry)){
      $catID=$row1["category_id"];
?>
<form id="update-Items" onsubmit="updateItems()" enctype='multipart/form-data'>
	  <div class="form-group">
      <input type="text" class="form-control" id="product_id" value="<?=$row1['product_id']?>" hidden>
    </div>
    <div class="form-group">
      <label for="name">Category Name:</label>
      <input type="text" class="form-control" id="p_name" value="<?=$row1['category_name']?>" readonly>
    </div>
    <div class="form-group">
      <label for="desc">Services Description:</label>
      <textarea class="form-control" rows="10" cols="50" id="p_desc" name="p_desc"><?php echo $row1['product_desc']?></textarea>
    </div>
      <div class="form-group">
         <img width='200px' height='150px' src='<?=$row1["product_image"]?>'>
         <div>
            <label for="file">Choose Image:</label>
            <input type="text" id="existingImage" class="form-control" value="<?=$row1['product_image']?>" hidden>
            <input type="file" id="newImage" value="">
         </div>
    </div>
    <div class="form-group">
      <button type="submit" style="height:40px" class="btn btn-primary">Update Item</button>
    </div>
    <?php
    		}
    	}
    ?>
  </form>

</div>
