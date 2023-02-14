<?php

namespace Marmelo\OopCombatGame;

class Personnage {
    public int $healthPoints;
    public int $attack;
    public int $armor = 0;
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

    public function attaque(Personnage $cible){
        $damageTaken = max(0, $this->attack - $cible->armor);
        $cible->healthPoints -= $damageTaken;
        if ($damageTaken == 0) {
            echo "$this->nom a attaqué $cible->nom qui n'a perdu de points de vie ! <br>";
        } else {
            echo "$this->nom a attaqué $cible->nom qui a perdu $damageTaken points de vie ! <br>";
        }
    }
};
