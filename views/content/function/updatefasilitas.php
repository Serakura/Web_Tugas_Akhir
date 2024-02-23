<?php
require '../../../database/db.php';
$id_fasilitas   = $_POST['id'];
$fasilitas      = $_POST['nama'];
$kode           = $_POST['kode'];

$cek = mysqli_query($koneksi, "SELECT * FROM fasilitas WHERE kode_rumahsakit ='$kode' AND nama_fasilitas='$fasilitas'");

if (mysqli_num_rows($cek) > 0) {
?>
    <script>
        window.location = '../../index.php?page=fasilitas&kd_rs=<?= $kode ?>&msg=Gagal mengubah data fasilitas karena nama fasilitas sudah ada!';
    </script>


<?php
} else {


    $query = mysqli_query($koneksi, "UPDATE fasilitas SET nama_fasilitas='$fasilitas' WHERE id_fasilitas='$id_fasilitas' AND kode_rumahsakit='$kode'");
?>
    <script>
        window.location = '../../index.php?page=fasilitas&kd_rs=<?= $kode ?>&msg=Berhasil mengubah data fasilitas';
    </script>
<?php
}

?>