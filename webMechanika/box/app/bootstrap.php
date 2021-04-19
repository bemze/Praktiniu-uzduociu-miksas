<?php
session_start();
// magic konstanta
define('URL', 'http://localhost/projektai/nd/webMechanika/box/'); // <--- konstanta

// rodo i box folderi, absoliutus kelias
define('DIR', __DIR__.'/');
require DIR. 'app/functions.php';


_d($_SESSION, 'SESIJA--->');