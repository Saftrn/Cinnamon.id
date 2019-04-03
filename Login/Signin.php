<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Cinnamon - Online Website Resep</title>
    <link rel="shortcut icon" type="image/png" href="../Material/asset/Logo/icon.png" />


    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../Material/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="../Material/css/LoSi.css" type="text/css" rel="stylesheet" media="screen,projection" />

    <style>
        .error {
            color: #FF0000;
        }
    </style>

</head>

<body>

    <div class="wadah">
        <div class="ini" style="padding-top:3%;">
            <form action="proses_daftar.php" method="POST" class="col s6">
                <h5>Daftar</h5>
                <div class="input-field col s6">
                    <input id="nama" type="text" class="validate" name="nama" required autofocus>
                    <label for="nama">Nama</label>

                </div>
                <div class="input-field col s6">
                    <input id="uname" type="text" class="validate" name="username" required autofocus>
                    <label for="uname">Username</label>
                </div>

                <div class="input-field col s6">
                    <input id="pass" type="password" class="validate" name="password" required autofocus>
                    <label for="pass">Password</label>

                </div>
                <div class="input-field col s6">
                    <input id="kpass" type="password" class="validate" name="cpassword" required autofocus>
                    <label for="kpass">Konfirmasi Password</label>

                </div>

                <?php

                if (isset($_GET['status'])) {
                    $status = $_GET['status'];

                    if ($status == "password_mismatch")
                        echo "Password harus sama<br><br>";
                    else if ($status == "username_exist")
                        echo "username sudah digunakan<br><br>";
                }

                ?>

                <button class="waves-effect waves-light btn" name="kirim" style="width:100%">kirim</button>
                <br><br>
                <p>sudah punya akun? masuk <a href="../Login/Login.php">disini</a></p>
            </form>
        </div>
    </div>

    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="../Material/js/materialize.js"></script>
    <script src="../Material/js/init.js"></script>


</body>

</html> 