<?php
    // cek apakah tidak ada data di $_GET
    if(!isset($_GET["judul"]) || !isset($_GET["author"]) || !isset($_GET["genre"]) || !isset($_GET["tahun"]) || !isset($_GET["cover"])){
        // redirect
        header("Location: latihan1.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Detail Anime</title>
</head>
<body>
    <ul>
        <li><img src="img/<?= $_GET["cover"]; ?>"></li>
        <li>Judul : <?= $_GET["judul"]; ?></li>
        <li>Author : <?= $_GET["author"]; ?></li>
        <li>Genre : <?= $_GET["genre"]; ?></li>
        <li>Tahun : <?= $_GET["tahun"] ?></li>
    </ul>

    <a href="latihan1.php">Kembali ke Daftar Anime</a>
</body>
</html>