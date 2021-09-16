<?php
    // koneksi ke database
    $conn = mysqli_connect("localhost", "root", "", "phpdasar");
    // cek apakah tombol submit sudah ditekan atau belum
    if(isset($_POST["submit"]))
    {
        // ambil data dari setiap elemen dalam form
        $nama = $_POST["nama"];
        $nim = $_POST["nim"];        
        $email = $_POST["email"];
        $jurusan = $_POST["jurusan"];
        $gambar = $_POST["gambar"];

        // query insert data
        $query = "INSERT INTO mahasiswa Values ('', '$nama',
                '$nim','$email', '$jurusan', '$gambar')";
        mysqli_query($conn, $query);

        // cek apakah data berhasil ditambahkan atau tidak
        if(mysqli_affected_rows($conn) > 0){
            echo "berhasil";
        }
        else{
            echo "gagal";
            echo "<br><br>";

        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="nim">NIM : </label>
                <input type="text" name="nim" id="nim">
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email">
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan">
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="text" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
    </form>
</body>
</html>