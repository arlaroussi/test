<?php
if(isset($_POST['valider'])){
    $pseudo=$_POST['pseudo'];
    $ville=$_POST['ville'];
    echo 'Bonjour '. $pseudo.'de '. $ville.'<br/>Bienvenue sur mon site !';
}
?>