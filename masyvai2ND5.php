<h1>Namu darbai 2021 02 18 Masyvai 2</h1>
<?php
echo '<br>';
echo '<h2>1 užduotis </h2>';
echo '<br>';
// Sugeneruokite masyvą iš 10 elementų, kurio elementai būtų masyvai 
// iš 5 elementų su reikšmėmis nuo 5 iki 25.
echo '<pre>';

$array = [];

foreach (range(1, 10) as $index1 => $_) {
    foreach (range(1, 5) as $index2 => $_) {
        $array[$index1][$index2] = rand(1, 100);
    }
}

echo '<pre>';
print_r($array);
_d($array);

?>

<?php
echo '<br>';
echo '<h2>2 užduotis </h2>';
// Naudodamiesi 1 uždavinio masyvu:
// a Suskaičiuokite kiek masyve yra elementų didesnių už 10;
// b Raskite didžiausio elemento reikšmę;
// c Suskaičiuokite kiekvieno antro lygio masyvų su vienodais 
// indeksais sumas (t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.)
// d Visus masyvus “pailginkite” iki 7 elementų
// e Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą 
// atskirai ir sumas panaudokite kaip reikšmes sukuriant naują masyvą. 
// T.y. pirma naujo masyvo reikšmė turi būti lygi mažesnio masyvo, turinčio 
// indeksą 0 dideliame masyve, visų elementų sumai 

echo " ---------A dalis--------" . '<br>';

$count = 0;
foreach ($array as $mazasMasyvas) {
    foreach ($mazasMasyvas as $mazo_masyvo_reiksmes);
    if (10 < $mazo_masyvo_reiksmes) {
        $count++;
    }
}

// echo "Masyve yra reiksmiu > 10: <p style='color: red'> $count</p>";


echo " ---------B dalis--------" . '<br>';

$masyvas1 = [];
foreach ($array as $mazasMasyvas) {
    $masyvas1[] = max($mazasMasyvas);
}
print_r($masyvas1);
echo max($masyvas1);

// echo "Masyve diziausia reiksme : <p style='color: red'>$max</p>";
echo " ---------C dalis--------" . '<br>';

$suma = [];

foreach ($array as $array_inside) {
    foreach ($array_inside as $key2 => $value) {
        if (!isset($suma[$key2])) {
            $suma[$key2] = 0;
        }
        $suma[$key2] += $value;
    }
}

// print_r($suma);
echo " ---------D dalis--------<br>";


//masyvo prailginimas

foreach ($array as $key1 => $_) {
    foreach (range(1, 7) as $key2 => $_) {
        if ($key2 >= 5) {
            $array[$key1][] = rand(1, 5);
        }
    }
}

echo "------- ta geresne D dalis-------<br>";




foreach ($array as  &$innerArray ) {
    while (count($innerArray) < 7) {
        $innerArray[] = rand(1, 5);
    }
}

// print_r($array);
echo " ---------E dalis--------" . '<br>';
// Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą

foreach ($array as $key) {

    $array2[] = array_sum($key);
}
print_r($array2);
echo '<br>';



?>
<?php
echo '<br>';
echo '<h2>3 užduotis </h2>';
// Sukurkite masyvą iš 10 elementų. Kiekvienas masyvo elementas 
// turi būti masyvas su atsitiktiniu kiekiu nuo 2 iki 20 elementų. 
// Elementų reikšmės atsitiktinai parinktos raidės iš intervalo A-Z.
//  Išrūšiuokite antro lygio masyvus pagal abėcėlę (t.y. tuos kur su raidėm).
$array3 = [];
for ($i = 0; $i < 5; $i++) {
    // $array3[$i] = [];
    for ($x = 0; $x < rand(2, 10); $x++) {
        $array3[$i][$x] = chr(rand(65, 90));
    }
    sort($array3[$i]);
}



print_r($array3);



// for ($i=0; $i <count($array3) ; $i++) { 
//     for ($k=0; $k <count($array3[$i]) ; $k++) { 
//        echo $array3[$i][$k].", ";
//     }
//     echo "<br>";
// }

