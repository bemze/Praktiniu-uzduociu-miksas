<?php

// 1. COOKIE vardas(negali buti su tarpu), 2. VALUE
setcookie ( "Pirmas-kukis",  "Saldus kukis" );

//Kukis pasibaigs po 60 sekundziu ir jo kelias globaliame domaine
setcookie ( "Antras-kukis",  "Saldus kukis", time()+60, '/' );


//COOKIE istrinimas
// setcookie( "Pirmas-kukis", "Saldus kukis", time()-60 );

_d($_COOKIE);
?>