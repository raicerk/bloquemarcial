<?php
	include 'core/core.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <script type="text/javascript" src="http://raicerk.cl/home/js/jquery.js"></script>
    </head>
    <body>

    	<?php 

    		$dato = $mysqli->Query("CALL spRec_Ecommerce_DetalleProducto(?)",array('i',1),false);
    		var_dump($dato);

    	?>

        <input type="text" name="txtProducto" id="txtProducto">
        <input type="button" onclick="CargaProducto()" value="Cargar">
        <input type="button" onclick="ListaProducto()" value="Mostrar">
        <div id="respuesta"></div>
        <script type="text/javascript">
			function CargaProducto () {

				var parametros = {
		        	"IdProducto" : $("#txtProducto").val()
		        };

				$.ajax({
			       	data:  parametros,
			       	url:   'test.ajax.php?option=SetProducto',
			       	type:  'post',
			        beforeSend: function () {
			            $('#button-send').html('Enviando...');
			        },
			        success:  function (response) {
							
			        }
			    });
			}

			function ListaProducto () {

				var parametros = {
		        	"IdProducto" : ""
		        };


				$.ajax({
			       	data:  parametros,
			       	url:   'test.ajax.php?option=GetCarro',
			       	type:  'post',
			        beforeSend: function () {
			            $('#button-send').html('Enviando...');
			        },
			        success:  function (response) {
						$("#respuesta").html(response);
			        }
			    });
			}
		</script>
    </body>
</html>