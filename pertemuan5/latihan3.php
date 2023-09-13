<?php
$mahasiswa =[
 ["Vita Mirfatun" , "0123456", "Rekayasa Perangkat Lunak", "vitamirfatun@gmail.com"],
["Ahmad Maulana" , "05678912", "Teknik Industri", "ahmadlana@gmail.com"],
["Isma Mufidatul" , "0234561", "Teknik Informatika", "ismamufida@gmail.com"]
];

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
    <li>Nama : <?= $mhs[0]; ?></li>
    <li>NRP: <?= $mhs[1]; ?></li>
    <li>Jurusan : <?= $mhs[2]; ?></li>
    <li> Email<?= $mhs[3]; ?></li>
    

</ul>
<?php endforeach; ?>