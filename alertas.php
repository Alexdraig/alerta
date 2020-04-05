<?php
	include 'routs.php';
	require_once "controladores/bibliotecas.controlador.php";
	require_once "modelos/bibliotecas.modelo.php";

	require_once "controladores/libros.controlador.php";
	require_once "modelos/libros.modelo.php";

	require_once "controladores/tesis.controlador.php";
	require_once "modelos/tesis.modelo.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta name="title" content="Biblioteca Central Pedro Zulen - UNMSM">
	<meta name="DC.Title" content="Biblioteca Central Pedro Zulen - UNMSM">
	<meta http-equiv="title" content="Biblioteca Central Pedro Zulen - UNMSM">
	<meta name="keywords" content="Biblioteca Central San Marcos, San Marcos Biblioteca, Sistema de Bibliotecas UNMSM, Sistema de Bibliotecas San Marcos, Biblioteca universitaria, Bibliotecas en Perú, Biblioteca de San Marcos, Biblioteca UNMSM">
	<meta name="description" content="Biblioteca Central de la UNMSM">
	<meta http-equiv="DC.Description" content="Sitio Web de la Biblioteca Central Pedro Zulen de la Universidad Nacional Mayor de San Marcos, Decana de América">
	<meta name="author" content="Oficina de Automatización y Capacitación Informacional, Biblioteca Central UNMSM">
	<meta name="distribution" content="global">
	<meta name="robots" content="all index follow">

	<!-- Marcador en Menu inicio de Windows 8 -->
    <meta name="application-name" content="Ir a UNMSM"/>
    <meta name="msapplication-TileColor" content="#8a163b"/>
    <meta name="msapplication-TileImage" content="assets/principal/images/logo.png"/>

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
    
    <title>Biblioteca Central Pedro Zulen</title>

</head>
<body style="height: 100%;">
<div id="pt-main" class="pt-perspective-alerta">

<!---------------------------------->
<!--------- PAGINA CENTRAL --------->
<!---------------------------------->
		<!-- Modal bib-modal-1 -->
					 	    <div style="background-color: rgba(0, 0, 0, 0.5);" class="modal fade" id="intra-1" tabindex="-1" role="dialog" aria-labelledby="Intra-1" aria-hidden="true">
					 	        <div style="max-width: 1000px;" class="modal-dialog modal-dialog-centered" role="document">
					 	            <div class="modal-content">
					 	                <div class="modal-header">
					 	                    <h5 class="modal-title" id="in1">Intranet</h5>
					 	                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					 	                        <span aria-hidden="true">&times;</span>
					 	                    </button>
					 	                </div>
					 	                <div class="modal-body">
					 	                	<div class="d-flex align-items-center justify-content-around mb-3">
					 	                		<a href="http://172.16.160.16/sistemaBoole" class="intra-apps text-center text-decoration-none" target="_blank">
					 	                			<img class="icon-app" style="height: auto; width: 100px;" src="assets/principal/images/Apps/Boolejpg.jpg" alt="Boole">
					 	                			<p class="mb-0 h5">Sistema Boole</p>
					 	                			<p class="mb-0" style="color: #232323; font-size: 14px;">Digitalización</p>
					 	                		</a>
					 	                		<!-- <a href="http://172.16.160.109:8082/login" class="intra-apps text-center text-decoration-none" target="_blank"> -->
					 	                		<!-- <a href="http://172.16.160.16/dist" class="intra-apps text-center text-decoration-none" target="_blank"> -->
					 	                		<a href="http://172.16.160.16/dist/" class="intra-apps text-center text-decoration-none" target="_blank">
					 	                			<img class="icon-app" style="height: auto; width: 100px;" src="assets/principal/images/Apps/Pearson.png" alt="Pearson">
					 	                			<p class="mb-0 h5">Sistema Pearson</p>
					 	                			<p class="mb-0" style="color: #232323; font-size: 14px;">Registro de usuarios</p>
					 	                		</a>
					 	                		<a href="http://172.16.160.109/estadisticasBD/public" class="intra-apps text-center text-decoration-none" target="_blank">
					 	                			<img class="icon-app" style="height: auto; width: 100px;" src="assets/principal/images/Apps/Graunt.png" alt="Graunt">
					 	                			<p class="mb-0 h5">Sistema Graunt</p>
					 	                			<p class="mb-0" style="color: #232323; font-size: 14px;">Estadísticas de servicios<br>de biblioteca</p>
					 	                		</a>
					 	                	</div>
					 	                	<div class="d-flex align-items-center justify-content-around mb-3 w-75 mx-auto">
					 	                		<!-- <a href="intra-docs.php" class="intra-apps text-center text-decoration-none" target="_blank"> -->
					 	                		<a href="intra-docs.php" target="_blank" class="intra-apps text-center text-decoration-none">
					 	                			<img class="icon-app" style="height: auto; width: 100px;" src="assets/principal/images/Apps/Documentos.png" alt="Docs">
					 	                			<p class="mb-0 h5">Documentación</p>
					 	                			<p class="mb-0" style="color: #232323; font-size: 14px;">Actas, resoluciones, directivas y otros</p>
					 	                		</a>
					 	                		<a href="http://172.16.160.16/reserva_laptops/" class="intra-apps text-center text-decoration-none" target="_blank">
					 	                			<img class="icon-app" style="height: auto; width: 100px;" src="assets/principal/images/Apps/Turing.png" alt="Reserva de laptops">
					 	                			<p class="mb-0 h5">Sistema Turing</p>
					 	                			<p class="mb-0" style="color: #232323; font-size: 14px;">Reserva de laptops</p>
					 	                		</a>
					 	                	</div>
					 	                    
					 	                </div>
					 	                <div class="modal-footer">
					 	                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					 	                </div>
					 	            </div>
					 	        </div>
					 	    </div>
		<div id="pt-page-center-alerta" class="pt-page pt-page-center-alerta">
