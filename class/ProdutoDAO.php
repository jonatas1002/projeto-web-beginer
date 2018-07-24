<?php  


class ProdutoDAO
{
	private $conexao;
	
	function __construct($conexao){
		$this->conexao = $conexao;
	}

	function listaProdutos(){
		$produtos = array();
		$resultado = mysqli_query($this->conexao, "select * from produto");

		while($produto_array = mysqli_fetch_assoc($resultado)) {
			
			$produtoNome = $produto_array['produto'];
			$peso = $produto_array['peso'];
			$formula = $produto_array['formula'];
			$cod_produto = $produto_array['cod_produto'];

			$produto = new Produto($cod_produto, $produtoNome, $peso);
			
			$produto->setFormula($produto_array['formula']);


			array_push($produtos, $produto);
		}

		return $produtos;
	}

	function cadastraProduto(Produto $produto){
		$query = "insert into produto (cod_produto, produto, peso) 
		values ({$produto->getCodproduto()}, '{$produto->getProduto()}', {$produto->getPeso()})";

		return mysqli_query($this->conexao, $query);
	}

	function alteraProduto(){

	}

	function removeProduto(){

	}
}

?>