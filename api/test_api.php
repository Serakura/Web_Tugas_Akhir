<?php
echo $_SERVER['DOCUMENT_ROOT'];
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'http://localhost:8000/send-message',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => array('message' => "test aja \r\n ini", 'number' => '089612646474', 'file_dikirim' => new \CURLFILE('@/upload_files/gambar_permintaan/64c02928a1afa_sardjito.png')),
));

$response = curl_exec($curl);
curl_close($curl);
$data = json_decode($response);


echo $data->message;
// $url = "http://localhost:8000/send-message";
// $data = array('message' => 'test aja ini', 'number' => '082321715692', 'file_dikirim' => '/C:/Users/yutri/Pictures/cv-syifa.jpeg');
// $options = array(
//     "http" => array(
//         "method" => "POST",
//         "header" => "Content-Type: application/x-www-form-urlencoded",
//         "content" => http_build_query($data)
//     )
// );
// $response = file_get_contents($url, false, stream_context_create($options));
// echo $response;
// $dt = json_decode($response);
// echo $dt->data->ktp;
