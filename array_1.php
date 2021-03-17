<!doctype html>
<html lang='fr'>
<head>
	<meta charset="utf-8">
</head>
<body>
<?php
$tab_moy = array();
$resultat = array(
			array("nom" => "Dupond","prenom" => "Patrick","note" => array("maths"=>"13", "info" => 10,"Anglais" => 12)),
			array("nom" => "LAOUFI", "prenom" => "Karima", "note" => array("maths" => 11,"info" => 11,"Anglais" => 13)),
			array("nom" => "LAVERDURE", "prenom" => "Vincent","note" => array("maths" => 13,"info" => 17,"Anglais" => 9)),
			array("nom" => "VAN", "prenom" => "Liza","note" => array("maths" => 15,"info" => 8,"Anglais" => 15)),
			array("nom" => "LAVERDURE", "prenom" => "Raoul","note" => array("maths" => 7,"info" => 10,"Anglais" => 8,"moy"=>0))
);

//Boucle princiaple
echo "<h2>Relevé de notes</h2>";
echo "<table border='1' bgcolor='#C6F4E9' width='45%' cellpadding='3 px'>";
$i = 0;

foreach ($resultat as $elem) {
	echo "<tr>";
	echo "<td>";
	echo $elem['nom'];
	echo "</td>";
	echo "<td>";
	echo $elem['prenom'];
	echo "</td>";

    $tot = 0; 
	foreach ($elem['note'] as $val) {
		echo "<td align='center'>";
		echo $val;
		$tot += $val;
		echo "</td>";
	}
	echo "</td>";
	$tot = $tot / 3;
	$tab_moy[$i] = $tot;
	echo "<td align='center' bgcolor='#F4C8AA'>";
	echo number_format($tab_moy,2);
	echo "</td>";
	echo "</tr>";
	$i++;
}
echo "</table>";

?>
</body>
</html>

