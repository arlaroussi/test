<?php

require("Connexion.php");
include("param.php.inc");
include("requetes.php");

try {
	$cnx = Connexion($host,$dbname,$user,$pass);
	
	$req = "SELECT veh_marque, veh_mod, veh_puiss FROM vehicule WHERE veh_type= :type";

	requete($req);

?>



				
