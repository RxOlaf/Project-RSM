<!doctype html> 
<html> 
<head> 
  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="assets/css/bootstrap.css"> 
</head> 
<body> 
  
  <?php
  include "koneksi.php";
  $name  = $_REQUEST['name'];
  $email  = $_REQUEST['email'];
  $telepon  = $_REQUEST['telepon'];
  $judul  = $_REQUEST['judul'];
  $pesan  = $_REQUEST['pesan'];

  if ($name != "" && $pesan!="") {
return true;
}else{
alert('Anda harus mengisi data dengan lengkap !');
}
  $mysqli  = "INSERT INTO form_input (nama, email, telepon, judul, pesan) VALUES ('$name', '$email','$telepon','$judul','$pesan')";
  $result  = mysqli_query($conn, $mysqli);

  if ($result) {
    echo "Input berhasil";
  } else {
    echo "Input gagal";
  }

  mysqli_close($conn);

  
   


?>

  <script src="assets/js/jquery.js"></script> 
  <script src="assets/js/popper.js"></script> 
  <script src="assets/js/bootstrap.js"></script>

</body> 
</html>