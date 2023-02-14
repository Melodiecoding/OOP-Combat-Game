<?php

namespace Marmelo\OopCombatGame;

class Personnage {
    public int $healthPoints;
    public int $attack;
    public $armor;
    public $nom;

    public function __construct($nom){
        $this->nom = $nom;
    }

    public function viesupp($healthPoints = null){
        $this->healthPoints == +30;
        if (is_null($healthPoints))
        $this->healthPoints = $healthPoints + 30;
    }

    public function fight(Personnage $cible){
        while (!$this->isDead()){
            $this->attaque($cible);
            if($cible->isDead()){
                echo "You win !";
                return true;
            }
            $cible->attaque($this);
        }

        echo "You lose!";
        return false;
    }

    public function isDead(){
        return $this->healthPoints <= 0;  
    }

    public function protection(){
        $this->armor += 20;
    }

    public function attaque($cible){
        $cible->healthPoints -= $this->attack;

        echo "$this->nom a attaqué $cible->nom qui a perdu $this->attack points de vie ! <br>";
    }
};
