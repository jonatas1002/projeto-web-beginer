<?php
require_once("cabecalho.php");
require_once("conecta.php");
require_once("logica-usuario.php");
require_once("class/Pedido.php");
require_once("class/PedidoDAO.php");
require_once("class/Produto.php");
require_once("class/ProdutoDAO.php");


verificaUsuario();

$produto = new Produto(null, null, null);
$produto->setCodproduto(1);

$produtoDAO = new ProdutoDAO($conexao);
$produtos = $produtoDAO->listaProdutos();


?>	

<h1>Formulário de pedido</h1>
<form action="adiciona-pedido.php" method="post">
	<table class="table">
		
	<tr>
	<td>Produto</td>
	<td>
		<select name="cod_produto" class="form-control">
			<?php
			foreach($produtos as $produto) : 
				$realProduto = $produto->getCodproduto();// == $categoria->getId();
				$selecao = $realProduto ? "selected='selected'" : "";
			?>
				<option value="<?=$produto->getCodproduto()?>" <?=$selecao?>>
					<?=$produto->getProduto()?>
				</option>
			<?php 
			endforeach
			?>
		</select>
	</td>
</tr>
<tr>
	<td>Quantidade</td>
	<td>
		<input class="form-control" type="number" name="quantidade">
	</td>
</tr>
<tr>
	<td>Cliente</td>
	<td>
		<input class="form-control" type="text" name="cliente">
	</td>
</tr>
<tr>
	<td>Observações</td>
	<td>
		<textarea class="form-control" name="observacao"></textarea>
	</td>
</tr>
<tr>	

</tr>

		<tr>
			<td>
				<button class="btn btn-primary" type="submit">Cadastrar</button>
			</td>
		</tr>
	</table>
</form>

<?php include("rodape.php"); ?>