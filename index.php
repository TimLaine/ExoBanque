<?php
include "compte.php";
include "titulaire.php";

$tim = new Titulaire("Lainé","Timothée","23 mar 1996","Strasbourg");
$tom = new Titulaire("Lénai","Tomithée","12 feb 1996","Belfort");
$comptetim = new Compte("Courant",100,"€",$tim);
$comptetim2 = new Compte("Livret A",50,"€",$tim);
$comptetim3 = new Compte("PEL",200,"€",$tim);
$comptetom = new Compte("Rare",12,"€",$tom);
$comptetom2 = new Compte("Livret B",67,"$",$tom);
$comptetom3 = new Compte("PNL",2202002,"£",$tom);

echo $comptetim->getSolde();
echo "<br>";
$comptetim->debit(50);
echo $comptetim->getSolde();
echo "<br>";
$comptetim->credit(100);
echo $comptetim->getSolde();
echo "<br>";
echo $tim->getInfos();
echo $tom->getInfos();
?>