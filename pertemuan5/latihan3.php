<?php
    $mhs = [["Syahryil Mahendra", "16050974009", "Teknik Informatika", "sahrilmahendra@gmail.com"], 
            ["Roxy", "176401439", "Sastra Jerman", "roxy@yahoo.com"],
            ["Lili", "1802349235", "Ekonomi", "lili9@gmail.com"]
        ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
        <!-- <li>Syahryil Mahendra</li>
        <li>16050974009</li>
        <li>Teknik Informatika</li>
        <li>sahrilmahendra@gmail.com</li> -->

        <?php foreach($mhs as $a) : ?>
    <ul>
        <li>Nama : <?= $a[0]; ?> </li>
        <li>NIM : <?= $a[1]; ?> </li>
        <li>Jurusan : <?= $a[2]; ?> </li>
        <li>Email : <?= $a[3]; ?> </li>
    </ul>
        <?php endforeach; ?>
</body>
</html>