<!-- OVERLAY NAV - CENTRAL -->
			<div class="overlay2" id="overlay2-center"></div>
			<div class="overlay" id="overlay-center">
				
				<div class="overlay-menu dl-menus">
					<ul class="overlay-items dl-menu">
						<li><a href="#" class="item move-nosotros">NOSOTROS</a></li>
						<li><a href="https://unmsm.ent.sirsi.net/client/es_ES/all_libs/?dt=list" target="_blank" class="item move-catalogo">CATÁLOGO</a></li>
						<li data-animation="14" data-to="1"><a href="#" class="item move-todo-servicios">SERVICIOS</a></li>
						<li>
							<ul class="sub-nav">
								<!-- <li><a href="#" class="move-todo-servicios">EN SALA</a></li> -->
								<li data-animation="14" data-to="1"><a href="#" class="move-carne">CARNÉ DE BIBLIOTECA</a></li>
								<li data-animation="14" data-to="1"><a href="#" class="move-tesis">RECEPCIÓN DE TESIS</a></li>
								<li><a href="colec_fondor/" target="_blank" class="move-fondor">FONDO RESERVADO</a></li>
								<li data-animation="14" data-to="1"><a href="#" class="move-mas-servicios">MÁS...</a></li>
							</ul>
						</li>
						<li data-animation="13" data-to="2"><a href="#" class="item move-rec-elec">RECURSOS ELECTRÓNICOS</a></li>
						<li>
							<ul class="sub-nav">
								<li data-animation="13" data-to="2"><a href="#" class="move-bd">BASES DE DATOS</a></li>
								<li data-animation="13" data-to="2"><a href="#" class="move-repo">REPOSITORIOS</a></li>
								<li data-animation="13" data-to="2"><a href="#" class="move-capa">CAPACITACIONES</a></li>
								<li data-animation="13" data-to="2"><a href="#" class="move-mas-recursos">MÁS...</a></li>
							</ul>
						</li>
						<!-- <li><a href="bibliotecas.html" class="item move-sistesmabib" target="_blank">SISTEMA DE BIBLIOTECAS</a></li> -->
						<li><a href="#" class="item move-eventos">EVENTOS</a></li>
						<li><a href="#" class="item move-alerta">ALERTA BIBLIOGRÁFICA</a></li>
					</ul>
				</div>

				<ul class="social d-flex flex-row">
					<li><a class="hover-icon" href="https://twitter.com/BibliotecaUNMSM" target="_blank"><i class="fab fa-twitter"></i></a></li>
					<li><a class="hover-icon" href="https://www.facebook.com/BibliotecaCentralPedroZulen" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
					<li><a class="hover-icon" href="mailto:bibcent@unmsm.edu.pe" target="_blank"><i class="fas fa-envelope"></i></a></li>
					<li><a class="hover-icon" href="directorio/directorio.html"><i class="fas fa-phone"></i></a></li>
					<li><a class="hover-icon" href="https://goo.gl/maps/uTYzmpT41ES2" target="_blank"><i class="fas fa-map-marker-alt"></i></a></li>
				</ul>

			</div>
