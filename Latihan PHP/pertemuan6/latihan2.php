<?php
$mahasiswa = [["nama" => "Rizha Atchafa", 
                "nim" => "2001", 
                "ttl" => "Surabaya"],
            ["nama" => "Alexander", 
            "nim" => "2005", 
            "ttl" => "Surabaya"],
            ["nama" => "Ronald Akbar", 
            "nim" => "2002", 
            "ttl" => "Malang"]
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
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>Tahun Lahir : <?= $mhs["nim"]; ?></li>
        <li>Tinggal : <?= $mhs ["ttl"]; ?></li>

    </ul>
<?php endforeach; ?>

    
</body>
</html>