<p><h1>Formulaire de saisie des candidats <p></h1>

<form method="POST" action="script_login_bdd.php">
<table style="margin-top:50px; margin-left:50px;">

	<tr>
		<td><label for=zone1>Numéro</label></td>
		<td><input type="text" name="id" /></td>
	</tr>
	<tr></tr><tr></tr>
	<tr>
		<td><label for=zone2>Nom</label></td>
		<td><input type="text" name="nom" /></td>
	</tr>
	<tr></tr><tr></tr>
	<tr>
		<td><label for=zone3>Prénoms</label></td>
		<td><input type="text" name="pren" /></td>
	</tr>
	<tr></tr><tr></tr>
	<tr>
		<td><label for=zone4>Age</label></td> 
		<td><input type="number" name="age" /></td>
	</tr>
	<tr></tr><tr></tr>
	<tr>
		<td><label for=zone5>Téléphone</label></td>
		<td><input type="tel" name="gsm" /></td>
	</tr>
	<tr></tr><tr></tr>
	<tr>
		<td><label for=zone6>Mail</label></td>
		<td><input type="email" name="mail1" /></td>
	</tr>
	<tr></tr><tr></tr>	
	<tr>
		<td><label for=zone7>Date Entrée</label></td> 
		<td><input type="date" name="de" /></td>
	</tr>
	<tr></tr><tr></tr>
	<tr>
		<td><input id="femme" type="radio" name="sexe"></td> 
		<td><label for="femme">Femme</label><br></td>
	</tr>
	<tr>
		<td><input id="homme" type="radio" name="sexe"></td> 
		<td><label for="homme">15-25 ans</label></td>
	</tr>
	<tr>
		<td><INPUT TYPE="submit" NAME="butt1" VALUE=" Envoyer "> </INPUT></td>
		<td><INPUT TYPE="reset" NAME="butt2" VALUE=" Annuler "> </INPUT></td>
	</tr>	
</table>

</form>