<!-- NAV - CENTRAL -->
			<header class="container-navbar" id="container-navbar-center">
			

					<div class="nav-elements container-fluid">
						<div class="nav-elements-size mx-auto">

							<div class="header-grid">
								<!-- <a title="SISBIB" href="index.php">
									<img src="assets/principal/images/header/bibcentral_blanco-min.png" alt="SISBIB">
								</a> -->
								<a id="logo-unmsm-center" class="container-img mr-0" title="UNMSM" href="http://www.unmsm.edu.pe/" target="_blank">
									<img class="pr-2 pr-sm-4" src="assets/principal/images/header/unmsm_blanco-min.png" alt="UNMSM">
								</a>

								<!-- <a id="logo-unmsm-center-h" class="d-none h-100" title="UNMSM" href="http://www.unmsm.edu.pe/" target="_blank"><img src="assets/principal/images/header/unmsm_blanco-min.png" alt="UNMSM"></a> -->

								<!-- <div id="title-bib-center" class="h-100" style="margin-left: 95px;"> -->
								<a id="logo-sisbib-center" href="http://sisbib.unmsm.edu.pe/" class="h-100 d-flex align-items-center justify-content-between text-decoration-none position-relative" title="SISBIB">
		                            <div class="text-white border-0 pl-2 pl-sm-4 py-md-3 cont-title-header">
		                                <!-- <p class="mb-0">Universidad Nacional Mayor de San Marcos</p> -->
		                                <h1 class="mb-0">SISTEMA DE BIBLIOTECAS Y BIBLIOTECA CENTRAL</h1>
		                            </div>
		                            <div class="">
		                            	<div class="container-img d-flex align-items-center justify-content-between">
		                            		<div title="SISBIB" class="h-100">
		                            			<img src="assets/principal/images/header/bibcentral_blanco-min.png" alt="SISBIB">
		                            		</div>
		                            		<!-- <a id="logo-vrip-center" class="h-100" title="VRIP" href="https://vrip.unmsm.edu.pe/" target="_blank">
		                            			<img class="px-1" src="assets/principal/images/header/LOGO VICERRECTORADO.png" alt="VRIP">
		                            		</a> -->
		                            		<!-- <a id="logo-unmsm-center" class="h-100" title="UNMSM" href="http://www.unmsm.edu.pe/" target="_blank">
		                            			<img class="px-1" src="assets/principal/images/header/unmsm_blanco-min.png" alt="UNMSM">
		                            		</a> -->
		                            		
		                            	</div>
		                            </div>
		                            
		                        </a>

		                        <button id="icon-menu-center" type="button" class="container-icon-menu">
		                        	<div class="icon-menu"></div>
		                        	<div class="icon-menu"></div>
		                        	<div class="icon-menu"></div>
		                        </button>
							</div>

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
												<li class="d-flex box-yellow" data-animation="14" data-to="1"><a href="#" class="move-todo-servicios w-100">Servicios en Biblioteca Central</a></li>
												<div class="menu-enlaces mb-3">
													<ul class="list-unstyled">
														<li class="d-flex" data-animation="14" data-to="1"><a href="#" class="move-todo-servicios por-nivel w-100">Navega por niveles</a></li>
														<li class="d-flex" data-animation="14" data-to="1"><a href="#" class="move-todo-servicios por-lista w-100">Ver servicios en modo lista</a></li>
														<li class="d-flex" data-animation="14" data-to="1"><a href="#" class="move-todo-servicios por-lista l-fondor w-100">Fondo Reservado</a></li>
														<li class="d-flex" data-animation="14" data-to="1"><a href="#" class="move-todo-servicios por-lista l-salas w-100">Salas de lectura</a></li>
														<li class="d-flex" data-animation="14" data-to="1"><a href="#" class="move-todo-servicios por-lista l-hemeroteca w-100">Hemeroteca</a></li>
														<li class="d-flex" data-animation="14" data-to="1"><a href="#" class="move-todo-servicios por-lista l-prestamo w-100">Préstamo de computadoras</a></li>
														<li class="d-flex" data-animation="14" data-to="1"><a href="#" class="move-todo-servicios por-lista l-cubiculos w-100">Cubículos de estudio grupal</a></li>
														<li class="d-flex" data-animation="14" data-to="1"><a href="#" class="move-todo-servicios por-lista l-visual w-100">Servicios para usuarios con limitación visual</a></li>
													</ul>
												</div>
												<li class="d-flex box-yellow" data-animation="14" data-to="1"><a href="#" class="move-bibliotecas w-100">Sistema de bibliotecas</a></li>
											</ul>
										</div>
										<div style="">
											<ul class="list-unstyled">
												<li class="d-flex box-yellow" data-animation="14" data-to="1"><a href="#" class="move-carne w-100">Carné de Biblioteca</a></li>
												<div class="menu-enlaces mb-3">
													<ul class="list-unstyled">
														<!-- <li class="d-flex" data-animation="14" data-to="1"><a href="archivos/documentos/GuiaIngresantes_2019.pdf" target="_blank" class="move-carne-inmenu w-100">Ingresantes</a></li> -->
														<li class="d-flex" data-animation="14" data-to="1"><a href="#" class="move-carne link-grad w-100">Graduados</a></li>
														<li class="d-flex" data-animation="14" data-to="1"><a href="#" class="move-carne link-visit w-100">Visitantes</a></li>
														<li class="d-flex" data-animation="14" data-to="1"><a href="#" class="move-carne link-regular w-100">Regulares</a></li>
													</ul>
												</div>
												<li class="d-flex box-yellow" data-animation="14" data-to="1"><a href="#" class="move-tesis w-100">Recepción de trabajos de investigación</a></li>
												<div class="menu-enlaces mb-3">
													<ul class="list-unstyled">
														<li class="d-flex" data-animation="14" data-to="1">
															<a href="#" target="_blank" class="move-tesis link-procrec w-100">Proceso de recepción y publicación de tesis</a>
														</li>
														<li class="d-flex" data-animation="14" data-to="1">
															<a href="#" target="_blank" class="move-tesis link-const w-100">Constancia de no adeudo de material bibliográfico</a>
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
                                
							</div>
							<li data-animation="14" data-to="1" class="dropdown hover-drop-servicios">
								<a href="#" class="move-todo-servicios" style="color: white;">Servicios</a>
								
							</li>
							<div class="drop-recursos">
								<ul class="dropdown-menu">
									<div class="w-100" style="height: .5rem"></div>
									<div class="drop-box">
										<div style="">
											<ul class="list-unstyled">
												<li class="d-flex box-yellow" data-animation="13" data-to="2"><a href="#" class="move-bd w-100">Bases de datos</a></li>
												<div class="menu-enlaces mb-3">
													<ul class="list-unstyled">
														<li class="d-flex" data-animation="13" data-to="2"><a href="#" class="move-bd w-100">Buscador de bases de datos</a></li>
														<li class="d-flex"><a href="http://sisbib.unmsm.edu.pe/Intranet.asp?DB=gvrl" target="_blank" class="w-100">Gale</a></li>
														<li class="d-flex"><a href="http://sisbib.unmsm.edu.pe/Intranet.asp?DB=wileyEbook" target="_blank" class="w-100">Wiley</a></li>
														<li class="d-flex"><a href="http://sisbib.unmsm.edu.pe/Intranet.asp?DB=pqcentral" target="_blank" class="w-100">Proquest</a></li>
														<li class="d-flex"><a href="https://www.scopus.com/search/form.uri?display=basic" target="_blank" class="w-100">Scopus</a></li>
														<li class="d-flex"><a href="http://www.sciencedirect.com/" target="_blank" class="w-100">ScienceDirect</a></li>
														<li class="d-flex"><a href="http://www.tandfonline.com/" target="_blank" class="w-100">Taylor&Francis</a></li>
														<li class="d-flex" data-animation="13" data-to="2"><a href="#" class="move-bd w-100">Más bases</a></li>
													</ul>
												</div>
												<li class="d-flex box-yellow" data-animation="13" data-to="2"><a href="#" class="move-gestor w-100">Gestores Bibliográficos</a></li>
											</ul>
										</div>
										<div style="">
											<ul class="list-unstyled">
												<li class="d-flex box-yellow" data-animation="13" data-to="2"><a href="#" class="move-repo w-100">Repositorios</a></li>
												<div class="menu-enlaces mb-3">
													<ul class="list-unstyled">
														<li class="d-flex"><a href="http://revistasinvestigacion.unmsm.edu.pe/" target="_blank" class="w-100">Revistas UNMSM</a></li>
														<li class="d-flex"><a href="http://cybertesis.unmsm.edu.pe/" target="_blank" class="w-100">Cybertesis</a></li>
														<li class="d-flex"><a href="http://fondoeditorial.unmsm.edu.pe/" target="_blank" class="w-100">Fondo Editorial</a></li>
														<li class="d-flex"><a href="http://sisbib.unmsm.edu.pe/Memoria_Oral/index.html" target="_blank" class="w-100">Archivo de Memoria Oral</a></li>
													</ul>
												</div>
												<li class="d-flex box-yellow" data-animation="13" data-to="2"><a href="#" class="move-capacitaciones w-100">Capacitaciones en Recursos Electrónicos</a></li>
												<div class="menu-enlaces mb-3">
													<ul class="list-unstyled">
														<li class="d-flex" data-animation="13" data-to="2"><a href="" class="move-capacitaciones w-100">Fechas y horarios</a></li>
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
												<li class="d-flex box-dark" data-animation="13" data-to="2"><a href="#" class="move-preguntas w-100">Preguntas Frecuentes</a></li>
												<div class="menu-enlaces mb-3">
													<ul class="list-unstyled">
														<li class="d-flex" data-animation="13" data-to="2"><a href="#" class="move-preguntas como-bd w-100">Cómo acceder a las bases de datos dentro y fuera del campus</a></li>
														<li class="d-flex" data-animation="13" data-to="2"><a href="#" class="move-preguntas que-bd w-100">Qué son las bases de datos</a></li>
														<li class="d-flex" data-animation="13" data-to="2"><a href="#" class="move-preguntas como-gestores w-100">Cómo utilzar los gestores bibliográficos</a></li>
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
							<li data-animation="13" data-to="2" class="dropdown hover-drop-recursos">
								<a href="#" class="move-rec-elec" style="color: white;">Recursos electrónicos</a>
								
							</li>
							<li><a href="#" class="move-eventos" style="color: white;">Eventos</a></li>
							<li><a href="alertas.php" class="move-alertas" style="color: white;">Alerta Bibliográfica</a></li>
							<div class="float-right" style="color: #C8A22B; position: absolute; right: 0; margin-right: 10px; cursor: default;">
								<a class="hover-icon" href="directorio/directorio.html" target="_blank" title="directorio"><i class="fas fa-phone"></i></a>
								<a class="hover-icon" href="https://instagram.com/BibliotecaUNMSM" target="_blank" title="instagram"><i class="fab fa-instagram"></i></a>
								<a class="hover-icon" href="https://twitter.com/BibliotecaUNMSM" target="_blank" title="twitter"><i class="fab fa-twitter"></i></a>
								<a class="hover-icon" href="https://www.facebook.com/BibliotecaCentralPedroZulen" target="_blank" title="facebook"><i class="fab fa-facebook-f"></i></a>
							</div>
						</ul>
					</div>

			</header>

			<?php
				//include 'footer.php';
			?>
			
        </div>
        

	<div class="container-books" style="width:100%">

		<br>
		
		<div class="bar-library">
			<div class="option-library">
				<label class="title-select">Últimas adquisiones en: </label>
				<form class="form-select" method="post" action="alertas.php">
					<select class="buttom-library" name="opc-biblio" id="opc_biblio" onchange="d1(this)">
					<?php

						$item  = null;
						$valor = null;

						$bibliotecas  = ControladorBibliotecas::ctrMostrarBibliotecas ($item, $valor);

						foreach ($bibliotecas  as $key => $value) {
							echo 	'<option value="'. $value["id"] .'"> '. $value["biblioteca"] .' </option>';
						}

					?>
					</select>
					<!-- <input type="submit"> -->
				</form>
			</div>
			<div class="list-books">
				<a href="#modalLibros" data-toggle="modal" data-target="#modalLibros">
					Ver todas las adquisiones del mes
				</a>
			</div>
		</div>

	<!-- PAGE WRAPPER -->

				<div class="page-wrapper" id="carrusel">
					
					<!-- POST SLIDER --> <!-- dimension de imagenes: 313x445 -->

					<div class="post-slider">
						<i class="fas fa-chevron-left prev"></i>
						<i class="fas fa-chevron-right next"></i>

						<div class="post-wrapper">

						<?php

							$item  = "id_biblio";
							$valor = 1;

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

					<!-- // POST SLIDER -->

				</div>

				<!-- // PAGE WRAPPER -->
				
				
			</div>

			<div class="secondpart">

				<div class="struct-one">
					
				</div>

				<div class="struct-two">
					
				</div>

				<div class="struct-three">
					<div class = "listas">
						<label for="" class="text-tesis">Lo último en Cybertesis</label>
						<a href="#modaTesis" data-toggle="modal" data-target="#modalTesis">
							Ver toda la lista
						</a>
					</div>
					

					<div class="list-tesis-ult">

					<?php

					$item  = "estado";
					$valor = 1;

					$tesis  = ControladorTesis::ctrMostrarTesis ($item, $valor);

					foreach ($tesis as $key => $value) {

						echo 	'<b>Título: '.$value["titulo"].'</b>
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
								';

					}

					?>

					</div>
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

