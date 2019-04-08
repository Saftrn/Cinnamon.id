<?php

session_start();

require_once '../config.php';

if (!isset($_POST['masuk'])) header("location: Login.php");

$username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
$password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

$query = "SELECT * FROM user WHERE username='$username'";

$result = mysqli_query($connect, $query);

if (mysqli_num_rows($result) != 0) {
    $row = mysqli_fetch_assoc($result);

    if (password_verify($password, $row['password'])) {

        $user = $_SESSION['username'] = $username;
        // die($_SESSION['username']);
        header('location:../../../../Cinnamon.id/user/Main.php?user=' . $user);
    } else {
        header('location: Login.php?status=gagal');
    }
    return;
} else {
    header('location: Login.php?status=user_notfound');
}

if ($username == 'admin' && $password = 'admin') {
    header('location:../../../Cinnamon.id/admin/utama.php');
}
