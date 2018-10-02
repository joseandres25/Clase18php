<?php 
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);

	require 'funciones.php';
	echo "hola";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ejercicios nº 1</title>
</head>
<body>

	<!--
	<h2>1.Cambio a euros</h2>
	<form action="" method="get" accept-charset="utf-8">
		<input type="text" name="pesetas" value="<?php echo convertirEuros($_GET['pesetas']); ?>" placeholder="introduce las pesetas a cambiar">€
		<button>Convertir</button>
	</form>
	-->
	<!--
	<h2>2.Cambio Celsius a grados Fahrenheit</h2>
	<form action="" method="get" accept-charset="utf-8">

		<input type="text" name="celsius" placeholder="introduce grados celsius">
		<?php if (empty($_GET['celsius'])): ?>
			<input type="" name="" value="<?php echo convertirFahrenheit(0); ?>">
		<?php else: ?>
			<input type="" name="" value="<?php echo convertirFahrenheit($_GET['celsius']); ?>">
		<?php endif; ?>
		<button>Convertir</button>
	</form>
	-->
	<!--
	<h2>3.Radio circunferencia</h2>
	<form action="" method="get" accept-charset="utf-8">

		<input type="text" name="radio" placeholder="introduce el radio">
		<button>Convertir</button>
		<p>El area es: </p>
		<?php if (empty($_GET['radio'])): ?>
			<input type="" name="" value="<?php echo calcularArea(0); ?>">
		<?php else: ?>
			<input type="" name="" value="<?php echo calcularArea($_GET['radio']); ?>">cm2
		<?php endif; ?>
		<p>la longitud es: </p>
		<?php if (empty($_GET['radio'])): ?>
			<input type="" name="" value="<?php echo calcularLongitud(0); ?>">
		<?php else: ?>
			<input type="" name="" value="<?php echo calcularLongitud($_GET['radio']); ?>">m
		<?php endif; ?>
		
	</form>
	-->

	<h2>4.fuerza de atracción gravitacional</h2>
	<form action="" method="get" accept-charset="utf-8">
		<p>Masa 1:</p><input type="text" name="masa1">
		<p>Masa 2:</p><input type="text" name="masa2">
		<p>longitud :</p><input type="text" name="longitud">
		<button>Calcular</button>
		<p>La Fuerza es: </p>
		<?php if (!empty($_GET['masa1']) && !empty($_GET['masa2']) && !empty($_GET['longitud'])): ?>
				<input type="text" name="resultado" value="<?php echo fuerzaGravitacional($_GET['masa1'],$_GET['masa2'],$_GET['longitud']); ?>">
		<?php else: ?>
			<?php echo "introduzca masas y longitud" ?>
		<?php endif; ?>
	</form>

	<h2>5.Edad en el 2020</h2>
	<form action="" method="get" accept-charset="utf-8">
		<input type="text" name="año" placeholder="introduca el año actual">
		<input type="text" name="edad" placeholder="introduca la edad actual">
		<button>Calcular</button>
		<?php if (!empty($_GET['año']) && !empty($_GET['edad'])): ?>
			<input type="text" name="resultado" value="<?php echo edadproxima($_GET['edad'],$_GET['año']); ?>">años
		<?php else:  ?>	
			<?php echo "introduca un año"; ?>
		<?php endif ?>
		
	</form>




	<!-- 7-Ejercicio tabla multiplicar -->

	<form action="" method="get" accept-charset="utf-8">
		
	
	<input type="text" name="num" value="1" placeholder="introduce un num real">
	<table>
		<?php if(!empty($_GET['num'])): ?>
				<tr>
					<th>Tabla de multiplicar del <?php echo $_GET['num'];?></th>
				</tr>
		
		<?php for ($i=0; $i <11 ; $i++): ?>
					<tr>
						<td><?php echo $_GET['num']; ?> * <?php echo $i; ?> = <?php echo number_format($_GET['num']*$i,2,'.',','); ?></td>
					</tr>
		<?php endfor; ?>
	<?php endif; ?>
	</table>
	<button>tabla</button>
	</form>



</body>
</html>