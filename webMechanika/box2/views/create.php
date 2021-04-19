<?php require DIR . 'views/top.php' ?>

<h1><?= $pageTittle ?></h1>
<?php require DIR . 'views/menu.php' ?>




<form action="<?= URL ?>store" method="post">
    Bananu dezeje: <input type="text" name="count">
    <button type="submit">Create</button>
</form>


<?php require DIR . 'views/bottom.php' ?>