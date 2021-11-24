<?php
include "koneksi.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            Detail
        </title>
        <link rel="stylesheet" type="text/css" href="css2//bootstrap-theme.min.css">
        <script type="text/javascript" src="js2/jquery-3.4.0.min.js"></script>
        <script type="text/javascript" src="js2/mdb.min.js"></script>
        <script type="text/javascript" src="jquery-latest.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
        <script type="text/javascript">
            var refreshid = setInterval(function(){
                $('#responcontain').load('sensor_data.php') ;
            }, 2000);
        </script>

    </head>


<body>

        <div class="container" style="text-align: center";>
            <h3>
                Grafik Sensor Secara Realtime
            </h3>
            <p>
                Data yang Ditampilkan adalah 5 data terakhir
            </p>
        </div>

        <div class="container align-center">
            <div class="row text-center" >
        <div class="container-fluid  " id="responcontain" style= "width: 800px;margin: 0px auto; text-align: center"></div>



        </div>
        <div class="container" style="text-align: center";>


        <form action="detail_add.php" method="post">
            <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
            <button type="submit" name="simpan" class="btn btn-link">Simpan</button>
        </div>

        
                  



</body>
</html>