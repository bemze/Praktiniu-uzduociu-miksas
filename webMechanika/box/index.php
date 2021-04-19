<?php 
require __DIR__.'/bootstrap.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="style.css?ver=<?= time() ?>"> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous"></script>
    <script> const uriPath = '<?= URL ?>';</script>
    <script src="<?= URL ?>app.js" defer></script>
    <title>Bananu dezes</title>
</head>
<body>
    <h1>Bananu dezes</h1>
    <a href="<?= URL ?>create.php">Create</a>
    <a href="<?= URL ?>">Index</a>
    <ul id="list">
    <?php foreach(readData() as $box) : ?>
        <li style="padding: 10px" >
        <span>ID: <?= $box['id'] ?> </span>
        <span>Kiekis: <?= $box['bananai'] ?> </span>
        <a href="<?= URL ?>update.php?id=<?= $box["id"] ?>" class="btn btn-info">EDIT</a>
        <form  style="display:inline-block" action="<?= URL ?>delete.php?id=<?= $box["id"] ?>" method="post">
        <button type="submit" class="btn btn-danger">DELETE</button>

        </form>
        </li>
    <?php endforeach ?>
    </ul>

    <div style="padding: 26px; border: solid 1px; margin: 20px">
    Bananu dezeje: <input type="text" id="count">
    <button class="btn btn-info" type="button">Create</button>
    </div>

</body>
</html>