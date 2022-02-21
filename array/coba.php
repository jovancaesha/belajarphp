<?php

$hari = ["senin","selasa","rabu","kamis","jumat","sabtu"];

var_dump ($hari);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belajar array pada php</title>
</head>
<body>
    <?php for ($i = 0; $i < 7; $i++) { ?>
        <li>
            <?php echo $hari[$i];  ?>
            </li>
    <?php }  ?>

</body>
</html>



