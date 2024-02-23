<?php
$user = mysqli_query($koneksi, "SELECT ktp  FROM user");
$rs  = mysqli_query($koneksi, "SELECT kode_rumahsakit FROM rumah_sakit");
$pr = mysqli_query($koneksi, "SELECT id_history FROM history");

?>
<div class="row">
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            <h6>Jumlah User</h6>
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php
                                                                            if ($user) {
                                                                                $sis = mysqli_num_rows($user);
                                                                                if ($sis) {
                                                                                    echo $sis;
                                                                                }
                                                                            } else {
                                                                                echo 'gagal';
                                                                            }
                                                                            ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            <h6>Jumlah Rumah Sakit</h6>
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php
                                                                            if ($rs) {
                                                                                $sis = mysqli_num_rows($rs);
                                                                                if ($sis) {
                                                                                    echo $sis;
                                                                                }
                                                                            } else {
                                                                                echo 'gagal';
                                                                            }
                                                                            ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-home fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                            <h6>Jumlah History Permintaan</h6>
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php
                                                                            if ($pr) {
                                                                                $sis = mysqli_num_rows($pr);
                                                                                if ($sis == 0) {
                                                                                    echo "0";
                                                                                } else {
                                                                                    echo $sis;
                                                                                }
                                                                            } else {
                                                                                echo 'gagal';
                                                                            }
                                                                            ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-book fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-6 col-lg-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h5 class="m-0 font-weight-bold text-primary">Grafik Data Permintaan Pertolongan</h5>
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                        <div class="dropdown-header">Dropdown Header:</div>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="container d-flex justify-content-center px-5 py-2">

                    <canvas id="barchart" width="100" height="100"></canvas>

                </div>

            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h5 class="m-0 font-weight-bold text-primary">Grafik Data Kelas Rumah Sakit</h5>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="container d-flex justify-content-center px-5 py-2">

                    <canvas id="piechart" width="100" height="100"></canvas>

                </div>

            </div>
        </div>
    </div>
</div>