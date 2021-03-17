<?php

require("Connexion.php");
include("param.php.inc");

try {
	$cnx = Connexion($host,$dbname,$user,$pass);
	$req = "SELECT veh_marque, veh_puiss FROM vehicule WHERE veh_marque = ? AND veh_puiss <= ? ";
	$query=$cnx->prepare($req);
	$query->execute(array($_POST['marque'], $_POST['puiss']));
	
	while ($elem = $query->fetch(PDO::FETCH_ASSOC)) {
		echo $elem['veh_marque'].'<br />'.$elem['veh_puiss'];
		echo '<br /><br />';
	}
}
catch(PDOException $e){
	die('Erreur : '.$e->getMessage());
}
?>



				
