<link rel="stylesheet" type="text/css" href="style.css">

<?php

$personne = array(

	"p1" => array("nom" => "Dupond" , "prenom" => "Patrick", "maths" => 13, "info" => 10, "anglais" =>12),
	"p2" => array("nom" => "Laoufi" , "prenom" => "Karima", "maths" => 11, "info" => 11, "anglais" =>13),
	"p3" => array("nom" => "Laverdure" , "prenom" => "Vincent", "maths" => 13, "info" => 17, "anglais" =>9),
	"p4" => array("nom" => "Van", "prenom" => "Liza", "maths" => 15, "info" => 8, "anglais" =>15),
	"p5" => array("nom" => "Raja" , "prenom" => "Arvind", "maths" => 7, "info" => 10, "anglais" =>8)

);

echo "<table>";

foreach ($personne as $value){
	echo "<tr>";
	echo "<td class='blue'><span>" . $value["nom"] . "</span></td>";
	echo "<td class='blue'><span>" . $value["prenom"] . "</span></td>";
	echo "<td class='blue'><span>" . $value["maths"] . "</span></td>";
	echo "<td class='blue'><span>" . $value["info"] . "</span></td>";
	echo "<td class='blue'><span>" . $value["anglais"] . "</span></td>";
	$moyenne = ($value["maths"] + $value["info"] + $value["anglais"]) / 3;

	echo "<td id='yellow'><span>" . round($moyenne, 2, PHP_ROUND_HALF_UP). "</span></td>";
	echo "</tr>";
}

echo "</table>";

?>