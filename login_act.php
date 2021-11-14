<?php
session_start();
include 'koneksi.php';
$username=$_POST['username'];
$password=$_POST['password'];

$query=mysqli_query($connection,"select * from user where username='$username' and password='$password'");
$p=mysqli_fetch_array($query);

if (mysqli_num_rows($query)==1) {
    # code...
    $_SESSION['kunci']=$username;
    $_SESSION['ases']=$p['role'];

    header("location:index.php");

}else{
    header("location:login.php");
}



?>