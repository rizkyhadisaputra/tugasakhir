<?php 
include 'koneksi.php';

$id = $_GET['id'];
mysqli_query($connection,"delete from keluarga WHERE id='$id'");
 
header("location:keluarga.php?pesan=hapus");
?>