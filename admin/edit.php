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
            require_once "../config.php";

            if (isset($_GET['edit'])) {
                $edit = $_GET['edit'];
                $query = "SELECT * FROM tbl_resep WHERE id_resep=$edit";
                $result = mysqli_query($connect, $query);
                $data = mysqli_fetch_assoc($result);
                // var_dump($data);
                // exit;

                ?>

                <a class="waves-effect brown darken-3 waves-light btn-large" href="utama.php" style="margin-top:5%;"><i class="material-icons left">arrow_backk</i>kembali</a>
                <h3>Edit Resep</h3>
                <div class="utama"><br>
                    <div class="row">

                        <form action="edit.php" method="post" class="col s12" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?php echo $edit ?>" />
                            <div class=" row">
                                <div class="input-field col s12">
                                    <input id="judul" value="<?= $data['judul'] ?>" type="text" class="validate" name="judul" style="font-size:2rem;height:50px;" required autofocus>
                                    <label for="judul">Judul</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <input id="porsi" value="<?= $data['porsi'] ?>" placeholder="3 orang" name="porsi" type="text" class="validate">
                                    <label for="porsi">Porsi</label>
                                </div>
                                <div class="input-field col s6">
                                    <input id="biaya" value="<?= $data['biaya'] ?>" name="biaya" type="text" class="validate">
                                    <label for="biaya">Biaya Resep</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s11">
                                    <input id="bahan" value="<?= $data['bahan'] ?>" type="text" class="validate" name="komposisi" placeholder="bahan, bahan, bahan">
                                    <label for="bahan">Komposisi</label>
                                    <p>pisahkan tiap komposisi dengan koma</p>
                                </div>
                            </div>
                            <h5>Cara Membuat</h5>
                            <div class="row">
                                <textarea id="carabuat" style="height:60px;width:82%;" name="editorProsedur"><?php echo $data['prosedur'] ?></textarea>
                            </div>

                            <button type="submit" class="waves-effect waves-light brown darken-3 btn-large" name="upload" style="margin-left:-10px;width:100%; height:50px;">update</button>
                        </form>
                    </div>
                <?php
            }

            if (isset($_POST['upload'])) {
                $id = $_POST['id'];
                $judul = $_POST['judul'];
                $porsi = $_POST['porsi'];
                $biaya = $_POST['biaya'];
                $prosedur = $_POST['editorProsedur'];
                $bahan = $_POST['komposisi'];
                $update = mysqli_query($connect, "UPDATE tbl_resep SET judul='$judul', porsi='$porsi', biaya=$biaya, prosedur='$prosedur', bahan='$bahan' WHERE id_resep=$id");

                header('location:utama.php?status=202');
            }

            ?>

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