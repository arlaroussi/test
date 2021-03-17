<?php
//******Lecture d'un tableau indicé******
$montab=array("Paris","London","Brüssel");//indices 0,1,2

//Ajout d'un élément au tableau
$montab[9]="Berlin";

//Lecture des éléments
reset($montab);
while($element=each($montab)) {
	echo "L'élément d'indice $element[0] a la valeur $element[1]<br />";
	//$i++;
}

echo "<hr>";

//******Lecture d'un tableau associatif******
$montab=array("France"=>"Paris","Great Britain"=>"London","Belgique"=>"Bruxel");

//Ajout d'un élément au tableau
$montab["Deutschland"]="Berlin";

//Lecture des éléments
reset($montab);

while($element=each($montab)) {
	echo "L'élément de clé {$element['key']} a la valeur {$element['value']}<br />";
	//$i++;
}

?>