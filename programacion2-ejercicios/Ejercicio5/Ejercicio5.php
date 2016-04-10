<?php
/* El metodo de multiplicacion rusa consiste en multiplicar sucesivamente por 2 el multiplicando y dividir por 2 el multiplicador hasta que el multiplicador tome valor 1. Luego, se suman todos los multiplicando correspondientes a los multiplicadores impares.*/


$multiplicador = readline ("INGRESE EL MULTIPLICADOR: \n");//variable que contiene el valor del multiplicador	 
$multiplicando = readline ("INGRESE EL MULTIPLICANDO: \n");//variable que contiene el valro de multiplicando
$sumas="0";// la variable $suma se inicializa en cero por que sera un acumulador
while ($multiplicador>=1){ //mientras la variable $multiplicador llegue a ser igual a 1 este no se detendra de divir el multiplicador


if ($multiplicador%2!=0)//si al dividir el multiplicador este es difernte a cero seguir con el sentencia
	$sumas+=$multiplicando;//en la variable $suma se almacenara y sumara el valor de multiplicador hasta que este tenga valor 1. 
	$multiplicador=$multiplicador/2;/*cuando se ingrese el multiplicador, la sentencia se ejecutara dividiendo el multiplicador por 2
					hasta que obtendga el valor de 1*/
	$multiplicando=$multiplicando*2;/*cuando se ingrese el multiplicador, la sentencia se ejecuta multiplcando el por 2 al multiplicando
					hasta que el multiplicador tome valor de 1 segun la decision*/
}
echo "EL PRODUCTO DE LA OPERCION ES: $sumas "."\n";// Imprime el valor almacenado de las sumas que el programa crea.
?>
