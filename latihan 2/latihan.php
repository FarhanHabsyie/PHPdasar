<?php
//pengulangan pada array
// for / foreach
$angka = [3,2,4,11,44,55,66,8]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan</title>
    <style>
        div {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
    </style>
</head>
<body>

<?php for( $i = 0; $i < count($angka); $i++) {?>
    <div><?php echo $angka[$i]; ?></div>
<?php } ?>

</body>
</html>