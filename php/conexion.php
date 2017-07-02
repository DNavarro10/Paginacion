<?php
		try{
		$connexion = new PDO('mysql:host=localhost;dbname=paginacion_practica','root','diego');
	}catch(PDOexception $e){
		echo 'Error' . $e ->getMessage();
		die();
	}

?>