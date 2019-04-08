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
    <link href="../Material/css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel="stylesheet" href="../Material/css/fontawesome-stars.css">


    <style>
        .background {
            background-image: url("../Material/asset/putih.jpg");
            background-attachment: fixed;
        }

        .fa-star {
            font-size: 2em;
        }

        .checked {
            color: #f3d032;
        }

        .kotak {
            margin-top: 10px;
            margin-bottom: 0px;
            border: 5px solid #683F1E;
            border-radius: 15px;
            height: 215px;
            overflow: hidden;
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
                        <li><a class="card-panel brown-text text-darken-2 waves-effect waves-light btn" href="../user/Form.php" style="margin-top:6%;background-color:#EAD0A9 ;" href="Form.php"> Upload resep</a></li>
                        <li><a class="brown-text text-lighten-5" href="feedback.php">feedback</a></li>
                        <li>
                            <a class="brown-text text-lighten-5" href="../index.html">
                                <b>Log Out</b>
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
        <div class="container">
            <?php
            $dataFeedback = mysqli_query($connect, "SELECT * FROM feedback");

            if (mysqli_num_rows($dataFeedback) == 0) {
                echo "<h1> Tidak ada Feedback</h1>";
            } else {
                while ($nilai = mysqli_fetch_assoc($dataFeedback)) {

                    ?>




                    <div class="feed">
                        <br><br>
                        <div class="kotak z-depth-4 white" style="width:100%">
                            <div class="container">
                                <br>
                                <h5 class="brown-text text-darken-4"><b><?= $nilai['username'] ?></b></h5>
                                <p><?= $nilai['feedback'] ?></p>
                            </div>
                        </div>


                    <?php
                }
            }
            ?>
            </div>




        </div>

        <br><br>
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