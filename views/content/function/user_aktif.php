<?php
require '../../../database/db.php';
$ktp      = $_GET['ktp'];


$query = mysqli_query($koneksi, "UPDATE user SET status='Aktif' WHERE ktp='$ktp'");


if ($query) {
    $result = mysqli_query($koneksi, "SELECT * FROM user WHERE ktp='$ktp'");
    while ($data = mysqli_fetch_assoc($result)) {
        $nama = $data['nama'];
        $telp = $data['no_hp'];
    }
    $curl = curl_init();
    $kalimat = "Halo $nama, akun anda berhasil diaktifkan pada Aplikasi E-Medicine. \nSilahkan login untuk menggunakan aplikasi. \nTerimakasih";

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://159.223.94.241:8000/send-message',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => array('message' => $kalimat, 'number' => $telp)
    ));

    $response = curl_exec($curl);
    curl_close($curl);
    echo "<script>
    window.location='../../index.php?page=user&msg=Berhasil mengaktifkan user';</script>";
} else {
    return false;
}
