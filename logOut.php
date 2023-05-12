<?php
session_start();
session_destroy();

setcookie('username', '', time() + 86000, "/");
setcookie('password', '', time() + 86000, "/");

header('location:login.php?logOut=Berhasil');
