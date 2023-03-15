<?php

require 'functions.php';

$id = $_GET["id"];

$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

if ( isset($_POST["submit"]) ) {

 if ( ubah($_POST) > 0 ) {
    echo "<script>alert('data berhasil di ubah');
                    document.location.href= 'index.php';
        </script>";
 } else {
    echo "<script>alert('data gagal di ubah');
    document.location.href= 'index.php'
</script>";
 }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data mahasiswa</title>
</head>
<body>

<h1>Edit data mahasiswa</h1>
    
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
        <input type="hidden" name="gambarlama" value="<?= $mhs["gambar"]; ?>"> 
        <ul>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" required
                value="<?= $mhs["nama"]; ?>">
            </li>
            <li>
                <label for="nim">Nim :</label>
                <input type="text" name="nim" id="nim"
                value="<?= $mhs["nim"]; ?>">
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="text" name="email" id="email"
                value="<?= $mhs["email"]; ?>">
            </li>
            <li>
            <label for="jurusan">Jurusan :</label>
                <input type="text" name="jurusan" id="jurusan"
                value="<?= $mhs["jurusan"]; ?>">
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <img src="img/<?= $mhs['gambar']; ?>">
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Kirim</button>
            </li>
        </ul>

    </form>


</body>
</html>