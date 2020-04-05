<?php
    $mysqli = new mysqli("localhost", "root", "", "bds_web");
    $mysqli->query("set names utf8");

    $salida = "";
    $query = "SELECT * FROM tesis ORDER BY id";

    if(isset($_POST['consultat'])){
        $q = $mysqli->real_escape_string($_POST['consultat']);
        $query = "SELECT * FROM tesis WHERE titulo LIKE '%".$q."%' OR facultad LIKE '%".$q."%'
                    OR dependencia LIKE '%".$q."%' OR autor LIKE '%".$q."%' OR fecha_ing LIKE '%".$q."%'";
    }

    $resultado = $mysqli->query($query);
    $filas = $resultado->num_rows;

    if($filas>0){
        
        $salida .= '<ul>';
        
        while($value = $resultado->fetch_assoc()){

            $salida .=	'<li>
                        <b>Título: '.$value["titulo"].'</b>
                        <br>
                        Facultad: '.$value["facultad"].'
                        <br>
                        E.A.P: '.$value["dependencia"].'
                        <br>
                        Autor: '.$value["autor"].'
                        <br>
                        Fecha: '.$value["fecha_ing"].'
                        <br>
						<a class="url-book" href="'.$value["url"].'" target="_blank">Ver aquí</a>
                        <br><br>
                        </li>
                        ';
        }

        $salida .= '</ul>';

    } else {
        $salida .="No hay datos disponibles";
    }

    echo $salida;
    $mysqli -> close();

?>