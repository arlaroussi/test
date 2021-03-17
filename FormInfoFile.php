<?php

if (!empty($_POST['nom'])) {
	if (!ctype_alpha($_POST['nom'])) {
		echo "Erreur nom",'<br/>';
	}
	else {
		echo "Nom conforme",'<br/>';
	}
}

if (!empty($_POST['prenom'])) {
	if (!ctype_alpha($_POST['prenom'])) {
		echo "Erreur prénom",'<br/>';
	}
	else {
		echo "Prénom conforme",'<br/>';
	}
}

if (!empty($_POST['age'])) {
	if (!ctype_digit($_POST['age'])) {
		echo "Erreur age",'<br/>';
	}
	else {
		echo "Age conforme",'<br/>';
	}
}

if (!empty($_POST['mail'])) {
	if(!filter_var($_POST['mail'],FILTER_VALIDATE_EMAIL)===false);
		echo "Erreur mail",'<br/>';
	}
	else {
		echo "Mail conforme",'<br/>';
	}
}

if (!empty($_POST['tel'])) {
	if (!ctype_digit($_POST['tel'])) {
		echo "Erreur tel",'<br/>';
	}
	else {
		echo "Tel conforme",'<br/>';
	}
}

if (!isset($_POST['classe'])) {
	echo $_POST['classe'],'<br/>';
}

if (!isset($_POST['serie'])) {
	echo $_POST['serie'],'<br/>';
}
else {
	echo "Vous n'avez pas sélectionné votre série",'<br/>';
}

if (!isset($_POST['redoublement'])) {
	echo $_POST['redoublement'],'<br/>';
}
else {
	echo "Veuillez préciser si vous avez redoublé",'<br/>';
}

if (!isset($_POST['orientation'])) {
	foreach($_POST['orientation'] as $val) {
		echo $val,'<br/>';
	}
}
else {
	"Sélectionner votre orientation";
}

if (file_exists($_POST['CV'])) {
	echo "Le fichier à bien été envoyé",'<br/>';
}
else {
	echo "Le fichier n'à pas été envoyé",'<br/>';
}

$df=fopen("/var/www/html/Liste.odt", "w");
fwrite($df.$_POST['nom'].":".$_POST['prenom'].":".$_POST['age'].":".$_POST['mail'].":".$_POST['tel'].":".$_POST['classe'].":".$_POST['serie'].":".$_POST['redoublement'].":".$_POST['orientation'].":".$_POST['CV'].":");
fclose($df);

?>