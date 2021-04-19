<?php 
require __DIR__.'/bootstrap.php';


if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_GET['id'] ?? 0;
    $id = (int) $id;
    
    $bananas = $_POST['count'] ?? 0;
    $bananas = (int) $bananas;
    update($id, $bananas);
    header('Location: '.URL);
    die;
}

if($_SERVER['REQUEST_METHOD'] == 'GET') {
    $id = $_GET['id'] ?? 0;
    $id = (int) $id;
    $box = getBox($id);
    if(!$box) {
        header('Location: '.URL);
        die;
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atnaujinti</title>
</head>
<body>
    <h1>Atnaujinti dezes</h1>
    <a href="<?= URL ?>create.php">Create</a>
    <a href="<?= URL ?>">Index</a>
   
    <form action="<?= URL ?>update.php?id=<?= $box['id'] ?>" method="post">
   Atnaujinta bananu deze NR <?= $box['id'] ?> : <input type="text" name="count" value="<?= $box['bananai'] ?>">
    <button type="submit">Update</button>
    </form>
   

</body>
</html>