<?php

$user_name = $_POST["username"];
$user_pass = md5($_POST["password"]);

require '../database/db.php';

if ($koneksi) {
    $sql = "SELECT * FROM user WHERE username='$user_name' AND password='$user_pass'";
    $result = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if ($row['status'] == "Aktif") {
            $status = "Berhasil Login!";
            $result_code = true;
            $data = [
                'ktp' => $row['ktp'],
                'nama' => $row['nama'],
                'telp' => $row['no_hp'],
                'telp_keluarga' => $row['no_hp_keluarga'],
                'jenkel' => $row['jenis_kelamin'],
                'alamat' => $row['alamat']
            ];
            echo json_encode(array('status' => $status, 'result_code' => $result_code, 'data' => $data));
        } else {
            $status = "Status akun masih non-aktif!";
            $result_code = false;
            echo json_encode(array('status' => $status, 'result_code' => $result_code));
        }
    } else {
        $status = "Username atau Password Salah!";
        $result_code = false;
        echo json_encode(array('status' => $status, 'result_code' => $result_code));
    }
} else {
    $status = "failed";
    echo json_encode(array('status' => $status), JSON_FORCE_OBJECT);
}

mysqli_close($koneksi);
