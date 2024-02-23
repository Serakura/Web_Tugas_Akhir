<?php $kd = $_GET['kd_rs']; ?>
<div class="container-fluid p-0">
    <div class="d-flex justify-content-between">
        <a href="index.php?page=rumah_sakit" class="btn btn-primary mb-2"><i class="fas fa-fw fa-arrow-left mr-2"></i>Kembali</a>
        <button type="button" class="btn btn-primary ml-5 mb-2" data-toggle="modal" style="float:right;" data-target="#tambahdatapelayanan" data-whatever="Pelayanan">Tambah Data Pelayanan</button>
    </div>
</div>



<div class="table-responsive border px-2 py-4">
    <table class="table table-bordered table-hover table-striped " id="data-table">
        <thead style="background-color: #4e73df;">
            <tr class="text-light">
                <th scope="col">No</th>
                <th scope="col">Nama Pelayanan</th>
                <th scope="col">Nama Rumah Sakit</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT pelayanan.*, rumah_sakit.nama_rumahsakit FROM pelayanan INNER JOIN rumah_sakit ON rumah_sakit.kode_rumahsakit = pelayanan.kode_rumahsakit WHERE pelayanan.kode_rumahsakit=$kd";
            $data_kelas = mysqli_query($koneksi, $query);
            $nomor = 1;
            while ($d = mysqli_fetch_array($data_kelas)) {
            ?>
                <tr>
                    <td><?php echo $nomor++; ?></td>
                    <td><?php echo $d['nama_pelayanan']; ?></td>
                    <td><?php echo $d['nama_rumahsakit']; ?></td>
                    <td>
                        <!-- ?page=hapusMobil&nopol_mobil= echo $data['nopol_mobil']; ?> -->
                        <a data-toggle="modal" data-target="#updatedatapelayanan<?php echo $d['id_pelayanan']; ?>" class="link"><img name="pencil" src="../assets/edit.png"></a>
                        <a href="./content/function/hapuspelayanan.php?id_pelayanan=<?php echo $d['id_pelayanan'] ?>&kd=<?php echo $d['kode_rumahsakit'] ?>" class="link"><img name="delete" src="../assets/delete.png" onclick="return confirm('Yakin Akan di Hapus ?')"></a>
                    </td>
                </tr>
                <!-- Update Data Guru -->
                <div class="modal fade" id="updatedatapelayanan<?php echo $d['id_pelayanan'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Update Data Pelayanan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <?php
                            $idf = $d['id_pelayanan'];
                            $query = mysqli_query($koneksi, "SELECT * FROM pelayanan WHERE id_pelayanan='$idf'");
                            while ($row = mysqli_fetch_array($query)) {
                            ?>
                                <div class="modal-body">
                                    <form action="./content/function/updatepelayanan.php" method="POST">
                                        <div class="form-group">
                                            <label for="nama" class="col-form-label">Nama Pelayanan:</label>
                                            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $row['nama_pelayanan']; ?>" required>
                                            <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $row['id_pelayanan']; ?>">
                                            <input type="hidden" class="form-control" id="kode" name="kode" value="<?php echo $row['kode_rumahsakit']; ?>">
                                        </div>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                        <button type="submit" style="float: right;" class="btn btn-primary" onclick="">Kirim</button>
                                    </form>
                                <?php
                            }
                                ?>
                                </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>