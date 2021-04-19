<?php

_d($_GET);
if (isset($_GET['spalva'])) {
    $color = $_GET['spalva'];
   }


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nr3</title>
</head>

<body style="background:#<?= $color ?>;">

    <form action="" method="get">
    <!-- /*paraso i URL po ? spalva*/ -->
        <input type="text" name="spalva">   
        <button type="submit">PUSH</button>

    </form>

</body>

</html>

<!-- <a href="http://localhost/projektai/nd/webMechanika/nd/nr2.php" style='color:aqua'>Index</a> -->