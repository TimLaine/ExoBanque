<?php
include "compte.php";
include "titulaire.php";

$tim = new Titulaire("Lainé","Timothée","23 mars 1996","Strasbourg");
$comptetim = new Compte("Courant",100,"€",$tim);
$comptetim2 = new Compte("Livret A",50,"€",$tim);
$comptetim3 = new Compte("PEL",200,"€",$tim);

echo $comptetim->getSolde();
echo "<br>";
$comptetim->debit(50);
echo $comptetim->getSolde();
echo "<br>";
$comptetim->credit(100);
echo $comptetim->getSolde();
echo "<br>";
?>