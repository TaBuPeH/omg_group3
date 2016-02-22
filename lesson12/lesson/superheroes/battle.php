<?php

require_once('monster.php');
require_once('kryptonian.php');
require_once('arena.php');

$kraken = new monster();
$kraken->setStats(100+rand(50,1000),rand(200,400),30,100); 
$kraken->isPresent(false);

  
$superMincho = new kryptonian();
$superMincho->setStats('100', rand(100,200),'50','30');
$superMincho->setHeatray(rand(30,50));
$superMincho->setSuperhumanstrength('100');
$superMincho->setRegeneration(rand(80,120));
echo "<pre>";
print_r ($kraken);
print_r ($superMincho);


$arena = new Arena($kraken,$superMincho);


$arena->doBattle();

$rounds = 0;


echo "The battle is over in $rounds";

echo "<pre>";
print_r($kraken);
print_r($superMincho);

?>
