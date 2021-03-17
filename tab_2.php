
<?php
$html = <<< HTML
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="tab.css" type=text/css">
</head>
<body>
HTML;
$article = array (
				  array("code"=>120, "desig"=>"Lave-Linge", "qte"=>250),
				  array("code"=>130, "desig"=>"Téléviseur", "qte"=>100),
				  array("code"=>140, "desig"=>"Micro Onde", "qte"=>75));


echo "<table>";

foreach ($article as $valeur) {
echo "<tr>";
	
	foreach ($valeur as $elem) {
		echo "<td>";
		echo $elem;
		echo "</td>";

	}
echo "</tr>";	

}
echo "</table>"

?>