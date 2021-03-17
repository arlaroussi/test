<?php

$servername = "localhost";
$username = "root";
$password = "";

	try 
		{
		$conn = new PDO("mysql:host=$servername; dbname=fabien", $username, $password);
		$conn->setATTRIBUTE(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$req = "SELECT a_code, t_nom FROM appartement a INNER JOIN type_app t ON a.`#t_code` = t.t_code WHERE t_nom = 'F3'";
		$pdoreq = $conn->query($req);
		$pdoreq -> setFETCHMODE(PDO::FETCH_ASSOC);
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
	<title>exo2</title>
</head>
<body>

	<div id="part1">
		<label><u>Appartement de type F3 :</u></label><br />
		<label>Code : 
			<?php	
				foreach($pdoreq as $ligne) 
				{
				echo $ligne['a_code']." ";
			}
			?>
		</label><br /><br />
	<a href="index.php">Retour à l'index</a>
	</div>

</body>
</html>