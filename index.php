<?php
include "compte.php";
include "titulaire.php";

$tim = new Titulaire("Lainé","Timothée","23 mar 1996","Strasbourg");
$tom = new Titulaire("Lénai","Tomithée","12 feb 1839","Belfort");
$comptetim = new Compte("Courant",100,"€",$tim);
$comptetim2 = new Compte("Livret A",50,"€",$tim);
$comptetim3 = new Compte("PEL",200,"€",$tim);
$comptetom = new Compte("Rare",12,"€",$tom);
$comptetom2 = new Compte("Livret B",67,"$",$tom);
$comptetom3 = new Compte("PNL",2202002,"£",$tom);
$comptetim->debit(200);
echo $tim->getInfos();
echo $tom->getInfos();
?>