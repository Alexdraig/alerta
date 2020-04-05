<?php
    include 'routs.php';
?>

<!DOCTYPE html>

<html lang="es-ES">
<head>	
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="icon" href="assets/principal/images/logo.png">
    <link rel="shortcut icon" href="assets/principal/images/logo.png"/>
	<link rel="stylesheet" href="assets/principal/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/principal/css/style.css">
    <link rel="stylesheet" href="assets/principal/css/colecciones.css">
    <link rel="stylesheet" href="assets/principal/css/test.css">
    <!-- <link rel="stylesheet" href="assets/principal/css/acordion.css"> -->
   	<link rel="stylesheet" type="text/css" href="css/all.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
   
    <title>Biblioteca Central Pedro Zulen</title>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

    <!-- Matomo -->
    <script type="text/javascript">
      var _paq = window._paq || [];
      /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
      _paq.push(['trackPageView']);
      _paq.push(['enableLinkTracking']);
      (function() {
        var u="//172.16.160.241/local_sisbib/matomo/";
        _paq.push(['setTrackerUrl', u+'matomo.php']);
        _paq.push(['setSiteId', '1']);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
      })();
    </script>
    <!-- End Matomo Code -->
	
</head>
<body class="cole-body" id="colecciones_body">
    <!-- <a href="http://sisbib.unmsm.edu.pe/BibCentral/SISBIB_beta/" class="go-home">
        <i class="fas fa-home"></i>
    </a> -->

    <div class="overlay2" id="overlay2-center"></div>

    <header class="cole-header">

        <div class="nav-elements container-fluid d-flex">
            <div class="nav-elements-size mx-auto">

                <div id="container-img-center" class="container-img" style="width: auto;">
                    <a id="logo-unmsm-center" class="h-100 mr-0 float-left" title="UNMSM" href="http://www.unmsm.edu.pe/" target="_blank">
                        <img class="pr-4" src="assets/principal/images/header/unmsm_blanco-min.png" alt="UNMSM">
                    </a>
                    <!-- <a title="UNMSM" href="http://www.unmsm.edu.pe/" target="_blank"><img src="assets/principal/images/header/unmsm_blanco-min.png" alt="UNMSM"></a> -->
                    <!-- <a title="SISBIB" href="index.php"><img src="assets/principal/images/header/bibcentral_blanco-min.png" alt="SISBIB"></a> -->
                    <!-- <div id="title-bib-center" class="h-100" style="margin-left: 95px;"> -->
                        <a href="index.php" class="h-100 d-flex align-items-center justify-content-between text-decoration-none" title="SISBIB" style="margin-left: 10vmin;">
                            <div class="text-white border-0 pl-4 py-3 cont-title-header">
                                <!-- <p class="mb-0">Universidad Nacional Mayor de San Marcos</p> -->
                                <h1 class="mb-0">SISTEMA DE BIBLIOTECAS Y BIBLIOTECA CENTRAL</h1>
                            </div>
                            <div class="container-img d-flex align-items-center justify-content-between">
                                <div title="SISBIB" class="h-100">
                                    <img src="assets/principal/images/header/bibcentral_blanco-min.png" alt="SISBIB">
                                </div>
                                <!-- <a id="logo-unmsm-center" class="h-100" title="UNMSM" href="http://www.unmsm.edu.pe/" target="_blank">
                                    <img class="px-1" src="assets/principal/images/header/unmsm_blanco-min.png" alt="UNMSM">
                                </a>
                                <a id="logo-vrip-center" class="h-100" title="VRIP" href="https://vrip.unmsm.edu.pe/" target="_blank">
                                    <img class="px-1" src="assets/principal/images/header/LOGO VICERRECTORADO.png" alt="VRIP">
                                </a>
                                <a id="go_home" class="h-100 go-home" title="Inicio" href="index.php">
                                    <i class="px-1 fas fa-home"></i>
                                </a> -->
                                <!-- <button id="icon-menu-center" type="button" class="container-icon-menu">
                                    <div class="icon-menu"></div>
                                    <div class="icon-menu"></div>
                                    <div class="icon-menu"></div>
                                </button> -->
                            </div>

                        </a>
                    <!-- </div> -->
                </div>
                
                <!-- <div id="div-nav-center" class="div-nav d-none">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link sub-move-bd">Bases de datos</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link sub-move-repo">Repositorios</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://unmsm.ent.sirsi.net/client/es_ES/all_libs/?dt=list" target="_blank" class="nav-link">Catálogo</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link sub-move-horarios">Horarios</a>
                        </li>
                        <li class="nav-item">
                            <a href="http://vicus.unmsm.edu.pe/" target="_blank" class="nav-link">Contacto</a>
                        </li>
                    </ul>
                </div> -->

                
            </div>
        </div>

        <div class="dl-menus container-fluid replace-icon-menu" style="font-size: .9rem">
            <ul class="dl-menu d-flex flex-row align-items-center mx-auto principalnav" style="background-color: #212121; width: 81%; position: relative;">
                <a data-target="#ModalQuestion-1" data-toggle="modal" href="#" style="color: white;">Nosotros</a>
                <li><a href="https://unmsm.ent.sirsi.net/client/es_ES/all_libs/?dt=list" target="_blank" style="color: white;">Catálogo</a></li>
                <div class="drop-servicios">
                    <ul class="dropdown-menu">
                        <div class="w-100" style="height: .5rem"></div>
                        <div class="drop-box">
                            <div style="">
                                <ul class="list-unstyled">
                                    <!-- <li class="d-flex box-yellow" data-animation="13" data-to="1"><a href="#" class="move-todo-servicios w-100">Servicios en Biblioteca Central</a></li> -->
                                    <li class="d-flex box-yellow" data-animation="13" data-to="1"><a href="./?page=1&service=0" class="w-100">Servicios en Biblioteca Central</a></li>
                                    <div class="menu-enlaces mb-3">
                                        <ul class="list-unstyled">
                                            <!-- <li class="d-flex" data-animation="13" data-to="1"><a href="#" class="move-todo-servicios por-nivel w-100">Navega por niveles</a></li> -->
                                            <li class="d-flex"><a href="#" class="no-link w-100">Navega por niveles</a></li>
                                            <!-- <li class="d-flex" data-animation="13" data-to="1"><a href="#" class="move-todo-servicios por-lista w-100">Ver servicios en modo lista</a></li> -->
                                            <li class="d-flex"><a href="#" class="no-link w-100">Ver servicios en modo lista</a></li>
                                            <!-- <li class="d-flex" data-animation="13" data-to="1"><a href="#" class="move-todo-servicios por-lista l-fondor w-100">Fondo Reservado</a></li> -->
                                            <li class="d-flex" data-animation="13" data-to="1"><a href="colec_fondor" class="w-100">Fondo Reservado</a></li>
                                            <!-- <li class="d-flex" data-animation="13" data-to="1"><a href="#" class="move-todo-servicios por-lista l-salas w-100">Salas de lectura</a></li> -->
                                            <li class="d-flex"><a href="#" class="no-link w-100">Salas de lectura</a></li>
                                            <!-- <li class="d-flex" data-animation="13" data-to="1"><a href="#" class="move-todo-servicios por-lista l-prestamo w-100">Préstamo de computadoras</a></li> -->
                                            <li class="d-flex"><a href="#" class="no-link w-100">Préstamo de computadoras</a></li>
                                            <!-- <li class="d-flex" data-animation="13" data-to="1"><a href="#" class="move-todo-servicios por-lista l-cubiculos w-100">Cubículos de estudio grupal</a></li> -->
                                            <li class="d-flex"><a href="#" class="no-link w-100">Cubículos de estudio grupal</a></li>
                                            <!-- <li class="d-flex" data-animation="13" data-to="1"><a href="#" class="move-todo-servicios por-lista l-visual w-100">Servicios para usuarios con limitación visual</a></li> -->
                                            <li class="d-flex"><a href="#" class="no-link w-100">Servicios para usuarios con limitación visual</a></li>
                                        </ul>
                                    </div>
                                    <!-- <li class="d-flex box-yellow" data-animation="13" data-to="1"><a href="#" class="move-bibliotecas w-100">Sistema de bibliotecas</a></li> -->
                                    <li class="d-flex box-yellow" data-animation="13" data-to="1"><a href="./?page=1&service=1" class="w-100">Sistema de bibliotecas</a></li>
                                </ul>
                            </div>
                            <div style="">
                                <ul class="list-unstyled">
                                    <li class="d-flex box-yellow" data-animation="13" data-to="1"><a href="./?page=1&service=2" class="w-100">Carné de Biblioteca</a></li>
                                    <div class="menu-enlaces mb-3">
                                        <ul class="list-unstyled">
                                            <!-- <li class="d-flex" data-animation="13" data-to="1"><a href="archivos/documentos/GuiaIngresantes_2019.pdf" target="_blank" class="move-carne-inmenu w-100">Ingresantes</a></li> -->
                                            <!-- <li class="d-flex" data-animation="13" data-to="1"><a href="#" class="move-carne link-grad w-100">Graduados</a></li> -->
                                            <li class="d-flex"><a href="#" class="no-link w-100">Graduados</a></li>
                                            <!-- <li class="d-flex" data-animation="13" data-to="1"><a href="#" class="move-carne link-visit w-100">Visitantes</a></li> -->
                                            <li class="d-flex"><a href="#" class="no-link w-100">Visitantes</a></li>
                                            <!-- <li class="d-flex" data-animation="13" data-to="1"><a href="#" class="move-carne link-regular w-100">Regulares</a></li> -->
                                            <li class="d-flex"><a href="#" class="no-link w-100">Regulares</a></li>
                                        </ul>
                                    </div>
                                    <li class="d-flex box-yellow" data-animation="13" data-to="1"><a href="./?page=1&service=3" class="w-100">Recepción de trabajos de investigación</a></li>
                                    <div class="menu-enlaces mb-3">
                                        <ul class="list-unstyled">
                                            <!-- <li class="d-flex" data-animation="13" data-to="1">
                                                <a href="#" target="_blank" class="move-tesis link-procrec w-100">Proceso de recepción y publicación de tesis</a>
                                            </li> -->
                                            <li class="d-flex">
                                                <a href="#" target="_blank" class="no-link w-100">Proceso de recepción y publicación de tesis</a>
                                            </li>
                                            <!-- <li class="d-flex" data-animation="13" data-to="1">
                                                <a href="#" target="_blank" class="move-tesis link-const w-100">Constancia de no adeudo de material bibliográfico</a>
                                            </li> -->
                                            <li class="d-flex">
                                                <a href="#" target="_blank" class="no-link w-100">Constancia de no adeudo de material bibliográfico</a>
                                            </li>
                                        </ul>
                                    </div>
                                </ul>
                            </div>
                            <div style="">
                                <ul class="list-unstyled">
                                    <li class="d-flex box-dark"><a href="https://unmsm.ent.sirsi.net/client/es_ES/all_libs/?dt=list" target="_blank" class="w-100">Catálogo en línea</a></li>
                                    <div class="menu-enlaces mb-3">
                                        <ul class="list-unstyled">
                                            <li class="d-flex"><a href="https://unmsm.ent.sirsi.net/client/es_ES/all_libs/search/advanced?dt=list" target="_blank" class="w-100">Búsqueda avanzada</a></li>
                                            <li class="d-flex"><a href="https://unmsm.ent.sirsi.net/client/help/user-help_es_ES/" target="_blank" class="w-100">Manual de uso</a></li>
                                        </ul>
                                    </div>
                                    <div class="w-100" style="position: relative; right: -15px; bottom: -20px;">
                                        <img src="assets/principal/images/servicios/SALA DE CIENCIAS.jpg" alt="" class="w-100">
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </ul>
                    <!-- <ul class="dropdown-menu">
                        <div class="w-100" style="height: .5rem"></div>
                        <div class="drop-box">
                            <li data-animation="13" data-to="1" class="d-flex"><a href="#" class="move-carne w-100">Carné de biblioteca</a></li>
                            <li data-animation="13" data-to="1" class="d-flex"><a href="#" class="move-tesis w-100">Recepción de tesis</a></li>
                            <li class="d-flex"><a href="colec_fondor/" target="_blank" class="move-fondor w-100">Fondo reservado</a></li>
                            <li data-animation="13" data-to="1" class="d-flex"><a href="#" class="move-mas-servicios w-100">Más...</a></li>
                        </div>
                    </ul> -->
                </div>
                <li data-animation="13" data-to="1" class="dropdown hover-drop-servicios">
                    <a href="./?page=1" class="move-todo-servicios" style="color: white;">Servicios</a>
                    
                </li>
                <div class="drop-recursos">
                    <ul class="dropdown-menu">
                        <div class="w-100" style="height: .5rem"></div>
                        <div class="drop-box">
                            <div style="">
                                <ul class="list-unstyled">
                                    <!-- <li class="d-flex box-yellow"><a href="#" class="move-bd w-100">Bases de datos</a></li> -->
                                    <li class="d-flex box-yellow"><a href="./?page=2&resource=0" class="w-100">Bases de datos</a></li>
                                    <div class="menu-enlaces mb-3">
                                        <ul class="list-unstyled">
                                            <!-- <li class="d-flex"><a href="#" class="move-bd w-100">Buscador de bases de datos</a></li> -->
                                            <li class="d-flex"><a href="./?page=2&resource=0" class="w-100">Buscador de bases de datos</a></li>
                                            <li class="d-flex"><a href="http://sisbib.unmsm.edu.pe/Intranet.asp?DB=gvrl" target="_blank" class="w-100">Gale</a></li>
                                            <li class="d-flex"><a href="http://sisbib.unmsm.edu.pe/Intranet.asp?DB=wileyEbook" target="_blank" class="w-100">Wiley</a></li>
                                            <li class="d-flex"><a href="http://sisbib.unmsm.edu.pe/Intranet.asp?DB=pqcentral" target="_blank" class="w-100">Proquest</a></li>
                                            <li class="d-flex"><a href="https://www.scopus.com/search/form.uri?display=basic" target="_blank" class="w-100">Scopus</a></li>
                                            <li class="d-flex"><a href="http://www.sciencedirect.com/" target="_blank" class="w-100">ScienceDirect</a></li>
                                            <li class="d-flex"><a href="http://www.tandfonline.com/" target="_blank" class="w-100">Taylor&Francis</a></li>
                                            <!-- <li class="d-flex"><a href="#" class="move-bd w-100">Más bases</a></li> -->
                                            <li class="d-flex"><a href="./?page=2&resource=0" class="w-100">Más bases</a></li>
                                        </ul>
                                    </div>
                                    <!-- <li class="d-flex box-yellow"><a href="#" class="move-gestor w-100">Gestores Bibliográficos</a></li> -->
                                    <li class="d-flex box-yellow"><a href="./?page=2&resource=2" class="w-100">Gestores Bibliográficos</a></li>
                                </ul>
                            </div>
                            <div style="">
                                <ul class="list-unstyled">
                                    <!-- <li class="d-flex box-yellow"><a href="#" class="move-repo w-100">Repositorios</a></li> -->
                                    <li class="d-flex box-yellow"><a href="./?page=2&resource=1" class="w-100">Repositorios</a></li>
                                    <div class="menu-enlaces mb-3">
                                        <ul class="list-unstyled">
                                            <li class="d-flex"><a href="http://revistasinvestigacion.unmsm.edu.pe/" target="_blank" class="w-100">Revistas UNMSM</a></li>
                                            <li class="d-flex"><a href="http://cybertesis.unmsm.edu.pe/" target="_blank" class="w-100">Cybertesis</a></li>
                                            <li class="d-flex"><a href="http://fondoeditorial.unmsm.edu.pe/" target="_blank" class="w-100">Fondo Editorial</a></li>
                                            <li class="d-flex"><a href="http://sisbib.unmsm.edu.pe/Memoria_Oral/index.html" target="_blank" class="w-100">Archivo de Memoria Oral</a></li>
                                        </ul>
                                    </div>
                                    <!-- <li class="d-flex box-yellow"><a href="#" class="move-capacitaciones w-100">Capacitaciones en Recursos Electrónicos</a></li> -->
                                    <li class="d-flex box-yellow"><a href="./?page=2&resource=3" class="w-100">Capacitaciones en Recursos Electrónicos</a></li>
                                    <div class="menu-enlaces mb-3">
                                        <ul class="list-unstyled">
                                            <!-- <li class="d-flex"><a href="" class="move-capacitaciones w-100">Fechas y horarios</a></li> -->
                                            <li class="d-flex"><a href="./?page=2&resource=3" class="w-100">Fechas y horarios</a></li>
                                            <li class="d-flex">
                                                <a href="https://www.facebook.com/pg/RecursosElectronicosBibliotecaCentral/posts/" target="_blank" class=" position-relative w-100 pr-5">
                                                    Biblioteca Central UNMSM - Recursos Electrónicos
                                                    <i class="fab fa-facebook-f icon-in-button"></i>
                                                </a>
                                            </li>
                                            <li class="d-flex">
                                                <a href="https://twitter.com/RecursosE_UNMSM" target="_blank" class=" position-relative w-100 pr-5">
                                                    @RecursosE_UNMSM
                                                    <i class="fab fa-twitter icon-in-button"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </ul>
                            </div>
                            <div style="">
                                <ul class="list-unstyled">
                                    <!-- <li class="d-flex box-dark"><a href="#" class="move-preguntas w-100">Preguntas Frecuentes</a></li> -->
                                    <li class="d-flex box-dark"><a href="./?page=2&resource=4" class="w-100">Preguntas Frecuentes</a></li>
                                    <div class="menu-enlaces mb-3">
                                        <ul class="list-unstyled">
                                            <!-- <li class="d-flex"><a href="#" class="move-preguntas como-bd w-100">Cómo acceder a las bases de datos dentro y fuera del campus</a></li> -->
                                            <li class="d-flex"><a href="#" class="no-link w-100">Cómo acceder a las bases de datos dentro y fuera del campus</a></li>
                                            <!-- <li class="d-flex"><a href="#" class="move-preguntas que-bd w-100">Qué son las bases de datos</a></li> -->
                                            <li class="d-flex"><a href="#" class="no-link w-100">Qué son las bases de datos</a></li>
                                            <!-- <li class="d-flex"><a href="#" class="move-preguntas como-gestores w-100">Cómo utilzar los gestores bibliográficos</a></li> -->
                                            <li class="d-flex"><a href="#" class="no-link w-100">Cómo utilzar los gestores bibliográficos</a></li>
                                        </ul>
                                    </div>
                                    <div class="w-100" style="position: relative; right: -15px; bottom: -20px;">
                                        <img src="assets/principal/images/servicios/SALA UNIVERSIA.jpg" alt="" class="w-100">
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </ul>
                </div>
                <li class="dropdown hover-drop-recursos">
                    <a href="./?page=2" class="move-rec-elec" style="color: white;">Recursos electrónicos</a>

                </li>
                <!-- <li data-animation="14" data-to="0"><a href="#" class="move-eventos" style="color: white;">Eventos</a></li> -->
                <div class="float-right" style="color: #C8A22B; position: absolute; right: 0; margin-right: 10px; cursor: default;">
                    <!-- <a data-target="#intra-1" data-toggle="modal" href="#" style="color: #fff;">Intranet</a> -->
                    <a class="hover-icon" href="directorio/directorio.html" target="_blank" title="directorio"><i class="fas fa-phone"></i></a>
                    <a class="hover-icon" href="https://instagram.com/BibliotecaUNMSM" target="_blank" title="instagram"><i class="fab fa-instagram"></i></a>
                    <a class="hover-icon" href="https://twitter.com/BibliotecaUNMSM" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a class="hover-icon" href="https://www.facebook.com/BibliotecaCentralPedroZulen" target="_blank"><i class="fab fa-facebook-f"></i></a>
                </div>
            </ul>
        </div>

    </header>


    <main class="cole-main cont">

        <div class="mb-4 sub-title-sisbib text-uppercase">Documentación</div>

        <div class="w-25 float-left cole-list sticky-list">

            <div class="list-op mr-5">
                <a id="colec_0" data-cur="0" class="cajas" href="#">Gestión de colecciones</a>
                <a id="colec_1" data-cur="1" class="cajas" href="#">Servicios</a>
                <a id="colec_2" data-cur="2" class="cajas" href="#">Encuesta de satisfacción</a>
                <a id="colec_3" data-cur="3" class="cajas" href="#">Jornadas anuales de experiencias SISBIB</a>
                <a id="colec_4" data-cur="4" class="cajas" href="#">Cybertesis</a>
                <!-- <a id="colec_5" data-cur="5" class="cajas" href="#">Tesis: siglo XIX</a> -->
                <!-- <a id="colec_6" data-cur="6" class="cajas" href="#">Dora Mayer: Vida interior (memorias)</a> -->
            </div>
            
        </div>

        <div class="w-75 float-left contenido px-2 text-justify" style="min-height: 46vh;">
            <!-- INICIO CONTENIDO COLECCIONES 0 -->
            <div class="colecs" id="contenido_colec_0">

                <div>

                    <div class="mb-4 sub-title-sisbib">Resoluciones</div>

                    <div class="ml-3">
                        <ul class="">
                            <li>
                                <a href="archivos/documentos/intra_docs/RR 04829-15t-Reglamento de altas y bajas de material bibliográfico(merged).pdf" target="_blank">Reglamento de Altas y Bajas de los Bienes Bibliográficos de la UNMSM</a>
                            </li>
                            <li>
                                <a href="archivos/documentos/intra_docs/01Politicas de SeleccionAquisicion06.pdf" target="_blank">Políticas de Selección, Adquisición y Conservación de Colecciones de la Biblioteca Central de la UNMSM</a>
                            </li>
                        </ul>
                    </div>

                    <hr>

                    <div class="mb-1 sub-title-sisbib">Declaraciones juradas para donaciones</div>
                    <p class="mb-4 pl-3">(previa coordinación del donante con la Unidad de Gestión de Colecciones de la Biblioteca Central. Comunicarse al 6197000 anexo 7652)</p>

                    <div class="ml-3">
                        <ul class="">
                            <li>
                                <a href="archivos/documentos/intra_docs/03Acta recpecion donacion_alto volumenes.pdf" target="_blank">Acta de recepción (donación de alto volumen)</a>
                            </li>
                            <li>
                                <a href="archivos/documentos/intra_docs/04Constancia de donacion_hasta 10 titulos.pdf" target="_blank">Constancia de donación (donación de no mayor a 10 títulos)</a>
                            </li>
                        </ul>
                    </div>

                    <hr>

                    <div class="mb-4 sub-title-sisbib">Implementación Symphony</div>

                    <div class="ml-3">
                        <ul class="">
                            <li>
                                <a href="archivos/documentos/intra_docs/MANUAL-SYMPHONY-LIBROS-TESIS-PPPP-OFICIAL_protected.pdf" target="_blank">Guía de uso del módulo de catalogación</a>
                            </li>
                            <li>
                                <a href="archivos/documentos/intra_docs/Guia Modulo de Circulacion_15032018_protected.pdf" target="_blank">Guía de uso del módulo de circulación</a>
                            </li>
                            <li>
                                <a href="archivos/documentos/intra_docs/Politicas Uso_Catalog&Circulac.pdf" target="_blank">Políticas uso catalogación&circulación</a>
                            </li>
                            <li>
                                <a href="archivos/documentos/intra_docs/Precisiones Depuracion.pdf" target="_blank">Precisiones para la verificación y depuración de la data del Symphony en las Bibliotecas de la UNMSM en el marco de la Recomendación Nº 6 de OCI</a>
                            </li>
                            <li>
                                <a href="archivos/documentos/intra_docs/05Normalización en procesos Sisbib.pdf" target="_blank">Normas básicas para la organización de los recursos de información en el sistema de bibliotecas</a>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>
            <!-- FIN CONTENIDO COLECCIONES 0 -->
            
            <!-- FIN CONTENIDO COLECCIONES 1 -->
            <div class="colecs" id="contenido_colec_1">

                <div>

                    <div class="mb-4 sub-title-sisbib">Reglamento del Sistema de Bibliotecas</div>

                    <div class="ml-3">

                        <ul>
                            <li>
                                <a href="#">Reglamento</a>
                            </li>
                        </ul>

                    </div>

                    <hr>

                    <div class="mb-4 sub-title-sisbib">Video de los servicios de la Biblioteca Central</div>

                    <div class="ml-3">

                        <ul>
                            <li>
                                <a href="https://www.youtube.com/watch?v=zJCPUSf0qCQ" target="_blank">Video</a>
                            </li>
                        </ul>

                    </div>

                    <hr>

                    <div class="mb-4 sub-title-sisbib">Estadísticas de uso de los servicios 2019</div>

                    <div class="ml-3">

                        <ul>
                            <li>
                                <a href="archivos/documentos/intra_docs/Estadisticas de servicios_aOctubre 2019.pdf" target="_blank">A octubre 2019</a>
                            </li>
                        </ul>

                    </div>

                </div>
            </div>
            <!-- FIN CONTENIDO COLECCIONES 1 -->

            <!-- FIN CONTENIDO COLECCIONES 2 -->
            <div class="colecs" id="contenido_colec_2">

                <div>

                    <div style="text-align: right;">
                        <a href="archivos/documentos/intra_docs/Datos a tener en cuenta de la encuesta.pdf" target="_blank">Datos a tener en cuenta de la encuesta</a>
                    </div>

                    <div class="mb-4 sub-title-sisbib">Encuesta 2018</div>

                    <div class="ml-3">

                        <ul>
                            <li>
                                <a href="archivos/documentos/intra_docs/2018_Resultados de Encuesta de Usuarios_15mayo.pdf" target="_blank">Resumen de resultados del Sistema de Bibliotecas y Biblioteca Central</a>
                            </li>
                        </ul>

                    </div>

                    <hr>

                    <div class="mb-4 sub-title-sisbib">Encuesta 2019</div>

                    <div class="ml-3">

                        <ul>
                            <li>
                                <a href="#">Resultados de la Biblioteca Central</a>
                            </li>
                            <li>
                                <a href="#">Resultados por Facultad</a>
                            </li>
                        </ul>

                    </div>

                </div>
            </div>
            <!-- FIN CONTENIDO COLECCIONES 2 -->
            
            <!-- FIN CONTENIDO COLECCIONES 3 -->
            <div class="colecs" id="contenido_colec_3">

                <div>

                    <div class="mb-4 sub-title-sisbib">I Jornadas 2019</div>

                    <div class="ml-3">

                        <ul>
                            <li class="mb-3">
                                <a href="archivos/documentos/intra_docs/Programa I Jornada SisBib UNMSM_13Nov19.pdf" target="_blank">Programa</a>
                            </li>
                            <li>
                                Ponencias
                            </li>
                            <hr>
                            <ul>
                                <li>
                                    <a href="archivos/documentos/intra_docs/BIBLIOTECA CENTRAL EN NÚMEROS 2019_1311_compressed.pdf" target="_blank">Biblioteca Central en Números 2019</a>
                                </li>
                                <li>
                                    <a href="#">Presentación de la nueva página web del Sistema de Bibliotecas y Biblioteca Central</a>
                                </li>
                                <li>
                                    <a href="#">Mesa redonda "Visibilizando las iniciativas en las bibliotecas del sistema de la UNMSM"</a>
                                    <ul>
                                        <li>
                                            <a href="archivos/documentos/intra_docs/1er ponente_BIBLIOTECA DE CCSS.pdf" target="_blank">Facultad de Ciencias Sociales</a>
                                        </li>
                                        <li>
                                            <a href="archivos/documentos/intra_docs/2do ponente_Repositorio.pdf" target="_blank">Facultad de Letras y Ciencias Humanas</a>
                                        </li>
                                        <li>
                                            <a href="archivos/documentos/intra_docs/3er ponente_BIBLIOTECA TAKAGI FII 2019.pdf" target="_blank">Facultad de Ingeniería Industrial</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="archivos/documentos/intra_docs/Uso eficiente de bases de datos y colecciones de Ebooks - UNMSM.pdf" target="_blank">Uso eficiente de las bases de datos en la docencia e investigación universitaria</a>
                                </li>
                                
                            </ul>
                            
                        </ul>

                    </div>

                    <hr>

                    <!-- <div class="mb-4 sub-title-sisbib">*Nombre de ponencia*</div>

                    <div class="ml-3">

                        <ul>
                            <li>
                                <a href="#">Enlace de ponencia</a>
                            </li>
                        </ul>

                    </div> -->

                </div>
            </div>
            <!-- FIN CONTENIDO COLECCIONES 3 -->

            <!-- FIN CONTENIDO COLECCIONES 4 -->
            <div class="colecs" id="contenido_colec_4">

                <div>

                    <div class="mb-4 sub-title-sisbib">Lista de Tesis ingresadas 2017 - 2019</div>

                    <div class="ml-3">

                        <ul>
                            <li>
                                <a href="archivos/documentos/intra_docs/Lista2017-2019-Cybertesis.xlsx">Lista de Tesis ingresadas 2017 - 2019</a>
                            </li>

                        </ul>

                    </div>

                    <hr>

                    <div class="mb-4 sub-title-sisbib">Recepción de trabajos de investigación - Emisión de constancias</div>

                    <div class="ml-3">

                        <p>Resoluciones vigentes relacionadas con el depósito de documentos en Cybertesis:</p>

                        <ul>
                            <li>
                                <a href="archivos/documentos/intra_docs/R.R. 06893-R-18 Directiva para el depósito de Grados y Títulos en Cybertesis - UNMSM.pdf" target="_blank">Directiva para el depósito de documentos de Grados y Títulos en Cybertesis de la UNMSM</a>
                            </li>
                            <li>
                                <a href="archivos/documentos/intra_docs/Guia-estructura-cd-deposito-tesis.pdf" target="_blank">Guía para estructurar y ordenar el contenido del CD de los documentos de grados y títulos para el repositorio Cybertesis</a>
                            </li>
                            <li>
                                <a href="archivos/documentos/intra_docs/00584-R-19  Modificación R.R. 06893 Deposito documentos Grados y Títulos en Cybertesis.pdf" target="_blank">Modificatoria del anexo de la Directiva</a>
                            </li>
                            <li>
                                <a href="archivos/documentos/intra_docs/R.R. 04305-R-18 Procedimiento para la evaluación de la orginalidad de los documentos de investigación conducentes a grados o títulos de la UNMSM.pdf" target="_blank">Procedimiento para evaluación de la originalidad de los documentos de investigación conducentes a grados o títulos de la UNMSM</a>
                            </li>
                        </ul>

                    </div>

                    <!-- <hr>

                    <div class="mb-4 sub-title-sisbib">Estadísticas de uso de los servicios 2019</div>

                    <div class="ml-3">

                        <ul>
                            <li>
                                <a href="#">A octubre 2019</a>
                            </li>
                        </ul>

                    </div> -->

                </div>
            </div>
            <!-- FIN CONTENIDO COLECCIONES 4 -->

            <!-- FIN CONTENIDO COLECCIONES 5 -->
            <!-- <div class="colecs" id="contenido_colec_5">
                <div class="mb-3">
                    <div class="h2 title-sisbib">Tesis de Medicina y Jurisprudencia (Derecho)</div>
                    <div class="cont">
                        <div class="colec-info ml-3">
                            <p>Recientemente, el Fondo Reservado ha incluido en su colección 191 tesis antiguas de medicina (1860-1899) y 525 tesis de derecho (1886-1941). Estas tesis aún están en proceso de digitalización, no obstante pueden ser consultadas en físico en nuestra sala, de acuerdo a las condiciones del material y tomando las medidas de seguridad para su preservación.</p>
                        </div>
                        <div>
                            <div class="sub-title-sisbib_black">Relación de tesis</div>
                            <ul>
                                <li><a href="pdf/tesis_medicina_siglo_XIX.pdf" target="_blank">Títulos de Tesis de Medicina Siglo XIX-XX</a></li>
                                <li><a href="pdf/tesis_jurisprudencia_siglo_XIX.pdf" target="_blank">Títulos de Tesis de la Facultad de Jurisprudencia (Derecho) Siglo XIX - XX</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div>

                    <div class="mb-4 sub-title-sisbib">Títulos representativos</div>

                    <div class="ml-3">

                        <div class="cont mb-3">
                            <div class="w-25 float-left">
                                <img class="mw-100" src="assets/principal/images/colec_fondor/tesis_medicina.jpg" alt="libro 1">
                            </div>
                            <div class="pl-4 w-75 float-right">
                                <p>
                                    <b>Autor:</b><br>
                                    Eduardo Copelo
                                </p>
                                <p>
                                    <b>Título:</b><br>
                                    Sobre el empleo del agua caliente como hemostático
                                </p>
                                <p>
                                    <b>Observaciones:</b><br>
                                    Folder manila engrapado
                                </p>
                                <p>
                                    <b>Año:</b><br>
                                    1893
                                </p>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="ml-3">

                        <div class="cont mb-3">
                            <div class="w-25 float-right">
                                <img class="mw-100" src="assets/principal/images/colec_fondor/tesis_derecho.jpg" alt="libro 2">
                            </div>
                            <div class="pr-4 w-75 float-right">
                                <p>
                                    <b>Autor:</b><br>
                                    Chávez, Manuel I.
                                </p>
                                <p>
                                    <b>Título:</b><br>
                                    ¿Puede constituirse la dote después de celebrado el matrimonio?
                                </p>
                                <p>
                                    <b>Observaciones:</b><br>
                                    (manuscrita) engrapada en fólder
                                </p>
                                <p>
                                    <b>Año:</b><br>
                                    1886
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div> -->
            <!-- FIN CONTENIDO COLECCIONES 5 -->

            <!-- FIN CONTENIDO COLECCIONES 6 -->
            <!-- <div class="colecs" id="contenido_colec_6">
                <div class="mb-3">
                    <div class="h2 title-sisbib">Dora Mayer: Vida interior (memorias)</div>
                    <div class="cont">
                        <div class="colec-info pl-3 w-100">
                            <p>Dora Mayer (Hamburgo 1868-Lima 1959) fue mucho más que la activista defensora de los derechos ciudadanos de los indígenas, que es como se la conoció hasta hace pocos años. Fue periodista, escritora y una especial observadora de su tiempo y del Callao, donde vivió desde que sus padres llegaron al Perú en XXX. La Biblioteca Central comparte aquí sus memorias.</p>
                            <p>Sus memorias, que ella tituló Vida interior, están organizadas de la siguiente manera: Vida interna, Parte I (72 páginas); Vida Interna, Parte II (30 pp.); Intermezzo (18); La obra del destino, Parte III (254); Un largo suspiro, Parte IV (208). Las partes I, II e Intermezzo se encuentran en copia mecanográfica. Las partes III y IV constan de manuscritos originales.</p>
                            <p>Las partes I y II fueron publicadas en 1992 por el Seminario de Historia Rural Andina de la Universidad. Las partes III y IV constituyen una novedad que la Biblioteca Central se complace en compartir. Agradecemos al señor Andrés Paredes Luyo, discípulo de Dora Mayer y a la profesora Alionca Respaldiza, por haber conservado estos documentos históricos y por cederlos a la Universidad.</p>
                        </div>

                    </div>
                </div>

                <div>

                    <div class="mb-4 sub-title-sisbib">Memorias</div>

                    <div class="ml-3">

                        <div class="cont mb-3">
                            <div class="d-flex align-items-center">
                                <div class="w-50 float-left">
                                    <img class="mw-100 mb-2" src="assets/principal/images/colec_fondor/Dora Mayer en la Chacra Martha.jpg" alt="libro 1">
                                    <small class="text-muted"><p class="mb-0">Dora Mayer en el Perené. Ref: Cap. XI, de la Parte III: “La historia de la chácara Martha”.</p></small>
                                </div>
                                <div class="pl-5 w-50">
                                    <div class="sub-title-sisbib_black">Partes del manuscrito</div>
                                    <ul>
                                        <li><a href="#" target="_blank">Parte I</a></li>
                                        <li><a href="#" target="_blank">Parte II</a></li>
                                        <li><a href="#" target="_blank">Parte III</a></li>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                </div>
            </div> -->
            <!-- FIN CONTENIDO COLECCIONES 6 -->

        </div>

    </main>

    <!-- <footer class="footer">
        <div class="sec-top cont">
            <div style="float: left">
                <div class="title mb-2 text-center">LA BIBLIOTECA EN NÚMEROS</div>
                <div class="division-block-h">
                    <div style="display: block;">
                        <span class="counter">377,385</span>
                        <p class="text-center mb-0">LIBROS</p>
                    </div>
                    <div style="display: block;">
                        <span class="counter">76,069</span>
                        <p class="text-center mb-0">TESIS</p>
                    </div>
                    <div style="display: block;">
                        <span class="counter">10,998</span>
                        <p class="text-center mb-0">RECURSOS EN EL FONDO RESERVADO</p>
                    </div>
                    <div style="display: block;">
                        <span class="counter">19,760</span>
                        <p class="text-center mb-0">FOLLETOS</p>
                    </div>
                </div>
            </div>
            <div style="float: right; margin: auto;">
                <div class="mb-1"><a data-target="#ModalQuestion-1" data-toggle="modal" class="link-white" href="#">NOSOTROS</a> / <a href="https://goo.gl/maps/uTYzmpT41ES2" target="_blank" class="link-white">UBICACIÓN</a></div>
                <div class="mb-1"><a href="directorio/directorio.html" class="link-white">DIRECTORIO BC</a></div>
                <div class="icons mb-1" style="display: flex; align-items: center; justify-content: space-evenly; font-size: 40px;">
                    <a href="https://www.facebook.com/BibliotecaCentralPedroZulen" target="_blank"><i class="fab fa-facebook-square"></i></a>
                    <a href="mailto:bibcent@unmsm.edu.pe" target="_blank"><i class="fas fa-envelope"></i></a>
                </div>
            </div>
        </div>
        <div class="sec-bot">
            Página creada por la Biblioteca Central 'Pedro Zulen' - Oficina de Automatización y Capacitación Informacional
        </div>
    </footer> -->

    <?php
        include 'footer.php';
    ?>

    <!-- Modal question-1 -->
            <div style="background-color: rgba(0, 0, 0, 0.5);" class="modal fade" id="ModalQuestion-1" tabindex="-1" role="dialog" aria-labelledby="ModalQuestion-1_Label" aria-hidden="true">
              <div style="max-width: 1400px;" class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content" style="background-image: url('assets/principal/images/biblioteca-central.JPG'); background-position: center; background-repeat: no-repeat; background-size: cover;">
                  <div class="modal-header" style="background-color: rgba(255, 255, 255, .8);">
                    <h5 class="modal-title" id="ModalQuestion-1_Label">NOSOTROS</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div id="mbody-question-1" class="modal-body" style="background-color: rgba(255, 255, 255, .8);">
                    <!-- <main class="nos-main"> -->
                        <!-- <div class="float-left"> -->
                            <div class="box-txt">
                                <!-- <h1>NOSOTROS</h1> -->
                                <p>La Biblioteca Central 'Pedro Zulen', inaugurada en diciembre del año 1999, tiene como visión convertirse en un centro de información y modelo de biblioteca universitaria que brinde servicios de información innovadores a los usuarios internos y externos a través de una gestión basada en la optimización de recursos tecnológicos, económicos y humanos. Para ello, tiene como misión el ser un centro de recursos de información y difusión del conocimiento científico, tecnológico y humanístico que contribuya en la formación académico profesional y la investigación, brindando servicios de información pertinentes y de calidad, asumiendo el compromiso institucional de la Universidad, cuyos ejes están orientados al desarrollo humano y sostenible del país.</p>
                            </div>
                            <div class="row box-map">

                                <div class="col-12 col-md-7 g-map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.823876765091!2d-77.0878014851873!3d-12.05563609146142!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c945e15e2add%3A0xda1b871ab79d9c20!2sBiblioteca+Central+Pedro+Zulen!5e0!3m2!1ses-419!2spe!4v1558385481177!5m2!1ses-419!2spe" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                                
                                <div class="col-12 col-md-5 map-info">
                                    <p><i class="fas fa-map-marker-alt"></i> Av. Germán Amézaga Nº 375.<br>
                                        Edificio de Biblioteca Central Pedro Zulen<br>
                                    Ciudad Universitaria, Lima I</p>
                                    <p><i class="fas fa-phone"></i> 619-7000, anexo 7701</p>
                                    <p><i class="fas fa-envelope"></i> bibcent@unmsm.edu.pe</p>
                                    <p>Horario de atención al público<br>
                                    Lunes a Sábado 8:15 a.m. a 8:00 p.m.</p>
                                </div>

                            </div>
                        <!-- </div> -->
                        
                    <!-- </main> -->
                  </div>
                  <div class="modal-footer" style="background-color: rgba(255, 255, 255, .8);">
                    <button style="background-color: #2d2d2d; border-color: #2d2d2d" type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                  </div>
                </div>
              </div>
            </div>

    <script src="assets/principal/js/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/principal/js/popper/popper.min.js"></script>
    <script src="assets/principal/js/bootstrap/bootstrap.min.js"></script>
    <script src="assets/principal/js/pagetransitions.js"></script>
    <script src="assets/principal/js/miscelanea.js"></script>
    <script src="assets/principal/js/navigator.js"></script>
    <!-- <script src="https://support.ebscohost.com/eit/scripts/ebscohostsearch.js"></script> -->
    <script src="assets/principal/js/ebscohostsearch(2).js"></script>
    <!-- <script src="assets/principal/js/ebscohostsearch(3).js"></script> -->
    <script src="assets/principal/js/main.js"></script>
    <script src="assets/principal/js/barras.js"></script>
    <script src="assets/principal/js/jquery/jquery.rwdImageMaps.min.js"></script>

</body>
</html>