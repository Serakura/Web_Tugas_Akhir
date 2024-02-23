<?php
require '../../../database/db.php';
require '../../../assets/fpdf181/fpdf.php';

$Lapor = "SELECT user.ktp,user.nama,rumah_sakit.nama_rumahsakit,history.jenis,history.kronologi,history.lokasi,history.waktu FROM history 
INNER JOIN user ON user.ktp = history.ktp 
INNER JOIN rumah_sakit ON rumah_sakit.kode_rumahsakit = history.kode_rumahsakit 
ORDER BY history.id_history";

$Hasil = mysqli_query($koneksi, $Lapor);
$Data = array();
while ($row = mysqli_fetch_assoc($Hasil)) {
    array_push($Data, $row);
}

$Judul = 'Data History Permintaan';
$tgl =   'Data tanggal: ' . date("d-m-Y");
$user = 'Diunduh oleh: Admin';

$Header = array(
    array("label" => "KTP", "length" => 35, "align" => "L"),
    array("label" => "Nama", "length" => 55, "align" => "L"),
    array("label" => "Rumah Sakit", "length" => 55, "align" => "L"),
    array("label" => "Jenis", "length" => 25, "align" => "L"),
    array("label" => "Kronologi", "length" => 40, "align" => "L"),
    array("label" => "Lokasi", "length" => 150, "align" => "L"),
    array("label" => "Waktu", "length" => 40, "align" => "L")
);

$pdf = new FPDF();
$pdf->AddPage('l', 'A3', 'C');
$pdf->Image('../../../assets/logo.jpeg', 10, 10, 20, 25);
$pdf->Cell(25);
$pdf->SetFont('Times', 'B', '14');

$pdf->Cell(0, 5, 'APLIKASI PENCARIAN TEMPAT LAYANAN KESEHATAN', 0, 1, 'C');

$pdf->Cell(25);

$pdf->Cell(0, 5, 'KOTA YOGYAKARTA', 0, 1, 'C');

$pdf->Cell(25);

$pdf->SetFont('Times', 'B', '14');

$pdf->Cell(0, 5, 'DATA HISTORY PERMINTAAN PERTOLONGAN', 0, 1, 'C');

$pdf->Cell(25);

$pdf->SetFont('Times', 'I', '10');

$pdf->Cell(0, 5, 'Sleman, D.I. Yogyakarta Telp. 081226541727', 0, 1, 'C');

$pdf->Cell(25);

$pdf->Cell(0, 2, 'Website: https://emedical-jogja.000webhostapp.com/ | E-Mail: firdaus.24oktober@gmail.com', 0, 1, 'C');
$pdf->SetLineWidth(1);

$pdf->Line(10, 36, 410, 36);

$pdf->SetLineWidth(0);

$pdf->Line(10, 37, 410, 37);
$pdf->SetFont('Times', 'I', '10');

$pdf->Cell(0, 5, '', 0, 1, 'C');

$pdf->Cell(25);

$pdf->SetFont('arial', 'B', '15');
$pdf->Cell(0, 15, $Judul, '0', 1, 'C');
$pdf->SetFont('arial', 'i', '9');
$pdf->Cell(0, 1, $user, '0', 1, 'P');
$pdf->SetFont('arial', 'i', '9');
$pdf->Cell(0, 10, $tgl, '0', 1, 'P');
$pdf->SetFont('arial', '', '12');
$pdf->SetFillColor(78, 115, 223);
$pdf->SetTextColor(255);
$pdf->setDrawColor(0, 0, 0);
foreach ($Header as $Kolom) {
    $pdf->Cell($Kolom['length'], 8, $Kolom['label'], 1, '0', $Kolom['align'], true);
}
$pdf->Ln();
$pdf->SetFillColor(230, 234, 247);
$pdf->SettextColor(0);
$pdf->SetFont('arial', '', '10');
$fill = true;
foreach ($Data as $Baris) {
    $i = 0;
    foreach ($Baris as $Cell) {
        $pdf->Cell($Header[$i]['length'], 7, $Cell, 2, '0', $Kolom['align'], $fill);
        $i++;
    }
    $fill = !$fill;
    $pdf->Ln();
}
$pdf->Output('D', $Judul . '.pdf');
