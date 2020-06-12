<?php
  include "koneksi.php";
?>
<center>
  <table border="1" cellpadding="5">
    <thead>
      <tr>
        <th>NIM</th> 
        <th>Nama</th>
        <th>Alamat</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    
      <?php
        $data = mysqli_query($connect, "SELECT * FROM tb_identitas");
        while ($d = mysqli_fetch_array($data)) 
        {
      ?>
        <tr>
          <td><?php echo $d['nim'] ?></td>
          <td><?php echo $d['nama'] ?></td>
          <td><?php echo $d['alamat'] ?></td>
          <td><button type="button" id="edit_btn">Edit</button></td>
        </tr>
      <?php 
        } 
      ?>
    
    </tbody>
  </table>
</center>