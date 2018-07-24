<?php  

class Nivel_acesso{
	private $cod_acesso;
	private $nivel;
	private $descricao;

	function __constructor($cod_acesso, $nivel){
		$this->cod_acesso = $cod_acesso;
		$this->nivel = $nivel;
	}

	function setCodacesso($cod_acesso){
		$this->cod_acesso = $cod_acesso;
	}

	function getCodacesso(){
		return $this->cod_acesso;
	}
	function getNivel(){
		return $this->nivel;
	}

}

?>