<?php 
session_start(); 
include "db_conn.php";
/*Validaciones y Logica del login */
if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: index.php?error=Nombre de Usuario requerido");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Contraseña requerida");
	    exit();
	}else{
		// hashing the password
        $pass = md5($pass);

        // Acceso al usuario
		$sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['password'] === $pass) {
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: home.php");
		        exit();
            }else{
				header("Location: index.php?error=Nombre de Usuario o la Contraseña NO Coinciden");
		        exit();
			}
		}else{
			header("Location: index.php?error=Nombre de usuario o contraseña incorrectos");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}