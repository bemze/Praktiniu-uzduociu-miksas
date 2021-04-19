<?php
session_start();
// magic konstanta
define('URL', 'http://localhost/projektai/nd/webMechanika/box2/'); // <--- konstanta

// rodo i box folderi, absoliutus kelias
define('DIR', __DIR__.'/');

define('INSTALL_DIR','/projektai/nd/webMechanika/box2/');

require DIR. 'app/BananaController.php';
require DIR. 'app/Json.php';
require DIR. 'app/Box.php';
require DIR. 'app/Helper.php';


// _d($_SESSION, 'SESIJA--->'); 