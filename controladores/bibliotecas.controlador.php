<?php

class ControladorBibliotecas {
    /*=============================================
	MOSTRAR Bibliotecas 
	=============================================*/

	static public function ctrMostrarBibliotecas ($item, $valor){

		$tabla = "bibliotecas";

		$respuesta = ModeloBibliotecas::mdlMostrarBibliotecas ($tabla, $item, $valor);

		return $respuesta;

	}
}