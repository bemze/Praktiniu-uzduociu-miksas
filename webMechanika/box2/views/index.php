
  <?php require DIR.'views/top.php'?>

<h1><?= $pageTittle ?></h1>
<?php require DIR.'views/menu.php'?>

    <ul id="list">
    <?php foreach($boxes as $box) : ?>
        <li style="padding: 10px" >
        <span>ID: <?= $box->id ?> </span>
        <span>Kiekis: <?= $box -> bananas ?> </span>
        <a href="<?= URL ?>edit/<?= $box->id ?>" class="btn btn-info">EDIT</a>
        <form  style="display:inline-block" action="<?= URL ?>delete/<?= $box->id ?>" method="post">
        <button type="submit" class="btn btn-danger">DELETE</button>

        </form>
        </li>
    <?php endforeach ?>
    </ul>
<!-- 
    <div style="padding: 26px; border: solid 1px; margin: 20px">
    Bananu dezeje: <input type="text" id="count">
    <button class="btn btn-info" type="button">Create</button>
    </div> -->

    <?php require DIR.'views/bottom.php'?>