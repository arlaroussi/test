<?php

//Verification des champs

if ((!empty($_POST['prenom']))  &&  (!empty($_POST['nom'])) && (!empty($_POST['classe'] != "Choisissez")) && (!empty($_POST['section'])) &&

 (!empty($_POST['apres']  != "Choisissez" ))      && (!empty($_POST['file']))          ) {


//Affichage d'un message de confirmation


	echo "Vos données ont bien été enregistrées.";



//Récupération des données
$prenom = "Prénom: " . $_POST['prenom'] . "\r\n";
$nom = "Nom: " . $_POST['nom'] . "\r\n" ;
$age = "Age: " . $_POST['age'] . "\r\n";
$rue = "Rue: " . $_POST['rue'] . "\r\n";
$cp = "Code Postale: " . $_POST['cp'] . "\r\n";
$ville = "Ville: " . $_POST['ville'] . "\r\n";
$mail = "E-Mail: " . $_POST['mail'] . "\r\n";
$telephone = "Numéro de téléphone: " . $_POST['telephone'] . "\r\n";

$classe = "Classe: " . $_POST['classe'] . "\r\n";
$section = "Section: " . $_POST['section'] . "\r\n";
$redoublement = "" . $_POST['redoublement'] . "\r\n";

$apres = "Poursuite: " . $_POST['apres'] . "\r\n";
$pourquoi = "Pourquoi? " . $_POST['pourquoi'] . "\r\n \r\n \r\n \r\n \r\n\r\n \r\n \r\n \r\n";
$cv = $_POST['file'];


//Ouverture du fichier Formulaire et créatiion si ce n'est déja fait

$fichier = fopen( 'Formulaire.txt', 'a+');

//Ajout des données dans le .txt

 fputs($fichier, $prenom);
 fputs($fichier, $nom);
 fputs($fichier, $age);
 fputs($fichier, $rue);
 fputs($fichier, $cp);
 fputs($fichier, $ville);
 fputs($fichier, $mail);
 fputs($fichier, $telephone);

 fputs($fichier, $classe);
 fputs($fichier, $section);
 fputs($fichier, $redoublement);

 fputs($fichier, $apres);
 fputs($fichier, $pourquoi);

}


 else {

// Message en cas de champs non remplie.

	echo "Un ou plusieurs champs obligatoire ne sont pas remplie.";
}


//      


?>