<?php

//kas persikrautu puslapis, kad nebesiustu POST kelis kartus
if (!empty($_POST)) {
    _d($_POST);
    //atlikti veiksmus ir issaugoti info is POST
    header('location:http://localhost/projektai/nd/zuikis.php');
    die; //daugiau info nebus
}

?>




<a href="?kabinetas=nr52&valdininkas=Jonas">Buhalterija</a>
<a href="?kabinetas=nr53&valdininkas=Petras">Finansistai</a>

<?php


_d($_GET);
_d($_POST);

//patikrinimas, ar fantazija igyvendinama
if (isset($_GET['kabinetas']) && isset($_GET['valdininkas'])) {

    if ($_GET['kabinetas'] == 'nr52') {
        echo '<h1>Buhlterija</h1>';
        echo '<p> darbuotojas:' . $_GET['valdininkas'] . '</P>';
    } elseif ($_GET['kabinetas'] == 'nr53') {
        echo '<h1>Finansistai</h1>';
        echo '<p> darbuotojas:' . $_GET['valdininkas'] . '</P>';
    } else {
        echo '<h1>KITUR</h1>';
    }
} else {
    echo '<h1>NIEKUR </h1>';
}

?>

<form action="" method="get">
    <input type="text" name="valdininkas">
    <input type="text" name="kabinetas">
    <button type="submit">SPAUSTI</button>

</form>


<!-- //get - gauti info is serverio
//post - siusti info i serveri -->