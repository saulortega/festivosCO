<?php

/**********************
  *
  * festivosCO: Una función que retorna un arreglo con los festivos de Colombia.
  * Sitio web: https://github.com/saulortega/festivosCO
  * Autor: Saúl Ortega
  * Versión: 0.1
  *
  *
  * Historial de cambios:
  * 
  * 20150517-1449: Primer lanzamiento. funciones() retorna un array con los festivos del año actual o del año indicado.
  *
**********************/

function festivos($año='actual'){

	if($año == 'actual'){
		$año = date('Y');
	}


	//Fechas movibles al siguiente lunes:
	$epifanía = "$año-01-06";
	while(date("N", strtotime($epifanía)) != 1){
		$epifanía = date("Y-m-d", strtotime("$epifanía +1 day"));
	}

	$sanJosé = "$año-03-19";
	while(date("N", strtotime($sanJosé)) != 1){
	        $sanJosé = date("Y-m-d", strtotime("$sanJosé +1 day"));
	}

	$sanPedroSanPablo = "$año-06-29";
	while(date("N", strtotime($sanPedroSanPablo)) != 1){
	        $sanPedroSanPablo = date("Y-m-d", strtotime("$sanPedroSanPablo +1 day"));
	}

	$asunciónVirgen = "$año-08-15";
	while(date("N", strtotime($asunciónVirgen)) != 1){
	        $asunciónVirgen = date("Y-m-d", strtotime("$asunciónVirgen +1 day"));
	}

	$díaRaza = "$año-10-12";
	while(date("N", strtotime($díaRaza)) != 1){
	        $díaRaza = date("Y-m-d", strtotime("$díaRaza +1 day"));
	}

	$todosLosSantos = "$año-11-01";
	while(date("N", strtotime($todosLosSantos)) != 1){
	        $todosLosSantos = date("Y-m-d", strtotime("$todosLosSantos +1 day"));
	}

	$independenciaCartagena = "$año-11-11";
	while(date("N", strtotime($independenciaCartagena)) != 1){
	        $independenciaCartagena = date("Y-m-d", strtotime("$independenciaCartagena +1 day"));
	}
	//Fin de fechas movibles.


	//Empieza algoritmo para obtener domingo de pascua:
	if($año>=1583 && $año<1700){
		$M=22;
		$N=2;
	}elseif($año>=1700 && $año<1800){
		$M=23;
		$N=3;
	}elseif($año>=1800 && $año<1900){
		$M=23;
		$N=4;
	}elseif($año>=1900 && $año<2100){
		$M=24;
		$N=5;
	}elseif($año>=2100 && $año<2200){
		$M=24;
		$N=6;
	}elseif($año>=2200 && $año<2300){
		$M=25;
		$N=0;
	}else{
		return;
	}

	//Cálculo de residuos
	$a = $año % 19;
	$b = $año % 4;
	$c = $año % 7;
	$d = (19*$a + $M) % 30;
	$e = (2*$b+4*$c+6*$d + $N) % 7;
	//Decidir entre los 2 casos:
	if ( $d + $e < 10 ) {
		$dia = $d + $e + 22;
		$mes = 3; // marzo
	}else{
		$dia = $d + $e - 9;
		$mes = 4; //abril
	}
	//Excepciones especiales:
	if ( $dia == 26  and $mes == 4 ) { // 4 = abril
		$dia = 19;
		}
	if ( $dia == 25 and $mes == 4 and $d==28 and $e == 6 and $a >10 ) { // 4 = abril
		$dia = 18;
	}
	$domingoPascua = $año."-".$mes."-".$dia;
	//Finaliza algoritmo de semana santa.


	//Fechas religiosas calculadas a partir del domingo de pascua:
	$domingoPascua = date("Y-m-d", strtotime($domingoPascua));
	$domingoRamos = date("Y-m-d", strtotime("$domingoPascua -7 days"));
	$juevesSanto = date("Y-m-d", strtotime("$domingoPascua -3 days"));
	$viernesSanto = date("Y-m-d", strtotime("$domingoPascua -2 days"));
	$ascensiónJesús = date("Y-m-d", strtotime("$domingoPascua +43 days")); //Verificar.....
	$corpusChristi = date("Y-m-d", strtotime("$domingoPascua +64 days")); //Verificar.....
	$sagradoCorazón = date("Y-m-d", strtotime("$domingoPascua +71 days")); //Verificar.....
	//Finaliza fechas religiosas


	$festivos = array(
		"Año nuevo" => "$año-01-01",
		"Reyes magos" => $epifanía,
		"Día de San José" => $sanJosé,
		"Domingo de ramos" => $domingoRamos,
		"Jueves santo" => $juevesSanto,
		"Viernes santo" => $viernesSanto,
		"Domingo de resurrección" =>$domingoPascua,
		"Día del trabajo" => "$año-05-01",
		"Ascensión del señor" => $ascensiónJesús,
		"Corpus Christi" => $corpusChristi,
		"Sagrado corazón de Jesús" => $sagradoCorazón,
		"San Pedro y San Pablo" => $sanPedroSanPablo,
		"Día de la independencia" => "$año-07-20",
		"Batalla de Boyacá" => "$año-08-07",
		"Asunción de la virgen María" => $asunciónVirgen,
		"Día de la raza" => $díaRaza,
		"Todos los santos" => $todosLosSantos,
		"Independencia de Cartagena" => $independenciaCartagena,
		"Inmaculada concepción" => "$año-12-08",
		"Navidad" => "$año-12-25"
	);


	return($festivos);

}


?>
