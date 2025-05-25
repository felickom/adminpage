<?php 
include_once "../config/dbconnect.php";
session_start();

if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * from users where username='$username' and password='$password'";
    $result=$conn-> query($query);
    $cek = $result->num_rows;
    if($cek > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: ../index.php");        
    }else{
        header("Location: ../login.php?msg=failed");
    }
    
}



?>