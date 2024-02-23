<?php
$kode = $_POST["kode_rumahsakit"];

$data_array = array();
require '../database/db.php';

if ($koneksi) {
    $sql = "SELECT * FROM pelayanan WHERE kode_rumahsakit='$kode'";
    $result = mysqli_query($koneksi, $sql);
    while ($rw = mysqli_fetch_assoc($result)) {

        $data = [
            'id' => $rw['id_pelayanan'],
            'nama' => $rw['nama_pelayanan']
        ];
        array_push($data_array, $data);
    }


    echo json_encode($data_array);
} else {
    $status = "failed";
    echo json_encode(array('status' => $status), JSON_FORCE_OBJECT);
}

mysqli_close($koneksi);
