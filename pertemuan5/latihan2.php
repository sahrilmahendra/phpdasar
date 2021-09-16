<?php
    // pengulangan pada array
    // for atau foreach
    $angka = [3,2,15,20,9,7];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Latihan 2</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }

        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    <!-- menggunakan for -->
    <?php for($i = 0; $i < count($angka); $i ++) : ?>
    <div class="kotak">
        <?= $angka[$i]; ?>
    </div>
    <?php endfor; ?>

    <!-- menggunakan foreach -->
    <div class="clear"></div>
    <?php foreach($angka as $a) : ?>
        <div class="kotak"><?= $a ?></div>
    <?php endforeach; ?>
</body>
</html>