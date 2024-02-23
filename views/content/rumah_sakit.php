<div class="container-fluid p-0">
    <button type="button" class="btn btn-primary ml-5 mb-2" data-toggle="modal" style="float:right;" data-target="#tambahdatarumahsakit" data-whatever="RumahSakit">Tambah Data Rumah Sakit</button>
</div>



<div class="table-responsive border px-2 py-4">
    <table class="table table-bordered table-hover table-striped " id="data-table">
        <thead style="background-color: #4e73df;">
            <tr class="text-light">
                <th scope="col">No</th>
                <th scope="col">Kode</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis</th>
                <th scope="col">Kelas</th>
                <th scope="col">Pemilik</th>
                <th scope="col">Telepon</th>
                <th scope="col">Alamat</th>
                <th scope="col">Data</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM rumah_sakit";
            $data_kelas = mysqli_query($koneksi, $query);
            $nomor = 1;
            while ($d = mysqli_fetch_array($data_kelas)) {
            ?>
                <tr>
                    <td><?php echo $nomor++; ?></td>
                    <td><?php echo $d['kode_rumahsakit']; ?></td>
                    <td><?php echo $d['nama_rumahsakit']; ?></td>
                    <td><?php echo $d['jenis_rumahsakit']; ?></td>
                    <td><?php echo $d['kelas_rumahsakit']; ?></td>
                    <td><?php echo $d['pemilik']; ?></td>
                    <td><?php echo $d['telp']; ?></td>
                    <td><?php echo $d['alamat']; ?></td>
                    <td>
                        <a href="index.php?page=fasilitas&kd_rs=<?= $d['kode_rumahsakit']; ?>" class="btn btn-primary mb-2">Data Fasilitas</a>
                        <a href="index.php?page=pelayanan&kd_rs=<?= $d['kode_rumahsakit']; ?>" class="btn btn-primary">Data Pelayanan</a>
                    </td>
                    <td>
                        <!-- ?page=hapusMobil&nopol_mobil= echo $data['nopol_mobil']; ?> -->
                        <a data-toggle="modal" data-target="#updatedatarumahsakit<?php echo $d['kode_rumahsakit']; ?>" class="link"><img name="pencil" src="../assets/edit.png"></a>
                        <a href="./content/function/hapusrumahsakit.php?kd_rs=<?php echo $d['kode_rumahsakit'] ?>&gambar=<?php echo $d['gambar'] ?>" class="link"><img name="delete" src="../assets/delete.png" onclick="return confirm('Yakin Akan di Hapus ?')"></a>
                    </td>
                </tr>
                <!-- Update Data Guru -->
                <div class="modal fade" id="updatedatarumahsakit<?php echo $d['kode_rumahsakit'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Update Data Rumah Sakit</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <?php
                            $kd_rs = $d['kode_rumahsakit'];
                            $query = mysqli_query($koneksi, "SELECT * FROM rumah_sakit WHERE kode_rumahsakit='$kd_rs'");
                            while ($row = mysqli_fetch_array($query)) {
                            ?>
                                <div class="modal-body">
                                    <form action="./content/function/updaterumahsakit.php" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="kode" class="col-form-label">Kode:</label>
                                            <input type="number" class="form-control" id="kode" name="kode" value="<?= $row['kode_rumahsakit'] ?>" required readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="nama" class="col-form-label">Nama:</label>
                                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $row['nama_rumahsakit'] ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="jenis" class="col-form-label">Jenis:</label>
                                            <input type="text" class="form-control" id="jenis" name="jenis" value="<?= $row['jenis_rumahsakit'] ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="kelas" class="col-form-label">Kelas:</label>
                                            <select id="kelas" class="form-control" name="kelas" required>
                                                <option value="" selected>Pilih Kelas</option>
                                                <option value="A" <?php if ($row['kelas_rumahsakit'] == "A") {
                                                                        echo 'selected';
                                                                    } ?>>A</option>
                                                <option value="B" <?php if ($row['kelas_rumahsakit'] == "B") {
                                                                        echo 'selected';
                                                                    } ?>>B</option>
                                                <option value="C" <?php if ($row['kelas_rumahsakit'] == "C") {
                                                                        echo 'selected';
                                                                    } ?>>C</option>
                                                <option value="D" <?php if ($row['kelas_rumahsakit'] == "D") {
                                                                        echo 'selected';
                                                                    } ?>>D</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="pemilik" class="col-form-label">Pemilik:</label>
                                            <input type="text" class="form-control" id="pemilik" name="pemilik" value="<?= $row['pemilik'] ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="telp" class="col-form-label">Telepon:</label>
                                            <input type="text" class="form-control" id="telp" name="telp" value="<?= $row['telp'] ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat" class="col-form-label">Alamat:</label>
                                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $row['alamat'] ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="latitude" class="col-form-label">Latitude:</label>
                                            <input type="text" class="form-control" id="latitude" name="latitude" value="<?= $row['latitude'] ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="longitude" class="col-form-label">Longitude:</label>
                                            <input type="text" class="form-control" id="longitude" name="longitude" value="<?= $row['longitude'] ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="gambar" class="col-form-label">Gambar Lama:</label>
                                            <p></p>
                                            <div class="d-flex justify-content-center">
                                                <img src="../upload_files/gambar_rs/<?= $row['gambar'] ?>" alt="" class="img-thumbnail profile">
                                            </div>
                                            <input type="text" class="form-control" id="gambar_lama" name="gambar_lama" value="<?= $row['gambar'] ?>" required hidden>
                                        </div>
                                        <div class="form-group">
                                            <label for="gambar" class="col-form-label">Gambar:</label>
                                            <input type="file" class="form-control" id="gambar" name="gambar">
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