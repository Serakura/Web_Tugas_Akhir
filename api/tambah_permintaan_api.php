<?php
require '../database/db.php';


$ktp = $_POST["ktp"];
$kode = $_POST["kode_rumahsakit"];
$kronologi = $_POST['kronologi'];
$jenis = $_POST['jenis'];
$lokasi = $_POST['lokasi'];
$waktu = $_POST['waktu'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];
$status = "Pending";


if ($koneksi) {
    $query = mysqli_query($koneksi, "INSERT INTO permintaan 
                (ktp,kode_rumahsakit,kronologi,jenis,lokasi,waktu,longitude,latitude,status)
                 VALUES 
                 ('$ktp','$kode','$kronologi','$jenis','$lokasi','$waktu','$longitude','$latitude','$status')");
    if ($query) {
        $sql = "SELECT user.nama,user.no_hp_keluarga,rumah_sakit.nama_rumahsakit,rumah_sakit.telp,permintaan.* FROM permintaan 
            INNER JOIN user ON user.ktp = permintaan.ktp 
            INNER JOIN rumah_sakit ON rumah_sakit.kode_rumahsakit = permintaan.kode_rumahsakit 
            WHERE permintaan.kode_rumahsakit='$kode' AND user.ktp='$ktp' AND permintaan.status='Pending' ORDER BY permintaan.id_permintaan DESC LIMIT 1";
        $result = mysqli_query($koneksi, $sql);
        while ($rw = mysqli_fetch_assoc($result)) {
            $id_permintaan = $rw['id_permintaan'];
            $nama_akun = $rw['nama'];
            $nama_rs = $rw['nama_rumahsakit'];
            $telp_keluarga = $rw['no_hp_keluarga'];
            $telp_rs = $rw['telp'];
            $kronologi = $rw['kronologi'];
            $jenis = $rw['jenis'];
            $lokasi = $rw['lokasi'];
            $tgl = date_create($rw['waktu']);
            $waktu = date_format($tgl, "d-m-Y H:i:s");
            $latitude = $rw['latitude'];
            $longitude = $rw['longitude'];
        }
        if ($jenis == 'pribadi') {
            $curl = curl_init();

            $map_link = "https://www.google.com/maps/search/?api=1&query=" . $latitude . "," . $longitude;
            $link = "http://emedical-jogja.000webhostapp.com/rumah_sakit/index.php?funct=konfirmasi&id_permintaan=" . $id_permintaan;
            $kalimat = "Ada permintaan pertolongan segera! 
                \nBerikut data permintaan :\nNama : $nama_akun\nKTP : $ktp\nJenis : $jenis\nKronologi : $kronologi\nWaktu : $waktu\nLokasi : $lokasi\nGoogle Maps : $map_link\n 
                \nMohon untuk segera mengkonfirmasi menggunakan link berikut:\n$link";
            $kalimat_keluarga = "Saudara/i anda telah melaporkan permintaan pertolongan! 
                \nBerikut data permintaan :\nNama : $nama_akun\nJenis : $jenis\nKronologi : $kronologi\nWaktu : $waktu\nLokasi : $lokasi\nGoogle Maps : $map_link\n 
                \nPermintaan pertolongan sedang menunggu konfirmasi dari :\nNama Rumah Sakit : $nama_rs\nNo. Telp : $telp_rs";

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
                    CURLOPT_POSTFIELDS => array('message' => $kalimat, 'number' => $telp_rs)
                )
            );

            $response = curl_exec($curl);

            curl_close($curl);
            $curl = curl_init();
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
            $status = "Berhasil membuat permintaan!";
            echo json_encode(array('status' => $status), JSON_FORCE_OBJECT);
        } else {
            $curl = curl_init();

            $map_link = "https://www.google.com/maps/search/?api=1&query=" . $latitude . "," . $longitude;
            $link = "http://emedical-jogja.000webhostapp.com/rumah_sakit/index.php?funct=konfirmasi&id_permintaan=" . $id_permintaan;
            $kalimat = "Ada permintaan pertolongan segera! 
                \nBerikut data permintaan :\nNama : $nama_akun\nJenis : $jenis\nKronologi : $kronologi\nWaktu : $waktu\nLokasi : $lokasi\nGoogle Maps : $map_link\n 
                \nMohon untuk segera mengkonfirmasi menggunakan link berikut:\n \n $link";


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
                    CURLOPT_POSTFIELDS => array('message' => $kalimat, 'number' => $telp_rs)
                )
            );

            $response = curl_exec($curl);

            curl_close($curl);
            $status = "Berhasil membuat permintaan!";
            echo json_encode(array('status' => $status), JSON_FORCE_OBJECT);
        }
    } else {
        $status = "failed";
        echo json_encode(array('status' => $status), JSON_FORCE_OBJECT);
    }
} else {
    $status = "failed";
    echo json_encode(array('status' => $status), JSON_FORCE_OBJECT);
}