<!--=====================================
MODAL LIBROS
======================================-->
 
<div id="modalLibros" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#212121; color:white">

          <h4 class="modal-title">Catálogo</h4>

		  <button type="button" class="close" data-dismiss="modal" style="color:white">&times;</button>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body" style="overflow-y: scroll; height: 450px; width: 100%;">

          <div class="box-body">
          
            <!-- ENTRADA PARA BUSQUEDA -->

            <div class="buscar">
				<label for="caja_busqueda">Buscar</label>
				<input type="text" name="caja_busqueda" id="caja_busqueda" class="caja_busqueda"></input>
            </div>


            <!-- TODOS LOS LIBROS-->

            <div class="all-books" id="datos">


            </div>  

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

        </div>

      </form>

    </div>

  </div>

</div>

<!--=====================================
MODAL TESIS
======================================-->
 
<div id="modalTesis" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#212121; color:white">

          <h4 class="modal-title">Lista de Tesis</h4>

		  <button type="button" class="close" data-dismiss="modal" style="color:white">&times;</button>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body" style="overflow-y: scroll; height: 450px; width: 100%;">

          <div class="box-body">
          
            <!-- ENTRADA PARA BUSQUEDA -->

            <div class="buscar">
				<label for="buscar_tesis">Buscar</label>
				<input type="text" name="buscar_tesis" id="buscar_tesis" class="buscar_tesis"></input>
            </div>

            <!-- TODOS LAS TESIS -->

            <div class="all-tesis" id="tesis">


            </div>  

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

        </div>

      </form>

    </div>

  </div>

