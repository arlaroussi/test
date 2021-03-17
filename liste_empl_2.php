<?php

$user = "root";
$pass =" ";

try {

$cnx = new PDO("mysql:host=localhost; dbname=fcil", $user, $pass);

$cnx->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$req = "SELECT * FROM employe";

$pdoreq = $cnx -> query ($req); 


$stmt->setFetchMode(PDO::FETCH_NUM);

while ($row = $stmt->fetch()) {

    print $row[0] . "  " . $row[1] . "  " . "<br />";
  }
}

catch (PDOException $e) {
  print $e->getMessage();
}
?>
