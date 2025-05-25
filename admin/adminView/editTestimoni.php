<div class="container p-5">

<h4>Edit Testimoni Images</h4>
<?php
    include_once "../config/dbconnect.php";
	$ID=$_POST['record'];
	$qry=mysqli_query($conn, "SELECT * from testimoni Where id='$ID'");
	$numberOfRow=mysqli_num_rows($qry);
	if($numberOfRow>0){
		while($row1=mysqli_fetch_array($qry)){
      $catID=$row1["id"];
?>
<form id="update-Items" onsubmit="updateTestimoni(event)" enctype='multipart/form-data'>
	<div class="form-group">
      <input type="text" class="form-control" id="v_id" value="<?=$row1['id']?>" hidden>
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
      <button type="submit" style="height:40px" class="btn btn-primary">Update Testimoni images</button>
    </div>
    <?php
    		}
    	}
    ?>
  </form>

  
</div>