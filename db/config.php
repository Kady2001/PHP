<?php
 $connect = mysqli_connect('127.0.0.1', 'root', '', 'db_thucung');
 if($connect) {
     mysqli_query($connect, "SET NAMES 'UTF8'");
    
 }else {
     echo "Ket noi that bai";
 }
?>