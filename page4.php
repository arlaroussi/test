<?php

$servername = "localhost";
$username = "root";
$password = "";

	try 
		{
		$conn = new PDO("mysql:host=$servername; dbname=fabien", $username, $password);
		$conn->setATTRIBUTE(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$req = "SELECT AVG(a_loyer) AS moyenne FROM appartement";
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
	<title>exo4</title>
</head>
<body>

	<div id="part1">
			<label><u>Loyer moyens des appartement :</u></label><br />
			<label>Moyenne:</label>
				<?php	
					foreach($pdoreq as $ligne) 
					{
						echo $ligne['moyenne']." ";
					}
				?>
				</label><br /><br />
	<a href="index.php">Retour à l'index</a>
	</div>

</body>
</html>