<div class="container p-5">

<h4>Edit Variation Detail</h4>
<?php
    include_once "../config/dbconnect.php";
	$ID=$_POST['record'];
	$qry=mysqli_query($conn, "SELECT * from category Where category_id='$ID'");
	$numberOfRow=mysqli_num_rows($qry);
	if($numberOfRow>0){
		while($row1=mysqli_fetch_array($qry)){
        $catID=$row1["category_id"];
?>
<form id="update-Items" onsubmit="updateCategory()" enctype='multipart/form-data'>
	<div class="form-group">
      <input type="text" class="form-control" id="category_id" value="<?=$row1['category_id']?>" hidden>
    </div>
    <div class="form-group">
        <label>Category:</label>
        <input type="text" class="form-control" id="category_name" value="<?=$row1['category_name']?>">
    </div>
    <div class="form-group">
      <button type="submit" style="height:40px" class="btn btn-primary">Update Category</button>
    </div>
    <?php
    		}
    	}
    ?>
  </form>

  
</div>