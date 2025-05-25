<?php 
include_once "../config/dbconnect.php";

$id=$_POST['id'];
$content = $_POST['desc'];

$updateItem = mysqli_query($conn,"UPDATE company SET content='".$content."' WHERE id=$id ");

if($updateItem)
{
    echo "true";
}
else
{
    echo mysqli_error($conn);
}
?>