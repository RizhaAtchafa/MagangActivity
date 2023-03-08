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
    <title>GET</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach ($mahasiswa as $mhs ) : ?>
        <li><a href="latihan2.php?nama=<?= $mhs["nama"]; ?>"><?= $mhs["nama"]; ?></a>
    </li>
<?php endforeach; ?>
</ul>
    
</body>
</html>