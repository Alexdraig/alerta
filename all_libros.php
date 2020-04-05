<?php
    $mysqli = new mysqli("localhost", "root", "", "bds_web");
    $mysqli->query("set names utf8");

    $salida = "";
    $query = "SELECT * FROM libros ORDER BY id";

    if(isset($_POST['consulta'])){
        $q = $mysqli->real_escape_string($_POST['consulta']);
        $query = "SELECT * FROM libros WHERE titulo LIKE '%".$q."%' OR autor LIKE '%".$q."%'
                    OR biblioteca LIKE '%".$q."%' OR año LIKE '%".$q."%'";
    }

    $resultado = $mysqli->query($query);
    $filas = $resultado->num_rows;

    if($filas>0){
        
        $salida .= '<ul>';
        
        while($value = $resultado->fetch_assoc()){

            $salida .=	'<li>
					<b>Título: '.$value["titulo"].'</b>
					<br>
					Autor: '.$value["autor"].'
					<br>
					Biblioteca: '.$value["biblioteca"].'
					<br>
                    Año: '.$value["año"].'
					<br>
					<a class="url-book" href="'.$value["url"].'" target="_blank">Ver aquí</a>
					<br><br>
                </li>';
        }

        $salida .= '</ul>';

    } else {
        $salida .="No hay datos disponibles";
    }

    echo $salida;
    $mysqli -> close();

?>