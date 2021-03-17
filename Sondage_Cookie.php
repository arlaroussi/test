<?php
//1er partie du script PHP
if(isset($_POST["choix"]))
{
if($_COOKIE["votant"] && $_COOKIE["vote"]) ←
{
$vote = $_COOKIE["vote"];
?>
<!––Code JavaScript ––>
<script type="text/javascript" >
alert('Vous avez déja voté pour <?php echo $vote ?>!') 	
</script>
<!–– 2 eme partie du script PHP––>
<?php
}
else
{
$vote = $_COOKIE["vote"];
setcookie("votant","true",time()+300);
setcookie("vote","{$_POST['choix']}",time()+300);
//enregistrement du vote dans un fichier ––> voir chapitre 11
if(file_exists("sondage.txt") )
{
	if($id_file=fopen("sondage.txt","a"))
{
flock($id_file,2);
fwrite($id_file,$_POST['choix']."\n");
flock($id_file,3);
fclose($id_file);
}
else
{ echo "Fichier inaccessible";}
}
else
{
$id_file=fopen("sondage.txt","w");
fwrite($id_file,$_POST['choix']."\n");
fclose($id_file);
}
// Fin de l'enregistrement
?>
<!––Code JavaScript ––>
<script type="text/javascript" >
alert('Merci de votre vote pour <?php echo $_POST["choix"] ?> ! ')
</script>
<!–– 3 eme partie du script PHP––>
<?php
}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<title>Sondage </title>
</head>
<body>
<h2>Bienvenue sur le site PHP 5 </h2>
<!–– "<?php echo $_SERVER['PHP_SELF'] ?>" ––>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
<fieldset>
<legend>Votez pour votre technologie Internet préférée</legend>
<table><tbody>
<tr>
<td>Choix 1 : PHP/MySQL</td>
<td>
<input type="radio" name="choix" value="PHP et MySQL" />
</td>
</tr>
<tr>
<td>Choix 2 : ASP.Net</td>
<td>
<input type="radio" name="choix" value="ASP.Net" />