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

$cek = mysqli_query($koneksi, "SELECT * FROM rumah_sakit WHERE kode_rumahsakit ='$kode'");

if (mysqli_num_rows($cek) > 0) {
?>
    <script>
        window.location = '../../index.php?page=rumah_sakit&msg=Gagal menambahkan data rumah sakit karena kode rumah sakit sudah digunakan!';
    </script>


<?php
} else {

    $ekstensifile     = explode('.', $gambar);
    $ekstensifile    = strtolower(end($ekstensifile));
    if ($ekstensifile != 'png' && $ekstensifile != 'PNG' && $ekstensifile != 'jpg' && $ekstensifile != 'jpeg') {
        // echo "<script>
        //     window.location='../../index.php?page=rumah_sakit&msg=Gagal menambahkan data rumah sakit karena format gambar tidak sesuai';
        //         </script>";
    } else {
        $namaFileBaru  = uniqid() . '_' . $gambar;
        $pidah_folder = move_uploaded_file($tmpgambar, $fil_dir . $namaFileBaru);

        if ($pidah_folder) {
            $query = mysqli_query($koneksi, "INSERT INTO rumah_sakit 
                (kode_rumahsakit,nama_rumahsakit,jenis_rumahsakit,kelas_rumahsakit,pemilik,telp,alamat,longitude,latitude,gambar)
                 VALUES 
                 ('$kode','$nama','$jenis','$kelas','$pemilik','$telp','$alamat','$longitude','$latitude','$namaFileBaru')");
            echo "<script>
                window.location='../../index.php?page=rumah_sakit&msg=Berhasil menambahkan data rumah sakit';
            </script>";
        } else {
            echo "<script>
                window.location='../../index.php?page=rumah_sakit&msg=Gagal menambahkan data rumah sakit';
            </script>";
        }
    }
}

?>