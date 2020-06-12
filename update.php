<?php
  include "koneksi.php";

  $nim = $_POST['nim'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];

  mysqli_query($connect, "UPDATE tb_identitas SET nama = '$nama', alamat = '$alamat' WHERE nim = '$nim'");

?>