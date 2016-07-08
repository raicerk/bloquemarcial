<?php

#Inicia Sesion para el uso de variables del sistema
session_start();

#Carga de configuración
include 'configuracion.php';

#Validación de carga de errores
if (constant("MostrarErrores")) {
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
}else{
	error_reporting(0);
	ini_set('display_errors', '0');
}

#Carga de clases
include 'class.utiles.php';
include 'class.diseno.php';
include 'class.producto.php';
include 'class.carro.php';
include 'class.usuarios.php';
include 'class.db.php';

#Instancia de las clases
$diseno = new Diseno();
$utiles = new Utiles();
$producto = new Producto();
$carro = new Carro();
$usuario = new Usuario();
$mysqli = new DBMySql();

?>