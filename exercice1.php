<?php

$phrase = readline('Entrez votre phrase : ');

$taille = strlen($phrase);

if ($taille <= 20) {
	echo "Phrase courte";
	
} elseif ($taille < 50) {
	echo "Phrase moyenne";
	
} else {
	echo "Phrase longue";
}

?>