<div >
  <h2>All Testimoni Images</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">No</th>
        <th class="text-center">Testimoni Images</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from testimoni";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
           
    ?>
    <tr>
      <td><?=$count?></td>
      <td><img height='100px' src='<?=$row["upload_images"]?>'></td>  
      <td><button type="button" class="btn btn-primary" style="height:40px" onclick="editTestimoni('<?=$row['id']?>')">Edit</button></td>
      <td><button type="button" class="btn btn-warning" style="height:40px" data-toggle="modal" data-target="#modalDelete" data-id="<?=$row['id']?>">Delete</button></td>     
    </tr>
    <?php
            $count=$count+1;
           
        }
    }
    ?>
  </table>

  <!-- Add Button -->
  <button type="button" class="btn btn-secondary" style="height:40px" data-toggle="modal" data-target="#modalAdd">
    Add Testimoni Images
  </button>

  <!-- Modal -->
  <div class="modal fade" id="modalAdd" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">New Testimoni Item</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form  enctype='multipart/form-data' onsubmit="addTestimoni(event)" method="POST">
            <div class="form-group">
              <label for="file">Upload Image:</label>
              <input type="file" class="form-control-file" id="file">
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-secondary" name="upload" style="height:40px">Add Testimoni Images</button>
            </div>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="modalDelete" role="dialog" data-backdrop="static">
    <div class="modal-dialog">

      <!-- Modal For Delete -->
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Delete Galeri Kami</h5>
        </div>

        <div class="modal-body">
          <p>Apakah anda yakin menghapus gambar berikut ?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Tidak</button>
          <button type="button" class="btn btn-danger delete_testimoni" style="height:40px">Hapus</button>
        </div>
      </div>

    </div>
  </div>

  
</div>

<script>
    $("#modalDelete").on('show.bs.modal', function(e) {
      var id = $(e.relatedTarget).data('id');

      $(document).on('click', '.delete_testimoni', function() {
        $.ajax({
            url:"./controller/deleteTestimoniController.php",
            method:"post",
            data:{record:id},
            success:function(data){
                alert('Gambar Testimoni tersebut sudah terhapus');
                location.href = "./index.php";
            }
        });
      })
  })
</script>