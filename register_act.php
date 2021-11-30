<?php
include 'koneksi.php';

if (isset($_POST['register'])) 
{
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $gender = $_POST['gender'];
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    $rol=$_POST['role'];

$query_2 = "insert into user values('','$username','$password','$rol')";

$query_run2  = mysqli_query($connection, $query_2);
    

        if ($query_run2)
    {
        
            $query_3 = mysqli_query($connection,"select * from user where username='$username'");
            $q=mysqli_fetch_array($query_3);
            $user_id = $q['id'];

            $query = "insert into keluarga values('','$nama','$umur','$gender','$user_id','$user_id')";
            $query_run  = mysqli_query($connection, $query);
        
            if ($query_run)
            {
               # code...
               
               header('location: login.php');
           }
           else{
               echo "Something went wrong";
           }
            
    }
}


?>
