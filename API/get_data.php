<?php

include_once "../config.php";

$query = "SELECT id_resep, judul, porsi, biaya, prosedur, bahan FROM tbl_resep";
$eksekusi = mysqli_query($connect, $query);
if (mysqli_num_rows($eksekusi) > 0) {
    $resep = array();
    $resep["data_resep"] = array();
    while ($key = mysqli_fetch_assoc($eksekusi)) {
        extract($key);
        $prosedurResep = array(
            "id_resep" => $id_resep,
            "judul" => $judul,
            "porsi" => $porsi,
            "biaya" => $biaya,
            "prosedur" => $prosedur,
            "bahan" => $bahan
        );
        array_push($resep["data_resep"], $prosedurResep);
    }
    http_response_code(200);
    $resepData = json_encode($resep);
    echo $resepData;
} else {
    http_response_code(400);
    echo json_encode(
        array(
            "Status" => "0",
            "Pesan" => "Data Kosong"
        )
    );
}
