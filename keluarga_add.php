<?php
session_start();
    include 'koneksi.php';
    
    if (isset($_POST['add_data'])) 
{
        # code...
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $gender = $_POST['gender'];

    $query = "insert into keluarga values('','$nama','$umur','$gender')";
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
 
?>