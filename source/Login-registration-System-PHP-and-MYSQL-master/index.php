<!DOCTYPE html> 
<html>
<head> 
	<title>ACCESO</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<!--Aspecto y entradas de Login -->
     <form action="login.php" method="post">
     	<h2>ACCESO</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Nombre de Usuario</label>
     	<input type="text" name="uname" placeholder="Nombre de Usuario"><br>

     	<label>Contraseña</label>
     	<input type="password" name="password" placeholder="Contraseña"><br>

     	<button type="submit">Acceso</button>
          <a href="signup.php" class="ca">Crea una cuenta</a>
     </form>
</body>
</html>