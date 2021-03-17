<?php
$Années = readline("Entrer le nombre d'années d'anciennetées :");
$Salaire = readline("Entrer votre salaire :");
$Statut = readline("Entrer votre statut (cadre ou non cadre) :");

if ($Années >= 5){
	$Prime = 0.1*$Salaire;
}
elseif ($Statut=="cadre") {
	$Prime = 0.08*$Salaire;
}
else{
	$Prime = 50;
}
echo "Votre prime est de ".$Prime." euros";
?>