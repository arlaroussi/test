<?php

$html = <<< HTML
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="tab.css" type="text/css">
</head>
<body>
HTML;

echo $html;

//Définition du tableau des articles
$article = array (array("code"=>120, "desig"=>"Lave-Linge", "qte"=>50, "prixuni"=>550, "stocksec"=>10, "stockmax"=>75,"depot"=>"A1"),
				  array("code"=>130, "desig"=>"Téléviseur", "qte"=>85, "prixuni"=>650, "stocksec"=>20, "stockmax"=>100,"depot"=>"A2"),
				  array("code"=>140, "desig"=>"Micro Onde", "qte"=>75	,"prixuni"=>200, "stocksec"=>30, "stockmax"=>150,"depot"=>"A3"));

echo "<h1>Inventaire des articles</h1>";		  
	
$table = <<<TABLE
<table>
    <tr>
        <th scope="col">Code</th>
        <th scope="col">Désignation</th>
        <th scope="col">Quantité</th>
		<th scope="col">Prix unitaire</th>
		<th scope="col">Stock sécurité</th>
		<th scope="col">Stock max</th>
		<th scope="col">Dépôt</th>
    </tr>
TABLE;

echo $table;
$total = 0;

foreach ($article as $valeur) {
echo "<tr>";
	
	foreach ($valeur as $elem) {
		echo "<td>";
		echo $elem;
		echo "</td>";
		$total += $valeur['qte']*$valeur['prixuni'];
	}
echo "</tr>";	

}
echo "</table>";
echo "<h2>Valeur totale du stock : $total</h2>";
$fin = <<< HTML
</body>
</html>
HTML;
echo $fin;
?>