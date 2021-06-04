<?php
	
	require "conexion.php";
	
	session_start();
	
	if($_POST){
		
		$usuario = $_POST['usuario'];
		$password = $_POST['password'];
		
		$sql = "SELECT * FROM usuario WHERE usuario='$usuario' and contraseña='$contraseña'";
		//echo $sql;
		$resultado = pg_query($pgsql, $sql);
		$num = pg_num_rows($resultado);
		
		if($num>0){
			$row = pg_fetch_assoc($resultado);
			$password_bd = $row['password'];
			
			
			
			if($password_bd == $password){
				
				$_SESSION['usuario'] = $row['usuario'];
				$_SESSION['password'] = $row['password'];
                echo "sirvio";
				
				header("Location: principal.php");
                
				
			} else {
			
			echo "La contraseña no coincide";
			
			}
			
			
			} else {
			echo "NO existe usuario";
		}
		
		
		
	}
	
	
	
?>