
<!DOCTYPE html > 
<html > 
    <head> 
    <meta http-equiv="Content-type" content="text/html :charset=UTF-8"/>
    <link rel="stylesheet" href="formulaire.css" />
    <title>Test Facture</title>

    </head>
    <body>
        <form action="cible1.php" method="POST" enctype="multipart/form-data">

			<fieldset>
			<legend><b>Désignation produit</b></legend>
			<table>
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
				<td><input type="reset" value="Effacer" /></td>
				<td><input type="submit" value="Envoyer" /><td/>
			</tr>			
			</table> 
        </fieldset>
		<br /><br /> 	
				<form>
		<fieldset>
			<legend></b>Totaux</b></legend>
			<table>
			<tr>
				<td>Prix HT :</td><td><input type="text" name="pht" value="<?php echo $_POST['pht'];?>"/></td> 
			</tr> 
			<tr>
				<td>Montant taxe :</td><td><input type="text" name="taxe" value="<?php echo $_POST['taxe'];?>"/></td> 
			</tr>
			<tr>
				<td>Prix TTC :</td><td><input type="text" name="pttc" value="<?php echo $_POST['pttc'];?>"/></td> 
			</tr>
			<tr><input type="reset" value="Vider"></tr>
			</table>
		</fieldset>
    </form>

</body>
</html> 