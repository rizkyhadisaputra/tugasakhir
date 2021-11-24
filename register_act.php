<?php
include 'koneksi.php';
$username=$_POST['username'];
$password=md5($_POST['password']);
$rol=$_POST['role'];
mysqli_query($connection,"insert into user values('','$username','$password','$rol')");
header('location: login.php');

?>