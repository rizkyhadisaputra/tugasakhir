<?php
    include 'koneksi.php';

    if ($_POST["id"]) 
    {
        # code...
        $update= "update keluarga set
        nama='".$_POST['nama']."',
        umur='".$_POST['umur']."',
        gender='".$_POST['gender']."'
        where id='".$_POST['id']."'";
        $sql_update = mysqli_query($connection,$update);
        if ($sql_update)
        {
            # code...
            echo "<script>alert('Data Berhasil DiEdit')
    		location.replace('keluarga.php')</script>";
		}
			else
		{
			echo "<script>alert('Data Gagal DiEdit')
   			location.replace('keluarga.php')</script>";
		}
        

    }


?>