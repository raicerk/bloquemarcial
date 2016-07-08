<?php

class Producto extends DBMySql{
	
	public $string_NombreProducto;
	public $int_CodigoProducto;
	public $int_ValorProducto;
	public $string_MarcaProducto;
	public $array_Productos = array();

	function __construct($CodigoProducto=""){
		$mysqli = new DBMySql();
		$dato = $mysqli->Query("CALL spRec_Ecommerce_DetalleProducto(?)",array('i',$CodigoProducto),false);
		foreach ($dato as $key) {
			$this->int_CodigoProducto = $CodigoProducto;
			$this->string_NombreProducto = $key["NombreProducto"];
			$this->int_ValorProducto = $key["Precio"];
			$this->string_MarcaProducto = $key["Marca"];
		}	
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