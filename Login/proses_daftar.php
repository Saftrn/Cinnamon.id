<?php

// error_reporting (0);

require_once '../config.php';

if (!$connect) die("koneksi ke database gagal!");
if (!isset($_POST['kirim'])) header("location: Signin.php");

$nama = filter_var($_POST['nama'], FILTER_SANITIZE_STRING);
$username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
$password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
$cpassword = filter_var($_POST['cpassword'], FILTER_SANITIZE_STRING);

// Check username di database

if ($password != $cpassword) {
    header("location: Signin.php?status=password_mismatch");
    return;
}
$password = password_hash($password, PASSWORD_DEFAULT);

$query = "INSERT INTO user VALUES ('$username', '$nama', '$password')";
$result = mysqli_query($connect, $query);

if ($result) header("location: Login.php");
else header("location: Signin.php?status=username_exist");
