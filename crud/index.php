<?php
require __DIR__.'/bootstrap.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dezes</title>
</head>
<body>
    <h1>Bananu deze</h1>
    <a href="<?= URL ?>create.php">Create</a>
    <a href="<?= URL ?>private.php">Private</a>


    <ul>
    
    <?php foreach(readData() as $box) : ?>
        <li>
        <span> ID: <?= $box['id']?> </span>
        <span> ID: <?= $box['bannana']?> </span>
        </li>


    <? endforeach ?>
    </ul>
    
    




</body>
</html>