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
        </div>

</body>
</html>