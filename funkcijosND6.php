<h1>Namu darbai 2021 02 22 Funkcijos </h1>
<?php

echo '<h2>1 užduotis </h2>';
//  1.	Parašykite funkciją, kurios argumentas būtų tekstas, kuris yra įterpiamas į h1 tagą;

function insertH1Tag($a) //$a - argumentas.
{
    if (is_array($a)) {   //paturbinta, galima grazint ir stringa ir masyva
        $a = $a[0];
    }
    return "<h1 style='display: inline; color:red'>" . "$a" . '</h1>';
}

echo insertH1Tag('Labas');


echo '<h2>2 užduotis </h2>';
// 2.	Parašykite funkciją su dviem argumentais, pirmas argumentas tekstas, įterpiamas į h tagą, 
// o antrasis tago numeris (1-6). 
// Rašydami šią funkciją remkitės pirmame uždavinyje parašytą funkciją;

function insertH1Tag1($a, $b)
{
    if (is_array($a)) {   //paturbinta, galima grazint ir stringa ir masyva
        $a = $a[0];
    }
    return "<h$b style='color:red'>$a</h$b>";
}
echo insertH1Tag1('Labas', rand(1, 6));

echo '<h2>3 užduotis </h2>';

// 3.	Generuokite atsitiktinį stringą, pasinaudodami kodu md5(time()). 
// Visus skaitmenis stringe įdėkite į h1 tagą. Jegu iš eilės eina keli skaitmenys,
//  juos į tagą reikią dėti kartu (h1 atsidaro prieš pirmą ir užsidaro po paskutinio)
//  Keitimui naudokite pirmo uždavinio funkciją ir preg_replace_callback();


 echo $kodas = md5(time()).'<br>';

 $pakeistasKodas = preg_replace_callback('/\d+/', 'insertH1Tag', $kodas );

echo ($pakeistasKodas) ;

echo '<h2>4 užduotis </h2>';

// 4.	Parašykite funkciją, kuri skaičiuotų, iš kiek sveikų skaičių jos 
// argumentas dalijasi be liekanos (išskyrus vienetą ir patį save)
//  Argumentą užrašykite taip, kad būtų galima įvesti tik sveiką skaičių;


function pirminiaiSkaiciai(int $skaicius)

{
    $dividers = 0;
    for ($i = 2; $i < $skaicius; $i++) {  //2 nes negali dalinti is vieno ir pacio saves
        if ($skaicius % $i == 0) {
            $dividers++;
            // echo $i . '<br>'; //cia dalikliai, is kuriu dalinasi skaicius be liekanos
        }
    }
    return $dividers;
}

echo pirminiaiSkaiciai(10);

echo '<h2>5 užduotis </h2>';
// 5.	Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai
//  nuo 33 iki 77. Išrūšiuokite masyvą pagal daliklių be liekanos kiekį
//   mažėjimo tvarka, 
// panaudodami ketvirto uždavinio funkciją.
echo "<pre>";
$array = [];

foreach (range(1, 10) as $_) {
    $array[] = rand(33, 77);
}

print_r($array);

usort($array, function ($a, $b) {

    return pirminiaiSkaiciai($b) <=> pirminiaiSkaiciai($a);
});

print_r($array);


echo '<h2>6 užduotis </h2>';
// 6.	Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai 
// skaičiai nuo 333 iki 777. 
// Naudodami 4 uždavinio funkciją iš masyvo ištrinkite pirminius skaičius.

$array2 = [];
foreach (range(1, 50) as $_) {
    $array2[] = rand(333, 777);
}
print_r($array2) . '<br>';


$ilgis = count($array2); //geriau kintamaji suskurti ir ji paduoti i for, negu iskarto rasyti, nes nepaskaiciuoja viso ilgio

for ($i = 0; $i < $ilgis; $i++) {
    if (pirminiaiSkaiciai($array2[$i]) == 0) {
        unset($array2[$i]);  //istrina viska

    }
}
print_r($array2);

