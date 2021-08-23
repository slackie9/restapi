<?php 

// $mahasiswa =[
//     [
//     "nama" => "Slackie",
//     "nim" =>"06241594",
//     "email"=> "slackie@mail.com"
//     ],
//     [
//     "nama" => "Mayuki",
//     "nim" =>"0624159123",
//     "email"=> "mayuki@mail.com"
//     ],

// ];

$dbh = new PDO('mysql:host=localhost;dbname=phpdasar2', 'root', '');
$db = $dbh->prepare("SELECT * FROM mahasiswa");
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

    $data = json_encode($mahasiswa);
    echo $data;
?>