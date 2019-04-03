<?php
error_reporting(0);
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

    <style>
        body {
            background-image: url("../Material/asset/putih.jpg");
            background-attachment: fixed;
            height: 100vh;
        }

        .wadah {
            border: 5px dashed #4e342e;
            padding: 3%;
            margin: 5%;
            border-radius: 25px;
            background-color: rgba(255, 255, 255, 0.911);
        }
    </style>
</head>

<body>
    <div class="wadah">
        <div class="container">

            <?php

            if (isset($_GET['status'])) {
                $status = $_GET['status'];
                if ($status == "404") {
                    echo "<h5>UPLOAD GAGAL! Gambar harus format PNG/JPG</h5>";
                }
            }

            ?>

            <a class="waves-effect brown darken-3 waves-light btn-large" href="../user/Main.php" style="margin-top:5%;"><i class="material-icons left">arrow_backk</i>kembali</a>
            <h3>Upload Resep</h3>
            <div class="utama"><br>
                <div class="row">

                    <form action="proses_upload.php" method="post" class="col s12" enctype="multipart/form-data">
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="judul" type="text" class="validate" name="judul" style="font-size:2rem;height:50px;" required autofocus>
                                <label for="judul">Judul</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="porsi" placeholder="3 orang" name="porsi" type="text" class="validate">
                                <label for="porsi">Porsi</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="biaya" name="biaya" type="text" class="validate">
                                <label for="biaya">Biaya Resep</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s11">
                                <input id="bahan" type="text" class="validate" name="komposisi" placeholder="bahan, bahan, bahan">
                                <label for="bahan">Komposisi</label>
                                <p>pisahkan tiap komposisi dengan koma</p>
                            </div>
                        </div>
                        <h5>Cara Membuat</h5>
                        <div class="row">
                            <textarea id="carabuat" style="height:60px;width:82%;" name="editorProsedur"></textarea>
                        </div>
                        <div class="row">
                            <input type="file" name="gambar" />
                        </div>

                        <button type="submit" class="waves-effect waves-light brown darken-3 btn-large" name="upload" style="margin-left:-10px;width:100%; height:50px;">Kirim</button>
                    </form>
                </div>


            </div>
        </div>

        <!--  Scripts-->
        <!-- CKEditor -->
        <script src="https://cdn.ckeditor.com/4.11.3/basic/ckeditor.js"></script>
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="../Material/js/materialize.js"></script>
        <script src="../Material/js/init.js"></script>
        <script>
            var chip = {
                tag: 'chip content',
                image: '', //optional
            };
            let txtArea = document.querySelector('#carabuat');
            document.querySelector('#carabuat').addEventListener('keypress', function(e) {
                var key = e.which || e.keyCode;
                if (key === 13) {
                    txtArea.style.height = (Number.parseInt(txtArea.style.height) + 20) + "px";
                }
            });

            CKEDITOR.replace('editorProsedur', {
                toolbar: 'basic',
            });
        </script>

</body>

</html> 