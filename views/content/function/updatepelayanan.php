<?php
require '../../../database/db.php';
$id_pelayanan   = $_POST['id'];
$pelayanan      = $_POST['nama'];
$kode           = $_POST['kode'];

$cek = mysqli_query($koneksi, "SELECT * FROM pelayanan WHERE kode_rumahsakit ='$kode' AND nama_pelayanan='$pelayanan'");

if (mysqli_num_rows($cek) > 0) {
?>
    <script>
        window.location = '../../index.php?page=pelayanan&kd_rs=<?= $kode ?>&msg=Gagal mengubah data pelayanan karena nama pelayanan sudah ada!';
    </script>


<?php
} else {


    $query = mysqli_query($koneksi, "UPDATE pelayanan SET nama_pelayanan='$pelayanan' WHERE id_pelayanan='$id_pelayanan' AND kode_rumahsakit='$kode'");
?>
    <script>
        window.location = '../../index.php?page=pelayanan&kd_rs=<?= $kode ?>&msg=Berhasil mengubah data pelayanan';
    </script>
<?php
}

?>