<?php
$servername = "localhost";
$username = "root";
$password = "";

	try 
		{
		$conn = new PDO("mysql:host=$servername; dbname=amd_foot", $username, $password);
		$conn->setATTRIBUTE(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$req = "SELECT nom AS Equipes FROM amd_equipe";
		$pdoreq = $conn->query($req);
		$res = $conn -> query($req);
		}

	catch (PDOException $e) 
		{
			echo "ERREUR :".$e->getMessage(); 
		}



?>
<!DOCTYPE html>
<html>
<head>
	<title>Classement</title>
	<meta charset="UTF-8">
</head>
<body>
		
	<div id="part1">
		<label><u></u></label>
			<label>Equipes : <br>
				<?php 
					foreach($pdoreq as $ligne) 
					{
						echo $ligne['Equipes'].", ";
					}
				?>
			</label><br /><br />
	<a href="index.php">Retour à l'index</a>
	</div>

</body>
</html>