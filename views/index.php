<?php
session_start();
require '../database/db.php';
if (!isset($_SESSION['username'])) {
    header('Location: ../index.php');
}

if (isset($_GET["page"])) {
    $page = $_GET["page"];
} else {
    $page = "dashboard";
}

?>
<!DOCTYPE html>
<html lang="en" manifest="../assets//manifest/app.manifest">

<head>
    <?php
    include 'layouts/head.php';
    ?>

<body id="page-top">
    <?php if (isset($_GET['msg'])) { ?>
        <div aria-live="polite" aria-atomic="true" class="position-relative" data-autohide="false">
            <!-- Position it: -->
            <!-- - `.toast-container` for spacing between toasts -->
            <!-- - `.position-absolute`, `top-0` & `end-0` to position the toasts in the upper right corner -->
            <!-- - `.p-3` to prevent the toasts from sticking to the edge of the container  -->
            <div class="toast-container position-absolute top-0 end-0 p-3" style="z-index: 10;">

                <!-- Then put toasts within -->
                <div id="toast-delayer" class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="3000" data-bs-delay="5000">
                    <div class="toast-header">
                        <strong class="me-auto">Notifikasi</strong>
                        <small class="text-muted">Baru saja</small>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        <?= ($_GET['msg']); ?>
                    </div>
                </div>

            </div>
        </div>
    <?php } ?>
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include 'layouts/sidebar.php' ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include 'layouts/navbar.php' ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h2 mb-0 text-dark text-capitalize font-weight-bold"><?php
                                                                                        if ($page == 'rumah_sakit') {
                                                                                            echo "Rumah Sakit";
                                                                                        } else if ($page == 'fasilitas') {
                                                                                            $a = $_GET['kd_rs'];
                                                                                            $query = mysqli_query($koneksi, "SELECT nama_rumahsakit FROM rumah_sakit WHERE kode_rumahsakit='$a'");
                                                                                            while ($data = mysqli_fetch_assoc($query)) {
                                                                                                $nama_rs = $data['nama_rumahsakit'];
                                                                                            }
                                                                                            echo "Fasilitas " . $nama_rs;
                                                                                        } else if ($page == 'permintaan') {
                                                                                            echo "Data Permintaan";
                                                                                        } else {
                                                                                            echo $page;
                                                                                        }


                                                                                        ?></h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>

                    <!-- konten ditampilkan disini -->
                    <?php
                    include "content/" . $page . ".php";
                    ?>
                    <!-- ini batas penutup konten -->

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Firdaus Ardiansyah Saleh</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yakin mau keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Tekan tombol "Logout" untuk keluar dari akunmu</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../function/funct_logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Tambah Data Rumah Sakit -->
    <div class="modal fade" id="tambahdatarumahsakit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Rumah Sakit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="./content/function/tambahrumahsakit.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="kode" class="col-form-label">Kode:</label>
                            <input type="number" class="form-control" id="kode" name="kode" required>
                        </div>
                        <div class="form-group">
                            <label for="nama" class="col-form-label">Nama:</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="jenis" class="col-form-label">Jenis:</label>
                            <input type="text" class="form-control" id="jenis" name="jenis" required>
                        </div>
                        <div class="form-group">
                            <label for="kelas" class="col-form-label">Kelas:</label>
                            <select id="kelas" class="form-control" name="kelas" required>
                                <option value="" selected>Pilih Kelas</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="pemilik" class="col-form-label">Pemilik:</label>
                            <input type="text" class="form-control" id="pemilik" name="pemilik" required>
                        </div>
                        <div class="form-group">
                            <label for="telp" class="col-form-label">Telepon:</label>
                            <input type="text" class="form-control" id="telp" name="telp" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="col-form-label">Alamat:</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" required>
                        </div>
                        <div class="form-group">
                            <label for="latitude" class="col-form-label">Latitude:</label>
                            <input type="text" class="form-control" id="latitude" name="latitude" required>
                        </div>
                        <div class="form-group">
                            <label for="longitude" class="col-form-label">Longitude:</label>
                            <input type="text" class="form-control" id="longitude" name="longitude" required>
                        </div>
                        <div class="form-group">
                            <label for="gambar" class="col-form-label">Gambar:</label>
                            <input type="file" class="form-control" id="gambar" name="gambar" required>
                        </div>

                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" style="float: right;" class="btn btn-primary" onclick="">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Tambah Data Fasilitas -->
    <div class="modal fade" id="tambahdatafasilitas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Fasilitas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="./content/function/tambahfasilitas.php" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" id="kode" name="kode" value="<?= $kd ?>" required hidden>
                            <label for="fasilitas" class="col-form-label">Nama Fasilitas:</label>
                            <input type="text" class="form-control" id="fasilitas" name="fasilitas" required>
                        </div>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" style="float: right;" class="btn btn-primary" onclick="">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Tambah Data Pelayanan -->
    <div class="modal fade" id="tambahdatapelayanan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pelayanan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="./content/function/tambahpelayanan.php" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" id="kode" name="kode" value="<?= $kd ?>" required hidden>
                            <label for="pelayanan" class="col-form-label">Nama Pelayanan:</label>
                            <input type="text" class="form-control" id="pelayanan" name="pelayanan" required>
                        </div>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" style="float: right;" class="btn btn-primary" onclick="">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <?php
    $month = date('m');
    $year = date('Y');

    if ($month == 12) {
        $bln = array("September", "Oktober", "November", "Desember");
        $jmlh = array();
        for ($i = 9; $i <= 12; $i++) {
            $qry = mysqli_query($koneksi, "SELECT   MONTH(waktu), COUNT(*) 
            FROM      history
            WHERE     YEAR(waktu) = '$year' AND MONTH(waktu) = '$i' 
            GROUP BY  MONTH(waktu)");
            if (mysqli_num_rows($qry) == 0) {
                array_push($jmlh, 0);
            } else {
                while ($rw = mysqli_fetch_array($qry)) {
                    array_push($jmlh, $rw[1]);
                }
            }
        }
    } else if ($month == 11) {
        $bln = array("Agustus", "September", "Oktober", "November");
        $jmlh = array();
        for ($i = 8; $i <= 11; $i++) {
            $qry = mysqli_query($koneksi, "SELECT   MONTH(waktu), COUNT(*) 
            FROM      history
            WHERE     YEAR(waktu) = '$year' AND MONTH(waktu) = '$i' 
            GROUP BY  MONTH(waktu)");
            if (mysqli_num_rows($qry) == 0) {
                array_push($jmlh, 0);
            } else {
                while ($rw = mysqli_fetch_array($qry)) {
                    array_push($jmlh, $rw[1]);
                }
            }
        }
    } else if ($month == 10) {
        $bln = array("Juli", "Agustus", "September", "Oktober");
        $jmlh = array();
        for ($i = 7; $i <= 10; $i++) {
            $qry = mysqli_query($koneksi, "SELECT   MONTH(waktu), COUNT(*) 
            FROM      history
            WHERE     YEAR(waktu) = '$year' AND MONTH(waktu) = '$i' 
            GROUP BY  MONTH(waktu)");
            if (mysqli_num_rows($qry) == 0) {
                array_push($jmlh, 0);
            } else {
                while ($rw = mysqli_fetch_array($qry)) {
                    array_push($jmlh, $rw[1]);
                }
            }
        }
    } else if ($month == 9) {
        $bln = array("Juni", "Juli", "Agustus", "September");
        $jmlh = array();
        for ($i = 6; $i <= 9; $i++) {
            $qry = mysqli_query($koneksi, "SELECT   MONTH(waktu), COUNT(*) 
            FROM      history
            WHERE     YEAR(waktu) = '$year' AND MONTH(waktu) = '$i' 
            GROUP BY  MONTH(waktu)");
            if (mysqli_num_rows($qry) == 0) {
                array_push($jmlh, 0);
            } else {
                while ($rw = mysqli_fetch_array($qry)) {
                    array_push($jmlh, $rw[1]);
                }
            }
        }
    } else if ($month == 8) {
        $bln = array("Mei", "Juni", "Juli", "Agustus");
        $jmlh = array();
        for ($i = 5; $i <= 8; $i++) {
            $qry = mysqli_query($koneksi, "SELECT   MONTH(waktu), COUNT(*) 
            FROM      history
            WHERE     YEAR(waktu) = '$year' AND MONTH(waktu) = '$i' 
            GROUP BY  MONTH(waktu)");
            if (mysqli_num_rows($qry) == 0) {
                array_push($jmlh, 0);
            } else {
                while ($rw = mysqli_fetch_array($qry)) {
                    array_push($jmlh, $rw[1]);
                }
            }
        }
    } else if ($month == 7) {
        $bln = array("April", "Mei", "Juni", "Juli");
        $jmlh = array();
        for ($i = 4; $i <= 7; $i++) {
            $qry = mysqli_query($koneksi, "SELECT   MONTH(waktu), COUNT(*) 
            FROM      history
            WHERE     YEAR(waktu) = '$year' AND MONTH(waktu) = '$i' 
            GROUP BY  MONTH(waktu)");
            if (mysqli_num_rows($qry) == 0) {
                array_push($jmlh, 0);
            } else {
                while ($rw = mysqli_fetch_array($qry)) {
                    array_push($jmlh, $rw[1]);
                }
            }
        }
    } else if ($month == 6) {
        $bln = array("Maret", "April", "Mei", "Juni");
        $jmlh = array();
        for ($i = 3; $i <= 6; $i++) {
            $qry = mysqli_query($koneksi, "SELECT   MONTH(waktu), COUNT(*) 
            FROM      history
            WHERE     YEAR(waktu) = '$year' AND MONTH(waktu) = '$i' 
            GROUP BY  MONTH(waktu)");
            if (mysqli_num_rows($qry) == 0) {
                array_push($jmlh, 0);
            } else {
                while ($rw = mysqli_fetch_array($qry)) {
                    array_push($jmlh, $rw[1]);
                }
            }
        }
    } else if ($month == 5) {
        $bln = array("Februari", "Maret", "April", "Mei");
        $jmlh = array();
        for ($i = 2; $i <= 5; $i++) {
            $qry = mysqli_query($koneksi, "SELECT   MONTH(waktu), COUNT(*) 
            FROM      history
            WHERE     YEAR(waktu) = '$year' AND MONTH(waktu) = '$i' 
            GROUP BY  MONTH(waktu)");
            if (mysqli_num_rows($qry) == 0) {
                array_push($jmlh, 0);
            } else {
                while ($rw = mysqli_fetch_array($qry)) {
                    array_push($jmlh, $rw[1]);
                }
            }
        }
    } else if ($month == 4) {
        $bln = array("Januari", "Februari", "Maret", "April");
        $jmlh = array();
        for ($i = 1; $i <= 4; $i++) {
            $qry = mysqli_query($koneksi, "SELECT   MONTH(waktu), COUNT(*) 
            FROM      history
            WHERE     YEAR(waktu) = '$year' AND MONTH(waktu) = '$i' 
            GROUP BY  MONTH(waktu)");
            if (mysqli_num_rows($qry) == 0) {
                array_push($jmlh, 0);
            } else {
                while ($rw = mysqli_fetch_array($qry)) {
                    array_push($jmlh, $rw[1]);
                }
            }
        }
    } else if ($month == 3) {
        $bln = array("Januari", "Februari", "Maret");
        $jmlh = array();
        for ($i = 1; $i <= 3; $i++) {
            $qry = mysqli_query($koneksi, "SELECT   MONTH(waktu), COUNT(*) 
            FROM      history
            WHERE     YEAR(waktu) = '$year' AND MONTH(waktu) = '$i' 
            GROUP BY  MONTH(waktu)");
            if (mysqli_num_rows($qry) == 0) {
                array_push($jmlh, 0);
            } else {
                while ($rw = mysqli_fetch_array($qry)) {
                    array_push($jmlh, $rw[1]);
                }
            }
        }
    } else if ($month == 2) {
        $bln = array("Januari", "Februari");
        $jmlh = array();
        for ($i = 1; $i <= 2; $i++) {
            $qry = mysqli_query($koneksi, "SELECT   MONTH(waktu), COUNT(*) 
            FROM      history
            WHERE     YEAR(waktu) = '$year' AND MONTH(waktu) = '$i' 
            GROUP BY  MONTH(waktu)");
            if (mysqli_num_rows($qry) == 0) {
                array_push($jmlh, 0);
            } else {
                while ($rw = mysqli_fetch_array($qry)) {
                    array_push($jmlh, $rw[1]);
                }
            }
        }
    } else if ($month == 1) {
        $bln = array("Januari");
        $jmlh = array();
        for ($i = 1; $i <= 1; $i++) {
            $qry = mysqli_query($koneksi, "SELECT   MONTH(waktu), COUNT(*) 
            FROM      history
            WHERE     YEAR(waktu) = '$year' AND MONTH(waktu) = '$i' 
            GROUP BY  MONTH(waktu)");
            if (mysqli_num_rows($qry) == 0) {
                array_push($jmlh, 0);
            } else {
                while ($rw = mysqli_fetch_array($qry)) {
                    array_push($jmlh, $rw[1]);
                }
            }
        }
    }

    ?>
    <script type="text/javascript">
        var ctx = document.getElementById("barchart").getContext("2d");
        var data = {
            labels: [<?php $ii = 0;
                        while ($ii < count($bln)) {
                            echo '"' . $bln[$ii] . '",';
                            $ii++;
                        } ?>],
            datasets: [{
                label: "Jumlah Permintaan",
                data: [<?php $ii = 0;
                        while ($ii < count($jmlh)) {
                            echo '"' . $jmlh[$ii] . '",';
                            $ii++;
                        } ?>],
                backgroundColor: [
                    '#29B0D0',
                    '#2A516E',
                    '#F07124',
                    '#CBE0E3',
                    '#979193'
                ]
            }]
        };

        var myBarChart = new Chart(ctx, {
            type: 'bar',
            data: data,
            options: {
                legend: {
                    display: false
                },
                barValueSpacing: 20,
                scales: {
                    yAxes: [{
                        ticks: {
                            min: 0,
                        }
                    }],
                    xAxes: [{
                        gridLines: {
                            color: "rgba(0, 0, 0, 0)",
                        }
                    }]
                }
            }
        });
    </script>

    <?php
    $kelas_a  = mysqli_query($koneksi, "SELECT * FROM rumah_sakit  WHERE kelas_rumahsakit='A'");
    $kelas_b  = mysqli_query($koneksi, "SELECT * FROM rumah_sakit  WHERE kelas_rumahsakit='B'");
    $kelas_c  = mysqli_query($koneksi, "SELECT * FROM rumah_sakit  WHERE kelas_rumahsakit='C'");
    $kelas_d  = mysqli_query($koneksi, "SELECT * FROM rumah_sakit  WHERE kelas_rumahsakit='D'");
    $kelas_a = mysqli_num_rows($kelas_a);
    $kelas_b = mysqli_num_rows($kelas_b);
    $kelas_c = mysqli_num_rows($kelas_c);
    $kelas_d = mysqli_num_rows($kelas_d);
    ?>
    <script type="text/javascript">
        var ctx = document.getElementById("piechart").getContext("2d");
        var data = {
            labels: ["Kelas A", "Kelas B", "Kelas C", "Kelas D"],
            datasets: [{
                label: "Penjualan Barang",
                data: [<?php
                        echo '"' . $kelas_a . '",';
                        echo '"' . $kelas_b . '",';
                        echo '"' . $kelas_c . '",';
                        echo '"' . $kelas_d . '",';
                        ?>],
                backgroundColor: [
                    '#29B0D0',
                    '#2A516E',
                    '#F07124',
                    '#CBE0E3',
                    '#979193'
                ]
            }]
        };

        var myPieChart = new Chart(ctx, {
            type: 'doughnut',
            data: data,
            options: {
                responsive: true
            }
        });
    </script>
    <?php include 'layouts/script.php' ?>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.3.4/js/dataTables.select.min.js"></script>
    <script>
        $(document).ready(function() {
            var table = $('#data-table').DataTable({
                select: false,
                search: {
                    caseInsensitive: false,
                    regex: true
                }
            });
        });
    </script>
    <script>
        var editor = CKEDITOR.replace('editor1', {
            extraPlugins: 'embed,autoembed,image2',
            height: 500,

            // Load the default contents.css file plus customizations for this sample.
            contentsCss: [
                'http://cdn.ckeditor.com/4.18.0/full-all/contents.css',
                'https://ckeditor.com/docs/ckeditor4/4.18.0/examples/assets/css/widgetstyles.css'
            ],
            // Setup content provider. See https://ckeditor.com/docs/ckeditor4/latest/features/media_embed
            embed_provider: '//ckeditor.iframe.ly/api/oembed?url={url}&callback={callback}',

            // Configure the Enhanced Image plugin to use classes instead of styles and to disable the
            // resizer (because image size is controlled by widget styles or the image takes maximum
            // 100% of the editor width).
            image2_alignClasses: ['image-align-left', 'image-align-center', 'image-align-right'],
            // image2_disableResizer: true,
            removeButtons: 'PasteFromWord'
        });
        CKFinder.setupCKEditor(editor);
        var editor1 = CKEDITOR.replace('editor2', {
            extraPlugins: 'embed,autoembed,image2',
            height: 200,

            // Load the default contents.css file plus customizations for this sample.
            contentsCss: [
                'http://cdn.ckeditor.com/4.18.0/full-all/contents.css',
                'https://ckeditor.com/docs/ckeditor4/4.18.0/examples/assets/css/widgetstyles.css'
            ],
            // Setup content provider. See https://ckeditor.com/docs/ckeditor4/latest/features/media_embed
            embed_provider: '//ckeditor.iframe.ly/api/oembed?url={url}&callback={callback}',

            // Configure the Enhanced Image plugin to use classes instead of styles and to disable the
            // resizer (because image size is controlled by widget styles or the image takes maximum
            // 100% of the editor width).
            image2_alignClasses: ['image-align-left', 'image-align-center', 'image-align-right'],
            // image2_disableResizer: true,
            removeButtons: 'PasteFromWord'
        });
        CKFinder.setupCKEditor(editor1);
    </script>
    <script>
        $('.toast').toast('show');
    </script>

</body>

</html>