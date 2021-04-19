<?php
    //apsauga nuo vartotoju, kad tik skaicius galetu ivesti i narsykle
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $a = (float) ($_POST['a'] ?? 0);
    $b = (float) ($_POST['b'] ?? 0);
    $sum = $a + $b;
    setcookie('Rezultatas', $sum);

    header('Location: http://localhost/projektai/nd/sumatorius.php');
    die;

}
if (isset($_COOKIE['Rezultatas'])) {
    $rez = $_COOKIE['Rezultatas'];
    setcookie('Rezultatas','', time()-60);
}
_d($_COOKIE);
?>
<!-- <?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $x = (float) ($_POST['x'] ?? 0);
    $y = (float) ($_POST['y'] ?? 0);

    $suma = $x + $y;

    setcookie('Rezultatas', $suma); 

    header('Location: http://localhost/zuikis/calc.php');
    die;
}

if (isset($_COOKIE['Rezultatas'])) {
    $rez = $_COOKIE['Rezultatas'];
    setcookie('Rezultatas', '', time() - 555); 
}

?> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sumatorius</title>
</head>

<body style='background:green';>
    <h1>Sumatorius</h1>
    <h3>Rezultatas: <?= $rez ?? '---' ?> </h3>
    <form action="sumatorius.php" method="post" >
        <input type="text" name="a">
        <input type="text" name="b">
        <button type="submit">SKAICIUOTI</button>

    </form>


</body>

</html>