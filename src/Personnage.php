<?php

namespace Marmelo\OopCombatGame;

class Personnage {
    public int $healthPoints;
    public int $attack;
    public $armor = 20;
    public $nom;

    public function __construct($nom){
        $this->nom = $nom;
    }

    public function die(){
        if($this->healthPoints == 0){
            false;
            echo "Game Over !";
        }
    }
};