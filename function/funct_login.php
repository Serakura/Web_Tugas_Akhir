<?php
require '../database/db.php';
session_start();
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);


    $query = mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$username' AND password='$password'");
    if (mysqli_num_rows($query) == 0) {
        echo '<script language="javascript">
					alert("Username Tidak ditemukan!!!"); 
					document.location="../index.php";
				 </script>';
    } else {
        $result = mysqli_fetch_assoc($query);

        $_SESSION['id_admin'] = $result['id_admin'];
        $_SESSION['username'] = $result['username'];
        $_SESSION['password'] = $result['password'];
        $_SESSION['nama'] = $result['nama'];
?>

        <script>
            alert("Selamat Datang <?php echo $_SESSION['nama']; ?> di Aplikasi Pencarian Rumah Sakit");
            document.location = "../views/index.php";
        </script>

<?php
    }
}
?>