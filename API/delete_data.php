<?php
include_once '../config.php';
$data = json_decode(file_get_contents("php://input"));

if (!empty($data->id_resep)) {
    $id_resep = $data->id_resep;

    $query = "DELETE FROM tbl_resep WHERE id_resep = $id_resep";
    $eksekusi = mysqli_query($connect, $query);

    if ($eksekusi) {
        http_response_code(200);
        echo json_encode(array(
            "Status" => "1",
            "Pesan" => "Berhasil Hapus Data"
        ));
    } else {
        http_response_code(400);
        echo json_encode(array(
            "Status" => "0",
            "Pesan" => "Gagal Hapus Data"
        ));
    }
} else {
    http_response_code(400);
    echo json_encode(array(
        "Status" => "0",
        "Pesan" => "ID Belum dimasukkan"
    ));
}
