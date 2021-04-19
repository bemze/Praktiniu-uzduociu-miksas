<?php

_d($_GET);
if(isset($_GET['color'])) {
    $color = $_GET['color'];
// } elseif(isset($_GET['spalva'])) {
//     $color = $_GET['spalva'];
}   else {
    $color = "0000ff";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nr2</title>
</head>
<body style="background:#<?=$color?>;">
<a href="nr2.php" style='color:aqua'>Index</a>

</body>
</html>