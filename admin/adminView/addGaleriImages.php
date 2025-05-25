<div class="container p-5">

<h4>Add Galeri Form</h4>
<form id="Add-Galeri" onsubmit="addGaleriKami(event)" enctype='multipart/form-data' method="POST">

    <div class="form-group">
        <label>Category:</label>
            <select id="category" >
                <option disabled selected>Select category</option>
                <?php
                    include_once "../config/dbconnect.php";
                    $sql="SELECT * from category";
                    $result = $conn-> query($sql);

                    if ($result-> num_rows > 0){
                    while($row = $result-> fetch_assoc()){
                        echo"<option value='".$row['category_id']."'>".$row['category_name'] ."</option>";
                        }
                    }
                ?>
            </select>
    </div>       

    <div class="form-group">
        <label for="file">Upload Image:</label>
        <input type="file" class="form-control-file" id="file">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-secondary" id="upload" style="height:40px">Add Galeri Images</button>
    </div>
  </form>

  
</div>