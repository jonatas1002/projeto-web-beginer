<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once("mostra-alerta.php"); ?>
<html>
<head>
	<meta charset="utf-8">
	<title>Só Sal</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/loja.css" rel="stylesheet">
	<script language="javascript">
		function foco(id){
			document.getElementById(id).focus();
		}
	</script>
</head>
<body>

	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">Só Sal</a>
			</div>
			<div>
				<ul class="nav navbar-nav">
					<li><a href="pedido-formulario.php">Pedido Produção</a></li>
					<li><a href="pedido-lista.php">Pedidos Realizados</a></li>
					<?php if($_SESSION["nivel_acesso"] == 1){ ?>
					<li><a href="usuario-formulario.php">Adiciona Usuario</a></li>
					<li><a href="produto-formulario.php">Adiciona Produto</a></li>
					<?php  }?>
				</ul>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="principal">
			<?php  mostraAlerta("success"); ?>
			<?php mostraAlerta("danger"); ?>