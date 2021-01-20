<?php

/* 	
------------------------------------****** SINTAXE PARA A CLASSE DATETIME ****** ------------------------------------------------------
	P-> Representação de período:vem antes de dia, mês, ano e semana
	Letra maiúscula - retorna string; Letra minúscula - retorna int
		Y - anos
		M - meses
		D - dias
		W - semanas
	T -> Representação de tempo: vem antes de hora, minuto e segundo
		H - horas
		M - minutos
		S - segundos
------------------------------------****** SINTAXE PARA A CLASSE DATETIME ****** ------------------------------------------------------
*/
echo date('d/m/y') . PHP_EOL;


// Criação da instãncia da classe DateTime:
$data = new DateTime();
//-------------------------------------------------***** INTERVALOS *****-----------------------------------------------------------//
// DateInterval: permite fazer considerações sobre intervalos de tempo adicionados ou subtraídos:
$intervalo = new DateInterval('PT5M'); //adição de intervalos de 5 minutos
$data->add($intervalo);
$data->sub($intervalo);
var_dump($data);
exit();
//-------------------------------------------------***** INTERVALOS *****-----------------------------------------------------------//

//-------------------------------------------------***** DATA E HORA *****-----------------------------------------------------------//
// Acesso ao método format (muito parecido com o date):
/// Y - ano com 4 dígitos; y - ano com 2 dígitos (abreviação)
/// H - hora; i - minuto; s - segundos
echo $data->format('d-m-Y H:i:s') . PHP_EOL;
//-------------------------------------------------***** DATA E HORA *****-----------------------------------------------------------//

?>