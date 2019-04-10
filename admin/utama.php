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
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel="stylesheet" href="../Material/css/fontawesome-stars.css">


    <style>
        .carousel-item {
            padding-left: 80px;
            padding-right: 80px;
        }

        .red {
            background-image: url("../Material/asset/todd-quackenbush-700-unsplash.jpg");
            background-size: cover;
        }

        .amber {
            background-image: url("../Material/asset/annie-spratt-743648-unsplash.jpg");
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
                            <li><a class="brown-text text-lighten-5" href="feedback.php">feedback</a></li>
                            <!--<li><a class="brown-text text-lighten-5" href="../user/Badget.php">Budget</a></li>
                            <li><a class="brown-text text-lighten-5" href="../user/Bahan.php">Bahan</a></li> -->
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
                        <button class="btn waves-effect pink darken-1 white-text" id="edit">Edit</button>
                    </div>
                    <div class="carousel-item red white-text" href="#one!">
                        <h2 id="judulTips" contenteditable="true"><b>Meredakan sakit kepala dengan Minyak Peppermint</b></h2>
                        <p class="white-text" id="deskripsiTips" contenteditable="true">Minyak peppermint memiliki efek menenangkan yang luar biasa saat Anda sedang mengalami pusing. Mampu membantu mengurangi ketidaknyamanan dan menjernihkan pikiran. Anda bisa melakukannya di berbagai tempat. Kalau Anda memiliki kulit yang sensitif dan mudah iritasi, Anda bisa coba menggunakan minyak peppermint dengan sedikit minyak zaitun dan air.Menjaga kesehatan ternyata tidak sulit.</p>
                    </div>
                    <div class="carousel-item amber white-text" href="#two!">
                        <h2 id="judulTips" contenteditable="true"><b>Kapulaga, rempah ajaib untuk kesehatan jantung</b></h2>
                        <p class="white-text" id="deskripsiTips" contenteditable="true">Rempah satu ini mungkin lebih dikenal karena kemampuannya untuk mengatasi penyakit pencernaan, seperti mual, muntah, mulas dan diare.</p>
                    </div>
                    <div class="carousel-item green white-text" href="#three!">
                        <h2 id="judulTips" contenteditable="true"><b>Konsumsi Kalsium untuk Tulang yang Kuat</b></h2>
                        <p class="white-text" id="deskripsiTips" contenteditable="true">Jumlah kalsium yang direkomendasikan untuk orang dewasa adalah 1000 mg perhari. Sedangkan untuk yang berusia 50 tahun ke atas disarankan sebanyak 1200 gram perhari.</p>
                    </div>
                    <div class="carousel-item blue white-text" href="#four!">
                        <h2 id="judulTips" contenteditable="true"><b>Pola Makan untuk Gaya Hidup Sehat Agar Usia Lebih Panjang</b></h2>
                        <p class="white-text" id="deskripsiTips" contenteditable="true">Kunyah makanan secara perlahan, krangi makan camilan, hindari terlalu sering order makanan dari luar, kurangi konsumsi garam, hindari minum soda</p>
                    </div>
                </div>
                <br>
                <div class="kotak z-depth-4 white" style="height:">
                    <div class="container">
                        <h4 class="brown-text text-darken-4"><b>Cari Data Resep</b></h4>
                        <form action="utama.php" method="get">
                            <div class="input-field col s12">
                                <input class="brown-text text-darken-4" id="kataKunci" name="cariResep" type="text">
                                <label for="mulai">Masukan judul</label>
                            </div>
                            <input class="btn brown darken-2" type="submit" value="cari" style="width:100%;">
                        </form>

                    </div>

                </div>
                <br>
                <h3 class="brown-text text-darken-4" style="font-family:Berlin Sans FB;">Data Resep</h1>
            </div>


            <?php

            function loadResep($keyword, $connect)
            {

                $dataResep = mysqli_query($connect,  "SELECT * FROM tbl_resep");

                // if (isset($_GET['cariResep'])) {
                // $cari = $_GET['cariResep'];
                $query = "SELECT * FROM tbl_resep WHERE judul LIKE '%$keyword%'";

                $cariResep = mysqli_query($connect, $query);

                if (mysqli_num_rows($cariResep) == 0) {
                    echo "<h1> Resep tidak ada</h1>";
                } else {
                    while ($data = mysqli_fetch_assoc($cariResep)) {
                        ?>
                        <div class="row container" style="margin-bottom:0px;">
                            <div class="kotak z-depth-4 white">
                                <div class="gambar">
                                    <img class="gambar-card" src="../<?php echo $data['gambar'] ?>">
                                </div>

                                <div class="informasi">
                                    <h4 style="color:black;"><b><?php echo $data['judul'] ?></b></h4>
                                    <?php $harga = number_format($data['biaya'], 0, ',', '.'); ?>
                                    <h5 style="color:black;">Rp. <?php echo $harga ?></h5>
                                    <a href="hapus.php?delete=<?php echo $data['id_resep'] ?>"><button class=" btn pink darken-1" name="delete" style="border-radius:7px;">delete</button></a>
                                    <a href="edit.php?edit=<?php echo $data['id_resep'] ?>"><button class="btn cyan darken-4" name="edit" style="border-radius:7px;">edit</button></a>
                                    <?php

                                    $nilai = 0;
                                    $isi = mysqli_query($connect, "SELECT AVG(nilai) as rating FROM rating WHERE id_resep=$data[id_resep]");
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
            }
        }

        if (isset($_GET['cariResep'])) {
            $keyword = $_GET['cariResep'];
            loadResep($keyword, $connect);
        } else {
            loadResep('', $connect);
        }

        // }

        ?>
            <br><br><br>
        </div>

    </div>
    <footer class="page-footer brown darken-2">

        <div class="footer-copyright">
            <div class="container">
                Made by <a class="brown-text text-lighten-3" href="#">Flavor</a>
            </div>
        </div>
    </footer>

    <?php

    if (isset($_GET['status']) == 202) {
        ?>
        <script>
            alert("update telah berhasil");
        </script>
    <?php
}


?>

    <!--  Scripts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="../Material/js/materialize.js"></script>
    <script src="../Material/js/init.js"></script>
    <script src="../Material/js/jquery.barrating.min.js"></script>
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

        document.addEventListener('DOMContentLoaded', () => {

            const editButton = document.getElementById('edit');
            editButton.addEventListener('click', () => {
                const judulTips = document.querySelector('#judulTips');
                const deskripsiTips = document.querySelector('#deskripsiTips');

                // Simpan menggunakan ajax
                let ajax = new XMLHttpRequest();
                ajax.onload = function() {
                    console.log(this.responseText);
                };

                ajax.open("POST", "proses_edit_tips.php", true);
                ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                // const judul = judulTips.textContent;
                // const tips = deskripsiTips.textContent;
                ajax.send("judul=" + judulTips.textContent + "&tips=" + deskripsiTips.textContent);
            })

        })
    </script>
    <!-- <script>
        $('.kotak').click((event) => {
            window.location.href = "http://localhost/Web_Coding/Resep/Isi.php?id=";
        });
    </script> -->

</body>

</html>