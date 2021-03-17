<?php $txt = "info.txt"; 
if (isset($_POST['nom']) && 
	isset($_POST['prenom'])  && 
	isset($_POST['age']) && 
	isset($_POST['adresse']) && 
	isset($_POST['cp']) && 
	isset($_POST['ville']) && 
	isset($_POST['mail']) && 
	isset($_POST['tel']) && 
	isset($_POST['Classe']) && 
	isset($_POST['serie']) && 
	isset($_POST['Reboublement']) && 
	isset($_POST['Porsuite']) && 
	isset($_POST['raison'])) { 
	
	  $fh = fopen($txt, 'a'); 
      $txt=$_POST['nom'].
       'Prénom='.$_POST['prenom'].
       'age= '.$_POST['age'] .
       ' adresse='.$_POST['adresse'] .
       'cpde_postal='.$_POST['cp'] .
       ' Ville='.$_POST['ville'] .
       ' mail= '.$_POST['mail'] .
       'Numéro_de_tel='.$_POST['tel'].
       'classe='.$_POST['Classe'] .
       'série='.$_POST['serie'] .
       ' Reboublement= '.$_POST['Reboublement'] .
       ' Porsuite='.$_POST['Porsuite'] .
       ' -Raison= '.$_POST['raison']; 
         fwrite($fh,$txt);
         fclose($fh);
    }  

if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL) === false) {
    
} else {
    echo(" Votre Email nest pas valid");
}




if(!empty($_POST['nom'])){
	if (!ctype_alpha($_POST['nom'])) {
		 echo "  Votre Nom doit Contenir que des lettres";

	
	}
	
}


if(!empty($_POST['prenom'])){
	if (!ctype_alpha($_POST['prenom'])) {
		echo "<br /> Votre prénom doit Contenir que des lettres";

	
	}
	
}

if(!empty($_POST['age'])){
	if (!ctype_digit($_POST['age'])) {
		echo "<br /> Votre age doit Contenir que des entiers";

	
	}
	
}

if(!empty($_POST['tel'])){
	if (!ctype_digit($_POST['tel'])) {
		echo "<br /> Votre numéro de telephone doit Contenir que des entiers";

	
	}
}

if(!empty($_POST['cp'])){
	if (!ctype_digit($_POST['cp'])) {
		echo "<br />Votre code postal de telephone doit Contenir que des entiers";

	
	}
}

	



?>