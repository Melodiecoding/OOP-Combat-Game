<?php

require "vendor/autoload.php";

use Marmelo\OopCombatGame\Personnage;


$marmelo = new Personnage("Marmelo");
$marmelo->healthPoints = 200;
$marmelo->attack = 15;
$marmelo->isDead();

$minion = new Personnage("Minion");
$minion->healthPoints = 10;
$minion->attack = 10;

$lieutenantMinion = new Personnage("Lieutenant Minion");
$lieutenantMinion->healthPoints = 30;
$lieutenantMinion->attack = 30;

$minionChef = new Personnage("Minion Chef");
$minionChef->healthPoints =  100;
$minionChef->attack = 100;

dump($marmelo);
dump($minion);
dump($lieutenantMinion);
dump($minionChef);

$marmelo->fight($minion);
$marmelo->protection();
dump($marmelo);
$marmelo->fight($lieutenantMinion);