<?php
require '../../database/db.php';
$id_permintaan       = $_GET['id_permintaan'];
$ktp;
$kode;
$kronologi;
$jenis;
$lokasi;
$waktu;
$latitude;
$longitude;


$cek = mysqli_query($koneksi, "SELECT * FROM permintaan WHERE id_permintaan ='$id_permintaan'");
while ($data = mysqli_fetch_array($cek)) {
    $ktp = $data['ktp'];
    $kode = $data['kode_rumahsakit'];
    $kronologi = $data['kronologi'];
    $jenis = $data['jenis'];
    $lokasi = $data['lokasi'];
    $waktu = $data['waktu'];
    $latitude = $data['latitude'];
    $longitude = $data['longitude'];
}




$query = mysqli_query($koneksi, "INSERT INTO history
                (ktp,kode_rumahsakit,kronologi,jenis,lokasi,waktu,latitude,longitude)
                 VALUES 
                 ('$ktp','$kode','$kronologi','$jenis','$lokasi','$waktu','$latitude','$longitude')");
if ($query) {
    if ($jenis == 'pribadi') {
        $sql = "SELECT user.nama,user.no_hp_keluarga,rumah_sakit.nama_rumahsakit,rumah_sakit.telp,history.* FROM history 
        INNER JOIN user ON user.ktp = history.ktp 
        INNER JOIN rumah_sakit ON rumah_sakit.kode_rumahsakit = history.kode_rumahsakit 
        ORDER BY history.id_history DESC LIMIT 1";
        $result = mysqli_query($koneksi, $sql);
        while ($rw = mysqli_fetch_assoc($result)) {

            $nama_akun = $rw['nama'];
            $nama_rs = $rw['nama_rumahsakit'];
            $telp_keluarga = $rw['no_hp_keluarga'];
            $telp_rs = $rw['telp'];
        }

        $curl = curl_init();


        $kalimat_keluarga = "$nama_rs telah melakukan konfirmasi kedatangan. Saudara/i anda segera mendapatkan pertolongan pertama! 
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

    $hapus = mysqli_query($koneksi, "DELETE FROM permintaan WHERE id_permintaan='$id_permintaan'");
    if ($hapus) {
?>
        <script>
            window.location = '../index.php?msg=Berhasil melakukan konfirmasi kedatangan!';
        </script>
<?php
    }
}
?>