<?php
$ip = getHostByName(getHostName());
function distance($lat1, $lon1, $lat2, $lon2, $unit)
{

    $theta = $lon1 - $lon2;
    $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
    $dist = acos($dist);
    $dist = rad2deg($dist);
    $miles = $dist * 60 * 1.1515;
    $unit = strtoupper($unit);

    if ($unit == "K") {
        return ($miles * 1.609344);
    } else if ($unit == "N") {
        return ($miles * 0.8684);
    } else {
        return $miles;
    }
};

$long = $_POST["longitude"];
$lat = $_POST["latitude"];
$data_array = array();
require '../database/db.php';

if ($koneksi && isset($long) && isset($lat)) {
    $sql = "SELECT kode_rumahsakit,nama_rumahsakit,jenis_rumahsakit,kelas_rumahsakit,pemilik,telp,alamat,latitude,longitude,CONCAT('http://$ip/upload_files/gambar_rs/',gambar) 
    AS gambar FROM rumah_sakit";
    $result = mysqli_query($koneksi, $sql);
    while ($rw = mysqli_fetch_assoc($result)) {

        $data = [
            'kode' => $rw['kode_rumahsakit'],
            'nama' => $rw['nama_rumahsakit'],
            'jenis' => $rw['jenis_rumahsakit'],
            'kelas' => $rw['kelas_rumahsakit'],
            'pemilik' => $rw['pemilik'],
            'telp' => $rw['telp'],
            'alamat' => $rw['alamat'],
            'latitude' => $rw['latitude'],
            'longitude' => $rw['longitude'],
            'gambar' => $rw['gambar'],
            'jarak' => strval(round(distance($lat, $long, $rw['latitude'], $rw['longitude'], "K"), 1))

        ];
        array_push($data_array, $data);
    }
    class shorting
    {

        var $kode, $nama, $jenis, $kelas, $pemilik, $telp, $alamat, $latitude, $longitude, $gambar, $jarak;

        // Constructor for class initialization
        public function shorting($data)
        {
            $this->kode = $data['kode'];
            $this->nama = $data['nama'];
            $this->jenis = $data['jenis'];
            $this->kelas = $data['kelas'];
            $this->pemilik = $data['pemilik'];
            $this->telp = $data['telp'];
            $this->alamat = $data['alamat'];
            $this->latitude = $data['latitude'];
            $this->longitude = $data['longitude'];
            $this->gambar = $data['gambar'];
            $this->jarak = $data['jarak'];
        }
    }

    // Function to convert array data to class object
    function data2Object($data)
    {
        $class_object = new shorting($data);
        return $class_object;
    }

    // Comparator function used for comparator
    // scores of two object/students
    function comparator($object1, $object2)
    {
        return $object1->jarak > $object2->jarak;
    }

    // Generating array of objects
    $data_array = array_map('data2Object', $data_array);
    usort($data_array, 'comparator');
    echo json_encode($data_array);
} else {
    $status = "failed";
    echo json_encode(array('status' => $status), JSON_FORCE_OBJECT);
}

mysqli_close($koneksi);
