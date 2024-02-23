<div class="table-responsive border px-2 py-4">
    <table class="table table-bordered table-hover table-striped " id="data-table">
        <thead style="background-color: #4e73df;">
            <tr class="text-light">
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">KTP</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Alamat</th>
                <th scope="col">Telepon</th>
                <th scope="col">Telepon Keluarga</th>
                <th scope="col">Status</th>
                <th scope="col">Aktivasi</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * from user";

            $data_siswa = mysqli_query($koneksi, $query);
            $nomor = 1;
            while ($d = mysqli_fetch_array($data_siswa)) {
            ?>
                <tr>
                    <td><?php echo $nomor++; ?></td>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['ktp']; ?></td>
                    <td><?php echo $d['jenis_kelamin']; ?></td>
                    <td><?php echo $d['alamat']; ?></td>
                    <td><?php echo $d['no_hp']; ?></td>
                    <td><?php echo $d['no_hp_keluarga']; ?></td>
                    <td><?php echo $d['status']; ?></td>

                    <td>
                        <?php if ($d['status'] == "Nonaktif") {
                        ?>
                            <a href="./content/function/user_aktif.php?ktp=<?= $d['ktp'] ?>" class="btn btn-success">Activate</a>
                        <?php } else if ($d['status'] == "Aktif") { ?>
                            <a href="./content/function/user_Nonaktif.php?ktp=<?= $d['ktp'] ?>" class="btn btn-danger">Deactivate</a>
                        <?php } ?>


                    </td>
                    <td>
                        <!-- ?page=hapusMobil&nopol_mobil= echo $data['nopol_mobil']; ?> -->
                        <a data-toggle="modal" data-target="#updatedatauser<?php echo $d['ktp']; ?>" class="link"><img name="pencil" src="../assets/edit.png"></a>
                        <a href="./content/function/hapususer.php?ktp=<?php echo $d['ktp'] ?>" class="link"><img name="delete" src="../assets/delete.png" onclick="return confirm('Yakin Akan di Hapus ?')"></a>
                    </td>
                </tr>
                <!-- Update Data Guru -->
                <div class="modal fade" id="updatedatauser<?php echo $d['ktp'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Update Data User</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <?php
                            $ktp = $d['ktp'];
                            $query = mysqli_query($koneksi, "SELECT * FROM user WHERE ktp='$ktp'");
                            while ($row = mysqli_fetch_array($query)) {
                            ?>
                                <div class="modal-body">
                                    <form action="./content/function/updateuser.php" method="POST">
                                        <div class="form-group">
                                            <label for="nip" class="col-form-label">Kartu Tanda Penduduk:</label>
                                            <input type="text" class="form-control" id="ktp_baru" name="ktp_baru" value="<?php echo $row['ktp']; ?>" readonly>
                                            <input type="hidden" class="form-control" id="ktp" name="ktp" value="<?php echo $row['ktp']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="nama" class="col-form-label">Nama:</label>
                                            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $row['nama']; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="jeniskelamin" class="col-form-label">Jenis Kelamin:</label>
                                            <select id="jeniskelamin" class="form-control" name="jeniskelamin" value="<?php echo $row['jenis_kelamin']; ?>" required>
                                                <option value="">Pilih Jenis Kelamin</option>
                                                <option value="Laki-laki" <?php if ($row['jenis_kelamin'] == "Laki-laki") {
                                                                                echo 'selected';
                                                                            } ?>>Laki-laki</option>
                                                <option value="Perempuan" <?php if ($row['jenis_kelamin'] == "Perempuan") {
                                                                                echo 'selected';
                                                                            } ?>>Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="telepon" class="col-form-label">Telepon:</label>
                                            <input type="number" class="form-control" id="telepon" name="telepon" value="<?php echo $row['no_hp']; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="telepon" class="col-form-label">Telepon Keluarga:</label>
                                            <input type="number" class="form-control" id="telepon_keluarga" name="telepon_keluarga" value="<?php echo $row['no_hp_keluarga']; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat" class="col-form-label">Alamat:</label>
                                            <textarea class="form-control" id="alamat" name="alamat" required><?php echo $row['alamat']; ?></textarea>
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