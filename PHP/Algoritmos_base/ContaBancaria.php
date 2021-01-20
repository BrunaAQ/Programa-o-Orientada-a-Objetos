<?php #tag do php

// Checagem de tipos:
//declare(strict_types=1);

// Definição de uma classe - depois do "class" vem o nome da classe; objeto é uma instância da classe 
// Propriedades ou atributos é tudo aquilo que a classe possui: SÃO VARIÁVEIS, no php, vêm declaradas com o $
class ContaBancaria
{
	// Aplicar modificador de acesso na frente de cada uma das variáveis:
	// Depos de criar o método construtor, mudar o modificador de acesso de public para private:
	private $banco;
	private $nomeTitular;
	private $numeroAgencia;
	private $numeroConta;
	private $saldo;

	// Definição de métodos:
	/// Método construtor: toda vez que a classe é instanciada, essa função é automaticamente ativada
	public function __construct($banco, $nomeTitular, $numeroAgencia, $numeroConta, $saldo)
	{
		// Acessar atributos e/ou métodos de dentro da própria da classe
		$this->banco = $banco;
		$this->nomeTitular = $nomeTitular;
		$this->numeroAgencia = $numeroAgencia;
		$this->numeroConta = $numeroConta;
		$this->saldo = $saldo;
		//echo "$nomeTitular";
	}
	/// Função para obtenção de saldo:
	public function obterSaldo()
	{
		return 'Seu saldo atual é: R$ ' . $this->saldo;
	}
	/// Função para manutenção de saldo - DEPÓSITO:
	public function depositar($valor)
	{
		$this->saldo += $valor;
		return ' Depósito de R$ ' . $valor . ' realizado!';
	}
	/// Função para manutenção de saldo - SAQUE:
	public function sacar($valor)
	{
		$this->saldo -= $valor;
		return ' Saque de R$ ' . $valor . ' realizado!';
	}

}

// Criação (new) de uma instância (objeto) dentro de uma classe:
// Pode-se atribuir o objeto a uma variável ($)
$conta = new ContaBancaria(
	'Banco do Brasil', //banco
	'Bruna Quiterio', //nomeTitular
	'8244', //numeroAgencia
	'57354-10', //numeroConta
	0.00, //saldo
);
// Quebra do código:
echo $conta->obterSaldo();
// Separador de linhas:
echo PHP_EOL;
// Fazer o depósito:
echo $conta->depositar(300.00);
// Separador de linhas:
echo PHP_EOL;
// Retornar o saldo atual:
echo $conta->obterSaldo();
// Separador de linhas:
echo PHP_EOL;
// Fazer o saque:
echo $conta->sacar(150.00);
// Separador de linhas:
echo PHP_EOL;
// Retornar o saldo atual:
echo $conta->obterSaldo();

exit();

 					//------------------------------***************-----------------------------------//
// Acesso a um atributo da classe: se dá através do objeto
var_dump($conta->nomeTitular);
// Acesso para alteração do atributo através da instância:
$conta->nomeTitular = "Amora";
var_dump($conta->nomeTitular);
var_dump($conta->saldo);
					//------------------------------***************-----------------------------------//

// Invocação de método 
echo $conta->obterSaldo();

?>