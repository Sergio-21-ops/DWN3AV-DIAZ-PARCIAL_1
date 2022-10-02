<?PHP

$secciones_registradas= [
"home"=>[
		"titulo"=>"Introduccion a Surtidiscos"
		],
"productos"=>[
		"titulo"=>"discos"
],
"detalle"=>[
		"titulo"=>"Detalles del disco"
],
"productos_por_artista"=>[
		"titulo"=>"Discos de "
],
"productos_por_genero"=>[
		"titulo"=>"Disco/s del genero "
],
"productos_por_productor"=>[
		"titulo"=>"Discos producidos por "
],
"contacto"=>[
		"titulo"=>"Contacto"
],
"procesar_datos"=>[
		"titulo"=>"Resultado de datos"
],
"alumno"=>[
		"titulo"=>"Datos del alumno"
]
];
require_once "classes/Disco.php";
$seccion =$_GET['sec'] ?? "home";

if(!array_key_exists($seccion,$secciones_registradas)){
    $lista = "404";
	$titulo = "404-No se encontro el titulo ni la pagina";
}else{
   $lista = $seccion;
   $titulo = $secciones_registradas[$seccion]["titulo"];
}

?>
<!DOCTYPE html>
<html lang="es-AR" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="imagenes/favicon.ico" type="image/x-icon">
    <link href="css/estilos.css" rel="stylesheet">
	<link href="css/bootstrap.css" rel="stylesheet">
	<title>Surtidiscos : <?=$titulo; ?> </title>
</head>
<body class="container-fixed vh-100">

    <div>
      <header class="masthead mb-auto">

        <div class="inner"> 
		<h1 id="logo" class="d-block mx-auto">Logo de surtidisco</h1>
		<nav class="nav nav-masthead justify-content-center">
			<a class="nav-link active" href="index.php?sec=home">Home</a>
            <a class="nav-link" href="index.php?sec=productos&art">Productos</a>
			<a class="nav-link" href="index.php?sec=contacto">Contacto</a>
			<a class="nav-link" href="index.php?sec=alumno">Datos del alumno</a>
          </nav>
        </div>
      </header>
		
      
	  
	  <div class="justify-content-center p-5">
			   <?PHP 
			   require file_exists("secciones/$lista.php") ? "secciones/$lista.php" : "secciones/404.php";    
			   ?> 
	  </div>

      <footer class="m-0 row justify-content-center align-items-center">
        <div class="col-auto text-center">
          <p>Sergio Diaz Programacion II TN</p>
        </div>
      </footer>
    </div>
	
	<script src="js/picturefill.js"></script>
	<script src="js/jquery-3.4.1.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/animaScroll.js"></script>
    <script src="js/marcaBoton.js"></script>
  
</body>

</html>