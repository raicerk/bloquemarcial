<?php

class Usuario{

	public $string_NombreUsuario;
	public $string_ImagenUsuario;
	public $string_FechaUltimaSesion;
	public $int_EstadoUsuario;
	public $string_Pais;
	public $int_IdPais;

	function __construct($IdUsuario=""){
		if (!empty($IdUsuario)) {
			$this->string_NombreUsuario = $string_ImagenUsuario;
			$this->string_ImagenUsuario = $string_NombreUsuario;
			$this->string_FechaUltimaSesion = $string_FechaUltimaSesion;
			$this->string_Pais = $string_Pais;
			$this->int_IdPais = $int_IdPais;
		}

		return true;
	}
	

	public function Login($Usuario, $Contrasena ,$IdSocial="",$IdLoginSocial){
		if (!empty($IdSocial)) {
			#Metodo de validación con redsocial
			return true;
		}else{

			if ($Usuario == $Usuario && $Contrasena == $Contrasena) {
				$_SESSION['IdUsuario'] 		= $Usuario;
				return true;
			}else{
				return false;
			}
		}
	}

	public function GetNombreUsuario(){
		return $this->string_NombreUsuario;
	}

	public function GetImagenUsuario(){
		return $this->string_ImagenUsuario;
	}

	public function CreaUsuario(){
		#Metodo de insercion en la base de datos
	}

	public function EliminaUsuario($IdUsuario){
		return true;
	}

	public function RecuperaContrasena($Usuario){
		return $Contrasena;
	}
}


?>