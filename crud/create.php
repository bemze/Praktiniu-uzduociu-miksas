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
    <h1>NEW Bananu deze</h1>
    <a href="<?= URL ?>create.php">Create</a>
    

    <form action="<?= URL ?>create.php" method="post">
    Bananai in: <input text= "text" name="count">
    <button type= "submit"></button>
    
    
    </form>
    
    




</body>
</html>