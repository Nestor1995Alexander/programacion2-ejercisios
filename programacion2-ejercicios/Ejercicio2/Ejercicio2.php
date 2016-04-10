<?php
/*ESCRIBA UN PROGRAMA QUE MUESTRE TODAS LAS COMBINACIONE SPOSIBLES AL MOMENTO DE LANZAR DOS DADOS DE 6 CARAS.*/

/*En el proceso de for veremos como al declarar la variable $dado comenzaremos un recorrido de 6 y dando le a esta variable que aumente de uno en uno hasta terminar el recorrido*/
for ($dado=1; $dado<=6; $dado++){

	/*En el segundo proceso de for se declara otra variable para dado que es $da2, igual que el primero se espera que cuente hasta de uno en uno 		has terminar su recorrido*/
	for ($da2=1; $da2<=6; $da2++){

	/*Echo me permitira mostrar amobos recorridos con diferentes combinaciones que pueden realizar los dados*/
	echo "$dado == $da2\n";
	}
	
}

?>
