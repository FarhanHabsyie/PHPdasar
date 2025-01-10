<?php
$mahasiswa = [
    ["Farhan Habsyie", "1123102151", "Teknik informatika", "farhanhabsyee7@gmail.com"],
    ["Fadhil kumar", "1123102148", "Teknik informatika", "fadhilkumar@gmail.com"]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <ul>
        <?php foreach( $mahasiswa as $mhs ) : ?>
           <li>Nama :<?=$mhs[0];?></li>
           <li>Nim :<?=$mhs[1];?></li>
           <li>Jurusan :<?=$mhs[2];?></li>
           <li>Email :<?=$mhs[3];?></li>
        <?php endforeach ; ?>
    </ul>
</body>
</html>