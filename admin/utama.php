<?php

require_once '../config.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Cinnamon - Online Website Resep Public Mode</title>
    <link rel="shortcut icon" type="image/png" href="../Material/asset/Logo/icon.png" />


    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../Material/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="../Material/css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="../Material/css/public.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel="stylesheet" href="../Material/css/fontawesome-stars.css">


    <style>
        .carousel-item {
            padding-left: 80px;
            padding-right: 80px;
        }

        .red {
            background-image: url("../Material/asset/annie-spratt-743648-unsplash.jpg");
            background-size: cover;
        }

        .amber {
            background-image: url("../Material/asset/todd-quackenbush-700-unsplash.jpg");
            background-size: cover;
        }

        .green {
            background-image: url("../Material/asset/annie-spratt-44241-unsplash.jpg");
            background-size: cover;
        }

        .blue {
            background-image: url("../Material/asset/stefany-andrade-672285-unsplash.jpg");
            background-size: cover;
        }

        .gambar {
            background-size: cover;
        }

        .fa-star {
            color: #fdd835;
            font-size: 1.5em;
        }
    </style>

</head>

<body>
    <div class="background">
        <div class="background">
            <div class="navbar-fixed">
                <nav class="brown darken-2 navbar-fixed" role="navigation">
                    <div class="nav-wrapper container">
                        <a id="logo-container" href="#" class="brand-logo"><img src="../Material/asset/Logo/cinnamon2.png" height="50px"></a>
                        <ul class="right hide-on-med-and-down">
                            <li><a class="card-panel brown-text text-darken-2 waves-effect waves-light btn" href="../user/Form.php" style="margin-top:6%;background-color:#EAD0A9 ;" href="Form.php"> Upload resep</a></li>
                            <li><a class="brown-text text-lighten-5" href="../user/Cari.php">Cari Resep</a></li>
                            <li><a class="brown-text text-lighten-5" href="../user/Badget.php">Budget</a></li>
                            <li><a class="brown-text text-lighten-5" href="../user/Bahan.php">Bahan</a></li>
                            <li>
                                <a class="brown-text text-lighten-5" href="../index.html">
                                    <b>Log Out</b>
                                </a>
                            </li>
                        </ul>
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
                    <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                </nav>
            </div>
        </div>

        <div class="section transparent" style="padding-bottom:0px">
            <div class="row container">
                <br><br>
                <div class="carousel carousel-slider center">
                    <div class="carousel-fixed-item center">
                        <a class="btn waves-effect pink darken-1 white-text" href="artikel.php">Tambah Artikel</a>
                    </div>
                    <div class="carousel-item red white-text" href="#one!">
                        <h2><b>Kegunaan Rempah Untuk Kesehatan Jantung</b></h2>
                        <p class="white-text">Pentingnya menjaga kondisi jantung tetap sehat adalah sesuatu yang tidak perlu dijelaskan lagi. Sayangnya, saat ini banyak sekali orang yang kurang memperhatikan kesehatan jantung mereka</p>
                    </div>
                    <div class="carousel-item amber white-text" href="#two!">
                        <h2><b>Jahe ampuh untuk meningkatkan stamina</b></h2>
                        <p class="white-text">keunggulan dari rempah jahe yang dapat meningkatkan stamina dan juga menjaga kesehatan</p>
                    </div>
                    <div class="carousel-item green white-text" href="#three!">
                        <h2><b>5 Alasan Makanan Olahan Bisa Merusak Kesehatan</b></h2>
                        <p class="white-text">Makanan olahan praktis dan umumnya lezat. Namun, konsumsinya tidak dianjurkan. Ada beberapa alasan kenapa makanan bisa merusak kesehatan...</p>
                    </div>
                    <div class="carousel-item blue white-text" href="#four!">
                        <h2><b>8 Manfaat Air Tebu untuk Kesehatan</b></h2>
                        <p class="white-text">Selain rasanya yang segar, air tebu juga memiliki banyak manfaat bagi kesehatan tubuh. Simak penjelasannya berikut ini...</p>
                    </div>
                </div>
                <br>
                <h1 class="brown-text text-darken-4" style="font-family:Berlin Sans FB;font-color:#EAD0A9;">Data Resep</h1>
            </div>
            <?php
            $dataResep = mysqli_query($connect,  "SELECT * FROM tbl_resep");

            if (mysqli_num_rows($dataResep) == 0) {
                echo "<h1> Resep tidak ada</h1>";
            } else {
                while ($barang = mysqli_fetch_assoc($dataResep)) {
                    ?>
                    <div class="row container" style="margin-bottom:0px;">
                        <div class="kotak z-depth-4 white">
                            <div class="gambar">
                                <img class="gambar-card" src="../<?php echo $barang['gambar'] ?>">
                            </div>

                            <div class="informasi">
                                <h4 style="color:black;"><b><?php echo $barang['judul'] ?></b></h4>
                                <?php $harga = number_format($barang['biaya'], 0, ',', '.'); ?>
                                <h5 style="color:black;">Rp. <?php echo $harga ?></h5>
                                <a href="hapus.php?delete=<?php echo $barang['id_resep'] ?>"><button class=" btn pink darken-1" name="delete" style="border-radius:7px;">delete</button></a>
                                <a href="edit.php?edit=<?php echo $barang['id_resep'] ?>"><button class="btn cyan darken-4" name="edit" style="border-radius:7px;">edit</button></a>
                                <?php

                                $nilai = 0;
                                $isi = mysqli_query($connect, "SELECT AVG(nilai) as rating FROM rating WHERE id_resep=$barang[id_resep]");
                                while ($data = mysqli_fetch_assoc($isi)) {
                                    $nilai = floor($data['rating']);
                                }

                                ?>
                                <br><br>
                                <select class="rating_2">
                                    <option value="1" <?php if ($nilai == 1) echo "selected" ?>>1</option>
                                    <option value="2" <?php if ($nilai == 2) echo "selected" ?>>2</option>
                                    <option value="3" <?php if ($nilai == 3) echo "selected" ?>>3</option>
                                    <option value="4" <?php if ($nilai == 4) echo "selected" ?>>4</option>
                                    <option value="5" <?php if ($nilai == 5) echo "selected" ?>>5</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    </a>
                    <br><br>

                <?php
            }
        } ?>
            <br><br><br>
        </div>

        <br><br><br>

    </div>
    <footer class="page-footer brown darken-2">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Cinnamon</h5>
                    <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


                </div>
                <div class="col l3 s12">
                    <h5 class="white-text">Settings</h5>
                    <ul>
                        <li><a class="white-text" href="#!">Link 1</a></li>
                        <li><a class="white-text" href="#!">Link 2</a></li>
                        <li><a class="white-text" href="#!">Link 3</a></li>
                        <li><a class="white-text" href="#!">Link 4</a></li>
                    </ul>
                </div>
                <div class="col l3 s12">
                    <h5 class="white-text">Connect</h5>
                    <ul>
                        <li><a class="white-text" href="#!">Link 1</a></li>
                        <li><a class="white-text" href="#!">Link 2</a></li>
                        <li><a class="white-text" href="#!">Link 3</a></li>
                        <li><a class="white-text" href="#!">Link 4</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                Made by <a class="brown-text text-lighten-3" href="#">Flavor</a>
            </div>
        </div>
    </footer>


    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="../Material/js/materialize.js"></script>
    <script src="../Material/js/init.js"></script>
    <script>
        var instance = M.Carousel.init({
            fullWidth: true,
            indicators: true
        });

        // Or with jQuery

        $('.carousel.carousel-slider').carousel({
            fullWidth: true,
            indicators: true
        });

        $(function() {
            $('.rating_2').barrating({
                theme: 'fontawesome-stars',
                readonly: true,

            });
        });
    </script>
    <!-- <script>
        $('.kotak').click((event) => {
            window.location.href = "http://localhost/Web_Coding/Resep/Isi.php?id=";
        });
    </script> -->

</body>

</html>