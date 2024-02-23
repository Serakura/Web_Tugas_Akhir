<?php
require '../../../database/db.php';

$nama       = $_POST['nama'];
$ktp        = $_POST['ktp'];
$jenkel     = $_POST['jeniskelamin'];
$alamat     = $_POST['alamat'];
$telp       = $_POST['telepon'];
$telp_keluarga       = $_POST['telepon_keluarga'];


$query = mysqli_query($koneksi, "UPDATE user SET nama='$nama', jenis_kelamin='$jenkel', alamat='$alamat', no_hp='$telp',no_hp_keluarga='$telp_keluarga' WHERE ktp='$ktp'");


if ($query) {
    echo "<script>
    window.location='../../index.php?page=user&msg=Berhasil mengupdate data user';</script>";
} else {
    return false;
}
