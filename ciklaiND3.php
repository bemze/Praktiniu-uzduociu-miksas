<h1>Namu darbai 2021 02 11 Ciklai</h1>
<?php
echo '<br>';
echo '<h2>1 užduotis </h2>';
echo '<br>';
// Naršyklėje nupieškite linija iš 400 “*”. 
// a. Naudodami css stilių “suskaldykite” liniją taip, 
// kad visos žvaigždutės matytųsi ekrane;
// b. Programiškai “suskaldykite” žvaigždutes taip,
//  kad vienoje eilutėje nebūtų daugiau nei 50 “*”; 

$linija = "*";
for ($i = 0; $i < 400; $i++) {
   if ($i == 50 || $i == 100 || $i == 150 || $i == 200 || $i == 250 || $i == 300 || $i == 350) {
      echo '<br>';
   }
   echo "<span style='word-wrap:break-word;'>$linija</span>";
}


// echo $linija;


?>

<?php
echo '<br>';
echo '<h2>2 užduotis </h2>';
// Sugeneruokit 300 atsitiktinių skaičių nuo 0 iki 300, 
// atspausdinkite juos atskirtus tarpais ir suskaičiuokite kiek tarp jų yra didesnių už 150.  
// Skaičiai didesni nei 275 turi būti raudonos spalvos.
$bigger = 0;


for ($i = 0; $i <= 300; $i++) {
   $numeriai = rand(0, 300) . ' ';
   if ($numeriai > 150) {
      $bigger++;
   }
   if ($numeriai > 275) {
      echo "<span style='color: red;'>$numeriai</span>";
   } else {
      echo $numeriai;
   }
}
echo '<br><br>';
echo "Skaicius didesniu uz 150 kiekis:  $bigger" . '<br>';

?>

<?php
echo '<br>';
echo '<h2>3 užduotis </h2>';
// 3.	Vienoje eilutėje atspausdinkite visus skaičius nuo 1 iki atsitiktinio skaičiaus 
// tarp 3000 - 4000 pvz(aibė nuo 1 iki 3476), kurie dalijasi iš 77 be liekanos. 
// Skaičius atskirkite kableliais. Po paskutinio skaičiaus kablelio neturi būti. 
// Jeigu reikia, panaudokite css, kad visi rezultatai matytųsi ekrane.


$skaicius = rand(3000, 4000);

$string = '';

for ($i = 1; $i <= $skaicius; $i++) {
   if ($i % 77 == 0) {
      $string = $string . ($i . ', ');
   }
}
echo "<span style='word-wrap: break-word;'>$string</span>";

echo substr($string, 0, (strlen($string) - 2));


?>




<?php
echo '<br>';
echo '<h2>4 užduotis </h2>';
// Nupieškite kvadratą iš “*”, kurio kraštines sudaro 100 “*”. Panaudokite css stilių, kad kvadratas ekrane atrodytų kvadratinis.
// * * * * * * * * * * *
// * * * * * * * * * * *
// * * * * * * * * * * *
// * * * * * * * * * * *
// * * * * * * * * * * *
// * * * * * * * * * * *
// * * * * * * * * * * *

$kvadratas = "*";

for ($i = 0; $i < 25; $i++) {
   echo '<br>';
   for ($x = 0; $x < 25; $x++) {
      echo "<span style=' padding: 5px';>$kvadratas</span>";
   }
}

?>

<?php
echo '<br>';
echo '<h2>5 užduotis </h2>';
// Prieš tai nupieštam kvadratui nupieškite raudonas istrižaines.

$kvadratas = '*';
$b = 25;
for ($i = 0; $i < 25; $i++) {
   echo '<br>';
   $b--;
   for ($x = 0; $x < 25; $x++) {
      if ($x == $i || $b == $x) {
         echo "<span style=' padding: 5px; color: red';>$kvadratas</span>";
      } else

         echo "<span style=' padding: 5px';>$kvadratas</span>";
   }
}

?>


