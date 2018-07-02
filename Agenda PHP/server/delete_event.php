<?php
	require('conector.php');
	//crear conexion con la clase conector
	$con = new conectorBD();
	$response['conexion'] = $con->initConexion($con->database);
	if ($response['conexion'] == 'Se ha eliminado el evento correctamente') {
		if ($con->eliminarRegistro('eventos', 'id='.$_POST['id'])) {
			$response['msg'] = 'Se ha eliminado el evento correctamente';
		}else{
			$response['msg'] = 'No se a podido eliminar el registro';
		}
	}else{
			$response['msg'] = "error en la comunicacion con la base de datos";
		}
	echo json_encode($response)


 ?>
