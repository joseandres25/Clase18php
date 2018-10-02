<?php 

	error_reporting(E_ALL);
	ini_set('display_errors', '1');
	
	define('PI', 3.1416);
	//define('ConstGraviUnivers',6.67*(pow(10,-11)));

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

		return ($masa1*$masa2)*$radio;


	}


 ?>