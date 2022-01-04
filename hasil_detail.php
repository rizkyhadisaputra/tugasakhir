<?php
include "koneksi.php";
session_start();
// $sql = "DELETE FROM sensor";
// mysqli_query($connection, $sql);


// id keluarga sudah masuk kesini, tinggal ambil data sesuai id keluarga
$id_keluarga = $_GET['id'];



// $tanggal = mysqli_query($connection, "select tanggal from monitoring WHERE id_keluarga=$id_keluarga order by tanggal DESC");
// // baca informasi suhu untuk semua data

// $saturasi   = mysqli_query($connection, "select saturasi_oksigen from monitoring WHERE id_keluarga=$id_keluarga order by tanggal DESC");
$sql = "select tanggal,saturasi_oksigen from monitoring WHERE id_keluarga= '$id_keluarga' order by tanggal ASC";
$chartQueryRecords   = mysqli_query($connection, $sql);

// $chartQuery = "SELECT * FROM column_chart";
// $chartQueryRecords = mysqli_query($connection,$chartQuery);

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



    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Tanggal', 'Saturasi Oksigen'],
                <?php
                while ($row = $chartQueryRecords->fetch_assoc()) {
                    // echo "['".$row['tanggal'].",".$row['saturasi_oksigen']."],";
                    $tanggal = $row['tanggal'];
                    $saturasi = $row['saturasi_oksigen'];
                    echo "['$tanggal',$saturasi],";
                }
                ?>
            ]);

            var options = {
                title: 'Histori Monitoring Saturasi Oksigen',
                curveType: 'function',
                legend: {
                    position: 'bottom'
                }
            };

            var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

            chart.draw(data, options);
        }
    </script>



</head>


<body>
    <div class="container" style="text-align: center" ;>
        <h3>
            Hasil Data Pembacaan Monitoring
        </h3>
        <p>
            Data yang Ditampilkan Secara keseluruhan
        </p>
        <?php echo $_GET['nama']; ?>
    </div>

    <!-- <div class="container">
        <div class="row">
        <div class="col-12">
           
            </div>
        </div>
    </div> -->

    <div class="container align-center">
        <div class="row text-center">
            <div class="container-fluid  " id="responcontain" style="width: 800px;margin: 0px auto; text-align: center"></div>



        </div>
        <div class="container" style="text-align: center" ;>
            <div id="curve_chart" style="width: 900px; height: 500px"></div>

            <button type="button" class="btn btn-link"><a href="keluarga.php">Kembali</button>
        </div>






</body>

</html>