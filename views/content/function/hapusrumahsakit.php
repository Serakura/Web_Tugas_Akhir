<?php
require '../../../database/db.php';
$fil_dir = '../../../upload_files/gambar_rs/';
$kd_rs = $_GET['kd_rs'];
$gambarlama = $_GET['gambar'];
$hapus = mysqli_query($koneksi, "DELETE FROM rumah_sakit WHERE kode_rumahsakit='$kd_rs'");
if ($hapus) {
    $file_path = $fil_dir . $gambarlama;
    @unlink($file_path);
?>

    <script>
        document.location = '../../index.php?page=rumah_sakit&msg=Berhasil menghapus data rumah sakit';
    </script>
<?php
}

?>