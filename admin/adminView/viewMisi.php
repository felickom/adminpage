
<div >
  <h3>Misi Perusahaan</h3>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">Misi perusahaan</th>
        <th class="text-center" colspan="1">Action</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from misi";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
      <td class="text-center"><p><?=nl2br($row["misi"])?></p></td>   
      <td><button class="btn btn-primary" style="height:40px" onclick="editMisi('<?=$row['id']?>')">Edit</button></td>
      </tr>
      <?php
            $count=$count+1;
          }
        }
      ?>
  </table>