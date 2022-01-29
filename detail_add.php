<?php

include 'koneksi.php';
$id = $_POST['id'];

if (isset($_POST['simpan'])) {
    $keluarga = $id;
    $tanggal = $snsor['tanggal'];
    mysqli_query($connection, "insert into monitoring (id_keluarga,saturasi_oksigen) values('$keluarga',(SELECT `saturasi` FROM `sensor` WHERE `id` = (select max(`id`) from sensor)))");
    $sql = "DELETE FROM sensor";
    mysqli_query($connection, $sql);
}


$_SESSION["sukses"] = 'Data Berhasil Disimpan';

// mengalihkan halaman kembali ke index.php

header('location: monitoring.php?pesan=tambah');

?>
