<?php  

class Nivel_acessoDAO{
	private $conexao;

	function __construct($conexao){
		$this->conexao = $conexao;
	}

	function listaNivel(){
		$niveisArray = array();
		$resultado = mysqli_query($this->conexao, "select cod_acesso as id, nivel from nivel_acesso");

		while($nivel_array = mysqli_fetch_assoc($resultado)) {
			
			$id = $nivel_array['id'];
			$nivel = $nivel_array['nivel'];
		
			$niveis = new Nivel_acesso($id, $nivel);
		

			array_push($niveisArray, $niveis);
		}

		return $niveisArray;
	}


}

?>