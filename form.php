<!DOCTYPE html>
<html>
<head>
	<title>
		Resultat
	</title>
	<meta charset="utf-8">
</head>
<body>
<?php   if (isset($_POST['nom'])&& isset($_POST['prenom']) && isset($_POST['nee']) ) {
	
}   

echo "<table name='formi' border='1'><tr><td>Nom</td>";


echo '<td name = "nomi">'.$_POST['nom'].'</td></tr><tr><td>Prénom</td>';		
	
echo "<td name= 'nomi'>".$_POST['prenom']."</td></tr><tr><td>Née le</td>";		

echo "<td name='nomi'>".$_POST['nee']."</td></tr>";		

echo "</table>";
// Vue que je ne dispose pas de l'age je ne l'affiche pas
?>
</body>
</html>