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
              <h2 class="section-heading">DATA KELUARGA</h2>
            </div>
          </div>

        <?php if ($_SESSION['ases']=='master')
        {
            ?>

    <div class="row">
            <div class="col-12">
              <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal">Tambah Data</button>
            </div>
          </div>
      
        <?php } ?>
          

               <!-- Modal ADD DATA-->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Tambah Data Keluarga</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="keluarga_add.php" method="POST">
                  <div class="modal-body">
                    <div class="form-group">
                      <label>Nama</label>
                      <input type="text" name="nama" class="form-control" placeholder="Nama">
                    </div>

                    <div class="form-group">
                      <label>Umur</label>
                      <input type="text" name="umur" class="form-control" placeholder="Umur">
                    </div>

                    <div class="form-group">
                      <label>Gender</label>
                      <select class="form-control" name="gender" aria-label="Default select example">
                        <option value="Laki-laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                      </select>
                    </div>

                    
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="add_data" class="btn btn-primary">SAVE</button>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <br>

          <div class="row">
            <div class="col-5">
            <?php 
            
            if(!empty($_SESSION["status"]))
            {

              ?>
                  <div class="alert alert-success" role="alert">
                     <?php echo $_SESSION["status"]; ?><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                  </div>
                  
              <?php
               
                unset($_SESSION["status"]);
            } 
            ?>   
            </div>

          </div>
        
          <br>


          <div class="row text-center">
            <div class="col-md-12">
              <div class="container text-center">
                <div class="table-responsive">
                <table class="table table-bordered table-responsive-md text-center">
              </div>
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Umur</th>
                  <th scope="col">Gender</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>

              <?php if ($_SESSION['ases']=='master')
                  {
                      ?>

              <div class="tbody">
                <?php
                $no = 1;
                $data = mysqli_query($connection, "select * from keluarga");
                while ($view = mysqli_fetch_array($data)) {
                ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $view["nama"] ?></td>
                    <td><?php echo $view["umur"] ?></td>
                    <td><?php echo $view["gender"] ?></td>
                    <?php echo "<td class='text-center'><a href='#edit_modal' class='btn btn-warning btn-show-modal-edit'  data-toggle='modal' data-id=".$view['id'].">Edit</a>"; ?>
                      <a class="btn btn-danger" data-toggle='modal' data-target='#konfirmasi_hapus' data-href="hapus_keluarga.php?id=<?php echo $view['id']; ?>">DELETE</a>
                      <a href="cek_detail.php?id=<?php  echo $view["id"]?>" class="btn btn-info btn-sm">CEK</a>
                      <a href="hasil_detail.php?id=<?php  echo $view["id"]?>" class="btn btn-info btn-sm">Detail</a>
                    </td>
                  </tr>
                <?php
                }
                ?>

              </div>

              <?php       }
              if ($_SESSION['ases']=='keluarga') {?>
                  <div class="tbody">
                <?php
                $no = 1;
                $data = mysqli_query($connection, "select * from keluarga");
                while ($view = mysqli_fetch_array($data)) {
                ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $view["nama"] ?></td>
                    <td><?php echo $view["umur"] ?></td>
                    <td><?php echo $view["gender"] ?></td>
                    <?php echo "<td class='text-center'><a href='#edit_modal' class='btn btn-warning btn-show-modal-edit'  data-toggle='modal' data-id=".$view['id'].">Edit</a>"; ?>
                
                      <a href="cek_detail.php?id=<?php  echo $view["id"]?>" class="btn btn-info btn-sm">CEK</a>
                      <a href="hasil_detail.php?id=<?php  echo $view["id"]?>" class="btn btn-info btn-sm">Detail</a>
                    </td>
                  </tr>
                <?php
                }
                ?>

              </div>
              <?php } ?>     
            </div>
          </div>
          </table>
          </div>

  
          
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

          <div class="modal fade" id="edit_modal" tabindex="-1"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    	      <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
            	    <h4 class="modal-title" id="exampleModalLabel" >Edit Pelanggan</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="hasil-data"></div>
                </div>



              </div>
    	      </div>
		      </div>

        </div>
      </div>


      <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
      
      <!-- <script src="js/main.js"></script> -->

      <script type="text/javascript">
        //Hapus Data
        $(document).ready(function() {
          $('#konfirmasi_hapus').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
          });
        });
      </script>

<script>
    $('.btn-show-modal-edit').on('click', function (e) {
        var id = $(this).data('id');
        console.log(id);
        //menggunakan fungsi ajax untuk pengambilan data
        // console.log('ajax kepanggil');
        $.ajax({
            type : 'POST',
            url : 'keluarga_detail.php',
            data :  { id },
            success : function(data) {
            	// console.log('ini data', data);
                $('.hasil-data').html(data);//menampilkan data ke dalam modal
            }
        });
     });
</script>

    </body>

</html>