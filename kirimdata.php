<?php

include "koneksi.php";

//tangkap parameter yang dikirimkan oleh nodemcu

$saturasi = $_GET['saturasi'];


//simpan ke table sensor

//atur ID selalu dimulai dari satu

mysqli_query($connection, "ALTER TABLE sensor AUTO_INCREMENT=1");
//simpan nilai saturasi


$simpan = mysqli_query($connection, "INSERT INTO  sensor(saturasi)VALUES('$saturasi')");

// berikan respon ke nodemcu

    if($simpan)
        echo "Berhasil disimpan";
        
    else
        echo "Gagal Tersimpan";

?>