<?php
echo '<br>';
echo '<h2>6 užduotis </h2>';
// Metam monetą. Monetos kritimo rezultatą imituojam rand() funkcija, kur 0 yra herbas, o 1 - skaičius. 
// Monetos metimo rezultatus išvedame į ekraną atskiroje eilutėje: “S” jeigu iškrito skaičius ir “H” jeigu herbas.
//  Suprogramuokite keturis skirtingus scenarijus kai monetos metimą stabdome:
// Iškritus herbui;
// Tris kartus iškritus herbui;
// Tris kartus iš eilės iškritus herbui;

echo "1 salyga" . "<br>";
$herbas = 0;
while ($herbas != 1) {

   $sk = rand(0, 1);
   if ($sk == 0) {
      echo "Iskrito S" . "<br>";
   } else {
      echo "Iskrito H. Pabaiga";
      $herbas++;
   }
}
echo "<br><br>";

echo "2 salyga" . "<br>";
$herbas = 0;
while ($herbas != 3) {

   $sk = rand(0, 1);
   if ($sk == 0) {
      echo "Iskrito S" . "<br>";
   } else {
      echo "Iskrito H <br>";
      $herbas++;
   }
}
echo "Iskrito 3 x H. Zaidimo pabaiga";
echo "<br><br>";
echo "3 salyga" . "<br>";
$rez = '';
do {
   $sk = rand(0, 1);
   if ($sk === 0) {
      $rez .= 'H';
      echo 'H';
   } else {
      $rez .= 'S';
      echo 'S';
   }
} while (!str_contains($rez, 'HHH'));

echo "Iskrito is eiles HHH . Zaidimo pabaiga";
echo "<br><br>";
echo "4 salyga" . "<br>";
$rez = '';
do {
   $sk = rand(0, 1);
   if ($sk === 0) {
      $rez .= 'H';
      echo 'H';
   } else {
      $rez .= 'S';
      echo 'S';
   }
} while (!str_contains($rez, 'SSS'));

echo "Iskrito is eiles SSS . Zaidimo pabaiga";



?>

<?php
echo '<br>';
echo '<h2>7 užduotis </h2>';
// 7.	Kazys ir Petras žaidžiai šaškėm. Petras surenka taškų kiekį nuo 10 iki 20, 
// Kazys surenka taškų kiekį nuo 5 iki 25. 
// Vienoje eilutėje išvesti žaidėjų vardus su taškų kiekiu ir “Partiją laimėjo: laimėtojo vardas”. 
// Taškų kiekį generuokite funkcija rand(). Žaidimą laimi tas, kas greičiau surenka 222 taškus. 
// Partijas kartoti tol, kol kažkuris žaidėjas pirmas surenka 222 arba daugiau taškų.

$partija = 0;

$petro_taskai = 0;
$kazio_taskai = 0;
$zaidimas = 0;
$laimi = 222;

while ($petro_taskai <= $laimi || $kazio_taskai <= $laimi) {
   $petras = rand(10, 20);
   $kazys = rand(5, 25);
   $petro_taskai += $petras;
   $kazio_taskai += $kazys;
   $zaidimas++;
   echo '<br>';
   echo "Losimo nr:  $zaidimas";

   if ($petras > $kazys) {
      echo '<br>';
      echo "Laimejo Petras surinkes $petras, pas Kazi buvo $kazys ";
      echo '<br>';
   }
   if ($petras < $kazys) {
      echo '<br>';
      echo "Laimejo Kazys surinkes $kazys, pas Petra buvo $petras ";
      echo '<br>';
   }
}
echo '<br>';
$laimetojas = ($kazio_taskai > $petro_taskai) ? 'Kazys' : 'Petras';
echo "Kazys has $kazio_taskai scores, Petras has $petro_taskai scores. Laimetojas yra $laimetojas.";


?>

<?php
echo '<br>';
echo '<h2>8 užduotis </h2>';
// 8.	Reikia nupaišyti pilnavidurį rombą, taip pat, kaip ir pilnavidurį kvadratą 
// (https://lt.wikipedia.org/wiki/Rombas), kurio aukštis 21 eilutė. Reikia padaryti, 
// kad kiekviena rombo žvaigždutė būtų atsitiktinės RGB spalvos (perkrovus puslapį spalvos turi keistis).
$h = 11;

