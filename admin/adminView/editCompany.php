<div class="container p-5">

<h4>Edit Company At Glance</h4>
<?php
    include_once "../config/dbconnect.php";
	$ID=$_POST['record'];
	$qry=mysqli_query($conn, "SELECT * from company Where id='$ID'");
	$numberOfRow=mysqli_num_rows($qry);
	if($numberOfRow>0){
		while($row1=mysqli_fetch_array($qry)){
        $catID=$row1["id"];
?>
<form id="update-Items" onsubmit="updateCompany(event)" enctype='multipart/form-data'>
	<div class="form-group">
      <input type="text" class="form-control" id="id" value="<?=$row1['id']?>" hidden>
    </div>
    <div class="form-group">
        <label>Description:</label>
        <textarea class="form-control" rows="10" cols="50" id="desc" name="desc"><?php echo $row1['content']?></textarea>
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
<script>
      tinymce.init({
        selector: '#desc',
        branding: false,
        menubar: false,
        statusbar: false
      });
</script>