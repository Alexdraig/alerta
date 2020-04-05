<?php
    // if (isset($_GET['colec'])) {
    //     if ($_GET['colec'] >= 8 || $_GET['colec'] < 0) {
    //         header('Location: ?colec=0');
    //     }
    //     echo "<script>\n";
    //     echo "colec_current = ".$_GET['colec']."\n";
    //     echo "</script>\n";
    // }else {
    //     echo "<script>\n";
    //     echo "colec_current = 0\n";
    //     echo "</script>\n";
    // };
    include '../routs.php';
    include 'conex_hemeroteca_sisbib.php';
?>



<!DOCTYPE html>

<html lang="es-ES">
<head>	
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="icon" href="../assets/principal/images/logo.png">
    <link rel="shortcut icon" href="../assets/principal/images/logo.png"/>
	<link rel="stylesheet" href="../assets/principal/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/principal/css/style.css">
    <link rel="stylesheet" href="../assets/principal/css/colecciones.css">
    <link rel="stylesheet" href="../assets/principal/css/test.css">
    <!-- <link rel="stylesheet" href="../assets/principal/css/acordion.css"> -->
   	<link rel="stylesheet" type="text/css" href="../css/all.min.css">
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
                        <img class="pr-4" src="../assets/principal/images/header/unmsm_blanco-min.png" alt="UNMSM">
                    </a>
                    <!-- <a title="UNMSM" href="http://www.unmsm.edu.pe/" target="_blank"><img src="../assets/principal/images/header/unmsm_blanco-min.png" alt="UNMSM"></a> -->
                    <!-- <a title="SISBIB" href="../"><img src="../assets/principal/images/header/bibcentral_blanco-min.png" alt="SISBIB"></a> -->
                    <!-- <div id="title-bib-center" class="h-100" style="margin-left: 95px;"> -->
                        <a href="../" class="h-100 d-flex align-items-center justify-content-between text-decoration-none" title="SISBIB" style="margin-left: 10vmin;">
                            <div class="text-white border-0 pl-4 py-sm-3 cont-title-header">
                                <!-- <p class="mb-0">Universidad Nacional Mayor de San Marcos</p> -->
                                <h1 class="mb-0">SISTEMA DE BIBLIOTECAS Y BIBLIOTECA CENTRAL</h1>
                            </div>
                            <div class="container-img d-flex align-items-center justify-content-between">
                                <div title="SISBIB" class="h-100">
                                    <img src="../assets/principal/images/header/bibcentral_blanco-min.png" alt="SISBIB">
                                </div>
                                <!-- <a id="logo-vrip-center" class="h-100" title="VRIP" href="https://vrip.unmsm.edu.pe/" target="_blank">
                                    <img class="px-1" src="../assets/principal/images/header/LOGO VICERRECTORADO.png" alt="VRIP">
                                </a> -->
                                <!-- <a id="go_home" class="h-100 go-home" title="Inicio" href="../">
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
                                    <li class="d-flex box-yellow" data-animation="13" data-to="1"><a href="../?page=1&service=0" class="w-100">Servicios en Biblioteca Central</a></li>
                                    <div class="menu-enlaces mb-3">
                                        <ul class="list-unstyled">
                                            <!-- <li class="d-flex" data-animation="13" data-to="1"><a href="#" class="move-todo-servicios por-nivel w-100">Navega por niveles</a></li> -->
                                            <li class="d-flex"><a href="#" class="no-link w-100">Navega por niveles</a></li>
                                            <!-- <li class="d-flex" data-animation="13" data-to="1"><a href="#" class="move-todo-servicios por-lista w-100">Ver servicios en modo lista</a></li> -->
                                            <li class="d-flex"><a href="#" class="no-link w-100">Ver servicios en modo lista</a></li>
                                            <!-- <li class="d-flex" data-animation="13" data-to="1"><a href="#" class="move-todo-servicios por-lista l-fondor w-100">Fondo Reservado</a></li> -->
                                            <li class="d-flex" data-animation="13" data-to="1"><a href="" target="_self" class="w-100">Fondo Reservado</a></li>
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
                                    <li class="d-flex box-yellow" data-animation="13" data-to="1"><a href="../?page=1&service=1" class="w-100">Sistema de bibliotecas</a></li>
                                </ul>
                            </div>
                            <div style="">
                                <ul class="list-unstyled">
                                    <li class="d-flex box-yellow" data-animation="13" data-to="1"><a href="../?page=1&service=2" class="w-100">Carné de Biblioteca</a></li>
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
                                    <li class="d-flex box-yellow" data-animation="13" data-to="1"><a href="../?page=1&service=3" class="w-100">Recepción de trabajos de investigación</a></li>
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
                                        <img src="../assets/principal/images/servicios/SALA DE CIENCIAS.jpg" alt="" class="w-100">
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
                    <a href="../?page=1" class="move-todo-servicios" style="color: white;">Servicios</a>
                    
                </li>
                <div class="drop-recursos">
                    <ul class="dropdown-menu">
                        <div class="w-100" style="height: .5rem"></div>
                        <div class="drop-box">
                            <div style="">
                                <ul class="list-unstyled">
                                    <!-- <li class="d-flex box-yellow"><a href="#" class="move-bd w-100">Bases de datos</a></li> -->
                                    <li class="d-flex box-yellow"><a href="../?page=2&resource=0" class="w-100">Bases de datos</a></li>
                                    <div class="menu-enlaces mb-3">
                                        <ul class="list-unstyled">
                                            <!-- <li class="d-flex"><a href="#" class="move-bd w-100">Buscador de bases de datos</a></li> -->
                                            <li class="d-flex"><a href="../?page=2&resource=0" class="w-100">Buscador de bases de datos</a></li>
                                            <li class="d-flex"><a href="http://sisbib.unmsm.edu.pe/Intranet.asp?DB=gvrl" target="_blank" class="w-100">Gale</a></li>
                                            <li class="d-flex"><a href="http://sisbib.unmsm.edu.pe/Intranet.asp?DB=wileyEbook" target="_blank" class="w-100">Wiley</a></li>
                                            <li class="d-flex"><a href="http://sisbib.unmsm.edu.pe/Intranet.asp?DB=pqcentral" target="_blank" class="w-100">Proquest</a></li>
                                            <li class="d-flex"><a href="https://www.scopus.com/search/form.uri?display=basic" target="_blank" class="w-100">Scopus</a></li>
                                            <li class="d-flex"><a href="http://www.sciencedirect.com/" target="_blank" class="w-100">ScienceDirect</a></li>
                                            <li class="d-flex"><a href="http://www.tandfonline.com/" target="_blank" class="w-100">Taylor&Francis</a></li>
                                            <!-- <li class="d-flex"><a href="#" class="move-bd w-100">Más bases</a></li> -->
                                            <li class="d-flex"><a href="../?page=2&resource=0" class="w-100">Más bases</a></li>
                                        </ul>
                                    </div>
                                    <!-- <li class="d-flex box-yellow"><a href="#" class="move-gestor w-100">Gestores Bibliográficos</a></li> -->
                                    <li class="d-flex box-yellow"><a href="../?page=2&resource=2" class="w-100">Gestores Bibliográficos</a></li>
                                </ul>
                            </div>
                            <div style="">
                                <ul class="list-unstyled">
                                    <!-- <li class="d-flex box-yellow"><a href="#" class="move-repo w-100">Repositorios</a></li> -->
                                    <li class="d-flex box-yellow"><a href="../?page=2&resource=1" class="w-100">Repositorios</a></li>
                                    <div class="menu-enlaces mb-3">
                                        <ul class="list-unstyled">
                                            <li class="d-flex"><a href="http://revistasinvestigacion.unmsm.edu.pe/" target="_blank" class="w-100">Revistas UNMSM</a></li>
                                            <li class="d-flex"><a href="http://cybertesis.unmsm.edu.pe/" target="_blank" class="w-100">Cybertesis</a></li>
                                            <li class="d-flex"><a href="http://fondoeditorial.unmsm.edu.pe/" target="_blank" class="w-100">Fondo Editorial</a></li>
                                            <li class="d-flex"><a href="http://sisbib.unmsm.edu.pe/Memoria_Oral/index.html" target="_blank" class="w-100">Archivo de Memoria Oral</a></li>
                                        </ul>
                                    </div>
                                    <!-- <li class="d-flex box-yellow"><a href="#" class="move-capacitaciones w-100">Capacitaciones en Recursos Electrónicos</a></li> -->
                                    <li class="d-flex box-yellow"><a href="../?page=2&resource=3" class="w-100">Capacitaciones en Recursos Electrónicos</a></li>
                                    <div class="menu-enlaces mb-3">
                                        <ul class="list-unstyled">
                                            <!-- <li class="d-flex"><a href="" class="move-capacitaciones w-100">Fechas y horarios</a></li> -->
                                            <li class="d-flex"><a href="../?page=2&resource=3" class="w-100">Fechas y horarios</a></li>
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
                                    <li class="d-flex box-dark"><a href="../?page=2&resource=4" class="w-100">Preguntas Frecuentes</a></li>
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
                                        <img src="../assets/principal/images/servicios/SALA UNIVERSIA.jpg" alt="" class="w-100">
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </ul>
                </div>
                <li class="dropdown hover-drop-recursos">
                    <a href="../?page=2" class="move-rec-elec" style="color: white;">Recursos electrónicos</a>

                </li>
                <!-- <li data-animation="14" data-to="0"><a href="#" class="move-eventos" style="color: white;">Eventos</a></li> -->
                <div class="float-right" style="color: #C8A22B; position: absolute; right: 0; margin-right: 10px; cursor: default;">
                    <!-- <a data-target="#intra-1" data-toggle="modal" href="#" style="color: #fff;">Intranet</a> -->
                    <a class="hover-icon" href="../directorio/directorio.html" target="_blank" title="directorio"><i class="fas fa-phone"></i></a>
                    <a class="hover-icon" href="https://instagram.com/BibliotecaUNMSM" target="_blank" title="instagram"><i class="fab fa-instagram"></i></a>
                    <a class="hover-icon" href="https://twitter.com/BibliotecaUNMSM" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a class="hover-icon" href="https://www.facebook.com/BibliotecaCentralPedroZulen" target="_blank"><i class="fab fa-facebook-f"></i></a>
                </div>
            </ul>
        </div>

    </header>


    <main class="cole-main cont">

        <div class="mb-4 sub-title-sisbib text-uppercase">Colecciones del Fondo Reservado</div>

        <!-- <ul class="nav nav-tabs" id="myTabIzq" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="estructure-tab" data-toggle="tab" href="#estructure" role="tab" aria-controls="estructure" aria-selected="true">Navegar por nivel</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="estruclist-tab" data-toggle="tab" href="#estruclist" role="tab" aria-controls="estruclist" aria-selected="false">Ver lista completa</a>
            </li>
        </ul> -->

        <ul class="nav nav-tabs" id="tabColecciones" role="tablist">
            <li class="nav-item">
                <a class="nav-link" id="col-referencias-tab" data-cur="0" data-toggle="tab" href="#col-referencias" role="tab" aria-controls="col-referencias" aria-selected="true">Por referencia</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="col-descargas-tab" data-cur="6" data-toggle="tab" href="#col-descargas" role="tab" aria-controls="col-descargas" aria-selected="false">Para descargar</a>
            </li>
        </ul>

        <div class="tab-content" id="myTabContentIzq">
            <div class="px-2 py-5 tab-pane fade cont" id="col-referencias" role="tabpanel" aria-labelledby="col-referencias">
                
                <div class="float-left cole-list sticky-list mb-3 mb-md-0">

                    <div class="list-op mr-0 mr-md-5">
                        <a id="colec_0" data-cur="0" class="cajas" href="#">Libros del siglo XVI, siglo XVII y siglo XVIII</a>
                        <a id="colec_1" data-cur="1" class="cajas" href="#">Libros del siglo XIX y principios siglo XX</a>
                        <a id="colec_2" data-cur="2" class="cajas" href="#">Folletos antiguos: siglo XIX</a>
                        <a id="colec_3" data-cur="3" class="cajas" href="#">Biblioteca Mariátegui</a>
                        <a id="colec_4" data-cur="4" class="cajas" href="#">Periódicos y revistas de fines del siglo XIX e inicios del XX</a>
                        <a id="colec_5" data-cur="5" class="cajas" href="#">Tesis: siglo XIX</a>
                        <!-- <a id="colec_6" data-cur="6" class="cajas" href="#">Dora Mayer: Vida interior (memorias)</a> -->
                        <!-- <a id="colec_7" data-cur="7" class="cajas" href="#">Revistas antiguas</a> -->
                    </div>
                    
                </div>

                <div class="float-left contenido px-2 text-justify" style="min-height: 46vh;">
                    <!-- INICIO CONTENIDO COLECCIONES 0 -->
                    <div class="colecs" id="contenido_colec_0">

                        <div class="mb-3">
                            <div class="h2 title-sisbib">Libros antiguos del siglo XVI, XVII y XVIII</div>
                            <div class="cont">
                                <div class="colec-info ml-3">
                                    <p>El Fondo Reservado alberga las colecciones antiguas y valiosas de la Universidad. La colección consta de 499 libros de los siglos XVI-XVIII. Muchos de estos ejemplares originalmente pertenecieron a la orden de los jesuitas. Cuando en 1767 la corona española los expulsa del virreinato del Perú, los libros de esta orden religiosa pasaron a formar parte de la biblioteca de la Universidad. Los temas principales son historia, filosofía, cristianismo, y órdenes religiosas y derecho.</p>
                                </div>
                                <div>
                                    <div class="sub-title-sisbib_black">Relación de libros</div>
                                    <ul>
                                        <li><a href="pdf/titulos_siglo_XVI.pdf" target="_blank">Títulos Siglo XVI</a></li>
                                        <li><a href="pdf/titulos_siglo_XVII.pdf" target="_blank">Títulos Siglo XVII</a></li>
                                        <li><a href="pdf/titulos_siglo_XVIII.pdf" target="_blank">Títulos Siglo XVIII</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div>

                            <div class="mb-4 sub-title-sisbib">Títulos representativos</div>

                            <div class="ml-3">
                                <p>El libro más antiguo identificado del Fondo Reservado es: <i>Ivstini ex Trogo Pompeio historia, diligentissime nvnc quiden supra omneis ómnium bactenus aeditiones recognita, ab innumeris mendis, uestusti exemplaris beneficio repurgata</i>.<br>Es un libro publicado en 1539 del autor Justino Marco Juniano, y trata sobre la monumental obra que Trogo Pompeyo escribió acerca de la historia de Macedonia.</p>
                                <div class="cont mb-3">
                                    <div class="bok w-25 float-left">
                                        <img class="mw-100" src="../assets/principal/images/colec_fondor/iustini.jpg" alt="libro 1">
                                    </div>
                                    <div class="pl-4 w-75 float-right">
                                        <p>
                                            <b>Autor:</b><br>
                                            Justino, Marco Juniano
                                        </p>
                                        <p>
                                            <b>Título:</b><br>
                                            Iustini ex Trogo Pompeio historia, diligentissime nvncquidem supra omneis omnium bactenus aeditiones recognita, ab innumeris mendis, uetusti exemplaris beneficio repurgata
                                        </p>
                                        <p>
                                            <b>Publicación:</b><br>
                                            Basileae Michaelem Isingrinium 1539
                                        </p>
                                        <p>
                                            <b>Descripción física:</b><br>
                                            274 p. il. 19 cm.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="ml-3">
                                <p>Uno de los títulos más importantes de la colección lo constituye, el libro del padre José de Acosta, <i>“Historia natural y moral de las Indias en que se tratan las cosas notables del cielo, y elementos, metales, plantas, y animales dellas y los ritos, y ceremonias, leyes, gobierno y guerras de los indios”</i>, es una edición príncipe, barcelonesa, de 1591. Considerado referente etnográfico de gran importancia y un libro antiguo interesante por su contenido peruanista. También se encuentran crónicas, como la <i>“Crónica moralizadora del padre Calancha”</i>, 1639 y algunas ediciones del inca Garcilaso de la vega.</p>
                                <div class="cont mb-3">
                                    <div class="bok w-25 float-right">
                                        <img class="mw-100" src="../assets/principal/images/colec_fondor/historia_natural.jpg" alt="libro 2">
                                    </div>
                                    <div class="pr-4 w-75 float-right">
                                        <p>
                                            <b>Autor:</b><br>
                                            Acosta, José de 1539-1600
                                        </p>
                                        <p>
                                            <b>Título:</b><br>
                                            Historia natural y moral de las Indias en que se tratan las cosas notables del cielo, y elementos, metales, plantas, y animales dellas y los ritos, y ceremonias, leyes, gobierno y guerras de los indios Compuesta por Joseph de Acosta
                                        </p>
                                        <p>
                                            <b>Publicación:</b><br>
                                            Barcelona En la Emprenta de Iayme Cendrat 1591
                                        </p>
                                        <p>
                                            <b>Descripción física:</b><br>
                                            [14], 345, [57] p. 15 cm.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="ml-3">
                                <p>Por último, destaca la presencia de uno de los títulos referidos a la historia de la Universidad más importantes, y que es el ejemplar de las “Constituciones, y ordenanzas antiguas, añadidas y modernas de la Real Universidad y estudio general de San Marcos de la ciudad de los reyes del Perú. Reimpressas, y recogidas de mandato... Doct. D. Alonso Eduardo de SalazarZevallos... donde también se contienen las leyes reales de Indias del título de universidades las Cedulas Reales, Capítulos de Visita, Autor del Real Acuerdo, y decretos del Superior Govierno, con lo demás que desde su fundación hasta el tiempo presente tiene de estatutos prerrogativos y adelantamientos y demás cosas sobresalientes”, de 1735.</p>
                                <div class="cont mb-3">
                                    <div class="bok  w-25 float-left">
                                        <img class="mw-100" src="../assets/principal/images/colec_fondor/constituciones.jpg" alt="libro 3">
                                    </div>
                                    <div class="pl-4 w-75 float-left">
                                        <p>
                                            <b>Título:</b><br>
                                            Constituciones, y ordenanzas antiguas, añadidas y modernas de la Real Universidad y estudio general de San Marcos de la ciudad de los reyes del Perú.
                                        </p>
                                        <p>
                                            <b>Publicación:</b><br>
                                            En la misma ciudad de los Reyes Impr. Real, por Félix de Saldaña y Flores 1735
                                        </p>
                                        <p>
                                            <b>Descripción física:</b><br>
                                            34 p. 1., 83 (i. l.86) num. 1., [79] p. il. 29 cm.
                                        </p>
                                        <p>
                                            <b>Nota general:</b><br>
                                            Con apostillas marginales
                                        </p>
                                        <p>
                                            <b>Contiene:</b><br>
                                            "Donde también se contienen las leyes reales de las Indias del texto de las universidades, las cedulas Reales, Capítulos de Visita, Actas del Real Acuerdo y decretos del Superior gobierno, con lo demás que desde su fundación hasta los tiempos presente, tiene de estatutos prerrogativos, y adelantamientos y las demás cosas sobresalientes".
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- FIN CONTENIDO COLECCIONES 0 -->
                    
                    <!-- FIN CONTENIDO COLECCIONES 1 -->
                    <div class="colecs" id="contenido_colec_1">
                        <div class="mb-3">
                            <div class="h2 title-sisbib">Libros del siglo XIX y principios del siglo XX</div>
                            <div class="cont">
                                <div class="colec-info ml-3">
                                    <p>La colección del Fondo Reservado fue desarrollada con énfasis en los temas peruanistas y americanistas, sobresale el tema histórico, y constituye el material más abundante de la colección. Los temas están centrados en la gesta de la Independencia, el inicio de la vida republicana, colecciones sobre leyes y decretos, la guerra del Pacifico, historia de los límites del Perú, estudios referidos a la historia de la Universidad Nacional Mayor de San Marcos e investigaciones historiográficas, producidas en su mayor parte en siglo XIX y primera mitad del siglo XX.</p>
                                </div>
                                <div>
                                    <div class="sub-title-sisbib_black">Catálogo de libros</div>
                                    <ul>
                                        <li><a href="https://unmsm.ent.sirsi.net/client/es_ES/all_libs/search/results?qf=FORMAT%09Formato%09BOOK%09Libros&amp;qf=LIBRARY%09Biblioteca%091%3A00%09Bib.+Central+Pedro+Zulen&amp;qf=PUBDATE%09Fecha+de+publicaci%C3%B3n%091800-1960%091800-1960&amp;qf=ITYPE%09Tipo+de+material%091%3ALIBRFRESE%09Obras+del+fondo+reservado&amp;lm=LIBFRESE&amp;dt=list" target="_blank">Enlace al catálogo</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div>

                            <div class="mb-4 sub-title-sisbib">Títulos representativos</div>

                            <div class="ml-3">

                                <div class="cont mb-3">
                                    <div class="bok w-25 float-left">
                                        <img class="mw-100" src="../assets/principal/images/colec_fondor/supremas_resoluciones.jpg" alt="libro 1">
                                    </div>
                                    <div class="pl-4 w-75 float-right">
                                        <p>
                                            <b>Título:</b><br>
                                            Colección de leyes, decretos y órdenes, publicadas en el Perú, desde su independencia en el año de 1821, hasta 1852
                                        </p>
                                        <p>
                                            <b>Publicación:</b><br>
                                            Lima Imprenta de José Masías 1831-1854
                                        </p>
                                        <p>
                                            <b>Descripción física:</b><br>
                                            13 t. en 10 v. 29 cm.
                                        </p>
                                        <p>
                                            <b>Contiene:</b><br>
                                            Contenido: t. 1. 1821-1823 -- t. 2. 1824-1827 -- t. 3. 1828-1830 -- t. 4. 1831-1834 -- t. 5. 1835-1837 -- t. 6. 1838-1840, y una adición al año de 1830 -- t. 7. Indice general alfabético y por fechas de los 6 tomos -- t. 8. 1841-1843 -- t. 9. 1844-1845 -- t. 10. 1846-1847 -- t. 11. 1848-1849 -- t. 12. 1850-1851 -- t. 13. 1852
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="ml-3">
                                <div class="cont mb-3">
                                    <div class="bok w-25 float-right">
                                        <img class="mw-100" src="../assets/principal/images/colec_fondor/historia_republicana.jpg" alt="libro 2">
                                    </div>
                                    <div class="pr-4 w-75 float-right">
                                        <p>
                                            <b>Autor:</b><br>
                                            Dávalos y Lissón, Pedro 1863-1942
                                        </p>
                                        <p>
                                            <b>Título:</b><br>
                                            Historia republicana del Perú Pedro Dávalos y Lisson
                                        </p>
                                        <p>
                                            <b>Publicación:</b><br>
                                            Lima Librería e Imprenta Gil 1931-1939
                                        </p>
                                        <p>
                                            <b>Descripción física:</b><br>
                                            10 t. 25 cm.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="ml-3">

                                <div class="cont mb-3">
                                    <div class="bok w-25 float-left">
                                        <img class="mw-100" src="../assets/principal/images/colec_fondor/demarcacion_politica.jpg" alt="libro 3">
                                    </div>
                                    <div class="pl-4 w-75 float-left">
                                        <p>
                                            <b>Autor:</b><br>
                                            Tarazona S., Justino M.
                                        </p>
                                        <p>
                                            <b>Título:</b><br>
                                            Demarcación política del Perú recopilación de leyes y decretos (1821-1946) Justino M. Tarazona S.
                                        </p>
                                        <p>
                                            <b>Publicación:</b><br>
                                            Lima [s.n.] 1946
                                        </p>
                                        <p>
                                            <b>Descripción física:</b><br>
                                            1545 p. 25 cm.
                                        </p>
                                        <p>
                                            <b>Nota general:</b><br>
                                            A la cabeza del título: Ministerio de Hacienda y Comercio. Dirección Nacional de Estadística.
                                        </p>
                                        <p>
                                            <b>Bibliografía:</b><br>
                                            Bibliografía: p. 7-8.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="ml-3">
                                <div class="cont mb-3">
                                    <div class="bok w-25 float-right">
                                        <img class="mw-100" src="../assets/principal/images/colec_fondor/la_universidad_san_marcos.jpg" alt="libro 4">
                                    </div>
                                    <div class="pr-4 w-75 float-right">
                                        <p>
                                            <b>Autor:</b><br>
                                            Villarán, Manuel Vicente 1873-1958
                                        </p>
                                        <p>
                                            <b>Título:</b><br>
                                            La Universidad de San Marcos de Lima los orígenes: 1548-1577 por Manuel Vicente Villarán
                                        </p>
                                        <p>
                                            <b>Publicación:</b><br>
                                            Lima Lib. e Imp. Gil 1938
                                        </p>
                                        <p>
                                            <b>Descripción física:</b><br>
                                            36 p. il. 22 cm.
                                        </p>
                                        <p>
                                            <b>Bibliografía:</b><br>
                                            Con notas bibliográficas.
                                        </p>
                                        <p>
                                            <b>Contiene:</b><br>
                                            Contenido: Universidades españolas -- La fundación -- Primeros Rectores Laicos -- La Universidad se aparta del convento de Santo Domingo -- La obra universitaria del virrey Toledo.
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- FIN CONTENIDO COLECCIONES 1 -->

                    <!-- FIN CONTENIDO COLECCIONES 2 -->
                    <div class="colecs" id="contenido_colec_2">
                        <div class="mb-3">
                            <div class="h2 title-sisbib">Folletos antiguos encuadernados (COL. F)</div>
                            <div class="cont">
                                <div class="colec-info ml-3">
                                    <p>Esta colección consta de 444 volúmenes encuadernados que contienen 3560 folletos, que fueron seleccionados procedentes de diversas donaciones. La colección tiene cerca de treinta y seis folletos del siglo XVIII. El resto de la colección corresponde a material del siglo XIX e inicios del XX. Esta colección es considerada de utilidad para quienes investiguen la Historia de la República del Perú. Ofrece información única sobre acontecimientos, personajes e instituciones; también contienen discursos, tesis antiguas, memorias institucionales, acusaciones y descargos.</p>
                                </div>
                                <div>
                                    <div class="sub-title-sisbib_black">Relación de títulos de la Colección de Folletos Col. F</div>
                                    <ul>
                                        <li><a href="pdf/COL_F_VOL_1.pdf" target="_blank">Títulos Col. F. Vol. 1</a></li>
                                        <li><a href="pdf/COL_F_VOL_2.pdf" target="_blank">Títulos Col. F. Vol. 2</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div>

                            <div class="mb-4 sub-title-sisbib">Títulos representativos</div>

                            <div class="ml-3">

                                <div class="cont mb-3">
                                    <div class="bok w-25 float-left">
                                        <img class="mw-100" src="../assets/principal/images/colec_fondor/elogio.jpg" alt="libro 1">
                                    </div>
                                    <div class="pl-4 w-75 float-right">
                                        <p>
                                            <b>Autor:</b><br>
                                            Valdivieso y Pradas, Francisco
                                        </p>
                                        <p>
                                            <b>Título:</b><br>
                                            Elogio al illmo. señor D. Jorge Escobedo y Alarcón, Caballero de la real y distinguida Orden Española de Carlos III, del Consejo y Cámara de S. M. en el Supremo de Indias, que en la tarde del día dos de junio de 1795, en el que le dedicó D. Carlos de la Vega el acto que sostuvo para obtener los grados de licenciado y doctor dixo, Francisco Valdivieso y Pradas
                                        </p>
                                        <p>
                                            <b>Publicación:</b><br>
                                            [Lima s.n. 1795?]
                                        </p>
                                        <p>
                                            <b>Descripción física:</b><br>
                                            27 p. 20 cm.
                                        </p>
                                        <p>
                                            <b>Fondos:</b><br>
                                            COL. F. 344 / 3
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="ml-3">

                                <div class="cont mb-3">
                                    <div class="bok w-25 float-right">
                                        <img class="mw-100" src="../assets/principal/images/colec_fondor/rectificacion_historica.jpg" alt="libro 2">
                                    </div>
                                    <div class="pr-4 w-75 float-right">
                                        <p>
                                            <b>Autor:</b><br>
                                            Paz Soldán, Carlos 1844-1926
                                        </p>
                                        <p>
                                            <b>Título:</b><br>
                                            Una rectificación histórica por Carlos Paz Soldán
                                        </p>
                                        <p>
                                            <b>Publicación:</b><br>
                                            Lima Imprenta Liberal 1897
                                        </p>
                                        <p>
                                            <b>Descripción física:</b><br>
                                            14 p. 23 cm.
                                        </p>
                                        <p>
                                            <b>Nota general:</b><br>
                                            "A un discurso pronunciado ante el ilustre Colegio de Abogados de Lima, por el Dr. D. Felipe de Osma y Pardo"
                                        </p>
                                        <p>
                                            <b>Fondos:</b><br>
                                            COL. F. 070 / 5
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- FIN CONTENIDO COLECCIONES 2 -->
                    
                    <!-- FIN CONTENIDO COLECCIONES 3 -->
                    <div class="colecs" id="contenido_colec_3">
                        <div class="mb-3">
                            <div class="h2 title-sisbib">Biblioteca "José Carlos Mariátegui"</div>
                            <div class="cont">
                                <div class="colec-info ml-3">
                                    <p>La colección constituye una reconstrucción histórica de la biblioteca personal de José Carlos Mariátegui. Está conformada por parte de los libros que pertenecieron al Amauta, y que fueron cedidos por la familia Mariátegui. La colección se completó con volúmenes que poseen características coincidentes en título, edición y año de la biblioteca personal de Mariátegui. Para esta reconstrucción, se tomó como referencia la investigación de Harry E. Vanden (Mariátegui: influencias en su formación ideológica. Lima Amauta: 1975), donde figuran cerca de 350 libros. La colección Mariátegui del Fondo Reservado, consta de 174 volúmenes.</p>
                                </div>
                                <div>
                                    <div class="sub-title-sisbib_black">Relación de libros de la Colección Mariátegui</div>
                                    <ul>
                                        <li><a href="pdf/mariategui.pdf" target="_blank">Títulos de la Colección Mariátegui</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div>

                            <div class="mb-4 sub-title-sisbib">Títulos representativos</div>

                            <div class="ml-3">

                                <div class="cont mb-3">
                                    <div class="bok w-25 float-left">
                                        <img class="mw-100" src="../assets/principal/images/colec_fondor/entretiens.jpg" alt="libro 1">
                                    </div>
                                    <div class="pl-4 w-75 float-right">
                                        <p>
                                            <b>Autor:</b><br>
                                            Duhamel, Georges 1884-1966
                                        </p>
                                        <p>
                                            <b>Título:</b><br>
                                            Entretiens dans le tumulte chronique contemporaine, 1918-1919 Georges Duhamel
                                        </p>
                                        <p>
                                            <b>Edición:</b><br>
                                            18e ed.
                                        </p>
                                        <p>
                                            <b>Publicación:</b><br>
                                            Paris Mercure de France 1919
                                        </p>
                                        <p>
                                            <b>Descripción física:</b><br>
                                            271 p. 19 cm.
                                        </p>
                                        <p>
                                            <b>Materia:</b><br>
                                            Guerra Mundial, 1914-1918
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="ml-3">

                                <div class="cont mb-3">
                                    <div class="bok w-25 float-right">
                                        <img class="mw-100" src="../assets/principal/images/colec_fondor/histoire.jpg" alt="libro 2">
                                    </div>
                                    <div class="pr-4 w-75 float-right">
                                        <p>
                                            <b>Autor:</b><br>
                                            Marx, Karl 1818-1883
                                        </p>
                                        <p>
                                            <b>Título:</b><br>
                                            Histoire des doctrines économiques Karl Marx; publiée par Karl Kautsky; traduit par J. Molitor Publicación: Paris Alfred Costes 1924-1925
                                        </p>
                                        <p>
                                            <b>Descripción física:</b><br>
                                            8 t. 19 cm.
                                        </p>
                                        <p>
                                            <b>Contenido:</b><br>
                                            t. 1-2. Depuis les origines de la théorie de la plus-value jusqu'Adam Smith -- t. 3-4. Ricardo -- t. 5-6. De Ricardo a l'économie vulgaire
                                        </p>
                                        <p>
                                            <b>Materia:</b><br>
                                            Economía - Historia
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- FIN CONTENIDO COLECCIONES 3 -->

                    <!-- FIN CONTENIDO COLECCIONES 4 -->
                    <div class="colecs" id="contenido_colec_4">
                        <div class="mb-3">
                            <div class="h2 title-sisbib">Periódicos y revistas de fines del siglo XIX e inicios del XX</div>
                            <div class="cont">
                                <div class="colec-info ml-3">
                                    <p>El Fondo Reservado posee ejemplares de periódicos y revistas publicados a inicios de la república. Su colección alberga ejemplares del Mercurio Peruano, Boletín del Ejército Unido, Libertador del Perú, El Instructor Peruano, El Peruano, El Comercio, y revistas como la Revista de Lima, El Perú Ilustrado, Anales Universitarios, Revista Universitaria y el Boletín Bibliográfico, fundado por Pedro Zúlen en 1923.</p>
                                </div>
                                <div>
                                    <div class="sub-title-sisbib_black">Relación de periódicos y revistas</div>
                                    <ul>
                                        <li><a href="pdf/periodicos_siglo_XIX.pdf" target="_blank">Títulos de Periódicos del Fondo Reservado (Siglos XIX-XX)</a></li>
                                        <li><a href="pdf/revistas_siglo_XIX.pdf" target="_blank">Títulos de Revistas del Fondo Reservado (Siglo XIX-XX)</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div>

                            <div class="mb-4 sub-title-sisbib">Títulos representativos</div>

                            <div class="ml-3">

                                <div class="cont mb-3">
                                    <div class="w-50 float-left">
                                        <div style="width: 90%;" class="ml-auto mr-auto mt-3 mb-3">
                                            <div class="bok">
                                                <img class="mw-100" src="../assets/principal/images/colec_fondor/mercurio_peruano.jpg" alt="libro 1">
                                            </div>
                                            <p class="text-center"><i>El Mercurio Peruano</i></p>
                                        </div>
                                    </div>
                                    <div class="w-50 float-left">
                                        <div style="width: 90%;" class="ml-auto mr-auto mt-3 mb-3">
                                            <div class="bok">
                                                <img class="mw-100" src="../assets/principal/images/colec_fondor/peru_ilustrado.jpg" alt="libro 2">
                                            </div>
                                            <p class="text-center"><i>Perú Ilustrado</i></p>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- FIN CONTENIDO COLECCIONES 4 -->

                    <!-- FIN CONTENIDO COLECCIONES 5 -->
                    <div class="colecs" id="contenido_colec_5">
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
                                    <div class="bok w-25 float-left">
                                        <img class="mw-100" src="../assets/principal/images/colec_fondor/tesis_medicina.jpg" alt="libro 1">
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
                                    <div class="bok w-25 float-right">
                                        <img class="mw-100" src="../assets/principal/images/colec_fondor/tesis_derecho.jpg" alt="libro 2">
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
                    </div>
                    <!-- FIN CONTENIDO COLECCIONES 5 -->

                    

                    <!-- FIN CONTENIDO COLECCIONES 7 -->
                    
                    <!-- FIN CONTENIDO COLECCIONES 7 -->

                </div>

            </div>
            <div class="px-2 py-5 tab-pane fade cont" id="col-descargas" role="tabpanel" aria-labelledby="col-descargas-tab">
                
                <div class="float-left cole-list sticky-list mb-3 mb-md-0">

                    <div class="list-op mr-0 mr-md-5">
                        <!-- <a id="colec_0" data-cur="0" class="cajas" href="#">Libros del siglo XVI, siglo XVII y siglo XVIII</a>
                        <a id="colec_1" data-cur="1" class="cajas" href="#">Libros del siglo XIX y principios siglo XX</a>
                        <a id="colec_2" data-cur="2" class="cajas" href="#">Folletos antiguos: siglo XIX</a>
                        <a id="colec_3" data-cur="3" class="cajas" href="#">Biblioteca Mariátegui</a>
                        <a id="colec_4" data-cur="4" class="cajas" href="#">Periódicos y revistas de fines del siglo XIX e inicios del XX</a>
                        <a id="colec_5" data-cur="5" class="cajas" href="#">Tesis: siglo XIX</a> -->
                        <a id="colec_6" data-cur="6" class="cajas" href="#">Dora Mayer: Vida interior (memorias)</a>
                        <!-- <a id="colec_7" data-cur="7" class="cajas" href="#">Revistas antiguas</a> -->
                        <!-- <?php
                            $query = "SELECT * FROM revistas";
                            $resultado = $conexion->query($query);
                            $cant_revistas = $resultado->num_rows;

                            $i = 7;
                            while ($row_revista = $resultado->fetch_assoc()) {
                        ?> -->
                                <a id="colec_7" data-cur="7" class="cajas" href="#">Prisma</a>
                                <!-- <a id="colec_<?php echo $i; ?>" data-cur="<?php echo $i ?>" class="cajas" href="#"><?php echo $row_revista['nombre']; ?></a>
                        <?php
                                $i++;
                            }
                        ?> -->
                    </div>
                    
                </div>

                <div class="float-left contenido px-2 text-justify" style="min-height: 46vh;">

                    <!-- FIN CONTENIDO COLECCIONES 6 -->
                    <div class="colecs" id="contenido_colec_6">
                        <div class="mb-3">
                            <div class="h2 title-sisbib">Dora Mayer: Vida interior (memorias)</div>
                            <div class="cont">
                                <div class="colec-info pl-0 pl-md-3 w-100">
                                    <p>Dora Mayer (Hamburgo 1868-Lima 1959) fue mucho más que la activista defensora de los derechos ciudadanos de los indígenas, que es como se la conoció hasta hace pocos años. Fue periodista, escritora y una especial observadora de su tiempo y del Callao, donde vivió desde que sus padres llegaron al Perú en 1873. La Biblioteca Central comparte aquí sus memorias.</p>
                                    <p>Sus memorias, que ella tituló Vida interior, están organizadas de la siguiente manera: Vida interna, Parte I (72 páginas); Vida Interna, Parte II (30 pp.); Intermezzo (18); La obra del destino, Parte III (254); Un largo suspiro, Parte IV (208). Las partes I, II e Intermezzo se encuentran en copia mecanográfica. Las partes III y IV constan de manuscritos originales.</p>
                                    <p>Las partes I y II fueron publicadas en 1992 por el Seminario de Historia Rural Andina de la Universidad. Las partes III y IV constituyen una novedad que la Biblioteca Central se complace en compartir. Agradecemos al señor Andrés Paredes Luyo, discípulo de Dora Mayer y a la profesora Alionca Respaldiza, por haber conservado estos documentos históricos y por cederlos a la Universidad.</p>
                                </div>
                                <!-- <div>
                                    <div class="sub-title-sisbib_black">Relación de tesis</div>
                                    <ul>
                                        <li><a href="pdf/tesis_medicina_siglo_XIX.pdf" target="_blank">Títulos de Tesis de Medicina Siglo XIX-XX</a></li>
                                        <li><a href="pdf/tesis_jurisprudencia_siglo_XIX.pdf" target="_blank">Títulos de Tesis de la Facultad de Jurisprudencia (Derecho) Siglo XIX - XX</a></li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>

                        <div>

                            <div class="mb-4 sub-title-sisbib">Memorias</div>

                            <div class="ml-3">

                                <div class="cont mb-3">
                                    <div class="d-md-flex align-items-center memorias-dm">
                                        <div class="float-left mb-3 mb-md-0">
                                            <div class="bok mb-2">
                                                <img class="mw-100" src="../assets/principal/images/colec_fondor/Dora Mayer en la Chacra Martha.jpg" alt="libro 1">
                                            </div>
                                            <small class="text-muted"><p class="mb-0">Dora Mayer en el Perené. Ref: Cap. XI, de la Parte III: “La historia de la chácara Martha”.</p></small>
                                        </div>
                                        <div class="float-right pl-0 pl-md-5">
                                            <div class="sub-title-sisbib_black">Partes del manuscrito</div>
                                            <ul>
                                                <li><a href="pdf/Memorias de Dora Mayer, Partes I y II.pdf" target="_blank">Memorias de Dora Mayer, Partes I y II</a></li>
                                                <li><a href="pdf/Memorias de Dora Mayer, Parte III.pdf" target="_blank">Memorias de Dora Mayer, Parte III</a></li>
                                                <li><a href="pdf/Memorias de Dora Mayer, Parte IV y final.pdf" target="_blank">Memorias de Dora Mayer, Parte IV y final</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- FIN CONTENIDO COLECCIONES 6 -->



                            <div class="colecs" id="contenido_colec_7">
                                <div class="h2 title-sisbib">Prisma</div>
                                <div class="row mb-4">
                                    <div class="col-4">
                                        <img class="w-100 h-auto" src="revistas_antiguas/PRISMA_mod.jpg" alt="">
                                    </div>
                                    <div class="col">
                                        
                                            <p>
                                                La revista Prisma (1905-1907) publicada en Lima (Perú), se distinguía por sus contenidos literarios, el elegante diseño, el fino papel y la calidad de las fotografías reproducidas. Esta publicación ilustrada celebraba la modernización urbanística y la novedad cultural. Reunió a escritores de diversas generaciones, que publicaron tradiciones, poesías, estudios, cuentos y crónicas modernistas. Entre ellos destacan Ricardo Palma, Zoila Aurora Cáceres, Carlos G. Amézaga, Clemente Palma, José de la Riva-Agüero y Rubén Darío.
                                            </p>
                                            <p>
                                                Esta digitalización integral de Prisma (71 números continuados y 2 ediciones especiales) ofrece valiosa información sobre la historia de San Marcos, las transformaciones urbanas de Lima, los descubrimientos arqueológicos y la vida social de las elites limeñas. Apostaba por un lector sofisticado culturalmente y con solvencia económica. Estuvo asociada a la gama de servicios tipográficos y fotográficos que ofrecía la casa Moral.
                                            </p>
                                            <p class="mb-0 text-right">[Marcel Velázquez Castro]</p>
                                        
                                        
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <p class="mb-0"><b>Título:</b> Prisma: revista ilustrada, de artes, letras, etc.</p>
                                    <p class="mb-0"><b>Fecha límite:</b> n° 1 (septiembre 1905) - n° 71 (diciembre 1907)</p>
                                    <p class="mb-0"><b>Lugar de edición:</b> Lima, Perú</p>
                                    <p class="mb-0"><b>Editorial:</b> [s. n.]</p>
                                    <p class="mb-0"><b>Director:</b> Hernández, Julio S., 1853-1906, dir. (edición preliminar - n° 15), Amézaga, Carlos Germán, 1862-1906, dir. (n° 16 - n° 27), Palma, Clemente, 1872-1946, dir. (n° 31 - n° 71)</p>
                                    <p class="mb-0"><b>Ediciones especiales:</b> Edición preliminar de Prisma 16/08/1905 (presenta el significado de la elección de Prisma como nombre de la revista) y Prisma dic. 1905 (inauguración y visita al monumento al héroe nacional Francisco Bolognesi).</p>
                                    <p class="mb-0"><b>Temas:</b> Lima (Lima, Perú) - Vida social y costumbres, Lima (Lima, Perú) - Vida intelectual</p>
                                </div>
                                
                                <div class="row mb-4">
                                    <div class="col">
                                        <div><b>Año:</b></div>
                                        <select class="db-search-input filter-change-year w-100" name="yearlist" id="yearlist">
                                            <?php
                                                $id_revista = 1;
                                                $order_año = " ORDER BY año ASC";
                                                $query = "SELECT DISTINCT año FROM titulos WHERE id_revista = '".$id_revista."'".$order_año;
                                                // echo $query;
                                                $resultado1 = $conexion->query($query);
                                                while ($row_años = $resultado1->fetch_assoc()) {
                                            ?>
                                                    <option class="year" value="<?php echo $row_años['año'] ?>"><?php echo $row_años['año'] ?></option>
                                            <?php
                                                }
                                            ?>
                                        </select>
                                    </div>

                                    <div class="col">
                                        <div><b>Mes:</b></div>
                                        <!-- <select class="db-search-input filter-change w-100" name="monthlist" id="monthlist"> -->
                                            <div id="options_months"></div>
                                            <!-- <option class="month" value="cat_all">Todas las áreas</option>
                                            <option class="month" value="c_cbas">Ciencias básicas</option>
                                            <option class="month" value="c_csal">Ciencias de la salud</option>
                                            <option class="month" value="c_ceco">Ciencias económicas y de la gestión</option>
                                            <option class="month" value="c_cshe">Ciencias sociales, humanidades y educación</option>
                                            <option class="month" value="c_der">Derecho</option>
                                            <option class="month" value="c_ing">Ingenierías</option>
                                            <option class="month" value="c_multi">Multidisciplinario</option> -->
                                        <!-- </select> -->
                                    </div>

                                    <div class="col">
                                        <div><b>Número:</b></div>
                                        <div id="options_numbers"></div>
                                    </div>

                                </div>

                                <div id="ajax_block"></div>

                            </div>


                </div>

            </div>
        </div>

        

    </main>

    <footer class="footer">
        <div class="sec-top cont">
            <div style="float: left">
                <div class="title mb-2 text-center">LA BIBLIOTECA EN NÚMEROS</div>
                <div class="d-flex flex-wrap">
                    <div>
                        <div class="division-block-h block-bib-num f-bl">
                            <div style="display: block;">
                                <span class="counter" data-count="37">37</span>
                                <p class="descrip-counter text-center text-uppercase mb-0">Bases de datos por suscripción</p>
                            </div>
                            <div class="pseudo-last" style="display: block;">
                                <span class="h3 d-block text-center">+<span class="counter d-inline-block" data-count="10700">10,700</span></span>
                                <p class="descrip-counter text-center text-uppercase mb-0">Tesis en el repositorio Cybertesis</p>
                            </div>
                            <div style="display: block;">
                                <span class="h3 d-block text-center">+<span class="counter d-inline-block" data-count="9300">9,300</span></span>
                                <p class="descrip-counter text-center text-uppercase mb-0">Artículos en el Repositorio de revistas</p>
                                <!-- <span class="counter" data-count="23">23</span>
                                <p class="descrip-counter text-center text-uppercase mb-0">Títulos en el Repositorio de Revistas</p> -->
                            </div>
                            <div class="last" style="display: block;">
                                <span class="counter" data-count="147">147</span>
                                <p class="descrip-counter text-center text-uppercase mb-0">Libros digitalizados relacionados a la UNMSM</p>
                            </div>
                        </div>
                        <div class="title mt-2 text-center text-uppercase">Recursos electrónicos</div>
                    </div>
                    

                    <div>
                        <div class="division-block-h block-bib-num s-bl">
                            <div class="" style="display: block;">
                                <span class="counter" data-count="400">400</span>
                                <p class="descrip-counter text-center text-uppercase mb-0">Aforo del auditorio Rosa Alarco</p>
                            </div>
                            <div class="pseudo-last" style="display: block;">
                                <span class="counter" data-count="852">852</span>
                                <p class="descrip-counter text-center text-uppercase mb-0">Puestos de lectura</p>
                            </div>
                            <div style="display: block;">
                                <span class="counter" data-count="74">74</span>
                                <p class="descrip-counter text-center text-uppercase mb-0">Puestos de computadoras</p>
                            </div>
                            <div class="last" style="display: block;">
                                <span class="counter" data-count="13">13</span>
                                <p class="descrip-counter text-center text-uppercase mb-0">Cubículos de Estudio Grupal</p>
                            </div>
                        </div>
                        <div class="title mt-2 text-center text-uppercase">Aforos</div>
                    </div>
                
                </div>
            </div>
            <div style="float: right;">
                <div class="mb-1"><a data-target="#ModalQuestion-1" data-toggle="modal" class="link-white" href="#">NOSOTROS</a> / <a href="https://goo.gl/maps/uTYzmpT41ES2" target="_blank" class="link-white">UBICACIÓN</a></div>
                <div class="mb-1"><a href="../directorio/directorio.html" class="link-white">DIRECTORIO BC</a></div>
                <div class="icons mb-1" style="display: flex; align-items: center; justify-content: space-evenly; font-size: 40px;">
                    <a href="https://www.facebook.com/BibliotecaCentralPedroZulen" target="_blank"><i class="fab fa-facebook-square"></i></a>
                    <a href="mailto:bibcent@unmsm.edu.pe" target="_blank"><i class="fas fa-envelope"></i></a>
                    <!-- <a href="#"><i class="fab fa-whatsapp"></i></a> -->
                </div>
            </div>
        </div>
        <div class="sec-bot">
            Página creada por la Biblioteca Central 'Pedro Zulen' - Oficina de Automatización y Capacitación Informacional
        </div>
    </footer>

    <!-- Modal question-1 -->
            <div style="background-color: rgba(0, 0, 0, 0.5);" class="modal fade" id="ModalQuestion-1" tabindex="-1" role="dialog" aria-labelledby="ModalQuestion-1_Label" aria-hidden="true">
              <div style="max-width: 1400px;" class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content" style="background-image: url('../assets/principal/images/biblioteca-central.JPG'); background-position: center; background-repeat: no-repeat; background-size: cover;">
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

    <script src="../assets/principal/js/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/principal/js/popper/popper.min.js"></script>
    <script src="../assets/principal/js/bootstrap/bootstrap.min.js"></script>
    <script src="../assets/principal/js/pagetransitions.js"></script>
    <script src="../assets/principal/js/miscelanea.js"></script>
    <script src="../assets/principal/js/navigator.js"></script>
    <!-- <script src="https://support.ebscohost.com/eit/scripts/ebscohostsearch.js"></script> -->
    <script src="../assets/principal/js/ebscohostsearch(2).js"></script>
    <!-- <script src="../assets/principal/js/ebscohostsearch(3).js"></script> -->
    <script src="../assets/principal/js/main.js"></script>
    <script src="../assets/principal/js/barras.js"></script>
    <script src="../assets/principal/js/jquery/jquery.rwdImageMaps.min.js"></script>
    <script src="../assets/principal/js/hemeroteca_ajax.js"></script>
    <script>
        (function(){

            if ($(window).width() <= 560) {
                    $('.pseudo-last').addClass('last');
                }

            $(window).resize(function() {
                if ($(window).width() <= 560) {
                    $('.pseudo-last').addClass('last');
                } else {
                    $('.pseudo-last').removeClass('last');
                }
            });

        }());
    </script>

</body>
</html>