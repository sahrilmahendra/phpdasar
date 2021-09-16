<?php
    // Datang dan Admin adalah parameter default
    function salam($waktu = "Datang", $nama = "Admin"){
        return "Selamat $waktu, $nama!";
    }
?>


<!DOCTYPE html>
<head>
    <title>PHP Dasar</title>
</head>
<body>
    <h1>
        <?= salam("Malam", "Mahendra"); ?>
    </h1>
</body>
</html>