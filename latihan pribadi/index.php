<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .warna_baris{
            background-color: skyblue;
        }
    </style>
</head>
<body>
    <table border="1" cellpadding="10" cellspasing="1">
        <?php for ($i = 1; $i <= 5; $i++) : ?>
            <?php if ($i % 2 == 1) : ?>
                <tr class="warna_baris">
            <?php else : ?>
                <tr>
            <?php endif ?>
                <?php for ($j = 1; $j <= 5; $j++) : ?>
                    <td><?="$i,$j";?></td>
                <?php endfor; ?>
            </tr>
            <?php endfor; ?>
    </table>
    
</body>
</html>