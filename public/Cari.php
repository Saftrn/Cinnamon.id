<?php

require_once '../config.php';

?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Cinnamon - Online Website Resep</title>
    <link rel="shortcut icon" type="image/png" href="./Material/asset/Logo/icon.png" />


    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../Material/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="../Material/css/Public.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="../Material/css/Cari.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <style>
        .gambar {
            background-size: cover;
        }

        .fa-star {
            color: #f3d032;
            font-size: 1.5em;
        }
    </style>
</head>

<body>

    <div class="background">
        <div class="navbar-fixed">
            <nav class="brown darken-2" role="navigation">
                <div class="nav-wrapper container">
                    <a id="logo-container" href="../../index.html" class="brand-logo"><img src="../Material/asset/Logo/cinnamon2.png" height="50px"></a>
                    <a data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a class="brown-text text-lighten-5" href="../public/Cari.php">Cari Resep</a></li>
                        <li><a class="brown-text text-lighten-5" href="../Login/Login.php">Budget</a></li>
                        <li><a class="brown-text text-lighten-5" href="../Login/Login.php">Bahan</a></li>
                        <li>
                            <a class="brown-text text-lighten-5" href="../index.html">
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
            <li><a href="../public/Cari.php">Cari Resep</a></li>
            <li><a href="../Login/Login.php">Budget</a></li>
            <li><a href="../Login/Login.php">Bahan</a></li>
            <li>
                <a href="../index.html">
                    <h6>About Us</h6>
                </a>
            </li>
        </ul>

        <div class="cari">
            <div class="container">
                <br><br>
                <form action="Cari.php" method="get">
                    <h4 class="brown-text text-darken-2">Cari Resep</h4>
                    <input class="isi" type="text" name="cariResep" placeholder="cari resep">
                    <input class="btn brown darken-2" type="submit" name="cari" value="cari" style="width:100%;">
                </form>
            </div>
        </div>

        <br><br><br>
        <div class="section transparent" style="padding-bottom:0px">
            <div class="container" style="margin-top: -20px;">
                <h2 style="font-family:Berlin Sans FB;">Hasil Pencarian</h2>
            </div>

            <br><br><br>

            <?php
            if (isset($_GET['cari'])) {
                $cari = $_GET['cariResep'];
                $cari = preg_replace("#[^0-9a-z]i#", "", $cari);
                $data = mysqli_query($connect, "select * from resep where judul like '%" . $cari . "%'");

                $count = mysqli_num_rows($data);
                if ($count == 0) {
                    $output = "There was no search results!";
                } else {

                    while ($row = mysqli_fetch_array($data)) {

                        ?>
                        <div class="section transparent" style="padding-bottom:0px">
                            <a href="../Resep/Isi.php?id=<?php echo $barang['id_resep'] ?>" style="color:black;">
                                <div class="row container" style="margin-bottom:0px;">
                                    <div class="kotak z-depth-4 white">
                                        <div class="gambar">
                                            <img class="gambar-card" src="<?php echo $barang['gambar'] ?>">
                                        </div>
                                        <div class="informasi">
                                            <h4><b><?php echo $row['judul'] ?></b></h4>
                                            <h5>Rp. <?php echo $row['biaya'] ?></h5>
                                            <button class="btn brown darken-2" style="border-radius:7px;">cara membuat</button>
                                            <button class="btn brown darken-2" style="border-radius:7px;">bahan</button>
                                            <button class="btn brown darken-2" style="border-radius:7px;">alat</button>
                                            <br>
                                            <div clas="ikon" style="margin-top:20px">
                                                <i class="fas fa-star" style="height:50px;"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br><br>
                        </div>
                        </a>

                        <br><br><br>
                    <?php
                }
            }
        } ?>
        </div>
        <br><br><br>
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
        <!-- <script>
            $('.kotak').click((event) => {
                window.location.href = "http://localhost/Web_Coding/Resep/Isi.php";
            });
        </script> -->

</body>

</html>