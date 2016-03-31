<?php
	
	class Usuario
	{
		private $usuario;
		private $senha;

		function __construct()
		{
			echo "Seja Bem Vindo!";
		}

		function __destruct()
		{
			echo "Bye";
		}

		function getUsuario(){
			return $this->usuario = $usuario;
		}

		public function setUsuario($_usuario){
			$this->usuario = $_usuario;
		}


		function getSenha(){
			return $this->senha = $senha;
		}

		function setSenha($_senha){
			$this->senha = $_senha;
		}
	}
?>