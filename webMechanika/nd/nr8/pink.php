<?php

//tikrina, ar po ? nera tuscia, jei nera - nukreipia i psl rose su papildomu parametru. 
if (!empty($_POST)) {
    header('location:rose.php?perradresavimas');
    die;
   } 

?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nr8</title>
</head>
<body style="background:pink;">


<form action="rose.php" method="post">
    <!-- /*paraso i URL po ? spalva*/ -->
        <!-- <input type="text" name="spalva">    -->
        <button type="submit" name="spalva">GO TO ROSE</button>

    </form>


   
</body>
</html>