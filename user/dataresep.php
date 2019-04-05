<?php

require_once "../config.php";
?>

<head>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel="stylesheet" href="../Material/css/fontawesome-stars.css">
</head>

<body>
    <?php
    if (isset($_GET['cariResep']) || true) {
        $cari = $_GET['cariResep'];
        $cari = preg_replace("#[^0-9a-z]i#", "", $cari);

        $page = $_GET['page'];
        $query = "select * from tbl_resep where ";

        if ($page === 'cari') $query .= " judul LIKE '%$cari%'";
        else if ($page === 'bahan') $query .= " bahan LIKE '%$cari%'";
        else if ($page === 'badget') $query .= " biaya  <= $cari";

        $data = mysqli_query($connect, $query);

        $count = mysqli_num_rows($data);
        error_reporting(0);
        if ($count == 0) {
            ?>
    <div class="container">
        <h4 class="pink-text text-darken-1"><b>Resep Tidak ada</b></h4>
    </div>
    <?php

}

while ($row = mysqli_fetch_array($data)) {

    ?>
    <div class="section transparent" style="padding-bottom:0px">
        <a href="../Resep/Isi.php?id=<?php echo $row['id_resep'] ?>" style="color:black;">
            <div class="row container" style="margin-bottom:0px;">
                <div class="kotak z-depth-4 white">
                    <div class="gambar">
                        <img class="gambar-card" src="../<?php echo $row['gambar'] ?>">
                    </div>
                    <div class="informasi">
                        <h4><b><?php echo $row['judul'] ?></b></h4>
                        <?php $harga = number_format($row['biaya'], 0, ',', '.'); ?>
                        <h5 style="color:black;">Rp. <?php echo $harga ?></h5>
                        <?php
                        $komposisi = explode(",", $row['bahan']);
                        foreach ($komposisi as $lala) {
                            ?>
                        <button class="btn brown darken-2" style="border-radius:7px;"><?= $lala ?></button>
                        <?php 
                    }
                    $nilai = 0;
                    $isi = mysqli_query($connect, "SELECT AVG(nilai) as rating FROM rating WHERE id_resep=$row[id_resep]");
                    while ($lah = mysqli_fetch_assoc($isi)) {
                        $nilai = floor($lah['rating']);
                    }
                    ?>
                        <br><br>
                        <!--bintang bintanya disini gak muncul T_T -->
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
            <br><br>
    </div>
    </a>

    <br>
    <?php 
}
}
?>
</body> 