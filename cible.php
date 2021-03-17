<?php

if (isset($_POST) {
	$nom = $_POST['nom'];
	$pren = $_POST['prenom'];
	$daten = $_POST['daten'];
	$code = $_POST['adresse'];
	$pays = $_POST['pays'];
	$mail = $_POST['mail'];
	$site = $_POST['site'];
	$sexe = $_POST['sexe'];

	$tab= array(
		'Nom' =>$nom,
		'Prenom' =>$pren,
		'Daten' =>$daten,
		'Code' =>$code,
		'mail' =>$mail,
		'site' =>$site,
		'sexe' =>$sexe
	); //Fin du tableau
	
} //Fin du if


echo "<h1>Coordonées : </h1> <br><br>";

foreach ($tab as $key => $value) {
	echo $key." : ".$value."<br>";
}


?>





