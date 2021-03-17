<!DOCTYPE html > 
<html > 
    <head> 
    <meta http-equiv="Content-type" content="text/html :charset=UTF-8"/>
    <link rel="stylesheet" href="formulaire.css" />
    <title>Facture</title>

    </head>
    <body>
		<form>
		<fieldset>
			<legend></b>Totaux</b></legend>
			<table>
			<tr>
				<td>Prix HT :</td><td><input type="text" name="pht" value="<?php echo $_POST['qte'] * $_POST['pu'];?>"/></td> 
			</tr>
			<tr>
				<td>Montant taxe :</td><td><input type="text" name="taxe" value="<?php echo ($_POST['qte'] * $_POST['pu'])*$_POST['tva'] /100;?>"/></td> 
			</tr>
			<tr>
				<td>Prix TTC :</td><td><input type="text" name="pttc" value="<?php  echo (($_POST['qte'] * $_POST['pu'])+($_POST['qte'] * $_POST['pu']*$_POST['tva'] /100));?>"/></td> 
			</tr>
			</table>
			
		</fieldset>
		</form>
		
</body>
</html>	
	