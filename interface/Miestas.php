<?php

abstract class Miestas {

    private $herbas = "Grazus";

    public function __construct()
    {
        
        echo "MIESTU MIESTAS";
    }
    public function getHerbas(){
        $this->herbas;
    }

// is abraskciu klasiu objektai nesigamina $miestas = new Miestas;
    //abstraktus metodas be vidaus, jei yra abstraktus tevas, tai visi vaikai turi apsirasyti pilnai metoda
    abstract public  function vaziuoti();
    public function gyventi(): void {
        echo "Utena yra LIETUVOJE";
    }
}