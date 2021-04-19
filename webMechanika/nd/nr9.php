<!-- //destytojo sprendimas, apacioje mano -->
<?php

$color = '#000';
$rand = rand(3, 10);
$letters = range('A', 'J');
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $color = '#fff'; 
}
//---------- Visi headeriai iki sitos linijos ----------------
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>U-9</title>
</head>
<body style="background:<?= $color ?>">

<?php if($_SERVER['REQUEST_METHOD'] !== 'POST') : ?>

    <form action="http://localhost/projektai/nd/webMechanika/nd/nr9.php" method="post">
        <?php foreach($letters as $key => $letter) : ?>
            <?php if($key+1 > $rand) break ?>
            <span style="color:pink;">
                <?= $letter ?>
            </span>
            <input type="checkbox" name="letters[]" value="<?= $letter ?>">
            <input type="hidden" name="count" value="<?= $rand ?>">
        <?php endforeach ?>
        <button type="submit" name="mmg">MYGTUKAS</button>
    </form>

<?php else: ?>

    <h1><?= count($_POST['letters']) ?> iš <?= $_POST['count'] ?></h1>
    <?php _d($_POST) ?>

<?php endif ?>
    
</body>
</html>



<!-- mano sprendimas -->
<!-- <?php
session_start();
if(isset($_SESSION['Rez'])) {
    $rez = $_SESSION['Rez'];
    unset($_SESSION['Rez']);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $color = '#fff';
   
} else {
    $color = '#000';
   
}

if(isset($_POST['btn'])) {
_d($_POST);
//jei nieko nepasirinkai
    if(empty($_POST['checks'])) {
        echo "Nieko nepasirinkai";
        die;
        // kitu atveju, jei pasirinkai, suskaiciuojam kiek pasirinkai;
    } elseif (!empty($_POST['checks']) && isset($_COOKIE['Visi-pasirinkimai'])) {
        $visiPasirinkimai = $_COOKIE['Visi-pasirinkimai'];
        $pasirinkimas = $_POST['checks'];
        $pasirinkimuSuma = 0;
        foreach($pasirinkimas as $key) {
            $pasirinkimuSuma++;
            
        }
        echo "viso buvo $visiPasirinkimai , tu pasirinkai: ".$pasirinkimuSuma;
        die;
        setcookie('Visi-pasirinkimai', $count, time()-50);

    }

}

$rand = rand(3, 10);
$letter =range('A','Z');
 
 //cia dar neikertu


// _d($_SESSION['Rez']);
?>

<?php foreach ($letter as $key => $raide) : ?>

    <?php endforeach ?> 


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nr9</title>
</head>

<body style="background:<?= $color ?>; color:red">

    <form action="" method="post"> 
        <button type="submit" name="btn" >POST</button>
        <?php 
$count = 0;
        for ($i=0; $i < $rand; $i++) { 
            echo $letter[$i]."<input  type='checkbox' name='checks[]' value = '1'>";
            $count++;
        }
setcookie('Visi-pasirinkimai', $count);

_d($_COOKIE);
        // foreach (range(1, rand(3, 10)) as $key) {
        //     print_r( $check = "<input  type='checkbox' name='checks'> $array[$key]");
        // } ?>

    </form>

</body>

</html> -->