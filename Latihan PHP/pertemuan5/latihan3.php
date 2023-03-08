<?php
$mahasiswa = [["Rizha Atchafa", "2001", "Surabaya"],
            ["Alexander", "2005", "Surabaya"],
            ["Ronald Akbar", "2002", "Malang"]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<?php foreach ($mahasiswa as $mhs ) : ?>
    <ul>
        <li>Nama : <?= $mhs[0]; ?></li>
        <li>Tahun Lahir : <?= $mhs[1]; ?></li>
        <li>Tinggal : <?= $mhs [2]; ?></li>

    </ul>
<?php endforeach; ?>

    
</body>
</html>