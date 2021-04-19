<?php
// _d($_GET);
// _d($_POST);
_d($_SERVER['REQUEST_METHOD']); // susideti visokius daiktus, kokius norime,  siuo atveju, tikrinam formos metoda (28, 33 eilutes)


// // tikrinimas pagal masyvo tustuma
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $color = '#fee227'; 
} elseif ($_SERVER['REQUEST_METHOD'] == 'GET') {

    $color = '#00ff00';

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nr6</title>
</head>

<body style="background:<?= $color?>;">
<form action="" method="get">
   
    <button type="submit" >GET</button>

</form>
<form action="" method="post">
   
    <button type="submit" >POST</button>

</form>
<!-- <form action="" method="get">
   
    <button type="submit" name="post">POST</button>

</form> -->



</body>

</html>