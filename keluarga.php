<?php
include "koneksi.php";
include "navbar.php";
session_start();
?>

<!-- <!doctype html>
<html lang="en">

<head>
  <title>Covid &mdash; Website Template by Colorlib</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;700;900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="fonts/flaticon-covid/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css" rel="stylesheet">

  <link rel="stylesheet" href="css/style.css">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar light js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">

          <div class="col-6 col-xl-2">
            <div class="mb-0 site-logo"><a href="index.php" class="mb-0">Covid-19<span class="text-primary">.</span> </a></div>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active"><a href="index.php" class="nav-link">Home</a></li>
                <li><a href="keluarga.php" class="nav-link">Keluarga</a></li>
                <li><a href="monitoring.php" class="nav-link">Monitoring</a></li>
                <li><a href="user.php" class="nav-link">User</a></li>
                <li><a href="logout.php" class="nav-link">Log out</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3 text-black"></span></a></div>

        </div>
      </div>

    </header> -->

    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">



      <!-- MAIN -->

      <div class="site-section stats">
        <div class="container">
          <div class="row mb-3">
            <div class="col-lg-7 text-center mx-auto">
              <h2 class="section-heading">DATA KELUARGA</h2>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal">Tambah Data</button>
            </div>
          </div>

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
                      <a href="detail.php?id=<?php  echo $view["id"]?>" class="btn btn-info btn-sm">DETAIL</a>
                    </td>
                  </tr>
                <?php
                }
                ?>

              </div>


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


      <!-- <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/jquery-ui.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/jquery.countdown.min.js"></script>
      <script src="js/jquery.easing.1.3.js"></script>
      <script src="js/aos.js"></script>
      <script src="js/jquery.fancybox.min.js"></script>
      <script src="js/jquery.sticky.js"></script>
      <script src="js/isotope.pkgd.min.js"></script> -->
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