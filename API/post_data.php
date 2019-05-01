<?php
include_once "../config.php";
$data = json_decode(file_get_contents("php://input"));
if (!empty($data->judul) && !empty($data->porsi) && !empty($data->biaya)) {
    $judul = $data->judul;
    $porsi = $data->porsi;
    $biaya = $data->biaya;
    $idResep = $data->idResep;

    $query = "INSERT INTO tbl_resep(judul, porsi, biaya, id_resep) VALUES('$judul', '$porsi', '$biaya', '$idResep')";
    $eksekusi = mysqli_query($connect, $query);

    if ($eksekusi) {
        http_response_code(201);
        echo json_encode(
            array(
                "Status" => "1",
                "Pesan" => "Berhasil Menambahkan Data!"
            )
        );
    } else {
        http_response_code(503);
        echo json_encode(
            array(
                "Status" => "0",
                "Pesan" => "Gagal Menambahkan Data"
            )
        );
    }
} else {
    http_response_code(400);
    echo json_encode(
        array(
            "Status" => "0",
            "Pesan" => "Gagal Menambahkan Data!"
        )
    );
}
