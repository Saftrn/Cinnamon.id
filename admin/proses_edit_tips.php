<?php

require_once '../config.php';
$judul = $_POST['judul'];
$tips = $_POST['tips'];

// Update ke database
$query = "INSERT INTO tips(judul, isi) VALUES('$judul', '$tips')";
$hasil = mysqli_query($connect, $query);
