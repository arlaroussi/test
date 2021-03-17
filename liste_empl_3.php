<?php

$user = "root";
$pass =" ";

try {

$cnx = new PDO("mysql:host=localhost; dbname=fcil", $user, $pass);

$cnx->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$req = "SELECT * FROM employe";

$pdoreq = $cnx -> query ($req); 

//Fixer le mode du FETCH
$stmt->setFetchMode(PDO::FETCH_BOTH);

  while ($row = $stmt->fetch()) {
  	print $row['emp_id'] . " ".$row[1]." ".$row[2]."<br />";
 }

}

catch (PDOException $e) {
  print $e->getMessage();
}
?>
