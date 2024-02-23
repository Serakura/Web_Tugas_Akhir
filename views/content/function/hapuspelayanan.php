<?php
require '../../../database/db.php';

$idf = $_GET['id_pelayanan'];
$kd = $_GET['kd'];
$hapus = mysqli_query($koneksi, "DELETE FROM pelayanan WHERE id_pelayanan='$idf'");
if ($hapus) {

?>

    <script>
        document.location = '../../index.php?page=pelayanan&kd_rs=<?= $kd ?>&msg=Berhasil menghapus data pelayanan';
    </script>
<?php
}

?>