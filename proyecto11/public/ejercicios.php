<?php 
	
	error_reporting(E_ALL);
	ini_set('display_errors', '1');


	require 'funciones.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Ejercicios nº 1</title>
</head>
<body>

	<h2>4.fuerza de atracción gravitacional</h2>
	<form action="" method="get" accept-charset="utf-8">

		<input type="text" name="masa1" placeholder="introduce masa 1">
		<input type="text" name="masa2" placeholder="introduce masa 2">
		<input type="text" name="longitud" placeholder="introduce su distancia">
		<button>Calcula</button>
		
		<p>La Fuerza es: </p>
		<?php if (empty($_GET['masa1']) or empty($_GET['masa2']) or empty($_GET['longitud'])): ?>
			<input type="" name="" value="<?php echo fuerzaGravitacional(0,0,0); ?>">
		<?php else: ?>
			<input type="" name="" value="<?php echo fuerzaGravitacional($_GET['masa1'],$_GET['masa2']),$_GET['longitud'])); ?>">
		<?php endif; ?>
	
	</form>



</body>
</html>