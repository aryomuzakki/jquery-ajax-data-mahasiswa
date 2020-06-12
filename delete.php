<?php
  include "koneksi.php";

  $nim = $_POST['nim'];

  mysqli_query($connect, "DELETE FROM tb_identitas WHERE nim = '$nim'");

?>