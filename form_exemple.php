<!DOCTYPE HTML>
<HTML>
<HEAD>
	<TITLE>Formulaire de base</TITLE>
	<Meta charset ="UTF-8"></Meta>
</HEAD>
<BODY>
	<center>
		<label><h2>FORMULAIRE DE SAISIE</h2></label>
	<table width="60%">
	<FORM name="form" action="cible.php" method="POST">
		<tr><td width="20%">Civilité : </td><td width="80%">
			<select name="civil">
			   		<option value="Mr" selected="selected">Mr</option>
			    	<option value="Mme">Mme</option>
			    	<option value="Melle">Melle</option>
			</select>
    	<tr><td width="20%">Nom : </td><td width="80%"><input type="text" name="nom" /></td></tr>
    	<tr><td>Prénom : </td><td><input type="text" name="prenom" /></td></tr>
    	<tr><td>Date de naissance :</td><td></label><input type="date" name="daten" /></td></tr>
    	<tr></tr><tr></tr><tr></tr><tr></tr>
    	<tr>
      	<tr>
    		<td>
    			<select name="pays">
			   		<option value="France" selected="selected">France</option>
			    	<option value="Espagne">Espagne</option>
			    	<option value="Brésil">Brésil</option>
			    	<option value="Egypte">Egypte</option>
				</select>
			</td>
    	</tr>
    	<tr></tr><tr></tr><tr></tr><tr></tr>
    	<tr><td>
    		<INPUT type="checkbox" name="choix[]" value="Maison">Maison
    	</td></tr>
		<tr><td>
			<INPUT type="checkbox" name="choix[]" value="Appartement">Appartement
		</td></tr>
		<tr><td>
			<INPUT type="checkbox" name="choix[]" value="Terrain">Terrain
		</td></tr>
		<tr><td>
			<INPUT type="checkbox" name="choix[]" value="Local Commercial">Local commercial
		</td></tr>
		<tr></tr>
		<tr></tr><tr></tr><tr></tr><tr></tr>
		<tr><td>
			<label for="question">Aimez-vous les voyages ? </label>
				<input type="radio" name="voyage" value="oui" id="oui" checked="checked" /> <label for="oui">Oui</label>
				<input type="radio" name="voyage" value="non" id="non" /><label for="non">Non</label>
		</tr></td>
		<tr>
		  	<td colspan="2">
		  		<textarea name="message" rows="8" cols="45"></textarea>
			</td>
		</tr>	
		<tr></tr><tr></tr><tr></tr>
		<tr>
			<td><input type="submit" name="envoyer" value="Valider"></td>
			<td><input type="reset" name="annuler" value="Effacer"></td>
		</tr>
	</table>
</tr></center>
</FORM>
</BODY>
</HTML>