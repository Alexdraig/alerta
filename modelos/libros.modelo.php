<?php

require_once "conexion.php";

class ModeloLibros {
    /*=============================================
	MOSTRAR Libros 
	=============================================*/

	static public function mdlMostrarLibros ($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item order by id");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_INT);

			$stmt -> execute();

			return $stmt -> fetchAll();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla order by id");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();

		$stmt = null;

    }
    
    // static public function mdlMostrarLibrosPB ($tabla, $valor){

    //     if($valor != null){

    //         $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_biblio = :id_biblio order by id");

    //         $stmt->bindParam(":id", $valor, PDO::PARAM_STR);

    //         $stmt -> execute();

    //         return $stmt -> fetch();

    //     }else{

    //         $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla order by id");

	// 		$stmt -> execute();

    //         return $stmt -> fetchAll();
            
    //     }
        
    //     $stmt -> close();

    //     $stmt = null;
    // }
		
}