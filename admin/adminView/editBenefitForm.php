
<div class="container p-5">

<h4>Edit Benefit Form</h4>
<?php
    include_once "../config/dbconnect.php";
	$ID=$_POST['record'];
	$qry=mysqli_query($conn, "SELECT * FROM benefit  WHERE benefit_id='$ID'");
	$numberOfRow=mysqli_num_rows($qry);
	if($numberOfRow>0){
		while($row1=mysqli_fetch_array($qry)){
      $catID=$row1["benefit_id"];
?>
<form id="update-Items" onsubmit="updateBenefit(event)" enctype='multipart/form-data'>
	  <div class="form-group">
      <input type="text" class="form-control" id="benefit_id" value="<?=$row1['benefit_id']?>" hidden>
    </div>
    <div class="form-group">
      <label for="name">Judul </label>
      <input type="text" class="form-control" id="judul" name="judul" value="<?=$row1['judul']?>">
    </div>
    <div class="form-group">
      <label for="desc">Isi</label>
      <input type="text" class="form-control" id="isi" name="isi" value="<?=$row1['isi']?>">
    </div>
      <div class="form-group">
         <img width='200px' height='150px' src='<?=$row1["icon"]?>'>
         <div>
            <label for="file">Icon: </label>
            <input type="text" id="existingImage" class="form-control" value="<?=$row1['icon']?>" hidden>
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
