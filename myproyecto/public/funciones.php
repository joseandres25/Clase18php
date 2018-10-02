<?php 

	define('PI', 3.1416);
	define('ConstGraviUnivers',6.67*(pow(10,-11)));

	function convertirEuros($num){

		return (($num*1)/166.386);

	}

	function convertirFahrenheit($num){
		if(empty($num)){
			return round(((0*1.8)+32),2);
		}
		else{
			return round((($num*1.8)+32),2);
		}

	}

	function calcularLongitud($radio){

		return 2 * PI * $radio;
	}

	function calcularArea($radio){

		return PI * ($radio*$radio);
	}
	
	function fuerzaGravitacional($masa1,$masa2,$radio){

		return ($masa1*$masa2*ConstGraviUnivers)/pow($radio,2);


	}

	function edadproxima($edad,$año){

		$edadproxima = 2020;

		return $edad+=$edadproxima-$año;

	}

	/*TErminar funcion billetes
	function billetes($cantidad){

		$monedasybilletes = [500,200,100,50,20,10,5,2,1,0.5,0.2,0.1,0.05,0.02,0.01];
		$resultado = array();
		$resto = 1;
		for ($i=0; $i< count($monedasybilletes); $i++) { 

			if($resto != 0){

				$resto = ($cantidad*100)%$monedasybilletes[$i]*100;
				$cociente = (int)($cantidad*100)/$monedasybilletes[$i]*100;

				if($cociente == 0){
					$resultado[$i] = 0;
				}else{
					$resultado[$i] = $cociente;
				}
			}
		}
		
	}
	*/

 ?>