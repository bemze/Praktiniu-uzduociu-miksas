<?php 
require __DIR__.'/bootstrap.php';
//explode - padaro array, str replace...kitaip sakant, asidarom masyva is URL, po kiekvieno /
$uri = explode('/',str_replace(INSTALL_DIR, '', $_SERVER['REQUEST_URI']));
// echo INSTALL_DIR."<br>";
// echo $_SERVER['REQUEST_URI'];
_d(str_replace(INSTALL_DIR, '', $_SERVER['REQUEST_URI']));
_d($uri);

// ROUTING
//jei tuscias stringas lygus masyvo 1 elementui, sukuriam nauja objekta
if('' == $uri[0]) {
    (new BananaController) -> index();
}
//sukeliam visus scenarijus, kokie bus
elseif('create' == $uri[0]) {
    (new BananaController) -> create();
}
elseif('store' == $uri[0]) {
    (new BananaController) -> store();
}
elseif ('edit' == $uri[0]) {
    (new BananaController)->edit((int)$uri[1]);
}
elseif ('update' == $uri[0]) {

    (new BananaController)->update((int)$uri[1]);
}
elseif ('delete' == $uri[0]) {
    (new BananaController)->delete((int)$uri[1]);
}
