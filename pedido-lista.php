<?php
require_once("cabecalho.php");
require_once("conecta.php");
require_once("logica-usuario.php");
require_once("class/Pedido.php");
require_once("class/PedidoDAO.php");

verificaUsuario();
?>

<table class="table table-striped table-bordered">
	<?php
	
	$pedidoDAO = new PedidoDAO($conexao);

	$pedidos = $pedidoDAO->listaPedidos();


	foreach($pedidos as $pedido) :
	
	?>

		<tr>
			<td><?= $pedido->getCodproduto() ?></td>
			<td><?= $pedido->getCodsituacao() ?></td>
			<td><?= $pedido->getDatapedido() ?></td>
			<td><?= $pedido->getQuantidade() ?></td>
			<td><?= $pedido->getCliente() ?></td>
			<td><?= substr($pedido->getObservacao(), 0, 40) ?></td>
			
			

			<?php if($_SESSION["nivel_acesso"] == 1){ ?>
			<td><a class="btn btn-primary" href="pedido-altera-formulario.php?id=<?=$pedido->getCodpedido()?>">alterar</a></td>
			
			<td>
				<form action="remove-pedido.php" method="post">
					<input type="hidden" name="id" value="<?=$pedido->getCodpedido()?>">
					<button class="btn btn-danger">remover</button>
				</form>
			</td>
			<?php } ?>
		</tr>
	<?php
	endforeach
	?>	
</table>

<?php include("rodape.php"); ?>