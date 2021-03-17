<?php

$user = "root";
$pass =" ";

try {

$cnx = new PDO("mysql:host=localhost; dbname=fcil", $user, $pass);

$cnx->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$req = "SELECT * FROM employe";

$pdoreq = $cnx -> query ($req); 

//Fixer le mode du FETCH
$pdoreq -> setFetchMode(PDO::FETCH_NUM);

foreach ($pdoreq as $ligne) {
  	echo $ligne[0]."   ".$ligne[1]."  ".$ligne[2]."<br>" ;
}
}
catch(PDOException $event) {
	echo "Erreur : ".$event -> getMessage()."<br/>";
	die();
}
?>