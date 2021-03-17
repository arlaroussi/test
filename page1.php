<?php

$servername = "localhost";
$username = "root";
$password = "";

	try 
		{
		$conn = new PDO("mysql:host=$servername; dbname=fabien", $username, $password);
		$conn->setATTRIBUTE(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$req = "SELECT count(*)  AS nombre FROM immeuble";
		$pdoreq = $conn->query($req);
		$res = $pdoreq -> FETCH();
		}

	catch (PDOException $e) 
		{
			echo "ERREUR :".$e->getMessage(); 
		}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>exo1</title>
</head>
<body>

	<div id="part1">
		<label><u></u></label>
			<label>Nombre d'immeuble :
				<?php 
					echo $res['nombre'];
				?>
			</label><br /><br />
	<a href="index.php">Retour à l'index</a>
	</div>

</body>
</html>