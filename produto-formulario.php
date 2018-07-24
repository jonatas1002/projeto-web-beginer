<?php
require_once("cabecalho.php");
require_once("conecta.php");
require_once("logica-usuario.php");

verificaUsuario();


?>	

<h1>Formulário de produto</h1>
<form action="adiciona-produto.php" method="post">
	<table class="table">

<tr>
	<td>Codigo Produto</td>
	<td>
		<input class="form-control" type="number" name="cod-produto" autofocus>
	</td>
</tr>
		
<tr>
	<td>Produto</td>
	<td>
		<input class="form-control" type="text" name="produto">
	</td>
</tr>
<tr>
	<td>Peso</td>
	<td>
		<input class="form-control" type="number" name="peso">
	</td>
</tr>

</tr>

		<tr>
			<td>
				<button class="btn btn-primary" type="submit">Cadastrar</button>
			</td>
		</tr>
	</table>
</form>

<?php include("rodape.php"); ?>