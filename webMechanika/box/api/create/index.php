<?php
require __DIR__.'/../../bootstrap.php';

    // get the raw POST data
    $rawData = file_get_contents("php://input");
    $rawData = json_decode($rawData, 1);
    $bannanas = $rawData['count'] ?? 0;
    $bannanas = (int) $bannanas;
    create($bannanas); // sukuria

    /// GENERUOJAM PAKESTa PUSLAPIO VIETA
    ob_start(); // jungiam buferi

    foreach(readData() as $box) : ?>
        <li style="padding: 10px;">
        <span>ID: <?= $box['id'] ?></span> 
        <span>Count: <?= $box['bananai'] ?></span>
        <a class="btn btn-outline-success" href="<?= URL ?>update.php?id=<?= $box['id'] ?>">EDIT</a>
        <form style="display:inline-block;" action="<?= URL ?>delete.php?id=<?= $box['id'] ?>" method="post">
        <button type="submit" class="btn btn-outline-danger">DELETE</button>
        </form>
        </li>
    
    <?php endforeach;

    $page = ob_get_contents(); // ispilam buferi i kintama
    ob_end_clean();// trinam ir naikinam buferi

    header('Content-Type: application/json');

    $answer = ['msg' => 'OK', 'page' => $page];

    echo json_encode($answer);





_d($_POST, 'alio post');