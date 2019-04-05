<?php

require_once '../config.php';

if (!$connect) die("koneksi ke database gagal!");
if (!isset($_POST['upload'])) header("location: Form.php");
if (isset($_POST['upload'])) {
    $judul = filter_var($_POST['judul'], FILTER_SANITIZE_STRING);
    $porsi = filter_var($_POST['porsi'], FILTER_SANITIZE_STRING);
    $biaya = filter_var($_POST['biaya'], FILTER_SANITIZE_STRING);
    $komposisi = filter_var($_POST['komposisi'], FILTER_SANITIZE_STRING);

    $prosedur = $_POST['editorProsedur'];

    $namafile = $_FILES['gambar']['name'];
    $sementara = $_FILES['gambar']['tmp_name'];
    $format = pathinfo($_FILES['gambar']['name'])['extension'];

    if ($format != 'jpg') {
        header('location:Form.php?status=404');
    } else {
        $imageName = explode(" ", $judul);
        $imageName = strtolower(implode('_', $imageName) . '.' . $format);
        $pindahfile = move_uploaded_file($sementara, "./../upload/$imageName");

        $query = "INSERT INTO tbl_resep VALUES (null,'$judul', '$porsi','$biaya','$prosedur','upload/" . $imageName . "','$komposisi')";
        $result = mysqli_query($connect, $query);

        header('location: Form.php?status=200');
    }
} else {
    //  $q = "SELECT * FROM resep";
    //  $data = mysqli_query($koneksi, $q);
    //  foreach($data as $row){
    //      echo "<img src=".$row['nama_gambar']." width='400' height='400' />";
    // }
}

// if ($result) header("location: Main.php");
// else header("location: proses_upload.php?status=gagal");
