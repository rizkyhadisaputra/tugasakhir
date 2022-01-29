<?php 
include 'koneksi.php';

$id = $_GET['id'];
mysqli_query($connection,"delete from monitoring WHERE id='$id'");
 
header("location:monitoring.php?pesan=hapus");
?>