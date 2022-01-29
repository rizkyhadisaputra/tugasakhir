<?php 
include 'koneksi.php';

$id = $_GET['id'];
mysqli_query($connection,"delete from user WHERE id='$id'");
 
header('location: user.php');
?>