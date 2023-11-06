<?php

$spaceinvaders_code = file_get_contents("./Games/SpaceInvaders.py");



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pyscript.net/latest/pyscript.css" />
    <script defer src="https://pyscript.net/latest/pyscript.js"></script>
    <title>Document</title>
    <py-env>
        - pygame
    </py-env>
</head>
<body>



    <py-script>
        <?php

        echo $spaceinvaders_code;

        ?>
    </py-script>
</body>
</html>