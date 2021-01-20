<?php

////--------------------------------------------**** EXERCÍCIO BLOCO 2 **** --------------------------------------------------------///
// Crie uma data com a classe DateTime com a data e hora atuais. Em seguida, subtraia 5 dias, 10 horas e 50 minutos dessa data e exiba o resultado no seguinte formato: dia/mes/ano - hora:minuto:segundo
////--------------------------------------------**** EXERCÍCIO BLOCO 2 **** --------------------------------------------------------///

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

// Criação da data: instância da classe DateTime:
$data = new DateTime();
var_dump($data);

// Atribuição de operações com data e hora - adoção de intervalos:
/// Criação do intervalo: instância da classe DateInterval:
$intervalo = new DateInterval('P5DT10H50M');
/// Aplicação da método sub à variável (instância) data:
$data->sub($intervalo);

// Formatação da data criada através da instância da classe DateTime:
echo $data->format('d/m/Y - H:i:s');
?>
