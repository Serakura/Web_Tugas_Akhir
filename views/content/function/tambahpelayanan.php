<?php
require '../../../database/db.php';
$kode       = $_POST['kode'];
$pelayanan  = $_POST['pelayanan'];

$cek = mysqli_query($koneksi, "SELECT * FROM pelayanan WHERE kode_rumahsakit ='$kode' AND nama_pelayanan='$pelayanan'");

if (mysqli_num_rows($cek) > 0) {
?>
    <script>
        window.location = '../../index.php?page=pelayanan&kd_rs=<?= $kode ?>&msg=Gagal menambahkan data pelayanan karena nama pelayanan sudah ada!';
    </script>


<?php
} else {


    $query = mysqli_query($koneksi, "INSERT INTO pelayanan
                (kode_rumahsakit,nama_pelayanan)
                 VALUES 
                 ('$kode','$pelayanan')");
?>
    <script>
        window.location = '../../index.php?page=pelayanan&kd_rs=<?= $kode ?>&msg=Berhasil menambahkan data pelayanan rumah sakit';
    </script>
<?php
}

?>