echo '<h2>7 užduotis </h2>';
// 7.	Sugeneruokite atsitiktinio (nuo 10 iki 20) ilgio masyvą, kurio visi, išskyrus paskutinį, 
// elementai yra atsitiktiniai skaičiai nuo 0 iki 10, o paskutinis masyvas, kuris 
// generuojamas pagal tokią pat salygą kaip ir pirmasis masyvas. 
// Viską pakartokite atsitiktinį nuo 10 iki 30  kiekį kartų. 
// Paskutinio masyvo paskutinis elementas yra lygus 0;

//Rekurcine funkcija



$rand = rand(1, 10);
function recursive($rand)
{
    $array3 = [];
    $num = rand(1, 5);
    for ($i = 0; $i < $num; $i++) {
        if ($i < $num - 1) {
            $array3[$i] = rand(10, 15);
        } else {

            if ($rand > 0) {
                $array3[$i] = recursive($rand - 1);
            } else {
                $array3[] = 0;
            }
        }
    }
    return $array3;
}

print_r(recursive($rand));
$ats = recursive($rand);
echo '<h2>8 užduotis </h2>';
// 8.	Suskaičiuokite septinto uždavinio elementų, kurie nėra masyvai, sumą

function suma($int)
{
    $sum = 0;
    foreach ($int as $value) {
        if (is_numeric($value)) {
            $sum += $value;
        } else {
            $sum += suma($value);
        }
        
    }
    return $sum;
}
echo "--------SUMA VISU REIKSMIU ESANCIU VISUOSE ARRAY:  ";

print_r(suma($ats));

echo '<h2>9 užduotis </h2>';
// Sugeneruokite masyvą iš trijų elementų, kurie yra atsitiktiniai skaičiai nuo 1 iki 33. 
// Jeigu tarp trijų paskutinių elementų yra nors vienas ne pirminis skaičius, prie masyvo pridėkite dar
//  vieną elementą- atsitiktinį skaičių nuo 1 iki 33.
//  Vėl patikrinkite pradinę sąlygą ir jeigu reikia pridėkite dar vieną elementą. Kartokite,
//   kol sąlyga nereikalaus pridėti elemento.

foreach(range(1,3) as $value) {
    $array9[]= rand(1,33);
}
print_r($array9);

function primeCheck($int){     // pirminiu skaiciu tikrinimas
    if ($int == 1) 
    return 0; 
    for ($i = 2; $i <= $int/2; $i++){ 
        if ($int % $i == 0) 
            return 0; 
    } 
    return 1; 
} 
  while (
      !primeCheck($array9[count($array9)-1]) ||
      !primeCheck($array9[count($array9)-2]) ||
      !primeCheck($array9[count($array9)-3]) 
  ) {
    $array9[]= rand(1,33);
  }

  print_r($array9);

  echo '<h2>10 užduotis </h2>';
//   Sugeneruokite masyvą iš 10 elementų, kurie yra masyvai iš 10 elementų,
// kurie yra atsitiktiniai skaičiai nuo 1 iki 100. Jeigu tokio masyvo pirminių
// skaičių vidurkis mažesnis už 70, suraskite masyve mažiausią skaičių
// (nebūtinai pirminį) ir prie jo pridėkite 3. Vėl paskaičiuokite masyvo
// pirminių skaičių vidurkį ir jeigu mažesnis nei 70 viską kartokite

    foreach(range(1,3) as $value){
        $array10=[];
        foreach (range(1,5) as $value2)
        $array10[][$value2] = rand(1,100);
    }
    print_r($array10);

     suma($array10);  //panaudoju funkcija, kuri suskaiciuoja visas masyvuose esancias reiksmes

    $count = 0;         // pasidarau, kiek yra reiksmiu masyvuose
   
    foreach($array10 as $value) {
        $count++;
        }
     $avarage = suma($array10)/$count;    //vidurkio skaiciavimas
    
    
    //  foreach($array10 as $value) {
    //     foreach ($value as $sk);
    // }
    // print_r(min($array10[$sk])) ;

        
        // $numeriai = [2,5,6,8,8];
        // print_r($numeriai) ;