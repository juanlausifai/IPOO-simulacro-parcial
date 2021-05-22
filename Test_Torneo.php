<?php

include("Torneo.php");
include("Categoria.php");
include("Equipo.php");
include("Partido.php");
include("Basket.php");
include("Futbol.php");


$objCategoria1 = new Categoria("Menores","");
$objCategoria2 = new Categoria("Juveniles","");
$objCategoria3 = new Categoria("Mayores","");




$objE1=new Equipo("equipo1","capitan1",11,$objCategoria1);
$objE2=new Equipo("equipo2","capitan2",11,$objCategoria1);
$objE3=new Equipo("equipo3","capitan3",11,$objCategoria2);
$objE4=new Equipo("equipo4","capitan4",11,$objCategoria2);
$objE5=new Equipo("equipo5","capitan5",11,$objCategoria3);
$objE6=new Equipo("equipo6","capitan6",11,$objCategoria3);
$objE7=new Equipo("equipo7","capitan7",11,$objCategoria1);
$objE8=new Equipo("equipo8","capitan8",11,$objCategoria1);
$objE9=new Equipo("equipo9","capitan9",11,$objCategoria2);
$objE10=new Equipo("equipo10","capitan10",11,$objCategoria2);
$objE11=new Equipo("equipo11","capitan11",11,$objCategoria3);
$objE12=new Equipo("equipo12","capitan12",11,$objCategoria3);



$objPart1 = new Basket(1,'2020-10-10',80,120,$objE7 ,$objE8,75);
$objPart2 = new Basket(2,'2020-10-25',81,110,$objE9 ,$objE10,70);
$objPart3 = new Basket(3,'2020-11-25',115,85,$objE11 ,$objE12,110);
$objPart4 = new Futbol(4,'2020-10-25',3,2,$objE1 ,$objE2);
$objPart5 = new Futbol(5,'2020-11-13',0,1,$objE3 ,$objE4);
$objPart6 = new Futbol(6,'2020-11-30',2,3,$objE5 ,$objE6);

$coleccionPartidos=[$objPart1,$objPart2,$objPart3,$objPart4,$objPart5,$objPart6];

$objTorneo = new Torneo($coleccionPartidos,100000);

$objTorneo->ingresarPartido($objE7,$objE11,"10-11-20","Basket");

//echo $objTorneo;

/*$ganadores =$objTorneo->darGanadores("Basket");

print_r($ganadores);*/

/*$ganadores =$objTorneo->darGanadores("Futbol");

print_r($ganadores);*/


/*$premioUno=$objTorneo->calcularPremioPartido($objPart1);
$premioDos=$objTorneo->calcularPremioPartido($objPart2);
$premioTres=$objTorneo->calcularPremioPartido($objPart3);
$premioCuatro=$objTorneo->calcularPremioPartido($objPart4);
$premioCinco=$objTorneo->calcularPremioPartido($objPart5);
$premioSeis=$objTorneo->calcularPremioPartido($objPart6);


print_r($premioUno);*/