</div>

	<script>
		
		var lado = ['center', 'left', 'right'],
			bandera = [true, true, true];

		lado.forEach(count_scroll)

		function count_scroll(item, index){

			$('.pt-page-'+item).on('scroll', function() {

				if (bandera[index]) {
					if($('.pt-page-'+item+' .footer').position().top <= $(window).height() - $('.pt-page-'+item+' .footer').height()/2) {

						$('.pt-page-'+item+' .footer .counter').each(function() {
						  	var $this = $(this),
						      	countTo = $this.attr('data-count');

							$this.text('');

							$({ countNum: $this.text()}).animate({
						    	countNum: countTo
							},

						  	{

							    duration: 1000,
							    easing:'swing',
							    step: function() {
							      $this.text(commaSeparateNumber(Math.floor(this.countNum)));
							    },
							    complete: function() {
							      $this.text(commaSeparateNumber(this.countNum));
							    }

						  	});
						});

						function commaSeparateNumber(val) {
						  while (/(\d+)(\d{3})/.test(val.toString())) {
						    val = val.toString().replace(/(\d+)(\d{3})/, '$1' + ',' + '$2');
						  }
						  return val;
						}

						bandera[index] = false;

					}
				}
				

			});

		}

		
	</script>
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
	<script>
		$('.move-nosotros').click(function(event) {
			event.preventDefault();
			$('#ModalQuestion-1').modal('show');
		});
	</script>
	
	<script>
		$(document).ready(function(){

			$('#opc_biblio').on('change', function(){
				var id = $('#opc_biblio').val()
				$.ajax({
					type:'POST',
					url:'carrusel.php',
					data: {'id': id}
				})
				.done(function(libros){
					$('#carrusel').html(libros)
				})
				.fail(function(){
					alert('hubo un error al cargar los libros')
				})
			})

		})
	</script>

	<script>
		$(buscar_datos());

		function buscar_datos(consulta){
			$.ajax({
				url: 'all_libros.php',
				type: 'POST',
				dataType: 'html',
				data: {consulta: consulta}
			})
			.done(function(respuesta){
				$("#datos").html(respuesta);
			})
			.fail(function(){
				console.log("error");
			})
		}

		$(document).on('keyup', '#caja_busqueda', function(){
			var valor = $(this).val();
			if(valor != ""){
				buscar_datos(valor);
			}else{
				buscar_datos();
			}
		})

	</script>

<script>
		$(buscar_datos());

		function buscar_datos(consultat){
			$.ajax({
				url: 'all_tesis.php',
				type: 'POST',
				dataType: 'html',
				data: {consultat: consultat}
			})
			.done(function(respuesta){
				$("#tesis").html(respuesta);
			})
			.fail(function(){
				console.log("error");
			})
		}

		$(document).on('keyup', '#buscar_tesis', function(){
			var valor = $(this).val();
			if(valor != ""){
				buscar_datos(valor);
			}else{
				buscar_datos();
			}
		})

	</script>

</body>
</html>