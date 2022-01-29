<?php
// start session
session_start();

// cb conn
include 'koneksi.php';
    
if (isset($_POST['add_data'])){

  // get request data
  $nama = $_POST['nama'];
  $umur = $_POST['umur'];
  $gender = $_POST['gender'];
  $uname  = $_POST['username'];
  $pass = md5($_POST['password']);
  $keluarga = 'keluarga';
  $created_by = $_SESSION['user_id'];

  // insert query
  $query_run2  = mysqli_query($conn, "INSERT INTO user VALUES('','$uname','$pass','$keluarga', $created_by)");

  // check if query successfully
  if (mysqli_affected_rows($conn) > 0){
    $query_3 = mysqli_query($conn, "SELECT * FROM user WHERE username = '$uname'");
    $q = mysqli_fetch_array($query_3);
    $user_id = $q['id'];
    
    // insert query again
    $query_run  = mysqli_query($conn, "INSERT INTO keluarga VALUES('','$nama','$umur','$gender','$user_id','$created_by')");

    // check if query successfully
    if (mysqli_affected_rows($conn) > 0){
      echo "<script>
              alert('Data Berhasil di Inputkan!');
              window.location.href = 'keluarga.php';
            </script>";
    }else{
      echo mysqli_error($conn);
    }
  }else{
    echo mysqli_error($conn);
  }
}
?>