$star = '*';
for ($i = 1; $i < $h; $i++) { // eil skaicius
   $color1 = dechex(rand(0x000000, 0xFFFFFF));
   $color = dechex(rand(0x000000, 0xFFFFFF));
   for ($j = $i; $j < $h; $j++) // eilutes spausdinimas
      echo "<span style=' color:$color; padding:3px;'>&nbsp;&nbsp;</span>";
   for ($j = 2 * $i - 1; $j > 0; $j--) // eilutes ilgos
      echo "<span style=' color:$color1; padding:3px;'>$star</span>";
   echo "<br>";
}
for ($i = $h; $i > 0; $i--) {
   $color2 = dechex(rand(0x000000, 0xFFFFFF));
   $color3 = dechex(rand(0x000000, 0xFFFFFF));
   for ($j = $h - $i; $j > 0; $j--)
      echo "<span style=' color:$color3; padding:3px;'>&nbsp;&nbsp;</span>";
   for ($j = 2 * $i - 1; $j > 0; $j--) // eilutes ilgos
      echo "<span style=' color:$color2; padding:3px;'>$star</span>";
   echo "<br>";
}


?>


<?php
echo '<br>';
echo '<h2>9 užduotis </h2>';
// 9.	Panaudokite funkciją microtime(). Paskaičiuokite kiek sekundžių užtruks kodą:
// $c = "10 bezdzioniu \n suvalge 20 bananu.";
// Įvykdyti 1 milijoną kartų ir palyginkite kiek užtruks įvykdyti kodą: 
// $c = '10 bezdzioniu \n suvalge 20 bananu.';
// (Stringas viengubose ir dvigubose kabutėse)

$timeStart = microtime(true);
$c = "10 bezdzioniu \n suvalge 20 bananu.";

for ($i = 0; $i < 1000000; $i++) {
$c;
}
$timeEnd = microtime(true);
$time = $timeEnd - $timeStart;

echo '<br>'."dvigubu kabuciu laikas: $time".'<br><br><br>';

$timeStart = microtime(true);
$c = '10 bezdzioniu \n suvalge 20 bananu.';

for ($i = 0; $i < 1000000; $i++) {
$c;
}
$timeEnd = microtime(true);
$time = $timeEnd - $timeStart;

echo '<br>'."Viengubu kabuciu laikas:$time";
?>

<?php
echo '<br>';
echo '<h2>10 užduotis </h2>';
// 10.	Sumodeliuokite vinies kalimą. Įkalimo gylį sumodeliuokite pasinaudodami rand() funkcija. 
// Vinies ilgis 8.5cm (pilnai sulenda į lentą).
// a)	“Įkalkite” 5 vinis mažais smūgiais. Vienas smūgis vinį įkala 5-20 mm. Suskaičiuokite kiek reikia smūgių.
// b)	“Įkalkite” 5 vinis dideliais smūgiais. 
// Vienas smūgis vinį įkala 20-30 mm, bet yra 50% tikimybė (pasinaudokite rand() funkcija tikimybei sumodeliuoti),
//  kad smūgis nepataikys į vinį. Suskaičiuokite kiek reikia smūgių.

$vinis = 85;
$viniu_skaicius = 5;
$smugiu_skaicius = 0;

for ($i = 0; $i < $viniu_skaicius; $i++) {
   $kiek_liko_ikalti = 0;
   while ($kiek_liko_ikalti < 85) {
      $plaktukas = rand(5, 25);

      $kiek_liko_ikalti += $plaktukas;
      $smugiu_skaicius++;
   }

   echo $smugiu_skaicius;
   echo '<br>';

   $smugiu_skaicius = 0;
}
echo '<br><br><br><br><br>';
$vinis = 85;
$viniu_skaicius = 5;
$smugiu_skaicius = 0;

for ($i = 0; $i < $viniu_skaicius; $i++) {
   $kiek_liko_ikalti = 0;
   while ($kiek_liko_ikalti < 85) {
      $hit = rand(0, 1);
      if ($hit == 1) {
         $plaktukas = rand(20, 30);
         $kiek_liko_ikalti += $plaktukas;
      } else {
         $smugiu_skaicius++;
         continue;
      }
      $smugiu_skaicius++;
   }

   echo $smugiu_skaicius;
   echo '<br>';

   $smugiu_skaicius = 0;
}



?>