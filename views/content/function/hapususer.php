<?php
require '../../../database/db.php';
$ktp = $_GET['ktp'];
$result = mysqli_query($koneksi, "SELECT * FROM user WHERE ktp='$ktp'");
if ($result) {
    while ($data = mysqli_fetch_assoc($result)) {
        $nama = $data['nama'];
        $telp = $data['no_hp'];
    }

    $hapus = mysqli_query($koneksi, "DELETE FROM user WHERE ktp='$ktp'");
    if ($hapus) {
        $curl = curl_init();
        $kalimat = "Halo $nama, akun anda telah dihapus karena beberapa alasan. \nSilahkan hubungi admin untuk mengetahui alasan akun anda dihapus. \nTerimakasih";

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
?>
        <script>
            document.location = '../../index.php?page=user&msg=Berhasil menghapus data user';
        </script>
    <?php

    } else {
    ?>
        <script>
            document.location = '../../index.php?page=user&msg=Gagal menghapus data user, karena user mempunyai history permintaan';
        </script>
<?php
    }
} else {
    echo 'Error';
}

?>