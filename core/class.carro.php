<?php

class Carro extends Producto{
	
	function __construct(){
		if (!isset($_SESSION['Carro'])) {
			$_SESSION['Carro'] = array();	
		}
	}

	public function SetProductoCarro($IdProducto){
		if (!empty($IdProducto)) {
			array_push($_SESSION['Carro'], $IdProducto);
		}
	}

	public function GetCarro(){
		return $_SESSION['Carro'];
	}

}

?>