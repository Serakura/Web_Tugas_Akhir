<?php
require '../database/db.php';
if (isset($_GET['funct']) && isset($_GET['id_permintaan'])) {
?>
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Konfirmasi Rumah Sakit</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.min.css" integrity="sha256-ZCK10swXv9CN059AmZf9UzWpJS34XvilDMJ79K+WOgc=" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>

    <body>
        <div class="container">
            <?php if ($_GET['funct'] == "konfirmasi") { ?>
                <h1 class="mt-1 mb-3 text-center">Konfirmasi Permintaan</h1>
            <?php } else { ?>
                <h1 class="mt-1 mb-3 text-center">Konfirmasi Kedatangan</h1>
            <?php } ?>
            <div class="row d-flex justify-content-center">
                <div class="col-xl-8 col-lg-12">
                    <div class="card shadow mb-4" style="border-radius: 25px;">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 bg-success  align-items-center text-center">
                            <h5 class="m-0 font-weight-bold text-white text-center">Data Permintaan</h5>

                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="container px-5 py-2">
                                <?php
                                $id_permintaan = $_GET['id_permintaan'];

                                $query = mysqli_query($koneksi, "SELECT permintaan.*,rumah_sakit.nama_rumahsakit,user.nama FROM permintaan INNER JOIN rumah_sakit ON rumah_sakit.kode_rumahsakit = permintaan.kode_rumahsakit
                            INNER JOIN user ON user.ktp = permintaan.ktp WHERE permintaan.id_permintaan='$id_permintaan'");
                                while ($data = mysqli_fetch_array($query)) {

                                ?>
                                    <div class="form-group">
                                        <label for="kode" class="col-form-label">Nama:</label>
                                        <input type="text" class="form-control shadow text-capitalize" id="kode" name="kode" value="<?= $data['nama'] ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="kode" class="col-form-label">Rumah Sakit:</label>
                                        <input type="text" class="form-control shadow " id="kode" name="kode" value="<?= $data['nama_rumahsakit'] ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama" class="col-form-label">Jenis Permintaan:</label>
                                        <input type="text" class="form-control shadow text-capitalize" id="nama" name="nama" value="<?= $data['jenis'] ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="kode" class="col-form-label">Kronologi:</label>
                                        <input type="text" class="form-control shadow text-capitalize" id="kode" name="kode" value="<?= $data['kronologi'] ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama" class="col-form-label">Lokasi:</label>
                                        <textarea name="" class="form-control shadow text-capitalize" id="" cols="10" rows="3" readonly><?= $data['lokasi'] ?></textarea>
                                    </div>
                                <?php } ?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="container d-flex justify-content-center">
                <?php if ($_GET['funct'] == "konfirmasi") { ?>
                    <a href="./function/konfirmasi_permintaan.php?id_permintaan=<?= $_GET['id_permintaan'] ?>" class="btn btn-success shadow"><i class="fas fa-fw fa-check mr-2"></i> Konfirmasi</a>
                <?php } else { ?>
                    <a href="./function/downloaddatapermintaan.php?id_permintaan=<?= $_GET['id_permintaan'] ?>" class="btn btn-primary mx-2 shadow"><i class="fas fa-fw fa-file-pdf mr-2"></i> Download Data</a>
                    <a href="./function/konfirmasi_kedatangan.php?id_permintaan=<?= $_GET['id_permintaan'] ?>" class="btn btn-danger mx-2 shadow"><i class="fas fa-fw fa-check mr-2"></i> Selesai</a>
                <?php } ?>


            </div>
        </div>


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js" integrity="sha256-IW9RTty6djbi3+dyypxajC14pE6ZrP53DLfY9w40Xn4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
        <?php
        if (isset($_GET['msg'])) {
        ?>
            <script>
                Swal.fire({
                    title: "Sukses!",
                    text: "<?= $_GET['msg'] ?>",
                    icon: "success"
                });
            </script>
        <?php
        } ?>
    </body>

    </html>
<?php } else if (isset($_GET['msg'])) { ?>
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Konfirmasi Rumah Sakit</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.min.css" integrity="sha256-ZCK10swXv9CN059AmZf9UzWpJS34XvilDMJ79K+WOgc=" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>

    <body>



        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js" integrity="sha256-IW9RTty6djbi3+dyypxajC14pE6ZrP53DLfY9w40Xn4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
        <?php
        if (isset($_GET['msg'])) {
        ?>
            <script>
                Swal.fire({
                    title: "Sukses!",
                    text: "<?= $_GET['msg'] ?>",
                    icon: "success"
                });
            </script>
        <?php
        } ?>
    </body>

    </html>
<?php } ?>