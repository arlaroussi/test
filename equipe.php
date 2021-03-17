<?php
$user='root';
$passwd='ayme1997';
    
    try{
	// Pilote ou chaîne de connexion
	$bd = new PDO("mysql:host=localhost; dbname=TournoiFoot" ,$user,$passwd);
	// Gestion des erreurs
	$bd -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// Requete
	$req = "SELECT * FROM Equipe ";
	// Envoye de la requete
	$pdoreq = $bd -> query($req);
	// Retour de la requete en Tab associatif
	$pdoreq -> setFetchMode(PDO::FETCH_ASSOC);

	// Recherche ds le Tab
	foreach ($pdoreq as $ligne ) {
		echo $ligne['idEquipe'].", ".$ligne['nom'].", ".$ligne['ville'].", "
			.$ligne['representant']."<br>";

	}
}



// Gestion des exception
catch(PDOException $event){
	echo "Error: ".$event -> getMessage()."<br>";
	die();
}
    
?>