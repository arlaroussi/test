<?php
  echo "Lecture des données<br />";
  
   foreach($_POST as $cle=>$valeur)
   {
    echo "$cle : $valeur <br />";
   }
 
  ?>
<!DOCTYPE html>
 <head>
 <title>Saisie de texte</title>
  <meta name="Author" content="Jean ENGELS" />
  <meta name="Keywords" content="********" />
  <meta name="Description" content="********" />
  <link rel="shortcut icon" type="images/x-icon" href="../images/favicon.ico" />
  <style type="text/css" title="">

  </style>
 </head>
 <body>
<form method="post" action="<?php $_SERVER['PHP_SELF'] ?>" >
<fieldset>
	<legend>Vos données personnelles</legend>

<label>Nom : </label><input type="text" name="nom"  maxlength="25"  /><br />
<label>Prénom : </label><input type="text" name="prenom" value="Votre prénom" maxlength="25" onclick="this.value=''" /><br />
<label>Adresse : </label><input type="text" name="adresse" value="Votre adresse" maxlength="60" onfocus="this.value=''" /><br />
<label>Pays : </label><input type="text" name="pays" value="Votre pays" maxlength="20"  onchange="alert('Modification opérée')" /><br />
<input type="submit" name="envoi" value="Envoyer"/>
</fieldset>
</form>
<p>
      <a href="http://validator.w3.org/check?uri=referer">
	  <img src="http://www.w3.org/Icons/valid-xhtml11"
          alt="Valid XHTML 1.1!" height="31" width="88" /></a>
    </p>
<!-- Code PHP -->
	

 </body>
</html>
