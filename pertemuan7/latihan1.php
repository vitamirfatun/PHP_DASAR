<?php

$mahasiswa = [
    [
    "nama" => "Ahmad Maulana",
    "nrp" => "085815184876",
    "email" => "ahmadmaulana@gmail.com",
    "jurusan" => "Teknik Otomotif",
    "gambar" => "logoo.png"
],
[
"nama" => "Vita Mirfatun",
"nrp" => "085815184876",
"email" => "vitaa@gmail.com",
"jurusan" => "Teknik Informatika",
"gambar" => "logoo.png"



]
];

?>
<!DOCTYPE html>
<html >
<head>

<title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach ( $mahasiswa as $mhs ) : ?>
<li>   
    <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; 
    ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"];  ?>&gambar=<?= $mhs["gambar"];
     ?>"><?= $mhs["nama"]; ?></a>
</li>  

   


<?php endforeach; ?>
</ul>






