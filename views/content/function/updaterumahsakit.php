<?php
require '../../../database/db.php';
$fil_dir = '../../../upload_files/gambar_rs/';
$kode       = $_POST['kode'];
$nama       = $_POST['nama'];
$jenis      = $_POST['jenis'];
$kelas      = $_POST['kelas'];
$pemilik    = $_POST['pemilik'];
$telp       = $_POST['telp'];
$alamat     = $_POST['alamat'];
$longitude  = $_POST['longitude'];
$latitude   = $_POST['latitude'];
$gambar     = $_FILES['gambar']['name'];
$tmpgambar  = $_FILES['gambar']['tmp_name'];
$gambarlama = $_POST['gambar_lama'];


if ($gambar == null) {
    $query = mysqli_query($koneksi, "UPDATE rumah_sakit SET nama_rumahsakit='$nama',jenis_rumahsakit='$jenis',kelas_rumahsakit='$kelas',pemilik='$pemilik',telp='$telp',alamat='$alamat',longitude='$longitude',latitude='$latitude' WHERE kode_rumahsakit='$kode'");
    echo "<script>
        window.location='../../index.php?page=rumah_sakit&msg=Berhasil mengupdate data rumah sakit';</script>";
} else {
    $ekstensifile     = explode('.', $gambar);
    $ekstensifile    = strtolower(end($ekstensifile));
    if ($ekstensifile != 'png' && $ekstensifile != 'jpg' && $ekstensifile != 'jpeg') {
        echo "<script>
            window.location='../../index.php?page=rumah_sakit&msg=Gagal mengupdate data rumah sakit karena format gambar tidak sesuai';
                </script>";
    } else {
        $namaFileBaru  = uniqid() . '_' . $gambar;
        $pidah_folder = move_uploaded_file($tmpgambar, $fil_dir . $namaFileBaru);

        if ($pidah_folder) {
            $query = mysqli_query($koneksi, "UPDATE rumah_sakit SET nama_rumahsakit='$nama',jenis_rumahsakit='$jenis',kelas_rumahsakit='$kelas',pemilik='$pemilik',telp='$telp',alamat='$alamat',longitude='$longitude',latitude='$latitude',gambar='$namaFileBaru' WHERE kode_rumahsakit='$kode'");
            $file_path = $fil_dir . $gambarlama;
            if ($gambarlama != "logo_rs_public.png") {
                @unlink($file_path);
            }
            echo "<script>
                window.location='../../index.php?page=rumah_sakit&msg=Berhasil mengupdate data rumah sakit';</script>";
        } else {
            echo "<script>
                window.location='../../index.php?page=rumah_sakit&msg=Gagal mengupdate data rumah sakit';
            </script>";
        }
    }
}
