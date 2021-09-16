<?php
    // $mahasiswa = [["Moch. Syahryil", "16050974009", "Teknik Informatika", "sahrilmahendra@gmail.com"],
    //             ["Ayub", "129014435", "Matematika", "ayub@yahoo.co.id"]
    //             ];


    // array associative
    // key nya adalah string yang kita buat sendiri
    $mahasiswa = [
        [
            "nama" => "Moch. Syahryil",
            "nim" => "16050974009",
            "jurusan" => "Teknik Informatika",
            "email" => "sahrilmahendra@gmail.com",
            "gambar" => "sahril.jpg"
        ],
        [
            "nama" => "Elaine",
            "nim" => "16050974100",
            "jurusan" => "Teknik Sipil",
            "email" => "elaine@gmail.com",
            "gambar" => "elaine.jpg"
        ]
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

        <?php foreach($mahasiswa as $a) : ?>
    <ul>
        <li><img src="img/<?= $a["gambar"]; ?>"></li>
        <li>Nama : <?= $a["nama"]; ?> </li>
        <li>NIM : <?= $a["nim"]; ?> </li>
        <li>Jurusan : <?= $a["jurusan"]; ?> </li>
        <li>Email : <?= $a["email"]; ?> </li>
    </ul>
        <?php endforeach; ?>
</body>
</html>