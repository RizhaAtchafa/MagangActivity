<?php
require'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<a href = "tambah.php">Tambah data mahasiswa</a>
<br><br>

<table border="1" cellpadding="10" cellspacing="0">

<tr>
    <td>No.</td>
    <td>Aksi</td>
    <td>Gambar</td>
    <td>Nama</td>
    <td>NIM</td>
    <td>Email</td>
    <td>Jurusan</td>
</tr>
<?php $i = 1; ?>
<?php foreach ($mahasiswa as $row) : ?>
    <tr>
    <td><?= $i; ?></td>
    <td><a href="ubah.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">Edit</a> ||
    <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">Delete</a>
</td>
<td>
    <img src="img/images.png" width="50">
</td>
  <td><?= $row["nama"] ?></td>
  <td><?= $row["nim"] ?></td>
    <td><?= $row["email"] ?></td>
    <td><?= $row["jurusan"] ?></td>
</tr>
<?php $i++; ?>
 <?php endforeach; ?>




</table>
    
</body>
</html>