<?php
$username = "Yogi Nugraha";
$password = "yogi";

if ($username == $_POST["username"]) {
    if ($password == $_POST["password"]) {
        if ($_POST['ingatSaya'] == 'Y') {
            setcookie('username', $username, time() + 86000, "/");
            setcookie('password', $password, time() + 86000, "/");
        }

        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        header('location:index.php?status=berhasil');
    } else {
        header('location:login.php?password=gagal');
    }
} else {
    header('location:login.php?username=gagal');
}
