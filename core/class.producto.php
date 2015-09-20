<?php

class Producto{
	
	public $string_NombreProducto;
	public $int_CodigoProducto;
	public $int_ValorProducto;
	public $string_MarcaProducto;
	public $array_Productos = array();

	function __construct($CodigoProducto=""){
		$this->int_CodigoProducto = $CodigoProducto;
		$this->string_NombreProducto = "Producto number one";
		$this->int_ValorProducto = 10000;
		$this->string_MarcaProducto = "MTX Mooto";
	}

	public function GetNombreProducto(){
		return $this->string_NombreProducto;
	}

	public function GetIdProducto(){
		return $this->int_CodigoProducto;
	}

	public function GetValorProducto(){
		return $this->int_ValorProducto;
	}

	public function GetMarcaProducto(){
		return $this->string_MarcaProducto;
	}
}

?>