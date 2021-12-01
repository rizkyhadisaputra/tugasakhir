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
              <h2 class="section-heading">DATA USER</h2>
            </div>
          </div>
         
          <br>
    <?php if ($_SESSION['ases']=='master')
            {?>
          <div class="row text-center">
            <div class="col-md-12">
              <div class="container text-center">
                <table class="table table-bordered table-responsive-md text-center">
              </div>
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Username</th>
                  <th scope="col">Password</th>
                  <th scope="col">Role</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>

            
              <div class="tbody">
                <?php
                $no = 1;
                $data = mysqli_query($connection, "select * from user");
                while ($view = mysqli_fetch_array($data)) {

                ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $view["username"] ?></td>
                    <td><?php echo $view["password"] ?></td>
                    <td><?php echo $view["role"] ?></td>
                    <td>
                      <a href="edit.php" class="btn btn-warning btn-sm">EDIT</a>
                      <a class="btn btn-danger btn-sm" data-toggle='modal' data-target='#konfirmasi_hapus' data-href="user_hapus.php?id=<?php echo $view['id']; ?>">DELETE</a>
                    </td>
                  </tr>
                <?php
                }
                ?>

              </div>
              <?php       }
            if ($_SESSION['ases']=='admin')
            
            {?>

          <div class="row text-center">
            <div class="col-md-12">
              <div class="container text-center">
                <table class="table table-bordered table-responsive-md text-center">
              </div>
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Username</th>
                  <th scope="col">Password</th>
                  <th scope="col">Role</th>
                  
                </tr>
              </thead>

              <div class="tbody">
                <?php
                $no = 1;
                $data = mysqli_query($connection, "select * from user");
                while ($view = mysqli_fetch_array($data)) {

                ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $view["username"] ?></td>
                    <td><?php echo $view["password"] ?></td>
                    <td><?php echo $view["role"] ?></td>
                    
                  </tr>
                <?php
                }
                ?>

              </div>
              
             <?php } ?> 
            </div>
          </div>
          </table>
          <br>

          <div class="modal fade" id="konfirmasi_hapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <b>Anda yakin ingin menghapus data ini ?</b><br><br>
                  <a class="btn btn-danger btn-ok"> Hapus</a>
                  <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-close"></i> Batal</button>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>


 
      <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>

      <script type="text/javascript">
        //Hapus Data
        $(document).ready(function() {
          $('#konfirmasi_hapus').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
          });
        });
      </script>
      

    </body>

</html>