<h1>Namu darbai 2021 02 08</h1>
<?php
echo '<pre>';
echo '<h2>1 užduotis </h2>';
echo '<pre>';
$vardas = 'Mantas';
$pavarde = 'Zabiela';
$gim_metai = 1984;
$einamieji_metai = 2021;

$mano_amzius = $einamieji_metai - $gim_metai;


echo " As esu $vardas $pavarde. Man yra $mano_amzius metai ";
?>
<?php

echo '<pre>';
echo '<h2>2 užduotis </h2>';
echo '<pre>';

// Naudokite funkcija rand(). Sukurkite du kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 4. Didesnę reikšmę padalinkite iš mažesnės. Atspausdinkite rezultatą jį suapvalinę iki 2 skaičių po kablelio.


$pirmas = rand(0, 4);
$antras = rand(0, 4);


echo $pirmas;
echo '<br>';
echo $antras;
echo '<br><br>';



if ($pirmas > $antras) {
    if ($antras == 0) {
        echo 'Dalyba is 0 negalima';
    } elseif (true) {
        $atsakymas = round($pirmas / $antras, 2);
        echo "Jei pirmas skaicius didesnis, tai ($pirmas / $antras) atsakymas $atsakymas";
    }
} elseif ($pirmas == $antras) {
    echo 'Jei skaiciai lygus, atsakymas bus 1';
} elseif ($pirmas == 0) {
    echo "Nulis padalinta is $antras yra 0";
} elseif ($pirmas < $antras) {

    $atsakymas2 = round($antras / $pirmas, 2);
    echo "Jei antras skaicius didesnis, tai ($antras / $pirmas) atsakymas $atsakymas2";
} 



?>

<?php

echo '<pre>';
echo '<h2>3 užduotis </h2>';
echo '<pre>';
// Naudokite funkcija rand(). Sukurkite tris kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 25. Raskite ir atspausdinkite kintąmąjį turintį vidurinę reikšmę.



$pirmas = rand(0, 25);
$antras = rand(0, 25);
$trecias = rand(0, 25);
print $pirmas;
echo '<br>';
print $antras;
echo '<br>';
print $trecias;

echo '<br>';
echo 'vidurinis skaicius:';

if ($pirmas < $antras && $pirmas > $trecias || $pirmas > $antras && $pirmas < $trecias) {
    echo $pirmas;
} elseif ($antras > $pirmas && $antras < $trecias || $antras < $pirmas && $antras > $trecias) {
    echo $antras;
} elseif ($trecias > $pirmas && $antras > $trecias || $trecias < $pirmas && $trecias > $antras) {
    echo $trecias;
} else {
    echo 'Lygiu skaiciu nelyginau';
}
?>
<?php
echo '<pre>';
echo '<h2>4 užduotis </h2>';
echo '<pre>';
// Įvedami skaičiai -a, b, c –kraštinių ilgiai, trys kintamieji (naudokite ​rand()​ funkcija nuo 1 iki 10). Parašykite PHP programą, kuri nustatytų, ar galima sudaryti trikampį ir atsakymą atspausdintų. 

$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1, 10);

echo '<br>';

// a+b>c. a+c>b. b+c>a. 
echo " 1 krastine $a <br> 2 krastine $b <br> 3 krastine $c";
echo '<br>';
if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
    echo ' Trikambis susidaro';
} else {
    echo '<br>';
    echo ' Nesusidaro trikampis';
}
?>
<?php
echo '<pre>';
echo '<h2>5 užduotis </h2>';
echo '<pre>';
// Sukurkite keturis kintamuosius ir ​rand()​ funkcija sugeneruokite jiems 
// reikšmes nuo 0 iki 2. Suskaičiuokite kiek yra nulių, vienetų ir dvejetų. (sprendimui masyvo nenaudoti).

$a = rand(0, 2);
$b = rand(0, 2);
$c = rand(0, 2);
$d = rand(0, 2);
echo '<pre>';
echo " kintamasis 1: $a  <br> kintamasis 2: $b <br> kintamasis 3: $c <br> kintamasis 4: $d ";

$nulis = 0;
if ($a == 0)
    $nulis++;
if ($b == 0)
    $nulis++;
if ($c == 0)
    $nulis++;
if ($d == 0)
    $nulis++;

echo '<br>';

echo " viso nuliu  yra $nulis";
echo '<br>';

$vienas = 0;
if ($a == 1)
    $vienas++;
if ($b == 1)
    $vienas++;
if ($c == 1)
    $vienas++;
if ($d == 1)
    $vienas++;
echo " viso vienetu  yra $vienas";
echo '<br>';

$du = 0;
if ($a == 2)
    $du++;
if ($b == 2)
    $du++;
if ($c == 2)
    $du++;
if ($d == 2)
    $du++;
echo " viso dvejetu  yra $du";
echo '<br>';
?>

<?php

echo '<h2>6 užduotis </h2>';

// Naudokite funkcija rand(). Sugeneruokite atsitiktinį skaičių nuo 1 iki 6 ir jį atspausdinkite atitinkame h tage. Pvz skaičius 3- rezultatas: <h3>3</h3>
$atsitiktinis_skaicius = rand(1, 6);
print " <h3>atsitiktinis skaicius: $atsitiktinis_skaicius </h3> ";
?>

