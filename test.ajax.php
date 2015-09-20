<?php

include 'core/core.php';

switch ($_GET['option']) {
	case 'SetProducto':
		$carro->SetProductoCarro($_POST['IdProducto']);

	break;

	case 'GetCarro':
		var_dump($carro->GetCarro());
	break;
	
	default:
		# code...
		break;
}


?>