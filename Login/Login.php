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

</head>

<body>

    <div class="wadah">
        <div class="ini">
            <form action="proses_login.php" method="POST" class="col s12">
                <h5>Masuk</h5>
                <div class="input-field col s6">
                    <input id="uname" type="text" class="validate" name="username" required autofocus>
                    <label for="uname">Username</label>
                </div>
                <div class="input-field col s6">
                    <input id="pass" type="password" class="validate" name="password" required autofocus>
                    <label for="pass">Password</label>
                </div>
                <?php

                if (isset($_GET['status'])) {
                    $status = $_GET['status'];
                    if ($status == "gagal") {
                        echo "Password salah<br><br><br>";
                    } else if ($status == "user_notfound") {
                        echo "Username tidak tersedia<br><br><br>";
                    }
                }

                ?>
                <button name="masuk" class="waves-effect waves-light btn" style="width:100%">Masuk</button>
                <br><br>
                <p>Belum punya akun? buat <a href="../Login/Signin.php">disini</a></p>
            </form>
        </div>
    </div>


    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="../Material/js/materialize.js"></script>
    <script src="../Material/js/init.js"></script>

    <script>
        var chip = {
            tag: 'chip content',
            image: '', //optional
        };
    </script>

</body>

</html> 