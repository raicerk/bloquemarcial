<?php

class Utiles{

	public $string_Destino;
	
	function __construct(){
		return true;
	}

	public function OrigenDirecto(){
		if (empty($_SERVER['http_referer'])) {
			header("Location :".$this->string_Destino);
		}
	}

	public function Si($eval, $true, $false){
		if ($eval) {
			return $true;
		}else{
			return $false;
		}
	}

	public function ObtieneIP(){
		if (!empty($_SERVER['HTTP_CLIENT_IP'])){
			return $_SERVER['HTTP_CLIENT_IP'];	
		}elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
			return $_SERVER['HTTP_X_FORWARDED_FOR'];	
		}else{
			return $_SERVER['REMOTE_ADDR'];	
		}
	}

	public function FormatoMoneda($Valor){
		return number_format($Valor);
	}

}

?>