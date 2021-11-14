<?php
include "koneksi.php";
session_start();

// baca data dari tabel sensor
// baca informasi tanggal untuk semua data

// baca ID tertinggi
$sql_ID = mysqli_query($connection, "select MAX(ID) FROM sensor");

$data_ID = mysqli_fetch_array($sql_ID);

$ID_akhir = $data_ID['MAX(ID)'];
$ID_awal = $ID_akhir - 4 ;

$tanggal = mysqli_query($connection, "select tanggal from sensor WHERE ID>='$ID_awal' and ID<='$ID_akhir' order by ID ASC ");
// baca informasi suhu untuk semua data
$saturasi   = mysqli_query($connection, "select saturasi from sensor WHERE ID>='$ID_awal' and ID<='$ID_akhir' order by id asc");
?>

<!-- tampilan grafik -->

<div class="panel-panel-primary">
    <div class="panel-heading">
        Grafik Sensor
    </div>

    <div class="panel-body">
        <canvas id="myChart"></canvas>

        <script type="text/javascript">
            // baca ID canvas tempat grafik
           var canvas = document.getElementById('myChart');
           // siapkan data untuk grafis
           var data = {
               labels :[
                   <?php
                        while ($data_tanggal = mysqli_fetch_array($tanggal)) 
                        {
                            # code...
                            echo '"'.$data_tanggal['tanggal'].'",';
                        }
                   ?>
               ] ,
               datasets : [{
                   label : "Saturasi",
                   fill: true,
                   backgroundColor: "rgba(102, 255, 255, .2)",
                   borderColor: "rgba(0, 0, 51, .2)",
                   lineTension: 0.5,
                   pointRadius: 5,
                   data : [
                       <?php
                            while ($data_suhu = mysqli_fetch_array($saturasi)) 
                            {
                                # code...
                                echo $data_suhu['saturasi'].',';
                            }
                       ?>
                   ]
               }]
           };

           //option grafik
           var option ={
               showLines : true,
               animation : {duration : 0}
           };

           // opsi grafik
            var myLineChart = Chart.Line(canvas, {
                data : data,
                options : option
            }) ;
            
        </script>
    </div>
</div>