<?php
require __DIR__.'/bootstrap.php';
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    //post metodu niekas nedraudzia perduoti get metodo
    $id = $_GET['id'] ?? 0;
    $id = (int) $id;

    
    deleteBox($id);
    header('Location: '.URL);
    die;
}
header('Location: '.URL);
    die;