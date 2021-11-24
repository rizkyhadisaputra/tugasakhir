<?php

    include 'koneksi.php';
$id = $_POST['id'];
            $sql = mysqli_query($connection,"SELECT * FROM keluarga WHERE id='$id'");
	        $sql = mysqli_fetch_array($sql);
            $snsor = mysqli_query($connection,"SELECT * FROM sensor order by id DESC");
            $snsor = mysqli_fetch_array($snsor);
    # code...
    if (isset($_POST['simpan'])) {
    $keluarga = $sql['id'];
    $tanggal = $snsor['tanggal'];
    $saturasi = $snsor['saturasi'];
    mysqli_query($connection,"insert into monitoring values('','$keluarga','$tanggal','$saturasi')");
    }
   
 
    $_SESSION["sukses"] = 'Data Berhasil Disimpan';

// mengalihkan halaman kembali ke index.php
    header('location: monitoring.php?pesan=tambah');
 
?>