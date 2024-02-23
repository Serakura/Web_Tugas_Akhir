<?php
require '../database/db.php';
session_start();
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];


    $query = mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$username' AND password='$password'");
    if (mysqli_num_rows($query) == 0) {
        $query = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nis='$username' AND password='$password'");
        if (mysqli_num_rows($query) == 0) {
            $query = mysqli_query($koneksi, "SELECT * FROM guru WHERE nip='$username' AND password='$password'");
            if (mysqli_num_rows($query) == 0) {
                echo '<script language="javascript">
					alert("Username Tidak ditemukan!!!"); 
					document.location="../index.php";
				 </script>';
            } else {
                $result = mysqli_fetch_assoc($query);

                $_SESSION['id_user'] = $result['id_guru'];
                $_SESSION['username'] = $result['nip'];
                $_SESSION['password'] = $result['password'];
                $_SESSION['role'] = "guru";
            }
        } else {
            $result = mysqli_fetch_assoc($query);

            $_SESSION['id_user'] = $result['id_siswa'];
            $_SESSION['username'] = $result['nis'];
            $_SESSION['password'] = $result['password'];
            $_SESSION['role'] = "siswa";
        }
    } else {
        $result = mysqli_fetch_assoc($query);

        $_SESSION['id_user'] = $result['id_admin'];
        $_SESSION['username'] = $result['username'];
        $_SESSION['password'] = $result['password'];
        $_SESSION['role'] = "admin";
?>

        <script>
            alert("Selamat Datang <?php echo $_SESSION['username']; ?> di E-Learning SD Muhammadiyah Ambarketawang 3");
            document.location = "admin/index.php";
        </script>

<?php
    }
}
?>