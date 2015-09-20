<?php


class Diseno{
	
	private $string_NombrePagina;
	public $string_Titulo;

	function __construct(){
		return true;
	}

	public function SetTitulo($titulo){
		$this->string_Titulo = $titulo;
	}

	public function GetTitulo(){
		return $this->string_Titulo;
	}
}

?>