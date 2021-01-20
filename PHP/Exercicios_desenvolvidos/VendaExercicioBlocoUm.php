<?php

////--------------------------------------------**** EXERCÍCIO BLOCO 1 **** --------------------------------------------------------///
// Crie uma classe chamada "Venda" com os atributos privados "data", "produto", "quantidade" e "valorTotal". Crie um método capaz de exibir os dados da venda. Crie uma instância da classe e passe os atributos através de um método construtor, em seguida invoque o método responsável por exibir o conteúdo da venda devidamente formatado.

// Criação da classe e declaração dos atributos:

class Venda
{
	private $data;
	private $produto;
	private $quantidade;
	private $valorTotal;

	// Definição dos métodos:
	/// Método construtor:
	public function __construct($data, $produto, $quantidade, $valorTotal)
	{
		// Atributos da classe:
		$this->data = $data;
		$this->produto = $produto;
		$this->quantidade = $quantidade;
		$this->valorTotal = $valorTotal;
	}
	/// Função para retornar os dados da classe já formatados:
	public function dadosCompra()
	{
		echo 'A compra foi efetuada em: ' . $this->data;
		echo PHP_EOL;
		echo 'Produto adquirido pelo cliente: ' . $this->produto;
		echo PHP_EOL;
		echo 'A quantidade requerida da(o) ' . $this->produto . ' foi igual a ' . $this->quantidade . ' unidades';
		echo PHP_EOL;
		echo 'Valor total da compra: R$ ' . $this->valorTotal;
	}
}

// Criação do objeto - instância da classe:
$venda = new Venda(
	'04/01/2021', // data - (string)
	'Brinco', // produto - (string)
	2, // quantidade - (int)
	15.90, // valor total - (float)
);

// Acesso dos atributos através da instância da classe:
echo $venda->dadosCompra();

?>


