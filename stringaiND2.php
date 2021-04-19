<h1>Namu darbai 2021 02 09 Stringai</h1>
<?php
echo '<pre>';
echo '<h2>1 užduotis </h2>';
echo '<pre>';
// Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus
//  vardą ir pavardę kaip stringus (Jonas Jonaitis). Atspausdinti trumpesnį 
//  stringą.

$name = 'Denzel';
$surname = ' Washington';
echo $aktorius = $name . $surname;
echo '<br>';

if ($name < $surname) {
    echo strlen($surname) . " Trumpesne pavarde $surname";
} elseif ($name == $surname) {
    echo 'vardas ir pavarde lygu';
} else {
    echo strlen($name) . " Trumpesnis vardas $name";
}
?>

<?php
echo '<pre>';
echo '<h2>2 užduotis </h2>';

// Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą
//  ir pavardę kaip stringus. Vardą atspausdinti tik didžiosiom raidėm,
//   o pavardę tik mažosioms.
$name = 'Denzel';
$surname = 'Washington';

echo strtoupper($name);
echo '<pre>';
echo strtolower($surname);
echo '<pre>';
?>

<?php
echo '<pre>';
echo '<h2>3 užduotis </h2>';
// Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. 
// Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš pirmų vardo ir pavardės kintamųjų raidžių. 
// Jį atspausdinti.

$name = 'Denzel';
$surname = 'Washington';
$initials = $name[0] . $surname[0];
echo $initials;
?>

<?php
echo '<pre>';
echo '<h2>4 užduotis </h2>';
// Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. 
// Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš trijų paskutinių vardo ir
//  pavardės kintamųjų raidžių. Jį atspausdinti.

$name = 'Denzel';
$surname = 'Washington';

echo $atsakymas = strtoupper(substr($name, -3) . substr($surname, -3));
?>

<?php
echo '<pre>';
echo '<h2>5 užduotis </h2>';
// Sukurti kintamąjį su stringu: “An American in Paris”. 
// Jame visas “a” (didžiąsias ir mažąsias) pakeisti žvaigždutėm “*”.  Rezultatą atspausdinti.

$stringas = 'An American in Paris';
$ka_keiciu = ['a', 'A'];  //array metoto sukurimas
$keitimas = '*';
echo (str_replace($ka_keiciu, $keitimas, $stringas));  // griezta tvarka: ka pakeisti, i ka, ir kur ieskoti
?>


<?php
echo '<pre>';
echo '<h2>6 užduotis </h2>';
// Sukurti kintamąjį su stringu: “An American in Paris”. 
// Suskaičiuoti visas “a” (didžiąsias ir mažąsias) raides. 
// Rezultatą atspausdinti.

$stringas = 'An American in Paris';
$skaiciavimas = substr_count($stringas, 'a') + substr_count($stringas, 'A');

echo $skaiciavimas;

?>

<?php
echo '<pre>';
echo '<h2>7 užduotis </h2>';
// Sukurti kintamąjį su stringu: “An American in Paris”. 
// Jame ištrinti visas balses. Rezultatą atspausdinti.
//  Kodą pakartoti su stringais: “Breakfast at Tiffany's”, “2001: A Space Odyssey” ir 
//  “It's a Wonderful Life”.

$stringas = 'An American in Paris';
$vowels = ['a','e','i','o','u', 'y', 'Y', 'A','E','I','O','U'];
echo str_replace($vowels, '-', $stringas );  //ka keiciu, i ka keiciu, kur keiciu
echo '<br><br>';
$stringas1 = "Breakfast at Tiffany's";
echo str_replace($vowels, '-', $stringas1 );
echo '<br><br>';
$stringas2 = "2001: A Space Odyssey";
echo str_replace($vowels, '-', $stringas2 );
echo '<br><br>';
$stringas3 = "It's a Wonderful Life";
echo str_replace($vowels, '-', $stringas3 );
echo '<br><br>';



?>

 <?php
echo '<pre>';
echo '<h2>8 užduotis </h2>';
// Stringe, kurį generuoja toks kodas: 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
//  Surasti ir atspausdinti epizodo numerį.

echo $star_wars =  'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
echo '<br>';
echo trim($star_wars, " Star Wars: Episode '.' - A New Hope'" ); 

// $str1 = 'Star Wars: Episode';
// $str2 = ' - A New Hope';
// $str3 = $str1.str_repeat(' ', rand(0,5)). rand(1,9) .$str2;

// echo $str3.'<br>';
// $str4 = trim($str3, $str1);
// echo trim($str4,$str2);

?>


<?php
echo '<pre>';
echo '<h2>9 užduotis </h2>';
// Suskaičiuoti kiek stringe 
// “Don't Be a Menace to South Central While Drinking 
// Your Juice in the Hood” yra žodžių trumpesnių arba lygių nei 5 
// raidės. Pakartokite kodą su stringu “Tik nereikia gąsdinti Pietų Centro, 
// geriant sultis pas save kvartale”.

$movie = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";

$movie_array = explode(" ", $movie);
$short_words = 0;

foreach($movie_array as &$value) {
    if (mb_strlen($value) <=5) {
        $short_words++;
    }
}
echo $short_words;
$movie1 = "Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale";

$movie_array1 = explode(" ", $movie1);
$short_words1 = 0;
// $movie2 = '';
foreach($movie_array1 as &$value1) {
    if (mb_strlen($value1) <=5) {
        $short_words1++;
        // $movie2 += $short_words1;
    }
}
echo'<br>';
echo $short_words1.'<br>';
// echo $$movie2.'<br>';
// echo count(str_word_count($movie, 1));

//     // echo str_word_count($movie);

// // if (str_word_count($movie) <= 5)
// // echo str_word_count($movie);


//  $listas = print_r(str_word_count($movie, 1));

// echo $listas;

// $newtext = wordwrap($movie, 5, "\n", true);

// echo "$newtext\n";


?>

<?php
echo '<pre>';
echo '<h2>10 užduotis </h2>';
// Parašyti kodą, kuris generuotų atsitiktinį stringą iš lotyniškų mažųjų raidžių. 
// Stringo ilgis 3 simboliai.

$raides = 'abcdefghijklmnopqrstuvwxyz';

echo $raides;
echo'<br>';
 $ismaisytos_raides = str_shuffle($raides);
 echo substr($ismaisytos_raides, -3);



?>