<?php
$id = $_POST["ktp"];
$name = $_POST["nama"];
$user_name = $_POST["username"];
$user_pass = md5($_POST["password"]);
$telp = $_POST["no_hp"];
$telp_keluarga = $_POST["no_hp_keluarga"];
$jenis_kelamin = $_POST["jenis_kelamin"];
$alamat = $_POST["alamat"];
$status = 'Nonaktif';

require '../database/db.php';

if ($koneksi) {
    $sql = "SELECT * FROM user WHERE username='$user_name' OR ktp='$id'";
    $result = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($result) > 0) {
        $status = "Username atau nomor ktp sudah digunakan!";
        $result_code = false;
        echo json_encode(array('status' => $status, 'result_code' => $result_code));
    } else {
        $sql = "INSERT INTO user (ktp,nama,no_hp,no_hp_keluarga,username,password,jenis_kelamin,alamat,status) VALUES 
        ('$id','$name','$telp','$telp_keluarga','$user_name','$user_pass','$jenis_kelamin','$alamat','$status')";
        if (mysqli_query($koneksi, $sql)) {
            $status = "Berhasil Membuat Akun!";
            $result_code = true;
            echo json_encode(array('status' => $status, 'result_code' => $result_code));

            //Whatsapp api send-message
            $curl = curl_init();
            $kalimat = "Halo $name, anda berhasil mendaftarkan akun pada Aplikasi E-Medicine dengan nomor $telp. \nMohon untuk menunggu proses verifikasi dan aktivasi akun. \nTerimakasih";

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
            //whatsapp api selesai
        } else {
            $status = "Gagal Membuat Akun!";
            echo json_encode(array('status' => $status), JSON_FORCE_OBJECT);
        }
    }
} else {
    $status = "Gagal terhubung!";
    echo json_encode(array('status' => $status), JSON_FORCE_OBJECT);
}

mysqli_close($koneksi);
