<h1>Klases</h1>
<?php

class Person {
    public $name;
    public $surname;
    public $age;

}

$p = new Person();
$p->name="Mantas";
$p->surname="Zabiela";
$p->age=37;


print_r($p) ;

?>