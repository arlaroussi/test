<?php

require("Connexion.php");
include("param.php.inc");

try {

	//Connexion à la BDD
	$cnx = Connexion($host,$dbname,$user,$pass);

	//Récupération des données du formulaire
	$id = $_POST['prd_id'];
	$nom = $_POST['prd_nom'];
	$qte = $_POST['prd_qte'];
	$pu = $_POST['prd_pu'];
	$cat = $_POST['prd_cat'];

	//Insertion dans la table Produit
	$req = "INSERT INTO Produit Values ($id,$dnom,$qte,$pu,$cat)";

	$cnx->exec($req);	

	echo 'Le produit a bien été ajouté !';
	
}
catch(PDOException $e){
	die('Erreur : '.$e->getMessage());
}

?>