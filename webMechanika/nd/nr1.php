<?php


_d($_GET);

//jei perduota informacija po ? yra color ir color=1, tai nusidazo raudonai, kitu atveju - black
if(isset($_GET['color']) && $_GET['color']==1 ) {
    $color = 'red';
} else {
    $color = 'black';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nr1</title>
</head>
<body style="background:<?php echo $color?>;">
    <a href="http://localhost\projektai\nd\webMechanika\nd\nr1.php">Black</a>
    <a href="http://localhost\projektai\nd\webMechanika\nd\nr1.php?color=1">Red</a>
</body>
</html>