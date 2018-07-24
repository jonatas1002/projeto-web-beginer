<?php 
require_once("cabecalho.php");
require_once("conecta.php");
require_once("logica-usuario.php");
require_once("class/UsuarioDAO.php");
require_once("class/Usuario.php");



verificaUsuario();


$nome = $_POST['nome'];
$login = $_POST['usuario'];
$senha = $_POST['senha'];
$nivel= $_POST['nivel_access'];


$usuario = new Usuario($nome, $usuario, $senha, $nivel);
$usuario->setAtivo($_POST['ativo']);
$usuarioDAO = new UsuarioDAO($conexao);

if($usuarioDAO->cadastraUsuario($usuario)) { ?>
	<p class="text-success">O usuario foi adicionado.</p>
<?php 
} else {
	$msg = mysqli_error($conexao);
?>
	<p class="text-danger">O usuario não foi adicionado: <?= $msg?></p>
<?php
}
?>

<?php include("rodape.php"); ?>