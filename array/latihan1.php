<?php
$mahasiswa = ["abdull rahman", 012345, "Informatika", "abdullrahman@ft.unbara.ac.id"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
</head>
<body>
    <?php for ($m = 0; $m < 4; $m++) { ?>
        <li>
            <?php echo $mahasiswa[$m];  ?>
        </li>
    <?php }  ?>


    <hr>
    <h1>Mahasiswa</h1><ul>

    <?php foreach ($mahasiswa as $m) : ?>

        <li><?= $m; ?></li>
    <?php endforeach ; ?>

</body>
</html>