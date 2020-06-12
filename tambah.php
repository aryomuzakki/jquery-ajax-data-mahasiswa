<?php
    include 'koneksi.php';
    
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];

    mysqli_query($connect, "INSERT INTO tb_identitas (nim, nama, alamat) VALUES ('$nim', '$nama', '$alamat')");
?>