// for ($i=0; $i <count($array3) ; $i++) { 
//     $vidinisMasyvas = $array3[$i];
//     for ($k=0; $k < count($vidinisMasyvas) ; $k++) { 
//         $letter = $vidinisMasyvas[$k];
//        echo $letter.", ";
//     }
//     echo "<br>";
// }

// foreach ($array3 as  $vidinisMasyvas) {
//     foreach ($vidinisMasyvas as $letter) {
//     echo $letter.", ";
//     }
//     echo "<br>";
// }
// $count = 0;
// foreach ($array3 as  $vidinisMasyvas) {
//     if($count>4){
//         break;
//     }
//     $count++;
//     foreach ($vidinisMasyvas as $letter) {
//     echo $letter.", ";
//     }
//     echo "<br>";
// }

foreach ($array3 as &$vidinisMasyvas) {
    sort($vidinisMasyvas);
}

// print_r($array3);

?>

<?php
echo '<br>';
echo '<h2>4 užduotis </h2>';
// Išrūšiuokite trečio uždavinio pirmo lygio masyvą taip, 
// kad elementai kurių masyvai trumpiausi eitų pradžioje.

// sort ($array3);
// print_r($array3);

?>

<?php
echo '<br>';
echo '<pre>';
echo '<h2>5 užduotis </h2>';
// Sukurkite masyvą iš 30 elementų. Kiekvienas masyvo elementas yra masyvas
//  [user_id => xxx, place_in_row => xxx] user_id atsitiktinis unikalus 
//  skaičius nuo 1 iki 1000000, place_in_row atsitiktinis skaičius 
//  nuo 0 iki 100. 

$userArray = [];
for ($i = 0; $i < 6; $i++) {
    //1.susikuri random user_id
    $random_user = uniqid(rand(1, 1000000));
    $random_user1 = bindec($random_user);
    //2.pereini per visus userius ir tikrini ar nesikartoja. 

    //3.jei pasikartojo back to stage one.  
    //4. jei unikalus tada dedam i userArray
    $userArray[] = ["user_id" => $random_user, "place_in_row" => rand(0, 100)];
    // $userArray[] = ["user_id" => 4, "place_in_row" => 4];
    // if($userAray["user_id"]==" kazkas kazkaip"){
    //     temp = $userArray[i]
    //     $userArray[i] =  $userArray[i+1]
    //     $userArray[i+1] = temp
    // }
}



// print_r($userArray);
?>


<?php
echo '<br>';
echo '<h2>6 užduotis </h2>';
// Išrūšiuokite 5 uždavinio masyvą pagal user_id didėjančia tvarka. 
// Ir paskui išrūšiuokite pagal place_in_row mažėjančia tvarka.
usort($userArray, function ($a, $b) {
    return $a["user_id"] <=> $b["user_id"];
});

echo "-----------------pagal USER ID.<br>";
// print_r($userArray);

usort($userArray, function ($a, $b) {
    return $b['place_in_row'] <=> $a['place_in_row'];
});
echo "-----------------pagal PLACE IN ROW.<br>";
// print_r($userArray);
// 
?>

<?php
echo '<br>';
echo '<h2>7 užduotis </h2>';
// Prie 6 uždavinio masyvo antro lygio masyvų pridėkite dar du
//  elementus: name ir surname. Elementus užpildykite stringais iš 
//  atsitiktinai sugeneruotų lotyniškų raidžių, kurių ilgiai nuo 5 iki 15.



for ($i = 0; $i < count($userArray); $i++) {
    $ilgis_stringo = rand(5, 15);
    $ilgis_stringo1 = rand(5, 15);
    $randomletter = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"), 0, $ilgis_stringo);
    $randomletter1 = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"), 0, $ilgis_stringo1);
    // $raides[] = str_split('zxcvbnmasdfghjklqwertyuiop');

    $userArray[$i]['name'] = $randomletter;
    $userArray[$i]['surnaname'] = $randomletter1;
}


// print_r($userArray);
?>

