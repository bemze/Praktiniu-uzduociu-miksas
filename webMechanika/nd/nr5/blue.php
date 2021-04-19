<?php
 _d($_GET);
 //jei po ? yra nuoroda, perradresuoja i nurodyta puslapi
 if(isset($_GET['nuoroda'])){
    header('location:http://localhost/projektai/nd/webMechanika/nd/nr5/red.php');
    die;

//kaip  pagauna GET linkas 20 eilute?
//kaip viskas veikia?

 }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nr5</title>
</head>

<body style="background:blue;">
<a style="color:yellow;" href="?nuoroda">BLUE</a>
</body>

</html>


