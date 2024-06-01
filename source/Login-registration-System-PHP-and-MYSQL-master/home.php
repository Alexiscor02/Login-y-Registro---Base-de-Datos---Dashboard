<?php 
session_start();
/*Aspecto de la pagina principal */
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>INICIO</title>
	
	
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECharts</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"/>
    <!-- Styles -->
    <link rel="stylesheet" href="styles.css">

     
</head>
<body>
     <div class="navbar-custom">
        <span><?php echo $_SESSION['user_name']; ?></span>
        <a href="logout.php" class="btn btn-danger">Cerrar Sesión</a>
    </div>

    <h1>Esta grafica muestra el indice de delitos cometidos en Mexico</h1>







	 
    <div class="container">
        <div class="row my-4">
            
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div id="chart2" class="chart" ></div>
            </div>
        </div>
    </div>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Apache ECharts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/5.5.0/echarts.min.js"></script>
    <!-- JavaScript -->
    <script src="main.js"></script>
	
	
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 

</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>