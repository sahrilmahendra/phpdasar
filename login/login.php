<?php
    // apakah tombol submit sudah ditekan
    if(isset($_POST["submit"])){
    // cek username & password
        if($_POST["username"] == admin && $_POST["password"] == "123"){
    // jika benar, redirect ke halaman admin
        header("Location: admin.php");
        exit;
        }
    // jika salah, tampilkan pesan kesalahan
        else{
            $error = true;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login Admin</h1>
    <?php if(isset($error)) : ?>
        <p>Username atau Password Salah!</p>
    <?php endif; ?>
    
    <ul>
    <form action="" method="post">
        <li>
            <label for="username">Username : </label>
            <input type="text" name="username" id="username">
        </li>
        <br>
        <li>
            <label for="password">Password : </label>
            <input type="password" name="password" id="password">
        </li>
        <br>
        <li>
            <button type="submit" name="submit">Login</button>
        </li>
    </form>
    </ul>
</body>
</html>