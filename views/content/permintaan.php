<div class="table-responsive border px-2 py-4">
    <table class="table table-bordered table-hover table-striped " id="data-table">
        <thead style="background-color: #4e73df;">
            <tr class="text-light">
                <th scope="col">No</th>
                <th scope="col">User</th>
                <th scope="col">Rumah Sakit</th>
                <th scope="col">Kronologi</th>
                <th scope="col">Jenis</th>
                <th scope="col">Lokasi</th>
                <th scope="col">Waktu</th>
                <th scope="col">Status</th>

            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT permintaan.*,rumah_sakit.nama_rumahsakit,user.nama FROM permintaan INNER JOIN rumah_sakit ON rumah_sakit.kode_rumahsakit = permintaan.kode_rumahsakit
            INNER JOIN user ON user.ktp = permintaan.ktp ORDER BY permintaan.id_permintaan DESC";
            $data_kelas = mysqli_query($koneksi, $query);
            $nomor = 1;
            while ($d = mysqli_fetch_array($data_kelas)) {
            ?>
                <tr>
                    <td><?php echo $nomor++; ?></td>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['nama_rumahsakit']; ?></td>
                    <td><?php echo $d['kronologi']; ?></td>
                    <td><?php echo $d['jenis']; ?></td>
                    <td><?php echo $d['lokasi']; ?></td>
                    <td><?php echo $d['waktu']; ?></td>
                    <td><?php echo $d['status']; ?></td>


                </tr>
                <!-- Update Data Guru -->
            <?php } ?>
        </tbody>
    </table>
</div>