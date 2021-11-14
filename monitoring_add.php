<?php

    include 'koneksi.php';
    # code...
    $keluarga = $_POST['id_keluarga'];
    $tanggal = $_POST['tanggal'];
    $saturasi = $_POST['saturasi_oksigen'];
    mysqli_query($connection,"insert into monitoring values('','$keluarga','$tanggal','$saturasi')");
 
    $_SESSION["sukses"] = 'Data Berhasil Disimpan';

// mengalihkan halaman kembali ke index.php
    header("location:monitoring.php?pesan=tambah");
 
?>