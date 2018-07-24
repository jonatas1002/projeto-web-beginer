<?php 
require_once("cabecalho.php");
require_once("conecta.php");
require_once("logica-usuario.php");
require_once("class/PedidoDAO.php");
require_once("class/Pedido.php");



verificaUsuario();


$produto = $_POST['cod_produto'];
$usuario = codigoUsuario();
$quantidade = $_POST['quantidade'];
$cliente = $_POST['cliente'];
$observacao = $_POST['observacao'];

$pedido = new Pedido($produto, $usuario, date('y-m-d'), $quantidade, $cliente);
$pedido->setObservacao($observacao);
$pedidoDAO = new PedidoDAO($conexao);

if($pedidoDAO->cadastraPedido($pedido)) { ?>
	<p class="text-success">O pedido foi adicionado.</p>
<?php 
} else {
	$msg = mysqli_error($conexao);
?>
	<p class="text-danger">O pedido não foi adicionado: <?= $msg?></p>
<?php
}
?>

<?php include("rodape.php"); ?>