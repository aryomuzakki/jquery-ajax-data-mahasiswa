<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Mahasiswa</title>
</head>
<body>
  <center>
    <h1 class="text-center">Data Mahasiswa</h1>
    
    <form>
      <table>
        <tr>
          <td>NIM</td>
          <td><input type="text" id="nim" name="nim"></td>
        </tr>
  
        <tr>
          <td>Nama</td>
          <td><input type="text" id="nama" name="nama"></td>
        </tr>
  
        <tr>
          <td>Alamat</td>
          <td><input type="text" id="alamat" name="alamat"></td>
        </tr>
      </table>
      
      <br>
      
      <button type="button" id="submit_btn">POST</button>
      <button type="button" id="update_btn">UPDATE</button>
      <button type="button" id="delete_btn">DELETE</button>
      <button type="button" id="show_btn">SHOW</button>  
    </form>
    
    <br>
    
    <div class="tampildata"></div>
  </center>

</body>
</html>
