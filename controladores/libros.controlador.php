<?php

class ControladorLibros {
    /*=============================================
	MOSTRAR Libros 
	=============================================*/

	static public function ctrMostrarLibros ($item, $valor){

		$tabla = "libros";

		$respuesta = ModeloLibros::mdlMostrarLibros ($tabla, $item, $valor);

		return $respuesta;

	}
}