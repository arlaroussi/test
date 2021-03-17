<?php
	
	if ($_POST['LOGIN'] == 'root' && $_POST['PASS'] == 'root') {
		header('Location: http://localhost/exo-si6/formulaire.html');
	}
	else {
		header('Location: http://localhost/exo-si6/form_login.html');
	}

?>