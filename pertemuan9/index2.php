<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel mahasiswa || query
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// ambil data (fetch) mahasiswa dari object result
// mysqli_fetch_row() => untuk mengembalikan array numerik
// mysqli_fetch_assoc() => untuk mengembalikan array associative
// mysqli_fetch_array() => untuk mengembalikan keduanya (array numerik, array associative)
// mysqli_fetch_object() => untuk mengembalikan object

// $mhs = mysqli_fetch_row($result);
// var_dump($mhs[2]);

// while($mhs = mysqli_fetch_assoc($result)){
//     var_dump($mhs);
// }

// $mhs = mysqli_fetch_array($result);
// var_dump($mhs);

// $mhs = mysqli_fetch_object($result);
// var_dump($mhs -> nama);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

        <?php $i = 1; ?>
        <?php while($row = mysqli_fetch_assoc($result))  : ?>
        <tr>
            <td>
                <?= $i; ?>
            </td>
            <td>
                <a href="">Ubah</a> |
                <a href="">Hapus</a>
            </td>
            <td><img src="img/<?= $row["gambar"] ?>" width="50" alt=""></td>
            <td><?= $row["nim"] ?></td>
            <td><?= $row["nama"] ?></td>
            <td><?= $row["email"] ?></td>
            <td><?= $row["jurusan"] ?></td>
        </tr>
        <?php  $i++; ?>
        <?php endwhile; ?>
    </table>
</body>
</html>