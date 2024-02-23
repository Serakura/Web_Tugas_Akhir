<?php
$ktp = $_POST["ktp"];

$data_array = array();
require '../database/db.php';

if ($koneksi && isset($ktp)) {
    $sql = "SELECT user.nama,user.no_hp_keluarga,rumah_sakit.nama_rumahsakit,rumah_sakit.telp,history.* FROM history 
    INNER JOIN user ON user.ktp = history.ktp 
    INNER JOIN rumah_sakit ON rumah_sakit.kode_rumahsakit = history.kode_rumahsakit 
    WHERE user.ktp='$ktp' ORDER BY history.id_history DESC";
    $result = mysqli_query($koneksi, $sql);
    while ($rw = mysqli_fetch_assoc($result)) {
        $tgl = date_create($rw['waktu']);
        $waktu = date_format($tgl, "d-m-Y H:i:s");

        $data = [
            'nama' => $rw['nama_rumahsakit'],
            'jenis' => $rw['jenis'],
            'kronologi' => $rw['kronologi'],
            'lokasi' => $rw['lokasi'],
            'waktu' => $waktu,
            'status' => $rw['status']

        ];
        array_push($data_array, $data);
    }

    echo json_encode($data_array);
} else {
    $status = "failed";
    echo json_encode(array('status' => $status), JSON_FORCE_OBJECT);
}

mysqli_close($koneksi);
