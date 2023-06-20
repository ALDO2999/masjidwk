  <!-- YANG DIUBAH  -->

<?php


  require "koneksi.php";
  
  if(isset($_POST["proses"])){
      if(tambahData($_POST) > 0){
        echo "<script>
            alert('Data berhasil ditambahkan');
            document.location.href = 'index.php';
        </script>";
      } else{
        echo "<script>
            alert('Data gagal ditambahkan');
            document.location.href = 'index.php';
        </script>";
      }
  }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<center>

<h1> Input Data Donatur</h1>
<form action="" method="post">
    <table>
          <!-- YANG DIUBAH  -->

        <h3>Nama</h3>
        <input type="text" name="nama" required>

        <h3>ID</h3>
        <input type="text" name="id" required>

        <h3>Paket</h3>
        <input type="text" name="paket" required>

        <h3>Kategori</h3>
        <input type="text" name="kategori" required>

        <h3>Nominal/Barang</h3>
        <input type="text" name="barang" required>
        <td></td>
        <br>
        <br>
        <td><input type="submit" value="simpan" name="proses"></td>
</tr>
</table>
</form>
</center>

</body>
</html>

