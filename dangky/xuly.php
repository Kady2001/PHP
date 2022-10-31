<?php
require_once('../db/config.php');

if(isset($_POST['btn-singup'])){
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $name=$_POST['name'];
    $created_at = $updated_at = date('Y-m-d H:s:i');
    $sql_add = "INSERT INTO `tai_khoan`( `email`, `matkhau`, `tentk`, `CREATED_AT`, `UPDATED_AT`) 
	VALUES ('$email','$pass','$name','$created_at','$updated_at')";
    $query_add =mysqli_query($connect,$sql_add);  

    header('Location: ../dangnhap/');
		die();
}
   
?>