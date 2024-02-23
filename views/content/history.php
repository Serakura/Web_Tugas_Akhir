<div class="container-fluid p-1">
    <div class="d-flex justify-content-end">
        <a href="./content/function/downloaddatahistory.php" type="button" class="btn btn-primary mb-2 mr-2 "><i class="fas fa-fw fa-print mr-2"></i>Download Data History</a>
    </div>

</div>
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
                <th scope="col">Longitude</th>
                <th scope="col">Latitude</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT history.*,rumah_sakit.nama_rumahsakit,user.nama FROM history INNER JOIN rumah_sakit ON rumah_sakit.kode_rumahsakit = history.kode_rumahsakit
            INNER JOIN user ON user.ktp = history.ktp";
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
                    <td><?php echo $d['longitude']; ?></td>
                    <td><?php echo $d['latitude']; ?></td>

                </tr>
                <!-- Update Data Guru -->
            <?php } ?>
        </tbody>
    </table>
</div>