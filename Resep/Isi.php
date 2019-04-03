<?php

require_once '../config.php';


if (isset($_GET['rating'])) {
    $nilai = $_GET['rating'];
    $id = $_GET['id'];
    $result = mysqli_query($connect, "INSERT INTO rating(nilai,id_resep) VALUE($nilai, $id)");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Cinnamon - Online Website Resep</title>
    <link rel="shortcut icon" type="image/png" href="../Material/asset/Logo/icon.png" />


    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../Material/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="../Material/css/isi.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel="stylesheet" href="../Material/css/fontawesome-stars.css">

    <style>
        .fa-star {
            font-size: 2em;
        }

        .checked {
            color: #f3d032;
        }
    </style>
</head>

<body>

    <div class="background">
        <div class="navbar-fixed">
            <nav class="brown darken-2" role="navigation">
                <div class="nav-wrapper container">
                    <a id="logo-container" class="brand-logo" href="../User/Main.php"><img src="../Material/asset/Logo/cinnamon2.png" height="50px"></a>
                    <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a class="brown-text text-lighten-5" href="../Resep/Cari.php">Cari Resep</a></li>
                        <li><a class="brown-text text-lighten-5" href="../Resep/Badget.html">Budget</a></li>
                        <li><a class="brown-text text-lighten-5" href="../Resep/Bahan.html">Bahan</a></li>
                        <li>
                            <a class="brown-text text-lighten-5" href="#">
                                <b>About Us</b>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <ul id="nav-mobile" class="sidenav">
            <li>
                <a>
                    <h5><b>Menu</b></h5>
                </a>
            </li>
            <li><a href="../Resep/Cari.html">Cari Resep</a></li>
            <li><a href="../Resep/Badget.html">Budget</a></li>
            <li><a href="../Resep/Bahan.html">Bahan</a></li>
            <li>
                <a href="../index.html">
                    <h6>About Us</h6>
                </a>
            </li>
        </ul>

        <?php

        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            $dataResep = mysqli_query($connect,  "SELECT * FROM tbl_resep WHERE id_resep = '$id'");
            while ($barang = mysqli_fetch_assoc($dataResep)) {
                ?>
        <div class="container">
            <h1 style="padding-left:5%"><b><?php echo $barang['judul'] ?></b></h1>
            <div class="gambar">
                <img class="gambar-card" src="../<?php echo $barang['gambar'] ?>" width="100%" height="100%" style="border-radius:27px">
            </div>
            <div class="isi" style="padding-left:5%; padding-right:5%">
                <?php $harga = number_format($barang['biaya'], 0, ',', '.'); ?>
                <h5 style="color:black;">Rp. <?php echo $harga ?></h5>

                <?php
                $nilai = 0;
                $isi = mysqli_query($connect, "SELECT AVG(nilai) as rating FROM rating WHERE id_resep=$id");
                while ($data = mysqli_fetch_assoc($isi)) {
                    $nilai = floor($data['rating']);
                }

                ?>
                <select id="rating_2">
                    <option value="1" <?php if ($nilai == 1) echo "selected" ?>>1</option>
                    <option value="2" <?php if ($nilai == 2) echo "selected" ?>>2</option>
                    <option value="3" <?php if ($nilai == 3) echo "selected" ?>>3</option>
                    <option value="4" <?php if ($nilai == 4) echo "selected" ?>>4</option>
                    <option value="5" <?php if ($nilai == 5) echo "selected" ?>>5</option>
                </select>
                <h5>Porsi <?php echo $barang['porsi']; ?></h5>
                <br>
                <?php echo $barang['prosedur'] ?>
                <br><br><br>
            </div>

            <div class="isi" style="text-align:center">
                <br>
                <input type="hidden" name="rating" value="0" />
                <h5>Beri resep ini rating!</h5>

                <form action="" method="GET">
                    <input type="hidden" value="<?php echo $id ?>" name="id" />
                    <select id="rating" name="rating">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <input type="submit" value="submit" />
                </form>
                <br><br>
            </div>
        </div>

        <br><br>

        <?php 
    }
}
?>
        <br><br><br><br><br>
        <!--  Scripts-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="../Material/js/materialize.js"></script>
        <script src="../Material/js/init.js"></script>
        <script src="../Material/js/jquery.barrating.min.js"></script>
        <script type="text/javascript">
            $(function() {
                $('#rating').barrating({
                    theme: 'fontawesome-stars'
                });
            });
            $(function() {
                $('#rating_2').barrating({
                    theme: 'fontawesome-stars',
                    readonly: true,

                });
            });
        </script>

</body>

</html> 