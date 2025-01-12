<?php
$mahasiswa = [["Usman", "1123102151", "teknik informatika", "farhanhabsyee7@gmail.com"],
                ["han", "1123102152", "teknik informatika", "farhanhabsyee10@gmail.com"]];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar mahasiswa</h1>
    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>nama :<?= $mhs[0]; ?></li>
        <li>nim :<?= $mhs[1]; ?></li>
        <li>Jurusan ;<?= $mhs[2]; ?></li>
        <li>email :<?= $mhs[3]; ?></li>
    </ul>
    <?php endforeach ; ?>
</body>
</html>