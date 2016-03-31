<?php
	
	include_once 'usuario.php';

	class UsuarioComum extends usuario
	{
		private $nro_de_vezes_acessado = 0;
		
		function __construct()
		{
			parent::__construct();
			
		}


		function getNro_de_vezes_acessado(){
			return $this->nro_de_vezes_acessado = $nro_de_vezes_acessado;
		}

		function setNro_de_vezes_acessado($_nro_de_vezes_acessado){
			$this->nro_de_vezes_acessado = $_nro_de_vezes_acessado;
		}
	}

?>