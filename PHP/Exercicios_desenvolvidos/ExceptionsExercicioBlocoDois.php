<?php

////--------------------------------------------**** EXERCÍCIO BLOCO 2 **** --------------------------------------------------------///

// Crie uma função chamada divisao() que deverá receber dois números. Na função, verifique se algum dos números passados por parâmetro é  igual à 0, caso positivo, lance uma exceção.
// Em seguida, escreva um algoritmo responsável por executar a função divisão() forçando-a a lançar a exceção (passando 0 em algum parâmetro) e realize o tratamento e captura através do Try Catch.

////--------------------------------------------**** EXERCÍCIO BLOCO 2 **** --------------------------------------------------------///

													// RESOLUÇÃO DO PROBLEMA //

//Criação da função divisao():
function divisao(array $numerosEntrada)
{
	if(($numerosEntrada['primeiro numero']==0) || ($numerosEntrada['segundo numero']==0)) {

		throw new Exception ("Números inválidos O.O! \nPor favor, insira valores diferentes");
	}

	return true;
}

// Criação de uma lista (array) para input das variáveis int de alimentação:
$numerosEntrada = [
'primeiro numero' => 2,
'segundo numero' => 0,
];

//Criação do Try Catch para execução da função:
$status = false;
try {
	$status = divisao($numerosEntrada);
} catch (Exception $e) {
	echo $e->getMessage();
} finally {
	echo "\nStatus do algoritmo: " . (int)$status; //passar o booleano de string (True/False) para int (0/)
	die();
}
echo "\n... script em execução ...\n";


?>