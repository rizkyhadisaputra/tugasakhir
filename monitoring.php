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
                $batas = 10;
                $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
                $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	

                $previous = $halaman - 1;
				        $next = $halaman + 1;

                $data = mysqli_query($connection,"SELECT monitoring.id,tanggal, saturasi_oksigen, nama FROM monitoring INNER JOIN keluarga 
                ON monitoring.id_keluarga = keluarga.id;");
                $jumlah_data = mysqli_num_rows($data);
				        $total_halaman = ceil($jumlah_data / $batas);

                
                $data_monitoring = mysqli_query($connection, "SELECT monitoring.id,tanggal, saturasi_oksigen, nama FROM monitoring INNER JOIN keluarga 
                ON monitoring.id_keluarga = keluarga.id limit $halaman_awal, $batas");
                $no = $halaman_awal+1;
                while ($view = mysqli_fetch_array($data_monitoring)) {
                
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

          <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
              <li class="page-item disabled">
                <a class="page-link" <?php if($halaman > 1){ echo "href='?halaman=$Previous'"; } ?> >Previous</a>
              </li>
              <?php 
                  for($x=1;$x<=$total_halaman;$x++){
                    ?> 
                    <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                    <?php
                  }
                  ?>				
                <a class="page-link" <?php if($halaman < $total_halaman) { echo "href='?halaman=$next'"; } ?>>Next</a>
              </li>
            </ul>
          </nav>

          <br>



        </div>
      </div>


   

      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  
    </body>

</html>
