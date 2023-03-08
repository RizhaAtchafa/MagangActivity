<?php

$angka = [5,10,15,20,25,30,35,40]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
    <style> 
    .kotak {
        width: 50px;
        height: 50px;
        background-color: aqua;
        text-align: center;
        line-height: 50px;
        margin: 3px;
        float: left;
    }
    .clear { clear:both;}
    </style>
</head>
<body>
    <?php for($i = 0; $i < 8; $i++) { ?>
    <div class="kotak"><?php echo $angka[$i]; ?></div>
    <?php } ?>

    <div class="clear"></div>

    <?php foreach ( $angka as $a ) { ?>
        <div class="kotak"><?php echo $a ?></div>
    <?php } ?>

    <div class="clear"></div>

    <?php foreach ( $angka as $a ) : ?>
        <div class="kotak"><?= $a; ?></div>
    <?php endforeach;  ?>
</body>
</html>