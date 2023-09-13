<?php
//$mahasiswa = [
    //["Vita Mirfatun" , "0123456", "Rekayasa Perangkat Lunak", "vitamirfatun@gmail.com"],
    //["Isma Mufidatul" , "0234561", "Teknik Informatika", "ismamufida@gmail.com"]
    //];

    // array Associative
    // definisinya seperti array numerik, kecuali
    // key-nya adalah string yang kita buat sendiri
    $mahasiswa = [
        [
        "nama" => "Ahmad Maulana",
        "nrp" => "085815184876",
        "email" => "ahmadmaulana@gmail.com",
        "jurusan" => "Teknik Otomotif",
        "gambar" => "foto2.jpeg"
    ],
    [
    "nama" => "Vita Mirfatun",
    "nrp" => "085815184876",
    "email" => "vitaa@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "vita.jpg"
   
    
    
    ]
    ];
    //echo $mahasiswa[1]["jurusan"];


    ?>
<!DOCTYPE html>
<html >
<head>
    
    <title>Daftar Mahasiswa</title>
</head>
<body>

    <h1>Daftar Mahasiswa</h1>

<?php foreach ( $mahasiswa as $mhs ) : ?>
<ul>
    <li>
        <img src="img/vita.jpg">
    <li>Nama : <?= $mhs["nama"]; ?></li>
    <li>NRP: <?= $mhs["nrp"]; ?></li>
    <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
    <li> Email<?= $mhs["email"]; ?></li>
    

</ul>
<?php endforeach; ?>

    
    


