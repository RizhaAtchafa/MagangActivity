<?php
  if (!isset($_GET["nama"])||
  !isset($_GET["nim"])) {
    header("Location: latihan1.php");
    exit;
  }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>

<h1> Biodata Mahasiswa </h1>

<ul>
    <li>
        <?= $_GET["nama"]; ?>
    </li>
    <li>
        <?= $_GET["nim"]; ?>
    </li>
</ul>

<a href="latihan1.php">Kembali ke daftar Mahasiswa</a>
    
</body>
</html>