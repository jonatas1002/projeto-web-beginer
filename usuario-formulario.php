<?php
require_once("cabecalho.php");
require_once("conecta.php");
require_once("logica-usuario.php");
require_once("class/Nivel_acessoDAO.php");
require_once("class/Nivel_acesso.php");

verificaUsuario();

$nivel = new Nivel_acesso(null, null);
$nivel->setCodacesso(1);

$nivelDAO = new Nivel_acessoDAO($conexao);
$niveis = $nivelDAO->listaNivel();

?>	

<h1>Formulário de usuario</h1>
<form action="adiciona-usuario.php" method="post">
	<table class="table">
		
<tr>
	<td>Nome</td>
	<td>
		<input class="form-control" type="text" name="nome">
	</td>
</tr>
<tr>
	<td>Usuario</td>
	<td>
		<input class="form-control" type="text" name="usuario">
	</td>
</tr>
<tr>
	<td>Senha</td>
	<td>
		<input class="form-control" type="password" name="senha">
	</td>
</tr>
<tr>
	<td>Nivel de acesso</td>
	<td>
		<select name="nivel_access" class="form-control">
			<?php
			foreach($niveis as $nivel) : 
				$realNivel = $nivel->getCodacesso();// == $categoria->getId();
				$selecao = $realNivel ? "selected='selected'" : "";
			?>
				<option value="<?=$nivel->getCodacesso()?>" <?=$selecao?>>
					<?=$nivel->getNivel()?>
				</option>
			<?php 
			endforeach

			?>
		</select>
	</td>
</tr>
<tr>
<tr>
	<td></td>
	<td><input type="checkbox" name="ativo" value="true"> Ativo
</tr>
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