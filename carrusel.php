<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/principal/images/logo.png">
    <link rel="shortcut icon" href="assets/principal/images/logo.png"/>
	<link rel="stylesheet" href="assets/principal/css/bootstrap/bootstrap.min.css">
   	<!-- <link rel="stylesheet" href="assets/principal/css/odometer-theme-default.css"> -->
	<link rel="stylesheet" href="assets/principal/css/bibliotecas.css">
	<link rel="stylesheet" href="assets/principal/css/estilo-alerta.css">

	<link rel="stylesheet" href="assets/principal/css/slick.css">
	<link rel="stylesheet" href="assets/principal/css/slick-theme.css">
    <link rel="stylesheet" href="assets/principal/css/style.css">
    <link rel="stylesheet" href="assets/principal/css/test.css">

    <link rel="stylesheet" type="text/css" href="css/all.css">
    <title>Document</title>
</head>
<body>
<div class="post-slider">
						<i class="fas fa-chevron-left prev"></i>
						<i class="fas fa-chevron-right next"></i>

						<div class="post-wrapper">


            <?php
                require_once "controladores/libros.controlador.php";
                require_once "modelos/libros.modelo.php";

                $item  = "id_biblio";
                $valor = $_POST['id'];

                $libros  = ControladorLibros::ctrMostrarLibros ($item, $valor);

                foreach ($libros as $key => $value) {

                    echo 	'<div class="post hover">
                                <div class="wrap-info">
                                    <img class="slider-image" src="'.$value["ruta"].'" width="700px" height="300px">
                                    <div class="post-info">
                                        <div class="post-info-txt">
                                            <label class="inf-text">Título: </label>
                                            '.$value["titulo"].'
                                            <br>
                                            <label class="inf-text">Autor: </label>
                                            '.$value["autor"].'
                                            <br>
                                            <label class="inf-text">Año: </label>
                                            '.$value["año"].'
                                            <br>
                                            <a class="url-book" href="'.$value["url"].'" target="_blank">Ver aquí</a>
                                        </div>
                                    </div>
                                </div>
                            </div>';

                }
            ?>

            </div>
		</div>

<script src="assets/principal/js/jquery/jquery-3.3.1.min.js"></script>
	<script src="assets/principal/js/popper/popper.min.js"></script>
	<script src="assets/principal/js/bootstrap/bootstrap.min.js"></script>
	<script src="assets/principal/js/slick.min.js"></script>
	<!-- <script src="assets/principal/js/pagetransitions.js"></script> -->
	<script src="assets/principal/js/modernizr.custom.js"></script>
	<script src="assets/principal/js/jquery.dlmenu.js"></script>
	<script src="assets/principal/js/pagetransitions_2.js"></script>
	<script src="assets/principal/js/navigator.js"></script>
	<!-- <script src="https://support.ebscohost.com/eit/scripts/ebscohostsearch.js"></script> -->
	<script src="assets/principal/js/ebscohostsearch(1).js"></script>
	<!-- <script src="assets/principal/js/ebscohostsearch.js"></script> -->
	<script src="assets/principal/js/ebscohostsearch(2).js"></script>
	<script src="assets/principal/js/main.js"></script>
	<script src="assets/principal/js/barras.js"></script>
	<script src="assets/principal/js/jquery/jquery.rwdImageMaps.min.js"></script>
	<script src="assets/principal/js/miscelanea.js"></script>
	<script src="assets/principal/js/slider(2).js"></script>
	<!-- <script src="assets/principal/js/odometer.min.js"></script> -->
	<!-- <script src="assets/principal/js/waypoints.min.js"></script> -->
	<!-- <script src="assets/principal/js/jquery/jquery.counterup.js"></script> -->
	<script src="assets/principal/js/buscador_ajax.js"></script>

</body>
</html>
            
           

