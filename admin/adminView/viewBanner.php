
<div >
  <h3>Banner</h3>
  <table class="table ">
    <thead>
      <tr>
        <th class="text">Banner Video</th>
        <th class="text-center" colspan="1">Action</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from banner";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
      <td class="text-center"><video width="480" height="240" src='<?=$row["video_url"]?>' controls autoplay></video></td>   
      <td><button class="btn btn-primary" style="height:40px" onclick="editBanner('<?=$row['id']?>')">Edit</button></td>
      </tr>
      <?php
            $count=$count+1;
          }
        }
      ?>
  </table>

  