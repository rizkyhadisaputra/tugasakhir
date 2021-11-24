<?php
session_start();
include 'koneksi.php';

$username=$_POST['username'];
$password=md5($_POST['password']);
$query=mysqli_query($connection,"select * from user where username='$username' and password='$password'");
$p=mysqli_fetch_array($query);

//die();
if (mysqli_num_rows($query)==1) {
    # code...
    //var_dump(session_status());die();
    $_SESSION['kunci']=$username;
    $_SESSION['ases']=$p['role'];
    //var_dump ($_SESSION['kunci']);
     header( 'Location: index.php' );
     //echo '<script type="text/javascript">
        //window.location = "index.php";
    //</script>';
}else{
    header( 'Location: login.php');
    //echo '<script type="text/javascript">
        //window.location = "login.php";
    //</script>';
}

?>