<?php
echo '<br>';
echo '<h2>8 užduotis </h2>';
// Sukurkite masyvą iš 10 elementų. Masyvo reikšmes užpildykite 
// pagal taisyklę: generuokite skaičių nuo 0 iki 5. 
// Ir sukurkite tokio ilgio masyvą. Jeigu reikšmė yra 0 masyvo nekurkite.
//  Antro lygio masyvo reikšmes užpildykite atsitiktiniais
// skaičiais nuo 0 iki 10. Ten kur masyvo nekūrėte reikšmę nuo 0 iki 10 
// įrašykite tiesiogiai.

$array10 = [];
for ($i = 0; $i < 10; $i++) {

    $sk = rand(0, 5);


    for ($x = 0; $x < $sk; $x++) {
        $sk2 = rand(0, 10);
        $array10[$i][$x] = $sk2;
    }
    if ($sk == 0) {
        $array10[$i] = ["Ivestas skaicius"];  // Jeigu reikšmė yra 0 masyvo nekurkite. 
    }
}

print_r($array10);


?>

<?php
echo '<br>';
echo '<h2>9 užduotis </h2>';
// Paskaičiuokite 8 uždavinio masyvo visų reikšmių sumą ir išrūšiuokite
//  masyvą taip, kad pirmiausiai eitų mažiausios masyvo reikšmės 
//  arba jeigu reikšmė yra masyvas, to masyvo reikšmių sumos.

sort($array10);  //isrusiavimas pagal masyvo ilgi

print_r($array10);
foreach ($array10 as $vidinis) {
    // if ($key == 0) {
    //     continue;
    //     echo " nebuvo kurtas masyvas";     //kaip ivesti patikrinima, kad neskaiciuotu sumos, jei masyvas nebuvo kurtas.

    // }
    if(array_sum($vidinis)==0){
        $array10A[] = "nebuvo kurtas masyvas";
    }else{
        $array10A[] = array_sum($vidinis);
    }
}

echo 'masyvo visų reikšmių suma: .<br>';
print_r($array10A);

foreach ($array10A as $vidinis) {

    sort($array10A);
}
echo "pirmiausiai eitų mažiausios masyvo reikšmės .<br> ";
print_r($array10A);


echo '<br>';



?>
<?php
echo '<br>';
echo '<h2>10 užduotis </h2>';
// Sukurkite masyvą iš 10 elementų. Jo reikšmės masyvai iš 10 elementų. 
// Antro lygio masyvų reikšmės masyvai su dviem elementais value ir color. 
// Reikšmė value vienas iš atsitiktinai parinktų
//  simbolių: #%+*@裡, o reikšmė color atsitiktinai sugeneruota
//   spalva formatu: #XXXXXX. Pasinaudoję masyvų 
//   atspausdinkite “kvadratą” kurį sudarytų masyvo reikšmės nuspalvintos 
//   spalva color.

$array11 = [];

foreach (range(0, 10) as $key => $_) {
    foreach (range(1, 11) as $key1 => $_) {
        $symbol = ['#', '%', '+', '*', '@', '裡'];
        $color = dechex(rand(0x000000, 0xFFFFFF));
        $array11[$key][$key1] = ['value' => $symbol[rand(0, 5)], 'color' => $color];
    }
}

print_r($symbol);
print_r($array11);

for ($i = 0; $i < count($array11); $i++) {
    for ($j = 0; $j <  count($array11[$i]); $j++) {
        echo "<span style='color:".  $array11[$i][$j]["color"]  ."; padding:5px';> ". $array11[$i][$j]["value"]."</span>";
    }
    echo '<br>';
}
// for ($i = 0; $i < count($array11); $i++) {
//     for ($j = 0; $j <  count($array11[$i]); $j++) {
        
//        foreach ($array11[$i][$j] as $key => $value) {
//            //echo $key .$value."<br>";
//            echo "<span style='color:".  $array11[$i][$j][$key]  ."; padding:5px';> ". $array11[$i][$j]["value"]."</span>";
//         }
//     }
//     echo '<br>';
// }


?>