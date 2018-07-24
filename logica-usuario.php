<?php
session_start();

function usuarioEstaLogado() {
	return isset($_SESSION["usuario_logado"]);
}

function verificaUsuario() {
	if(!usuarioEstaLogado()) {
		$_SESSION["danger"] = "Você não tem acesso a esta funcionalidade.";
		header("Location: index.php");
		die();
	}
}

function usuarioLogado() {
	$usuario = $_SESSION["usuario_logado"];
	return $usuario["nome"];
}

function codigoUsuario(){
	$usuario = $_SESSION["usuario_logado"];
	return $usuario["cod_usuario"];
}

function logaUsuario($usuario) {
	$_SESSION["usuario_logado"] = $usuario;
	$_SESSION["nivel_acesso"] = $usuario["nivel"];
}

function logout() {
	session_destroy();
	session_start();
}