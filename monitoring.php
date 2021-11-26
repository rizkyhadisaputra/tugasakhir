<?php
include "koneksi.php";
include "navbar.php";
session_start();
?>

    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

          <!-- MAIN -->

          <div class="site-section stats">
        <div class="container">
          <div class="row mb-3">
            <div class="col-lg-7 text-center mx-auto">
              <h2 class="section-heading">DATA Monitoring</h2>
            </div>
          </div>

          <br>

          <div class="row text-center">
            <div class="col-md-12">
              <div class="container text-center">
                <table class="table table-bordered table-responsive-md text-center">
              </div>
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Tanggal</th>
                  <th scope="col">Saturasi Oksigen</th>
                
                </tr>
              </thead>
              
              <div class="tbody">
                <?php
                $no = 1;
                $data = mysqli_query($connection, "SELECT monitoring.id,tanggal, saturasi_oksigen, nama FROM monitoring INNER JOIN keluarga ON monitoring.id_keluarga = keluarga.id;");
                while ($view = mysqli_fetch_array($data)) {

                ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $view["nama"] ?></td>
                    <td><?php echo $view["tanggal"] ?></td>
                    <td><?php echo $view["saturasi_oksigen"] ?></td>
                    
                  
                  </tr>
                

                <?php
                }
                ?>
                
              </div>

          
            </div>
          </div>
        </table>
          <br>



        </div>
      </div>


   

      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  
    </body>

</html>
