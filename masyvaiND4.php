<h1>Namu darbai 2021 02 17 Masyvai</h1>
<?php
echo '<br>';
echo '<h2>1 užduotis </h2>';
echo '<br>';
// Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29), 
// kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25.

$array = [];
for ($i = 0; $i < 30; $i++) {
    array_push($array, rand(5, 25)); //supusinam kur, ir ka;
}
echo '<pre>';
print_r($array);

?>

<?php
echo '<br>';
echo '<h2>2 užduotis </h2>';
// Naudodamiesi 1 uždavinio masyvu:
// a Suskaičiuokite kiek masyve yra reikšmių didesnių už 10;
// b Raskite didžiausią masyvo reikšmę;
// c Suskaičiuokite visų reikšmių sumą;
// d Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio masyvo reikšmes minus tos reikšmės indeksas;
// e Papildykite masyvą papildomais 10 elementų su reikšmėmis nuo 5 iki 25, kad bendras masyvas padidėtų iki 
// indekso 39;
// f Iš masyvo elementų sukurkite du naujus masyvus. Vienas turi būti sudarytas iš neporinių indekso reikšmių,
//     o kitas iš porinių;
// g Masyvo elementus su poriniais indeksais padarykite lygius 0 jeigu jie didesni už 15;
// h Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė didesnė už 10;
// i Naudodami funkciją unset() iš masyvo ištrinkite visus elementus turinčius porinį indeksą;

$array2 = $array;
echo " A dalis" . '<br>';
$count = 0;

foreach ($array2 as $value) {
    if ($value > 10) {
        $count++;
    }
}
echo "Masyve yra reiksmiu > 10: <p style='color: red'>$count</p>";
echo " B dalis" . '<br>';
$a = max($array2);
echo "Masyve diziausia reiksme : <p style='color: red'>$a</p>";
echo " C dalis" . '<br>';
$b = array_sum($array2);
echo "Masyvo visu reiksmiu suma : <p style='color: red'>$b</p>";
echo " D dalis" . '<br>';
$array2D = [];
foreach ($array as $key => $value) {
    $reiksmes = $value - $key;
    array_push($array2D, $reiksmes);
}
print_r($array2D);
echo " E dalis" . '<br>';
$array2E = [];
foreach (range(1, 10) as $value) {
    array_push($array2E, rand(5, 25));
}
print_r(array_merge($array, $array2E));
echo " F dalis" . '<br>';
$lyginisMasyvas = [];
$nelyginisMasyvas = [];
foreach ($array as $key => $value) {
    if ($key % 2 === 0) {   //poriniai masyvo indeksai
        array_push($lyginisMasyvas, $key);
    } else {
        array_push($nelyginisMasyvas, $key);
    }
}

print_r($lyginisMasyvas);
echo '<br>';
print_r($nelyginisMasyvas);
echo " G dalis" . '<br>';

foreach ($lyginisMasyvas as $key => $value) {
    if ($lyginisMasyvas[$key] > 15) {
        $keitimas = array($key => 0);
        $lyginisMasyvas = array_replace($lyginisMasyvas, $keitimas);
    }
}
print_r($lyginisMasyvas);

// for ($i = 0; $i < count($lyginisMasyvas); $i++) {
//     if ( $lyginisMasyvas[$i] > 15) {
//         $replacement = array($i => 0);
//         $lyginisMasyvas = array_replace($lyginisMasyvas, $replacement);
//     }
// }
// print_r($lyginisMasyvas);

echo " H dalis" . '<br>';
foreach ($array as $key => $value) {
    if ($array[$key] > 10) {
        $c = ($array[$key]);
        echo "<p style='color: red'>$c</p>";
        break;
    }
}
arr
echo '<br><br>';
echo " I dalis" . '<br><br>';
foreach ($array as $key => $value) {
    if (!($key & 1)){
         unset($array[$key]);
        }
}

print_r($array);

?>

<?php
echo '<br>';
echo '<h2>3 užduotis </h2>';
// Sugeneruokite masyvą, kurio reikšmės atsitiktinės raidės A, B, C ir D, o ilgis 200.
// Suskaičiuokite kiek yra kiekvienos raidės.

$array3 = [];
foreach (range(0, 50) as $key => $value) {
    $letters = chr(rand(65, 68));
    array_push($array3, $letters);
}

print_r($array3);
print_r(array_count_values($array3));    //suskaiciuoja kiek pasikartojanciu RAIDZIU

?>

<?php
echo '<br>';
echo '<h2>4 užduotis </h2>';
// Išrūšiuoki   te 3 uždavinio masyvą pagal abecėlę.

