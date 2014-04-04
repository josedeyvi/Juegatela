<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title></title>
</head>
<body>
	<p>Primera prueba usando git</p>
</body>
</html>
<?php

$nombre   = 'jose';
$apellido = 'flores';

$codigo =  substr($nombre, 0, 3).substr($apellido, 0, 3);
// echo $codigo;
date_default_timezone_set('UTC');
$today = date("Y-m-d H:i:s");
echo $today;


// echo substr($nombre, 0, 3); 
// echo substr($apellido, 0, 3); 

// $route             = array();
// $route['registro'] = "usuario/registrar";
// $route['login']    = "usuario/registrar";

// $rutaaa = 'locahostl/controlado/mmetodo'; 

// $uri = $_SERVER['REQUEST_URI'];
// $posicion=strpos($uri, '/');
// echo substr($uri, $posicion+1, strlen($uri)); 


// $uri = strstr($_SERVER['REQUEST_URI'],'/');
// echo $posicion.'<br>';


// f
// $uri = strstr($rutaaa,'/');
// echo $uri.'<br>'.$_SERVER['REQUEST_URI'].'<br>';
// $r = explode( '/', $_SERVER['REQUEST_URI'] );
// var_dump($r);
// strstr($_SERVER['REQUEST_URI'],'/');

// if (array_key_exists('registro', $route)) {
//     // echo $route['registro'];
// }


// $pizza  = "piece1/piece2/piece3/piece4/piece5/piece6";
// $pieces = explode("/", $pizza);
// echo $pieces[0]; // piece1
// echo $pieces[1]; // piece2


?>