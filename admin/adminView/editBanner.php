<div class="container p-5">

<h4>Edit Banner</h4>
<?php
    include_once "../config/dbconnect.php";
	$ID=$_POST['record'];
	$qry=mysqli_query($conn, "SELECT * from banner Where id='$ID'");
	$numberOfRow=mysqli_num_rows($qry);
	if($numberOfRow>0){
		while($row1=mysqli_fetch_array($qry)){
?>
<form id="update-Items" onsubmit="updateBanner(event)" enctype='multipart/form-data'>
	  <div class="form-group">
      <input type="text" class="form-control" id="v_id" value="<?=$row1['id']?>" hidden>
    </div>

    <div class="form-group">
         <video width="480" height="240" src='<?=$row1["video_url"]?>'controls autoplay></video>
         <div>
            <label for="file">Choose Video:</label>
            <input type="text" id="existingImage" class="form-control" value="<?=$row1['video_url']?>" hidden>
            <input type="file" id="newImage" value="">
         </div>
    </div>

    <div class="form-group">
      <button type="submit" style="height:40px" class="btn btn-primary">Update Banner</button>
    </div>
    <?php
    		}
    	}
    ?>
  </form>

  
</div>