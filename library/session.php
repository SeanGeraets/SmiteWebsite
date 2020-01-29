<?php

	session_start();
	
	$_SESSION['home'] = 'home';
	
	if(!isset($_SESSION['home'])){
		//echo $_SESSION['home'].'admin';
	} else {
		//echo $_SESSION['home'].'non-admin';
	}
	
	
?>