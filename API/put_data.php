<?php

include_once "../Config/connection.php";
$data = json_decode(file_get_contents("php://input"));

if (!empty($data->judul) && !empty($data->porsi) && !empty($data->biaya) && !empty($data->id_resep)) {
    $judul = $data->judul;
    $porsi = $data->porsi;
    $biaya = $data->biaya;
    $id_resep = $data->id_resep;

    $query = "UPDATE tbl_resep SET judul='$judul', porsi='$porsi', biaya=$biaya WHERE id_resep=$id_resep";
    $eksekusi = mysqli_query($connect, $query);

    if ($eksekusi) {
        http_response_code(200);
        echo json_encode(
            array(
                "Status" => "1",
                "Pesan" => "Berhasil Update Data"
            )
        );
    }
} else {
    http_response_code(400);
    echo json_encode(
        array(
            "Status" => "0",
            "Pesan" => "Gagal Update Data, Data Tak Lengkap",
            "data" => "$judul $porsi $biaya $id_resep"
        )
    );
}
