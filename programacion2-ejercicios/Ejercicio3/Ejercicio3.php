<?php

/*Escriba un programa que reciba como entrada el radio de un circulo y entregue como salida su perimetro y su area. El perimetro esta dado por P=2pirr, y el area de un circulo esta dao por A=pir**2 donde r es radio*/

/*$rad es una variable en la que el usuario podra ingresar un valor de tipo entero con el fin de calcular un area y un perimetro de un circulo*/
$rad=readline ("\n"."Introduzca el Radio: ");

/*$area es una variable que contiene la ecuacion para el calculo del area de un circulo*/
$area=pi()*pow($rad,2);

/*$perimetro es una variable que contiene la ecuacion para el calcul del perimetro de un circulo*/
$perimetro=(2*pi())*$rad;

/*echo me permitira mostrar por pantalla el resultado del area que hemos calculado con nuestro programa*/
echo "\nEl Area del Circulo es: ".$area;

/*echo me permitira mostras por pantalla el resultado del perimetro que hermos calculado con nuestro programa*/
echo "\nEl Perimetro del Circulo es: ".$perimetro."\n";

?>
