<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="../Material/asset/Logo/icon.png" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../Material/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />


</head>

<body>
    <div class="wadah">
        <div class="container">
            <a class="waves-effect brown darken-3 waves-light btn-large" href="utama.php" style="margin-top:5%;"><i class="material-icons left">arrow_backk</i>kembali</a>
            <h1>Upload Artikel</h1>
            <div class="utama"><br>
                <div class="row">
                    <div class="input-field col s11">
                        <input id="bahan" type="text" class="validate" name="judul">
                        <label for="judul">Judul Artikel</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s11">
                        <input id="tips" type="text" class="validate" name="tips">
                        <label for="tips">Tips</label>
                    </div>
                </div>

                <button type="submit" class="waves-effect waves-light brown darken-3 btn-large" name="upload" style="margin-left:-10px;width:100%; height:50px;">Kirim</button>
            </div>
        </div>
    </div>








    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="../Material/js/materialize.js"></script>
    <script src="../Material/js/init.js"></script>

</body>

</html> 