<?php  

class PedidoDAO{

	private $conexao;

	function __construct($conexao){
		$this->conexao = $conexao;
	}

	function listaPedidos(){
		$pedidos = array();
		$resultado = mysqli_query($this->conexao, "SELECT p.cliente, p.cod_pedido, p.data_entrega, p.data_pedido, p.observacao, p.quantidade, s.situacao, rac.produto, u.nome FROM pedido p 
			join usuarios u on (p.cod_usuario=u.cod_usuario)
			JOIN situacao s on (p.cod_situacao=s.cod_situacao) JOIN produto rac on (p.cod_produto=rac.cod_produto)");

		while($pedido_array = mysqli_fetch_assoc($resultado)) {
			
			$produto = $pedido_array['produto'];
			$usuario = $pedido_array['nome'];
			$data_pedido = $pedido_array['data_pedido'];
			$quantidade = $pedido_array['quantidade'];
			$cliente = $pedido_array['cliente'];

			$pedido = new Pedido($produto, $usuario, $data_pedido, $quantidade, $cliente);
			$pedido->setCodpedido($pedido_array['cod_pedido']);
			$pedido->setSituacao($pedido_array['situacao']);
			$pedido->setObservacao($pedido_array['observacao']);


			array_push($pedidos, $pedido);
		}

		return $pedidos;
	}

	function cadastraPedido(Pedido $pedido){
		$query = "insert into pedido (cod_produto, cod_usuario, data_pedido, data_entrega, quantidade, observacao, cliente) 
		values ({$pedido->getCodproduto()}, {$pedido->getCodusuario()}, '{$pedido->getDatapedido()}', '{$pedido->getDataentrega()}', {$pedido->getQuantidade()}, '{$pedido->getObservacao()}', '{$pedido->getCliente()}')";

		return mysqli_query($this->conexao, $query);
	}

	function alteraPedido(){

	}

	function removePedido($id){
		$query = "delete from pedido where cod_pedido = {$id}";

		return mysqli_query($this->conexao, $query);
	}
}

?>