<?php
require_once("conecta.php");

function buscaUsuario($conexao, $usuario, $senha) {

	//$senhaMd5 = md5($senha);
	$email = mysqli_real_escape_string($conexao, $usuario);
	$query = "select * from usuarios where usuario='{$usuario}' and senha='{$senha}'";
	$resultado = mysqli_query($conexao, $query);
	$usuario = mysqli_fetch_assoc($resultado);

	return $usuario;
}