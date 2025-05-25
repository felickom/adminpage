
<div >
  <h3>Benefits Item</h3>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">No.</th>  
        <th class="text-center">Judul</th>
        <th class="text-center">Isi</th>
        <th class="text-center">Icon</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from benefit";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["judul"]?></td>   
      <td><?=$row["isi"]?></td>
      <td><img height='100px' src='<?=$row["icon"]?>'></td>   
      <td><button class="btn btn-primary" style="height:40px" onclick="editBenefit(<?=$row['benefit_id']?>)">Edit</button></td>
      <!-- <td><button class="btn btn-danger" style="height:40px" onclick="sizeDelete('<?=$row['benefit_id']?>')">Delete</button></td> -->
      </tr>
      <?php
            $count=$count+1;
          }
        }
      ?>
  </table>

  <!-- Add Button -->
  <!-- <button type="button" class="btn btn-secondary" style="height:40px" data-toggle="modal" data-target="#myModal">
    Add Benefit
  </button>

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">New Benefits Form</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form  enctype='multipart/form-data' action="./controller/addBenefitController.php" method="POST">
            <div class="form-group">
              <label for="size">Size Number:</label>
              <input type="text" class="form-control" name="size" required>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-secondary" name="upload" style="height:40px">Add Size</button>
            </div>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  
</div> -->
   