<!DOCTYPE html>
<html>
<head>
	<title>Formulaire</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="index.css">
	<link href="https://fonts.googleapis.com/css?family=Abel|Raleway:100,200,300,400,500,600" rel="stylesheet">
</head>
<body>
	<script type="text/javascript" src="tp-js2.js"></script>
	<h1>Formulaire d'orientation</h1>
	<form name="form" method="post" action="cible.php">	
	
	<h3>Coordonnées :</h3>											<!--Cordonnées de l'étudiant-->
	<table>
		<tr>
		<td>Nom</td>
		<td><input type="text" name="nom" onchange="maj()" onsubmit="ctrl" class="text">
			<span id="aide"></span></td>
		</tr>
		
		<tr>
		<td>Prénom</td>
		<td><input type="text" name="prenom" class="text"></td>
		</tr>
		
		<tr>
		<td>Age</td>
		<td><input type="text" name="age" class="text"></td>
		</tr>
		
		<tr>
		<td>Adresse</td>
		<td><input type="text" name="adresse" class="text"></td>
		</tr>
		
		<tr>
		<td>Code postal</td>
		<td><input type="text" name="cp" class="text"></td>
		</tr>
		
		<tr>
		<td>Ville</td>
		<td><input type="text" name="ville" class="text"></td>
		</tr>
		
		<tr>
		<td>Mail</td>
		<td><input type="email" name="mail" class="text">
        </td>
		</tr>
		
		<tr>
		<td>Télephone</td>
		<td><input type="tel" name="tel" class="text"></td>
		</tr>
	</table>
	<br>														<!--FIN Cordonnées de l'étudiant-->


	<h3>Scolarité actuelle :</h3>								<!--Scolarité de l'étudiant-->
	<table>
		<tr>
		<td>Classe</td>
		<td><select name="classe" class="list">
			<option></option>
			<option value="Première">Première</option>
			<option value="Terminale">Terminale</option>
			</select>
		</td>
		</tr>

		<tr>
		<td>Série</td>	
		<td><select name="serie" class="list">
			<option></option>
			<option value="S">S</option>
			<option value="ES">ES</option>
			<option value="L">L</option>
			<option value="STMG">STMG</option>
			<option value="PRO SEN">PRO SEN</option>
			<option value="STI2D">STI2D</option>
			</select>
		</td>
		</tr>

		<tr>
		<td>Reboublement</td>
		<td>Oui<input type="checkbox" name="oui/non" value="Oui">
			<span class="tab">Non<input type="checkbox" name="oui/non" value="Non"></span></td>	
		</tr>
	</table>
	<br>														<!--FIN Scolarité de l'étudiant-->


	<h3>Orientation post-bac :</h3>								<!--Orientaation de l'étudiant-->
	<table>
		<tr>
		<td>Poursuite d'étude</td>
		<td><select name="ecole" class="list">
			<option></option>
			<option value="Université">Université</option>
			<option value="BTS">BTS</option>
			<option value="IUT">IUT</option>
			<option value="Ecole d'ingénieurs">Ecoles d'ingénieurs</option>
			<option value="Ecoles de commerce">Ecoles de commerce</option>
			</select>
		</td>
		</tr>

		<tr>
		<td>Raison</td>
		<td><textarea name="raison" rows="2" cols="40" id="raison"></textarea></td>
		</tr>

		<tr>
		<td>CV</td>
		<td><input type="file" name="cv"></td>
		</tr>
	</table>
	<br><br>													<!--FIN Orientaation de l'étudiant-->


	<center>													<!-- Boutton-->
		<input type="submit" name="Envoyer" value="Envoyer" class="button" onclick="return controle();">
		<input type="reset" name="Reset" value="Tout effacer" class="button">
	</center>													<!--FIN Boutton-->	
	</form>	
</body>
</html>