<?php require DIR . 'views/top.php' ?>

<h1><?= $pageTitle ?></h1>
<?php require DIR . 'views/menu.php' ?>




<form action="<?= URL ?>update/<?=$box -> id?>" method="post">
    Bananu dezeje: <input type="text" name="count" value = "<?= $box -> bananas ?>">
    <button type="submit">Update</button>
</form>


<?php require DIR . 'views/bottom.php' ?>