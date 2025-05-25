<?php
header('Content-Type: application/json');
// $mahasiswa = [
//     [
//     "nama" => "Raissa Almaira",
//     "nim" => "2217020077",
//     "email" => "raissarayy01@gmail.com"
//     ], 
//     [
//         "nama" => "Charles Leclerc",
//         "nim" => "2217020016",
//         "email" => "charlesleclerc@gmail.com"
//         ]
    
// ];


$dbh = new PDO('mysql:host=localhost;dbname=padangtv_karyawan','root','');

$db = $dbh->prepare('SELECT * FROM karyawan');
$db->execute();
$karyawan = $db->fetchAll(PDO::FETCH_ASSOC);
$data = json_encode($karyawan);
echo $data;


?>