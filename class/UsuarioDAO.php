<?php  

class UsuarioDAO{
	private $conexao;

	function __construct($conexao){
		$this->conexao = $conexao;
	}

	function listaUsuario(){
		$usuariosArray = array();
		$resultado = mysqli_query($this->conexao, "SELECT u.nome, u.cod_usuario, u.usuario, u.senha, u.ativo, n.nivel FROM usuarios u
			JOIN nivel_acesso n ON(u.nivel=n.cod_acesso)");

		while($usuario_array = mysqli_fetch_assoc($resultado)) {
			
			$nome = $usuario_array['nome'];
			$usuario = $usuario_array['usuario'];
			$senha = $usuario_array['senha'];
			$nivel = $usuario_array['nivel'];

			$usuarios = new Usuario($nome, $usuario, $senha, $nivel);
			$usuarios->setCodusuario($usuario_array['cod_usuario']);
			$usuarios->setAtivo($usuario_array['ativo']);


			array_push($usuariosArray, $usuarios);
		}

		return $usuariosArray;
	}

	function cadastraUsuario(Usuario $usuario){
		$query = "insert into usuarios (nome, usuario, senha, nivel, ativo) 
		values ('{$usuario->getNome()}','{$usuario->getUsuario()}','{$usuario->getSenha()}', 
		{$usuario->getNivel()}, '{$usuario->isAtivo()}')";

		return mysqli_query($this->conexao, $query);
	}
	

}

?>