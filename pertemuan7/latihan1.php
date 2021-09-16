<?php
// SUPERGLOBALS VARIABLE
// Variable global milik PHP
// merupakan array associatif

// $_GET
// var_dump($_GET);
    $anime = [
        [
            "judul" => "Jujutsu Kaisen",
            "author" => "Gege Akutami",
            "genre" => "Adventure",
            "tahun" => "2020",
            "cover" => "jujutsu.jpg"
        ],
        [
            "judul" => "Demon Slayer: Kimetsu no Yaiba",
            "author" => "Koyoharu Gotouge",
            "genre" => "Adventure",
            "tahun" => "2019",
            "cover" => "kimetsu.jpg"
        ],
        [
            "judul" => "OreGairu",
            "author" => "Wataru Watari",
            "genre" => "Romatic Comedy",
            "tahun" => "2013",
            "cover" => "oregairu.jpg"
        ],
        [
            "judul" => "Grand Blue",
            "author" => "Kenji Inoue",
            "genre" => "Comedy",
            "tahun" => "2018",
            "cover" => "grandblue.jpg"
        ],
        [
            "judul" => "Dr. Stone",
            "author" => "Riichiro Inagaki",
            "genre" => "Science Fiction",
            "tahun" => "2019",
            "cover" => "drstone.jpg"
        ],
        [
            "judul" => "Noragami",
            "author" => "Adachitoka",
            "genre" => "Supernatural",
            "tahun" => "2014",
            "cover" => "noragami.jpg"
        ],
        [
            "judul" => "Akagami no Shirayukihime",
            "author" => "Sorata Akizuki",
            "genre" => "Fantasy",
            "tahun" => "2015",
            "cover" => "akagami.jpg"
        ],
        [
            "judul" => "Asobi Asobase",
            "author" => "Rin Suzukawa",
            "genre" => "Surreal Comedy",
            "tahun" => "2018",
            "cover" => "asobi.jpg"
        ],
        [
            "judul" => "TenSura",
            "author" => "Fuse",
            "genre" => "Isekai",
            "tahun" => "2018",
            "cover" => "tensura.jpg"
        ],
        [
            "judul" => "Tate no Yuusha no Nariagari",
            "author" => "Aneko Yusagi",
            "genre" => "Isekai",
            "tahun" => "2019",
            "cover" => "tate.jpg"
        ],
    ];               
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Anime</title>
</head>
<body>
    <h1>Daftar Anime</h1>
        
    <ul>
        <?php foreach($anime as $a) : ?>
            <li>
                <a href="latihan2.php?judul=<?= $a["judul"]; ?>&author=<?= $a["author"] ?>&genre=<?= $a["genre"] ?>&tahun=<?= $a["tahun"] ?>&cover=<?= $a["cover"] ?>"> <?= $a["judul"] ?></a>
            </li>
        <?php endforeach; ?>
    </ul>    
</body>
</html>