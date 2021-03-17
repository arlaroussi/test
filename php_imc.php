<?php
      if(isset($_POST['valider'])) {

          $prenom = $_POST['prenom'];
          $taille = $_POST['taille'];
          $poids = $_POST['poids'];
  
          $imc = $poids/($taille*$taille);

          echo 'Bonjour '.$prenom.'<br/>;
        
          Votre IMC (indice de masse corporelle) est exactement : '.$imc.'<br/>';

        if ($imc < 16.5){
          $verdict='Vous êtes en dénutrition.';
        }
        elseif ($imc < 18.5){
          $verdict='Vous êtes maigre.';
        }
        elseif ($imc < 25){
          $verdict='Vous avez une corpulence normale.';
        }
        elseif ($imc < 30){
          $verdict='Vous êtes en surpoids.';
        }
        elseif ($imc < 35){
          $verdict='Vous êtes en état d\'obésité modérée.';
        }
        elseif ($imc < 40){
          $verdict='Vous êtes en état d\'obésité sévère.';
        }
        else{
          $verdict='Vous êtes en état d\'obésité massive.';
        }

        echo $verdict;
  }
?>