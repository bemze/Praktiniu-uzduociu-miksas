<?php
include "Api.php";
include "Json.php";
// echo "llllllllll";
$json = new Json();
// $json -> readData();

$labas = "Namas";
$json -> writeData($labas);
// var_dump($json);
$api = new Api();

// $api::$senesnis;
// echo Api::$senesnis;
print_r( $api ->valiutuApi());

$json -> writeData("jggggggggggggggggggh");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API valiutos</title>
</head>
<body>

<?php foreach ($json -> readData() as $key) : ?>
<?php foreach ((array)Api::valiutuApi() -> name as $key => $auksas ) { ?>
    <h1><?= $json -> writeData($auksas)?> </h1>


<?php   
    }
?>
<?php endforeach ?>
</body>
</html>



