<?php
require '../../database/db.php';

$id_permintaan       = $_GET['id_permintaan'];
$status = "Terkonfirmasi";



$query = mysqli_query($koneksi, "UPDATE permintaan SET status='$status' WHERE id_permintaan='$id_permintaan'");


if ($query) {
    $cek = mysqli_query($koneksi, "SELECT * FROM permintaan WHERE id_permintaan ='$id_permintaan'");
    while ($data = mysqli_fetch_array($cek)) {
        $jenis = $data['jenis'];
    }


    if ($jenis == 'pribadi') {
        $sql = "SELECT user.nama,user.no_hp_keluarga,rumah_sakit.nama_rumahsakit,rumah_sakit.telp,permintaan.* FROM permintaan 
        INNER JOIN user ON user.ktp = permintaan.ktp 
        INNER JOIN rumah_sakit ON rumah_sakit.kode_rumahsakit = permintaan.kode_rumahsakit 
        WHERE permintaan.id_permintaan = '$id_permintaan'
        ORDER BY permintaan.id_permintaan DESC LIMIT 1";
        $result = mysqli_query($koneksi, $sql);
        while ($rw = mysqli_fetch_assoc($result)) {

            $nama_akun = $rw['nama'];
            $nama_rs = $rw['nama_rumahsakit'];
            $telp_keluarga = $rw['no_hp_keluarga'];
            $telp_rs = $rw['telp'];
        }

        $curl = curl_init();


        $kalimat_keluarga = "$nama_rs sudah melakukan konfirmasi permintaan pertolongan. Pihak $nama_rs sudah mengirimkan ambulance untuk menjemput saudara/i anda! 
        \nMohon untuk menunggu konfirmasi kedatangan dari pihak $nama_rs.    
        \nUntuk info lebih lanjut, segera hubungi:\nNama Rumah Sakit : $nama_rs\nNo. Telp : $telp_rs";


        curl_setopt_array(
            $curl,
            array(
                CURLOPT_URL => 'http://159.223.94.241:8000/send-message',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => array('message' => $kalimat_keluarga, 'number' => $telp_keluarga)
            )
        );

        $response = curl_exec($curl);

        curl_close($curl);
    }
    echo "<script>
    window.location='../index.php?funct=kedatangan&id_permintaan=$id_permintaan&msg=Berhasil mengkonfirmasi permintaan!';</script>";
} else {
    return false;
}
