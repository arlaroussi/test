
<!DOCTYPE html > 
<html > 
    <head> 
    <meta http-equiv="Content-type" content="text/html :charset=UTF-8"/>
    <link rel="stylesheet" href="formulaire.css" />
    <title>Facture</title>

    </head>
    <body>
        <form action="cible1.php" method="POST" enctype="multipart/form-data">
        <!-- premier groupe de composants-->
        <fieldset>
        <legend><b>Coordonnées client</b></legend>
        <table border="0">
            <tr>
                <td><label>Nom :</label></td>
                <td><input type="text" name="nom" size="40" maxlength="256" placeholder="nom client" /></td>
            </tr>
            <tr>
                <td><label>Prénom :</label></td>
                <td><input type="text" name="prenom" size="40" maxlength="256" placeholder="prénom client" /></td>
            </tr>
            <tr>
                <td><label>Adresse :</label></td>
                <td><input type="text" name ="adresse" placeholder="adresse client"/></td>
            </tr>
			<tr>
                <td><label>Téléphone : </label></td>
                <td><input type="text" name="site" placeholder="téléphone client" /></td>
            </tr>
            <tr>
                <td><label>Mail : </label></td>
                <td><input type="email" name="mail" size="40" maxlength="256" placeholder="votre mail" /></td>
            </tr>

            <tr>
                <td><label>Date :</label></td>
                <td><input type="password" name="date" placeholder="votre date" placeholder="date facture" /></td>
            </tr>
            <tr>
               <td><label>Pays :</label></td>
               <td>
                   <label>Votre pays:</label> 
                   <select name="pays" size="1" tabindex="2"> 
                        <optgroup label="Europe">
                            <option value="France"> France</option>
                            <option value="Belgique"> Belgique</option>
                            <option value="Italie"> Italie</option>
                            <option value="Allemagne"> Allemagne</option>
                        </optgroup>       
                        <optgroup label="Afrique">
                            <option value="Tunis" > Tunis</option>
                            <option value="Algérie" >Alg&eacute;rie</option>
                            <option value="Maroc" >Maroc</option>
                            <option value="Mauritanie" >Mauritanie</option>
                        </optgroup>
                        <optgroup label="Amérique">
                            <option value="USA" label="fr" > USA </option>
                            <option value ="Canada" > Canada</option>
                            <option value ="Argentine" > Argentine</option>
                        </optgroup>
                        <optgroup label="Autres">
                            <option value="Europerope">Europerope</option>
                            <option value ="Asie">Asie</option>
                            <option value="Amériques">Amériques</option>
                            <option value="Océanie"> Océanie</option>
                        </optgroup>
                    </select> 
                </td>
            </tr>
			</table>
			</fieldset>
			
			<br /><br />
			<fieldset>
			<legend><b>Désignation produit</b></legend>
			<table>
			<tr>
				<td>Désignation :</td><td><input type="text" name="desig" /></td> 
			</tr>
			<tr>
				<td>Quantité :</td><td><input type="text" name="qte" /></td> 
			</tr>
			<tr>
				<td>Prix unitaire :</td><td><input type="text" name="pu" /></td> 
			</tr>
			<tr>
				<td>TVA :</td><td><input type="text" name="tva" /></td> 
			</tr>
            <tr>
                <td><label>Fidélité :</label></td>
                <td><input type="radio" name="fid" value="oui"/> <label>Oui </label> <br />
                <input type="radio" name="fid" value="nom" /><label>Non</label> </td></tr>
            <tr>	
			<tr>
				<td>Remise :</td><td><input type="text" name="remise" /></td> 
			</tr>
			<tr>
				<td><input type="reset" value="Effacer" /></td>
				<td><input type="submit" value="Envoyer" /><td/>
			</tr>			
			</table> 
    </form>
	
</body>
</html> 