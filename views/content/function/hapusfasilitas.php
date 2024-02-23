<?php
require '../../../database/db.php';

$idf = $_GET['id_fasilitas'];
$kd = $_GET['kd'];
$hapus = mysqli_query($koneksi, "DELETE FROM fasilitas WHERE id_fasilitas='$idf'");
if ($hapus) {

?>

    <script>
        document.location = '../../index.php?page=fasilitas&kd_rs=<?= $kd ?>&msg=Berhasil menghapus data fasilitas';
    </script>
<?php
}

?>