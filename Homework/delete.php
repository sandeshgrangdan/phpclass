<?php 
require_once "connect.php";
$id = $_GET['id'];
$sql = "DELETE FROM tbl_homework where id=$id";
mysqli_query($conn,$sql);
header('location:view.php')
?>