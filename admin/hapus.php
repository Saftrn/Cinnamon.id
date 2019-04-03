<?php

include_once("../config.php");

if (!isset($_GET['delete'])) header("location: utama.php?status='bad'");
$id = $_GET['delete'];

$result = mysqli_query($connect, " DELETE FROM tbl_resep WHERE id_resep=$id");
header("location:utama.php?200");
//  head er("Lo cat i  o n : /P T -01/ a dmin_ t oko/ad min _ t oko . php") ;
 

