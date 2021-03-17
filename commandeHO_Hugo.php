<?php
//Entrée des données du script

$qte = readline("Entrer quantité huile d'olive :");
$prixunit = readline("Entrer prix bouteille huile d'olive :");

$mont = $qte * $prixunit;
$fport = $mont*10/100;

if($mont >= 200){
	$fport = 0;
}
elseif ($Port <= 8) {
	$Port = 8;
}
echo "Le total de la commande est de ".$Total." euros et les fraits de port sont de ".$Port." euros";

?>