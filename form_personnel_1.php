<?php 
    $nom = $_POST['per_nom'];
    $pren = $_POST['per_pren'];
    setcookie('nom',$nom,86400);
    setcookie('prenom',$pren,86400);
?>

<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8" /> <!--Caractere a use pour le navigateur -->
        <title>Formulaire Produit</title> <!--Titre de la page Web -->
        <link type="text/css" rel="stylesheet" href="Form_prod_1.css" /> <!--Lien avec le CSS -->
</head>

<body>
       <ul id="menu"> <!-- Menue déroulant horizontal-->
            <li> <a href="form_prod_1.html">Formulaire inventaire</a> </li>
       </ul> <!--Fin Menu -->

      	<div id="contenu"> <br> <!--Bloc pour le texte etc -->

       	<div id="texte">

        <form method="POST" action="#" id="formulaire" name="personne" >

              <!-- Entrée des données -->
              <fieldset>
              <legend id="groupe"> Formulaire Personnel </legend> <br> 
    
              <label for="prd_id">  <span>ID Personne<span>  </label> : 
                     <input type="text" name="per_id" placeholder="Ex: 1550" size="25"/> <br><br>
   
              <label for="per_nom">   Nom personne </label> : 
                     <input type="text" name="per_nom" placeholder="Ex: Laroussi" size="27"/><br><br>

             <label for="per_pren">   Prénom Personne </label> :
                     <input type="text" name="per_pren" placeholder="Ex: Réda" size="20"/><br><br>

            </p><br>

   <input type="submit" value="Ajouter le produit" id="envoyer" name="env"/> <input type="reset" value="Reset" id="reset"/>
   
</form>

</body>
</html>