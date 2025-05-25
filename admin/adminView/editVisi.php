<div class="container p-5">

<h4>Edit Visi Perusahaan</h4>
<?php
    include_once "../config/dbconnect.php";
	$ID=$_POST['record'];
	$qry=mysqli_query($conn, "SELECT * from visi Where id='$ID'");
	$numberOfRow=mysqli_num_rows($qry);
	if($numberOfRow>0){
		while($row1=mysqli_fetch_array($qry)){
        $catID=$row1["id"];
?>
<form id="update-Items" onsubmit="updateVisi(event)" enctype='multipart/form-data'>
	<div class="form-group">
      <input type="text" class="form-control" id="id" value="<?=$row1['id']?>" hidden>
    </div>
    <div class="form-group">
        <label>Visi:</label>
        <input type="text" class="form-control" id="desc" name="desc" value="<?=$row1['visi']?>">
    </div>
    <div class="form-group">
      <button type="submit" style="height:40px" class="btn btn-primary">Update Company</button>
    </div>
    <?php
    		}
    	}
    ?>
  </form>

  
</div>