<?php

$servername = "localhost";
$username = "root";
$password = "";

	try 
		{
		$conn = new PDO("mysql:host=$servername; dbname=fabien", $username, $password);
		$conn->setATTRIBUTE(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$req = "SELECT imm_num,imm_code FROM immeuble WHERE imm_code = 0";
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
	<title>exo3</title>
</head>
<body>

	<div id="part1">
			<label>Immeuble sans digicode :</label><br />
			<label>Numéro :
				<?php	
					foreach($pdoreq as $ligne) 
					{
						echo $ligne['imm_num']." ";
					}
					?>
				</label><br /><br />
	<a href="index.php">Retour à l'index</a>
	</div>

</body>
</html>