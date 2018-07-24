<?php  

class Usuario{
	private $cod_usuario;
	private $nome;
	private $usuario;
	private $senha;
	private $ativo;
	private $nivel;

	function __construct($nome, $usuario, $senha, $nivel){
		$this->nome = $nome;
		$this->usuario = $usuario;
		$this->senha = $senha;
		$this->nivel = $nivel;
	}

	function setCodusuario($cod_usuario){
		$this->cod_usuario = $cod_usuario;
	}
	function setAtivo($ativo){
		$this->ativo = $ativo;
	}

	function getCodusuario(){
		return $this->cod_usuario;
	}
	function getNome(){
		return $this->nome;
	}
	function getUsuario(){
		return $this->usuario;
	}
	function getSenha(){
		return $this->senha;
	}
	function isAtivo(){
		return $this->ativo;
	}
	function getNivel(){
		return $this->nivel;
	}

	
}
?>