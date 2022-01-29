<?php
session_start();
    include 'koneksi.php';
    
    if (isset($_POST['add_data'])) 
{
        # code...
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $gender = $_POST['gender'];
    $uname  = $_POST['username'];
    $pass = md5($_POST['password']);
    $keluarga = 'keluarga';

    $query_2 = "insert into user values('','$uname','$pass','$keluarga')";
    // $query = "insert into keluarga values('','$nama','$umur','$gender')";
    
    $query_run2  = mysqli_query($connection, $query_2);
    
    
    
    if ($query_run2)
     {
         $created_by = $_SESSION['user_id'];
         
        $query_3 = mysqli_query($connection, "select * from user where username='$uname'");
        $q=mysqli_fetch_array($query_3);
        $user_id = $q['id'];

        $query = "insert into keluarga values('','$nama','$umur','$gender','$user_id','$created_by')";

        // var_dump($q);
        // die();
        // # code...
        // $_SESSION['status'] = "Data Berhasil Di Inputkan";
        // header('location: keluarga.php');
        $query_run  = mysqli_query($connection, $query);

        if ($query_run)
        {
           # code...
           $_SESSION['status'] = "Data Berhasil Di Inputkan";
           header('location: keluarga.php');
       }
       else{
           echo "Something went wrong";
       }
    }
    else{
        echo "Something went wrong";
    }



    
}   
 
?>