<?php

namespace Stephannyfladja\projeto01;

class Model {//o papel dessa classe é guardar a conexão com o banco de dados
	protected static $conexao;//essa variável é a que guarda

	static function bindConnection($conexao){
		self::$conexao = $conexao; 
	}

}
?>

  
