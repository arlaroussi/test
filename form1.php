<?php

// filter_var permet de verifier l'adresse mail/ip... //
// ctype_alpha (exemple : prenom) //
/* ctype_digit (exemple : AGE) */
// if (isset ($_POST['nom'])) sert pour verifier que la variable n'est pas nulle //

if (isset($_POST['nom'])) {
	if (ctype_alpha($_POST['nom']===True)) {
	}
	else {
		echo "Erreur au niveau du nom";
	}
}


if (isset ($_POST['prenom'])) {
	if (ctype_alpha($_POST['prenom']===True)) {
	}
	else {
		echo "Erreur au niveau du prenom";
	}
}

if (isset ($_POST['age'])) {
	if (ctype_digit($_POST['age']===True)) {
	}
	else {
		echo "Erreur au niveau de l'age";
	}
}

if (isset ($_POST['email'])) {
	filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)

?>