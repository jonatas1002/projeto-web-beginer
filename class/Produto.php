<?php 

class Produto{
	private $cod_produto;
	private $produto;
	private $peso;
	private $formula;

	function __construct($cod_produto, $produto, $peso){
		$this->cod_produto = $cod_produto;
		$this->produto = $produto;
		$this->peso = $peso;
	}

	function setCodproduto($cod_produto){
		$this->cod_produto = $cod_produto;
	}

	function setFormula($formula){
		$this->formula = $formula;
	}

	function getCodproduto(){
		return $this->cod_produto;
	}
	function getProduto(){
		return $this->produto;
	}
	function getPeso(){
		return $this->peso;
	}
	function getFormula(){
		return $this->formula;
	}
	
}

?>