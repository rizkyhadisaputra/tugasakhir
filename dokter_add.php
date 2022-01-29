<?php
session_start();
    include 'koneksi.php';

    if (isset($_POST['add_data']))
{
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    $dokter = 'dokter';
    $created_by = $_SESSION['user_id'];


    mysqli_query($connection,"insert into user values('','$username','$password','$dokter','$created_by')");
    header('location: user.php');
}