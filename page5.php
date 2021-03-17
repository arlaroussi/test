<?php


try { 

$servername='localhost';
$user='root';
$passwd='';
$conn = new PDO ("mysql:host=$servername; dbname=fabien",$user,$passwd);

$conn->setAttribute (PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$req = "SELECT t_nom, AVG(a_loyer) AS moyenne FROM appartement a INNER JOIN type_app t ON a.`#t_code`=t.t_code GROUP BY t_nom";

$pdostat = $conn-> query ($req);

$pdostat->setFetchMode (PDO::FETCH_ASSOC);

	
}

catch (Exception $e)
{
 echo "Erreur : ".$e->getMessage();
}
	?>

<!DOCTYPE>
<HTML>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>exo5</title>
</head>
<body>

	<div id="part1">
		<label><u>Le loyer moyen part type d'appartements :</u></label><br />
		<table>
			<tr>
				<td>Moyenne</td>
				<td>Type d'appartement</td>
			</tr>
			<?php

			foreach ($pdostat as $ligne) 
			{
			echo "<tr><td>".$ligne['moyenne']."</td><td>".$ligne['t_nom']."</td></tr>";
			}
			?>
		</table><br /><br />
		<a href="index.php">Retour à l'index</a>
	</div>


</body>