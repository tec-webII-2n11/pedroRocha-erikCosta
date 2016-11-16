<!DOCTYPE html>
<html>
	<head>
		<?php
			session_start(); 
			if((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['senha']) == true)) { 
				unset($_SESSION['usuario']); 
				unset($_SESSION['senha']); 
				session_destroy(); 
				header('location:index.php'); 
			} 
			
			$logado = $_SESSION['usuario'];
		?>


		<meta charset="utf-8"/>
		<title>AULA 15</title>
	</head>
	<body>
		<?php
			echo "<h1>Bem vindo ".$logado."!</h1>";
		?>
	</body>
</html>