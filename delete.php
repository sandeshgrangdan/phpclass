<?php 
require_once "connect.php";
$id = $_GET['id'];
$sql = "DELETE FROM tbl_user where id=$id";
mysqli_query($conn,$sql);
header('location:select.php')


?>