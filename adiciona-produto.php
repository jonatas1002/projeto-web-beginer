<?php 
require_once("cabecalho.php");
require_once("conecta.php");
require_once("logica-usuario.php");
require_once("class/ProdutoDAO.php");
require_once("class/Produto.php");



verificaUsuario();

$codProduto = $_POST['cod-produto'];
$produto = $_POST['produto'];
$peso= $_POST['peso'];


$produtos = new Produto($codProduto, $produto, $peso);
$produtoDAO = new ProdutoDAO($conexao);

if($produtoDAO->cadastraProduto($produtos)) { ?>
	<p class="text-success">O pedido foi adicionado.</p>
	
<?php 
header("Location: produto-formulario.php");
} else {
	$msg = mysqli_error($conexao);
?>
	<p class="text-danger">O produto não foi adicionado: <?= $msg?></p>
<?php
}
?>

<?php include("rodape.php"); ?>