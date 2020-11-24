<?php

require_once "conexion.php";

class ModeloUsuarios{

	/*=============================================
	MOSTRAR USUARIOS
	=============================================*/

	static public function mdlMostrarUsuarios($tabla, $item, $valor){
		
		/* conexion es la clase, conectar es la funcion de conexion a la base de datos */
		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

		$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
		//$stmt -> bindParam(":".$item[1], $valor[1], PDO::PARAM_STR);

		$stmt -> execute();

		return $stmt -> fetch();
	}



}