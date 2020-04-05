<?php

class ControladorTesis {
    /*=============================================
	MOSTRAR TESIS 
	=============================================*/

	static public function ctrMostrarTesis ($item, $valor){

		$tabla = "tesis";

		$respuesta = ModeloTesis::mdlMostrarTesis ($tabla, $item, $valor);

		return $respuesta;

	}
}