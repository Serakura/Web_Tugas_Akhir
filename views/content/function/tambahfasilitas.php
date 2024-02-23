<?php
require '../../../database/db.php';
$kode       = $_POST['kode'];
$fasilitas  = $_POST['fasilitas'];

$cek = mysqli_query($koneksi, "SELECT * FROM fasilitas WHERE kode_rumahsakit ='$kode' AND nama_fasilitas='$fasilitas'");

if (mysqli_num_rows($cek) > 0) {
?>
    <script>
        window.location = '../../index.php?page=fasilitas&kd_rs=<?= $kode ?>&msg=Gagal menambahkan data fasilitas karena nama fasilitas sudah ada!';
    </script>


<?php
} else {


    $query = mysqli_query($koneksi, "INSERT INTO fasilitas
                (kode_rumahsakit,nama_fasilitas)
                 VALUES 
                 ('$kode','$fasilitas')");
?>
    <script>
        window.location = '../../index.php?page=fasilitas&kd_rs=<?= $kode ?>&msg=Berhasil menambahkan data fasilitas rumah sakit';
    </script>
<?php
}

?>