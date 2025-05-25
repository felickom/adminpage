
<div >
  <h2>Galeri Kami</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">No.</th>
        <th class="text-center">Category Name</th>
        <th class="text-center">Services Image</th>    
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from galeri_images ti,category c WHERE ti.category_id=c.category_id";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["category_name"]?></td>  
      <td><img height='100px' src='<?=$row["upload_images"]?>'></td>      
      <td><button type="button" class="btn btn-primary" style="height:40px" onclick="GaleriEditForm('<?=$row['testimoni_id']?>')">Edit</button></td>
      <td><button type="button" class="btn btn-warning" style="height:40px" data-toggle="modal" data-target="#modalDelete" data-id="<?=$row['testimoni_id']?>">Delete</button></td>     
      </tr>
      <?php
            $count=$count+1;
          }
        }
      ?>
  </table>


  <!-- Add Button -->
  <button type="button" class="btn btn-secondary" style="height:40px" onclick="addViewGaleriImages()">
    Add Galeri Kami
  </button>

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
          <button type="button" class="btn btn-danger delete_galeri" style="height:40px">Hapus</button>
        </div>
      </div>

    </div>
  </div>

  
</div>

<script>
    $("#modalDelete").on('show.bs.modal', function(e) {
      var id = $(e.relatedTarget).data('id');

      $(document).on('click', '.delete_galeri', function() {
        $.ajax({
            url:"./controller/deleteVariationController.php",
            method:"post",
            data:{record:id},
            success:function(data){
                alert('delete Success');
                location.href = "./index.php";
            }
        });
      })
  })
</script>


   