sort($array3);
print_r($array3);

?>

<?php
echo '<br>';
echo '<h2>5 užduotis </h2>';
// Sugeneruokite 3 masyvus pagal 3 uždavinio sąlygą. Sudėkite masyvus, sudėdami atitinkamas reikšmes.
//  Paskaičiuokite kiek unikalių reikšmių kombinacijų gavote.
$array5A = [];
$array5B = [];
$array5C = [];

foreach (range(0, 50) as $key => $value) {
    $letters = chr(rand(65, 68));
    array_push($array5A, $letters);
}
foreach (range(0, 50) as $key => $value) {
    $letters = chr(rand(65, 68));
    array_push($array5B, $letters);
}
foreach (range(0, 50) as $key => $value) {
    $letters = chr(rand(65, 68));
    array_push($array5C, $letters);
}

$array5D = [];
foreach (range(0, 50) as $key => $value) {
    $sumavimas_raidziu =$array5A[$key].$array5B[$key].$array5C[$key] ;
    array_push($array5D, $sumavimas_raidziu);
}
print_r($array5D);

$array5E = [];
foreach($array5D as $value) {
    if(!in_array($value,$array5E)) {
        array_push($array5E, $value);
    }
}

print_r($array5E);
echo " Unikaliu reiksmiu yra". count($array5E);
?>


<?php
echo '<br>';
echo '<h2>6 užduotis </h2>';
// Sugeneruokite du masyvus, kurių reikšmės yra atsitiktiniai skaičiai nuo 100 iki 999.
//  Masyvų ilgiai 100. Masyvų reikšmės turi būti unikalios savo masyve (t.y. neturi kartotis).
// $list1 = [];

// $list2 = [];



// for($i = 0; $i == $i; $i++) {​​​​

//     if(count($list1) === 100 && count($list2) === 100) {​​​​

//         break;

//     }​​​​

//     if(count($list1) != 100) {​​​​

//         $num1 = rand(100, 999);

//         if(!in_array($num1, $list1)) {​​​​

//             $list1[] = $num1;

//         }​​​​

//     }​​​​



//     if(count($list2) != 100) {​​​​

//         $num2 = rand(100, 999);

//         if(!in_array($num2, $list2)) {​​​​

//             $list2[] = $num2;

//         }​​​​

//     }​​​​

// }​​​​
$array1 = [];
$array2 = [];
for ($i = 0; $i < 20; $i++) {
    $element = rand(100, 150);
    array_push($array1, $element);
}
for ($i = 0; $i < 20; $i++) {
    $element = rand(100, 150);
    array_push($array2, $element);
    
}

$array3 = [];
$array4 = [];
foreach ($array1 as $value) {
    if (!in_array($value, $array3))
        array_push($array3, $value);
}
foreach ($array2 as $value) {
    if (!in_array($value, $array4))
        array_push($array4, $value);
}


echo '<br>';
print_r($array3);
echo '<br>';
print_r($array4);

?>

<?php
echo '<br>';
echo '<h2>7 užduotis </h2>';
// Sugeneruokite masyvą, kuris būtų sudarytas iš reikšmių, kurios yra pirmame 6 uždavinio masyve,
//  bet nėra antrame 6 uždavinio masyve.

print_r(array_diff($array1, $array2) );

?>

<?php
echo '<br>';
echo '<h2>8 užduotis </h2>';
// Sugeneruokite masyvą iš elementų, kurie kartojasi abiejuose 6 uždavinio masyvuose.

print_r(array_intersect($array1, $array2) );

?>

<?php
echo '<br>';
echo '<h2>9 užduotis </h2>';
// Sugeneruokite masyvą, kurio indeksus sudarytų pirmo 6 uždavinio masyvo reikšmės, 
// o jo reikšmės iš būtų antrojo masyvo.

print_r($array1);
print_r($array2);
echo'<br>';
print_r(array_combine($array1, $array2) );



?>
<?php
echo '<br>';
echo '<h2>10 užduotis </h2>';
// Sugeneruokite 10 skaičių masyvą pagal taisyklę: Du pirmi skaičiai- atsitiktiniai nuo 5 iki 25. 
// Trečias, pirmo ir antro suma. Ketvirtas- antro ir trečio suma. Penktas trečio ir ketvirto suma ir t.t.

$array10 = [];
for ($i=0; $i <10 ; $i++) { 
    if($i < 2) {
       $a= (rand(5,25));
        array_push($array10, $a);
    } elseif($i >= 2) {
        $array10[$i] = $array10[$i-1] + $array10[$i-2];  //fibonaci seka
        }        
    }

print_r($array10);
?>