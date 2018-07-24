<?php  

class Pedido{
	private $cod_pedido;
	private $cod_produto;
	private $cod_usuario;
	private $cod_situacao;
	private $data_pedido;
	private $data_entrega;
	private $quantidade;
	private $observacao;
	private $cliente;

	function __construct($produto, $usuario, $data_pedido, $quantidade, $cliente){
		$this->cod_produto = $produto;
		$this->cod_usuario = $usuario;
		$this->data_pedido = $data_pedido;
		$this->quantidade = $quantidade;
		$this->cliente = $cliente;
		$this->data_entrega = $this->setDataentrega($data_pedido);
	}

	private function setDataentrega($data_pedido){
		return date('y-m-d', strtotime("+15 days",strtotime($data_pedido)));
	}

	function setCodpedido($cod_pedido){
		$this->cod_pedido = $cod_pedido;
	}
	function setSituacao($cod_situacao){
		$this->cod_situacao = $cod_situacao;
	}
	function setObservacao($observacao){
		$this->observacao = $observacao;
	}	


	function getCodpedido(){
		return $this->cod_pedido;
	}
	function getCodproduto(){
		return $this->cod_produto;
	}
	function getCodusuario(){
		return $this->cod_usuario;
	}
	function getCodsituacao(){
		return $this->cod_situacao;
	}
	function getDatapedido(){
		return $this->data_pedido;
	}
	function getDataentrega(){
		return $this->data_entrega;
	}
	function getQuantidade(){
		return $this->quantidade;
	}
	function getObservacao(){
		return $this->observacao;
	}
	function getCliente(){
		return $this->cliente;
	}

}

?>