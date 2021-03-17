<?php

$user = "root";
$pass =" ";

try {

$cnx = new PDO("mysql:host=localhost; dbname=fcil", $user, $pass);

$cnx->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$req = "SELECT * FROM employe";

$pdoreq = $cnx -> query ($req); 

//Fixer le mode du FETCH
$pdoreq -> setFetchMode(PDO::FETCH_ASSOC);

foreach ($pdoreq as $ligne) {
  	echo $ligne['emp_id']."   ".$ligne['emp_nom']."  ".$ligne['emp_preno']."<br>" ;
}

}
catch(PDOException $event) {
	echo "Erreur : ".$event -> getMessage()."<br/>";
	die();
}

?>