<?php
echo '<h2>7 užduotis </h2>';

// Naudokite funkcija rand(). Atspausdinkite 3 skaičius nuo -10 iki 10. Skaičiai mažesni už 0 turi būti žali, 0 - raudonas, didesni už 0 mėlyni. 

$skaicius1 = rand(-10, 10);
$skaicius2 = rand(-10, 10);
$skaicius3 = rand(-10, 10);

if ($skaicius1 < 0) {
    echo " <h4 style = color:green;> skaicius $skaicius1 < 0, todel jis zalias </h4>";
} elseif ($skaicius2 == 0) {
    echo " <h4 style = color:red;> skaicius $skaicius2 = 0, todel jis raudonas </h4>";
} elseif ($skaicius3 > 0) {
    echo " <h4 style = color:blue;> skaicius $skaicius3 > 0, todel jis melynas </h4>";
}
?>

<?php
echo '<h2>8 užduotis </h2>';
// Įmonė parduoda žvakes po 1 EUR. Perkant daugiau kaip už 1000 EUR taikoma 3 % nuolaida, daugiau kaip už 2000 EUR - 4 % nuolaida. Parašykite programą, kuri skaičiuos žvakių kainą ir atspausdintų atsakymą kiek žvakių ir kokia kaina perkama. Žvakių kiekį generuokite ​rand()​ funkcija nuo 5 iki 3000.

$zvakes = rand(5, 3000);

if ($zvakes >= 2000) {
    $kaina1 = 0.96;
    $suma = $zvakes * $kaina1;
    echo " jei perki $zvakes zvakiu, tau reikia sumoketi ($zvakes * $kaina1) viso $suma EUR";
} elseif ($zvakes >= 1000) {
    $kaina2 = 0.97;
    $suma = $zvakes * $kaina2;
    echo " jei perki $zvakes zvakiu, tau reikia sumoketi ($zvakes * $kaina2) viso $suma EUR";
} else {
    $kaina3 = 1;
    $suma = $zvakes * $kaina3;
    echo " jei perki $zvakes zvakiu, tau reikia sumoketi ($zvakes * $kaina3) viso $suma EUR";
}

?>
<?php
echo '<h2>9 užduotis </h2>';
// Naudokite funkcija rand(). Sukurkite tris kintamuosius su atsitiktinėm reikšmėm nuo 0 iki 100. Paskaičiuokite jų aritmetinį vidurkį. Ir aritmetinį vidurkį atmetus tas reikšmes, kurios yra mažesnės nei 10 arba didesnės nei 90. Abu vidurkius atspausdinkite. Rezultatus apvalinkite iki sveiko skaičiaus.

$a = rand(0, 100);
$b = rand(0, 100);
$c = rand(0, 100);
$vidurkis = round(($a + $b + $c) / 3);

echo "Kintamuju vidurkis ($a + $b + $c) / 3 yra lygus $vidurkis";

if ($a  < 10 || $a > 90) {
    $a = 0;
}
if ($b  < 10 || $b > 90) {
    $b = 0;
}
if ($c  < 10 || $c > 90) {
    $c = 0;
}

$vidurkis1 = round(($a + $b + $c) / 3);
echo '<br>';
echo "Jei kintamuju reiksmes < 10 arba  > 90 , tai vidurkis butu lygus ($a + $b + $c) / 3 = $vidurkis1";
?>
<?php
echo '<h2>10 užduotis </h2>';
// Padarykite skaitmeninį laikrodį, rodantį valandas, minutes ir sekundes. Valandom, minutėm ir sekundėm sugeneruoti panaudokite funkciją rand(). Sugeneruokite skaičių nuo 0 iki 300. Tai papildomos sekundės. Skaičių pridėkite prie jau sugeneruoto laiko. Atspausdinkite laikrodį prieš ir po sekundžių pridėjimo ir pridedamų sekundžių skaičių.

$valandos = rand(0, 23);
$minutes = rand(0, 59);
$sekundes = rand(0, 59);

$laikrodis = "laikrodis: $valandos val $minutes min $sekundes sek";

$papildomos_sekundes = rand(0, 300);
echo $laikrodis;
echo '<br>';
echo $papildomos_sekundes;



// echo $laikas_sekundemis;

$naujas_laikrodis = ($sekundes + $papildomos_sekundes)+($minutes + $sekundes)+ ($valandos + $minutes);

$laikas_sekundemis = strtotime($naujas_laikrodis);



echo '<br><br><br>';
echo date( $naujas_laikrodis);


// if ($papildomos_sekundes <= 59) {
//     $sekundes += $papildomos_sekundes;
//    if ($minutes )
//     if ($sekundes <= 59) {
//         $minutes++;
//         if ($minutes <= 59) {
//             $valandos++;
//         }
//     }
// }
// $adate="Tue Jan 4 07:59:59 2011";
// $duration=674165;
// $dateinsec=strtotime($adate);
// $newdate=$dateinsec+$duration;
// echo date('D M H:i:s Y',$newdate);


// echo '<br>';
// echo "$papildomos_sekundes papildomos sek";
// echo '<br>';
// echo "laikrodis rodo: $valandos val $minutes min $sekundes sek";


