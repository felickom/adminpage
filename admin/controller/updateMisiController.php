<?php 
include_once "../config/dbconnect.php";

$id=$_POST['id'];
$content = $_POST['desc'];

$updateItem = mysqli_query($conn,"UPDATE misi SET misi='".mysqli_real_escape_string($conn, $content)."' WHERE id=$id");

if($updateItem)
{
    echo "true";
}
else
{
    echo mysqli_error($conn);
}
?>