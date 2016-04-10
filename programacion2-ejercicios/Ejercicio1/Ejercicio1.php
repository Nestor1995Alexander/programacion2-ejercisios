<?php
/*ESCRIBA UN PROGRAMA QIE PIDA AL USUARIO UN ENTERO DE TRES DIGITOS, Y ENTREGUE EL NUMERO CON LOS DIGITOS EN ORDEN INVERSO.*/
	
	/*variable $num, servira como el ingreso que usuario hara de un numero entero y almacenandose*/
	$num=readline("INGRESE UN NUMERO ENTERO: ");

	/*variable $longitud, en esta se almacenar la lectura que se hara de la variable $num que es ingresada por el usuario de modo que lo que el 
	usuaria ingrese por teclado esta variable tendra la tarea de contarla quedando almacenado cuantos digitos contiene*/
	$longitud= strlen($num);
	
	/*variable $inverso, no se inicializa, esta variable servira como acumular del proceso que haremos despues */
	$inverso='';

	/*Este proceso me permitira que los digitos contados y almacenados en la variable $longitud e invertirlos del tal forma en que el numero 
	ingresado por el usuario sera al reves*/
	for($i=$longitud; $i>0 ; $i--){
		$inverso.= $num[$i-1];
	}
/* echo me permitira mostrar por pantalla en numero ingresa y cuando este sea invertido*/
echo "EL INVERSO DE ".$num." ES: ".$inverso."\n";
?>
