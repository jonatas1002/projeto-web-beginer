<?php
require_once("cabecalho.php");
require_once("conecta.php");
require_once("class/PedidoDAO.php"); 
require_once("logica-usuario.php");

verificaUsuario();

$id = $_POST['id'];

$pedido = new PedidoDAO($conexao);
$pedido->removePedido($id);

$_SESSION["success"] = "Pedido removido com sucesso.";
header("Location: pedido-lista.php");

?>