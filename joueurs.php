<?php
$servername = "localhost";
$username = "root";
$password = "";

	try 
		{
		$conn = new PDO("mysql:host=$servername; dbname=amd_foot", $username, $password);
		$conn->setATTRIBUTE(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$req = "SELECT j_nom,j_prenom,nom_eq FROM amd_equipe e INNER JOIN amd_joueur j ON e.nom = j.nom_eq";
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
	<title>Classement</title>
	<meta charset="ISO">

</head>
<body>
		
	<div id="part1">
		<label><u></u></label>
			<label><H1>Joueur, Equipe : </H1><br>
				<?php 
					foreach($pdoreq as $ligne) 
					{
						echo $ligne['j_nom'].", ".$ligne['j_prenom'].", ".$ligne['nom_eq']."<br>";
					}
				?>
			</label><br /><br />
	<a href="index.php">Retour à l'index</a>
	</div>

</body>
</html>