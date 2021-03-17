<?php

// !!! PART 1 !!!

/*
$etudiant = array("Larah","Sebastian","Kevin","Audile","Rodrigue");

// echo $etudiant[0].'<br>';
// echo $etudiant[1].'<br>';
// echo $etudiant[2].'<br>';
// echo $etudiant[3].'<br>';
// echo $etudiant[4].'<br>';

for($i=0; $i<count($etudiant);$i++) {
	echo $etudiant[$i] . '<br>';
}
*/

// !!! PART 2 !!!

/*
$personne = array(
	"prenom" => "Jessy",
	"nom" => "Brown",
	"telephone" => "000011111"
);

// echo $personne['nom'];

foreach($personne as $value) {
	echo $value . '<br>';
}
*/

// !!! PART 3 !!!

/*
$personne = array(
	"prenom" => "Jessy",
	"nom" => "Brown",
	"telephone" => "000011111"
);

foreach($personne as $key => $value) {
	echo "Clé: " . $key . ", Valeur: " . $value . "<br>";
}
*/

// !!! PART 4 !!!
/*
$personne = array (

	1 => array('prenom' => 'Jessy', 'nom' => 'Brown', 'telephone' => '00001111'),
	2 => array('prenom' => 'Sharon', 'nom' => 'Daim', 'telephone' => '00221111'),
	3 => array('prenom' => 'Marta', 'nom' => 'Blanca', 'telephone' => '00331111')
	);

	echo $personne[1]['prenom']; //Jessy le bg
*/

// !!! PART 5 !!!

/*
$personne = array (

	1 => array('prenom' => 'Jessy', 'nom' => 'Brown', 'telephone' => '00001111'),
	2 => array('prenom' => 'Sharon', 'nom' => 'Daim', 'telephone' => '00221111'),
	3 => array('prenom' => 'Marta', 'nom' => 'Blanca', 'telephone' => '00331111')
	);
foreach($personne as $cle1 =>$valeur1)
{
	echo"personne n°:" .$cle1. "<br>";
	foreach($valeur1 as $cle2=>$valeur2)
	{
		echo "Clé: " .$cle2. ", Valeur: " .$valeur2. "<br>";
	}
}
*/

?>