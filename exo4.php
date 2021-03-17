<?php
$debut=<<<HTML
<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>hello</title>
  </head>
  <body>\n
HTML;
$corps="Classe : BTS SIO SLAM\n";
$fin=<<<HTML
 </body>
</html>
HTML;
/* Envoi au client */
echo $debut.$corps.$fin;
?>