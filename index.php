<?php
	include 'routs.php';
?>
<!DOCTYPE html>

<html lang="es-ES">
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

	<link rel="stylesheet" href="assets/principal/css/slick.css">
	<link rel="stylesheet" href="assets/principal/css/slick-theme.css">
    <link rel="stylesheet" href="assets/principal/css/style.css">
    <link rel="stylesheet" href="assets/principal/css/test.css">
    <!-- <link rel="stylesheet" href="assets/principal/css/acordion.css"> -->
   	<link rel="stylesheet" type="text/css" href="css/all.css">
   	<!-- <link rel="stylesheet" href="fontawesome-free-5.9.0-web/css/all.css"> -->
   	<!-- <link rel="stylesheet" href="assets/principal/css/eventos_circle.css">
    <script src="assets/principal/js/jquery/1.10.2/jquery.min.js"></script> -->

    <title>Biblioteca Central Pedro Zulen</title>
    <!-- <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> -->
    <!-- <script src="assets/principal/js/jquery/jquery-3.3.1.min.js"></script> -->
    <!-- <script>
		jQuery(document).ready(function($) {
			var bandera_c = true;
			var bandera_l = true;
			var bandera_r = true;

			$(".pt-page-center").on('scroll', function() {
				if (bandera_c) {
				
					if ($(".pt-page-center").scrollTop() >= 560) {
						$('.pt-page-center .counter').counterUp({
			                delay: 20,
			                time: 1000
		            	})
		            	bandera_c = false;
					};

				}
			});

			$(".pt-page-left").on('scroll', function() {
				if (bandera_l) {
				
					if ($(".pt-page-left").scrollTop() >= 59) {
						$('.pt-page-left .section-todos-servicios .counter').counterUp({
			                delay: 20,
			                time: 1000
		            	})
		            	bandera_l = false;
					};

				}
			});

			$(".pt-page-right").on('scroll', function() {
				if (bandera_r) {
				
					if ($(".pt-page-right").scrollTop() >= 359) {
						$('.pt-page-right .counter').counterUp({
			                delay: 20,
			                time: 1000
		            	})
		            	bandera_r = false;
					};

				}
			});

        });
	</script> -->
	
</head>
<body>

	<!-- Load Facebook SDK for JavaScript -->
	<!-- <div id="fb-root"></div>
	<script>
	window.fbAsyncInit = function() {
	  FB.init({
	    xfbml            : true,
	    version          : 'v3.2'
	  });
	};

	(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script> -->

	<!-- Your customer chat code -->
	<!-- <div class="fb-customerchat"
	  attribution=install_email
	  page_id="332647530874839"
	  theme_color="#c8a22b"
	    logged_in_greeting="&#xa1;Hola! &#xbf;Alguna duda sobre los recursos electr&#xf3;nicos?"
	    logged_out_greeting="&#xa1;Hola! &#xbf;Alguna duda sobre los recursos electr&#xf3;nicos?">
	</div> -->

	<!-- FIN FB -->

	<div id="pt-main" class="pt-perspective">

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
		<div id="pt-page-center" class="pt-page pt-page-center">
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

								<!-- </div> -->
							</div>
							
							<!-- <div id="div-nav-center" class="div-nav d-none dl-menus">
								<ul class="nav dl-menu">
									<li data-animation="13" data-to="2" class="nav-item">
										<a href="#" class="nav-link sub-move-bd">Bases de datos</a>
									</li>
									<li data-animation="13" data-to="2" class="nav-item">
										<a href="#" class="nav-link sub-move-repo">Repositorios</a>
									</li>
									<li class="nav-item">
										<a href="https://unmsm.ent.sirsi.net/client/es_ES/all_libs/?dt=list" target="_blank" class="nav-link">Catálogo</a>
									</li>
									<li data-animation="14" data-to="1" class="nav-item" data-animation="14" data-to="1">
										<a href="#" class="nav-link sub-move-horarios">Horarios</a>
									</li>
									<li class="nav-item">
										<a href="directorio/directorio.html" target="_blank" class="nav-link">Contacto</a>
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
								<!-- <ul class="dropdown-menu">
									<div class="w-100" style="height: .5rem"></div>
									<div class="drop-box">
										<li class="d-flex" data-animation="14" data-to="1"><a href="#" class="move-carne w-100">Carné de biblioteca</a></li>
										<li class="d-flex" data-animation="14" data-to="1"><a href="#" class="move-tesis w-100">Recepción de tesis</a></li>
										<li class="d-flex"><a href="colec_fondor/" target="_blank" class="move-fondor w-100">Fondo reservado</a></li>
										<li class="d-flex" data-animation="14" data-to="1"><a href="#" class="move-mas-servicios w-100">Más...</a></li>
									</div>
								</ul> -->
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
								<!-- <a data-target="#intra-1" data-toggle="modal" href="#" style="color: #fff;">Intranet</a> -->
								<a class="hover-icon" href="directorio/directorio.html" target="_blank" title="directorio"><i class="fas fa-phone"></i></a>
								<a class="hover-icon" href="https://instagram.com/BibliotecaUNMSM" target="_blank" title="instagram"><i class="fab fa-instagram"></i></a>
								<a class="hover-icon" href="https://twitter.com/BibliotecaUNMSM" target="_blank" title="twitter"><i class="fab fa-twitter"></i></a>
								<a class="hover-icon" href="https://www.facebook.com/BibliotecaCentralPedroZulen" target="_blank" title="facebook"><i class="fab fa-facebook-f"></i></a>
							</div>
						</ul>
					</div>

			</header>
<!-- SECCION 1 - CENTRAL -->
			<section class="section1 section1-center">
				<!-- <div class="mouse"></div> -->
				
<!-- 				<div class="content">
				    <div class="loader-circle">
				    	<div>Noticias<br>y<br>eventos</div>
				    </div>
				    <div class="loader-line-mask">
				    	<div class="loader-line"></div>
				    </div>
				</div> -->

<!-- TRIGGERS - CENTRAL -->
				<div class="pt-triggers d-flex flex-column">
					<div class="">
						<!-- //CAMBIOHANS -->
						<div class="dl-menus d-inline-block">
							<ul class="dl-menu">
								<li class="cont" data-animation="14" data-to="1">
									<button id="btn-pag-left" class="btn-move float-left font-italic">
										<div class="container-chevron d-inline-block float-left">
											<div class="chevron"></div>
											<div class="chevron"></div>
											<div class="chevron"></div>
										</div>
										<div class="d-inline-block">
											SERVICIOS DEL SISTEMA
										</div>
									</button>
								</li>
							</ul>
						</div>
					</div>
<!-- BUSCADOR DISCOVERY - CENTRAL -->
					<!-- <div class="">

						<div id="contenido">
							<div id="tabs">
								<div id="tabs-1">
									<form class="ebscohostCustomSearchBox" action="" onsubmit="return ebscoHostSearchGo(this);" method="post" >
										<input id="ebscohostwindow" name="ebscohostwindow" type="hidden" value="1" />
										<input id="ebscohosturl" name="ebscohosturl" type="hidden" value="https://search.ebscohost.com/login.aspx?direct=true&site=eds-live&scope=site&type=0&custid=s1248620&groupid=main&profid=eds&lang=es&authtype=ip,guest" />
										<input id="ebscohostsearchsrc" name="ebscohostsearchsrc" type="hidden" value="db" />
										<input id="ebscohostsearchmode" name="ebscohostsearchmode" type="hidden" value="+" />
										<input id="ebscohostkeywords" name="ebscohostkeywords" type="hidden" value="" />
										
										<div>
											<div>
												<div style="position: relative;">
													<input id="ebscohostsearchtext" class="form-control busqueda style-inputs" name="ebscohostsearchtext" placeholder="Busca en toda la biblioteca: libros, revistas, tesis, artículos..." type="text" autocomplete="off"/>
													<input type="submit" value="Buscar" class="form-control ebscohost-search-button style-inputs"/>
										
													<div id="guidedFieldSelectors" class="guidedFieldSelectors">
															
															<label for="guidedField_0">
																<input class="hidden-radio" type="radio" name="searchFieldSelector" id="guidedField_0" value="" checked="checked"/>
																Palabras Clave
																<i></i>
															</label>
															
															<label for="guidedField_1">
																<input class="hidden-radio" type="radio" name="searchFieldSelector" id="guidedField_1" value="TI"/>
																Título
																<i></i>
															</label>
															
															<label for="guidedField_2">
																<input class="hidden-radio" type="radio" name="searchFieldSelector" id="guidedField_2" value="AU"/>
																Autor
																<i></i>
															</label>

													</div>
										
												</div>
											</div>
										</div>
									</form>
								</div>	
							</div>
						</div>

					</div> -->

					<div style="width: 80%; padding: 0 15px;">
						<form class="sirsi-search" method="get" label="search" id="searchForm" action="http://unmsm.ent.sirsi.net/client/es_ES/all_libs/search/results" style="margin-bottom: 0;" target="_blank">
							<input name="ln" value="es_ES" type="hidden" />
							<input id="q" class="text-input" size="18" maxlength="40" name="q" onblur="this.value = this.value || this.defaultValue; this.style.color = '#999';" onfocus="this.value=''; this.style.color = '#000';" placeholder="Busca en nuestro catálogo en línea y bases de datos de investigación" accesskey="s" type="text" autocomplete="off" />
							<input value="Buscar" id="searchButton" class="submit-input" title="Buscar" type="submit" />
						</form>
					</div>

					<!-- FIN BUSCADOR DISCOVERY - CENTRAL -->
					<div class="">
						<!-- //CAMBIOHANS -->
						<div class="dl-menus float-right d-inline-block">
							<ul class="dl-menu">
								<li class="cont" data-animation="13" data-to="2">
									<button id="btn-pag-right" class="btn-move font-italic">
										<div class="d-inline-block text-right float-left">
											RECURSOS ELECTRÓNICOS
										</div>
										<div class="container-chevron d-inline-block float-right">
											<div class="chevron"></div>
											<div class="chevron"></div>
											<div class="chevron"></div>
										</div>
									</button>
								</li>
							</ul>
						</div>
					</div>
				</div><!-- FIN TRIGGERS - CENTRAL -->

				

			</section><!-- FIN SECCION 1 - CENTRAL -->

			<div class="noticias-title" id="noticias">
				NOTICIAS Y EVENTOS
			</div>

<!-- SECCION NOTICIAS Y EVENTOS - CENTRAL -->			
			<div class="noticias-container">
				
				
				<!-- PAGE WRAPPER -->

				<div class="page-wrapper">
					
					<!-- POST SLIDER --> <!-- dimension de imagenes: 313x445 -->

					<div class="post-slider">
						<i class="fas fa-chevron-left prev"></i>
						<i class="fas fa-chevron-right next"></i>

						<div class="post-wrapper">

							<!-- SLIDER / NOTICIAS -->

							<!-- EJEMPLOS SLIDER INICIO -->

							<!-- EJEMPLO SLIDER SOLO IMAGEN Y ENLACE -->

							<!-- <div class="post">
								<a class="wrap-info" href="https://bit.ly/2MGDuf9" target="_blank">
									<img class="slider-image" src="archivos/noticias_bc/patrimonio.png" alt="">
								</a>
							</div> -->

							<!-- EJEMPLO SLIDER IMAGEN CON ENLACE Y SOLO TEXTO AL ESTAR EN HOVER -->

							<!-- <div class="post hover">
								<a class="wrap-info" href="https://www.gob.pe/institucion/cultura/campa%C3%B1as/173-junio-mes-de-la-cultura-afroperuana-2019" target="_blank">
									<img class="slider-image" src="archivos/noticias_bc/mes_afroperuana.jpg" alt="">
									<div class="post-info">
										<div class="post-info-txt">
											<p>Junio: Mes de la cultura afroperuana</p>
											<p>Entérate más y descarga el programa de actividades del Ministerio de Cultura</p>
										</div>
									</div>
								</a>
							</div> -->

							<!-- EJEMPLO SLIDER IMAGEN CON ENLACE Y TEXTO CON ENLACES AL ESTAR EN HOVER -->

							<!-- <div class="post hover">
								<div class="wrap-info">
									<img class="slider-image" src="archivos/noticias_bc/sd.png" alt="">
									<div class="post-info">
										<div class="post-info-txt">
											<a class="abox d-block" href="archivos/documentos/Nota de prensa Nº 025  conversatorio Dora Mayer FINAL.pdf" target="_blank">Nota de prensa - Conversatorio Dora Mayer</a>
										</div>
									</div>
								</div>
							</div> -->

							<!-- EJEMPLO SLIDER IMAGEN CON ENLACE Y TEXTO CON ENLACES Y ENLACE PRINCIPAL GRANDE AL ESTAR EN HOVER -->

							<!-- <div class="post hover">
								<div class="wrap-info">
									<img class="slider-image" src="archivos/noticias_bc/noviembre-web.png" alt="">
									<div class="post-info">
										<div class="post-info-txt">
											<p>
												<a class="abox d-block" href="https://casevents.webex.com/casevents/j.php?MTID=m1049fba6017d76fac055024336916b69" target="_blank">
													Capacitación
												</a>
											</p>
											<span class="mb-1">Reunión número (código de acceso):<br>620 607 781</span><br>
											<span class="mb-1">Contraseña de reunión:<br>UNMSM</span>
											
											<a class="abox d-block mt-2	" href="archivos/documentos/Scifinder.pdf" target="_blank">Manual SciFinder</a>
										</div>
									</div>
								</div>
							</div> -->

							<!-- EJEMPLO SLIDER SOLO IMAGEN SIN ENLACE -->

							<!-- <div class="post">
								<div class="wrap-info">
									<img class="slider-image" src="archivos/noticias_bc/capacitacion_noviembre_nueva.png" alt="">
								</div>
							</div> -->

							

							<!-- EJEMPLOS SLIDER FIN -->

							<!-- <div class="post dl-menus">
								<ul class="dl-menu">
									<li data-animation="13" data-to="2">
										<a class="move-capacitaciones wrap-info click-mid-to-side" href="#">
											<img class="slider-image" src="archivos/noticias_bc/capacitacion_enero_2020.png" alt="">
										</a>
									</li>
								</ul>
							</div> -->
							<div class="post">
								<a class="wrap-info" href="archivos/noticias_bc/NOTA-DE-PRENSA-Nº002-2020-DONACION-CESAR-LEVANO-VF.docx" target="_blank">
									<img class="slider-image" src="archivos/noticias_bc/DONACION-LEVANO.jpg" alt="">
								</a>
							</div>
							
							<div class="post">
								<div class="wrap-info">
									<img class="slider-image" src="archivos/noticias_bc/Web-obsequio (3).png" alt="">
								</div>
							</div>

							<!-- <div class="post dl-menus">
								<ul class="dl-menu">
									<li data-animation="13" data-to="2">
										<a class="move-capacitaciones wrap-info click-mid-to-side" href="#">
											<img class="slider-image" src="archivos/noticias_bc/capacitaciones_febrero_2020.png" alt="">
										</a>
									</li>
								</ul>
							</div> -->

							<div class="post">
								<a class="wrap-info" href="https://bit.ly/2MGDuf9" target="_blank">
									<img class="slider-image" src="archivos/noticias_bc/patrimonio.png" alt="">
								</a>
							</div>

							<div class="post hover">
								<div class="wrap-info">
									<img class="slider-image" src="archivos/noticias_bc/que_vean_tu_tesis(2).png" alt="">
									<div class="post-info">
										<div class="post-info-txt">
											<a class="abox d-block" href="http://cybertesis.unmsm.edu.pe/" target="_blank">
												<p class="mb-0">Cybertesis</p>
											</a>
											<a class="abox d-block" href="archivos/documentos/info-tesis-pdf.pdf" target="_blank">¡Entérate cómo hacerlo!</a>
										</div>
									</div>
								</div>
							</div>

							<div class="post">
								<a class="wrap-info" href="https://journalfinder.elsevier.com/" target="_blank">
									<img class="slider-image" src="archivos/noticias_bc/journal_finder.png" alt="">
								</a>
							</div>

							<div class="post hover dl-menus">
								<ul class="dl-menu">
									<li data-animation="14" data-to="1">
										<a class="link-area wrap-info click-mid-to-side" href="#">
											<img class="slider-image" src="archivos/noticias_bc/carne_bc.jpg" alt="">
											<div class="post-info">
												<div class="post-info-txt">
													<p>¡Tramita tu carné de biblioteca!</p>
													<p>Recuerda que sólo podrás acceder a los servicios del Sistema de Bibliotecas presentando tu carné vigente.</p>
												</div>
											</div>
										</a>
									</li>
								</ul>
							</div>

							<div class="post hover">
								<a class="wrap-info" href="https://gssapps.ebscohost.com/chat/prod/chat?locale=es&group=99" target="_blank">
									<img class="slider-image" src="archivos/noticias_bc/preguntale_bibliotecario.png" alt="">
									<div class="post-info">
										<div class="post-info-txt">
											<p>Pregúntale al bibliotecario</p>
											<p>Ahora respondemos tus dudas desde EbscoDiscovery</p>
										</div>
									</div>
								</a>
							</div>

						</div>
					</div>

					<!-- // POST SLIDER -->

				</div>

				<!-- // PAGE WRAPPER -->
				
				
			</div>
			<?php
				include 'footer.php';
			?>
			
		</div>

<!---------------------------------->
<!-------- PAGINA IZQUIERDA -------->
<!---------------------------------->

		<div class="pt-page pt-page-left">
<!-- OVERLAY NAV - IZQUIERDA -->
			<div class="overlay2" id="overlay2-left"></div>
			<div class="overlay" id="overlay-left">
				
				<div class="overlay-menu dl-menus">
					<ul class="overlay-items dl-menu">
						<li><a href="#" class="item move-nosotros">NOSOTROS</a></li>
						<li><a href="https://unmsm.ent.sirsi.net/client/es_ES/all_libs/?dt=list" target="_blank" class="item move-catalogo">CATÁLOGO</a></li>
						<!-- <li><a href="#" class="item move-servi">SERVICIOS</a></li> -->
						<li><a href="#" class="item move-todo-servicios">SERVICIOS</a></li>
						<li>
							<ul class="sub-nav">
								<!-- <li><a href="#" class="move-todo-servicios">EN SALA</a></li> -->
								<li><a href="#" class="move-carne">CARNÉ DE BIBLIOTECA</a></li>
								<li><a href="#" class="move-tesis">RECEPCIÓN DE TESIS</a></li>
								<li><a href="colec_fondor/" target="_blank" class="move-fondor">FONDO RESERVADO</a></li>
								<li><a href="#" class="move-mas-servicios">MÁS...</a></li>
							</ul>
						</li>
						<li data-animation="14" data-to="2"><a href="#" class="item move-rec-elec">RECURSOS ELECTRÓNICOS</a></li>
						<li>
							<ul class="sub-nav">
								<li data-animation="14" data-to="2"><a href="#" class="move-bd">BASES DE DATOS</a></li>
								<li data-animation="14" data-to="2"><a href="#" class="move-repo">REPOSITORIOS</a></li>
								<li data-animation="14" data-to="2"><a href="#" class="move-capa">CAPACITACIONES</a></li>
								<li data-animation="14" data-to="2"><a href="#" class="move-mas-recursos">MÁS...</a></li>
							</ul>
						</li>
						<!-- <li><a href="bibliotecas.html" class="item move-sistemabib" target="_blank">SISTEMA DE BIBLIOTECAS</a></li> -->
						<li data-animation="13" data-to="0"><a href="#" class="item click-side-to-mid move-eventos">EVENTOS</a></li>
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
<!-- NAV - IZQUIERDA -->
			<header class="container-navbar" id="container-navbar-left">
			

					<div class="nav-elements container-fluid">
						<div class="nav-elements-size mx-auto">

							<div class="header-grid">
								<a id="logo-unmsm-left" class="container-img mr-0" title="UNMSM" href="http://www.unmsm.edu.pe/" target="_blank">
									<img class="pr-2 pr-sm-4" src="assets/principal/images/header/unmsm_blanco-min.png" alt="UNMSM">
								</a>
								<!-- <a title="SISBIB" href="index.php"><img src="assets/principal/images/header/bibcentral_blanco-min.png" alt="SISBIB"></a> -->
								<!-- <a id="logo-unmsm-left-h" class="d-none h-100" title="UNMSM" href="http://www.unmsm.edu.pe/" target="_blank"><img src="assets/principal/images/header/unmsm_blanco-min.png" alt="UNMSM"></a> -->
								<!-- <div id="title-bib-left" class="h-100" style="margin-left: 95px;"> -->
		                        <a id="logo-sisbib-left" href="http://sisbib.unmsm.edu.pe/" class="h-100 d-flex align-items-center justify-content-between text-decoration-none position-relative" title="SISBIB">
		                            <div class="text-white border-0 pl-2 pl-sm-4 py-md-3 cont-title-header">
		                                <!-- <p class="mb-0">Universidad Nacional Mayor de San Marcos</p> -->
		                                <h1 class="mb-0">SISTEMA DE BIBLIOTECAS Y BIBLIOTECA CENTRAL</h1>
		                            </div>
		                            <div class="h-100">
		                            	<div class="container-img d-flex align-items-center justify-content-between">
		                            		<div title="SISBIB" class="h-100">
		                            			<img src="assets/principal/images/header/bibcentral_blanco-min.png" alt="SISBIB">
		                            		</div>
		                            		<!-- <a id="logo-vrip-left" class="h-100" title="VRIP" href="https://vrip.unmsm.edu.pe/" target="_blank">
		                            			<img class="px-1" src="assets/principal/images/header/LOGO VICERRECTORADO.png" alt="VRIP">
		                            		</a> -->
		                            		<!-- <a id="logo-unmsm-left" class="h-100" title="UNMSM" href="http://www.unmsm.edu.pe/" target="_blank">
		                            			<img class="px-1" src="assets/principal/images/header/unmsm_blanco-min.png" alt="UNMSM">
		                            		</a> -->
		                            		
		                            	</div>
		                            </div>
		                        </a>

		                        <button id="icon-menu-left" type="button" class="container-icon-menu">
		                        	<div class="icon-menu"></div>
		                        	<div class="icon-menu"></div>
		                        	<div class="icon-menu"></div>
		                        </button>
			                    <!-- </div> -->
							</div>
							
							<!-- <div id="div-nav-left" class="div-nav d-none dl-menus">
								<ul class="nav dl-menu">
									<li data-animation="14" data-to="2" class="nav-item">
										<a href="#" class="nav-link sub-move-bd">Bases de datos</a>
									</li>
									<li data-animation="14" data-to="2" class="nav-item">
										<a href="#" class="nav-link sub-move-repo">Repositorios</a>
									</li>
									<li class="nav-item">
										<a href="https://unmsm.ent.sirsi.net/client/es_ES/all_libs/?dt=list" target="_blank" class="nav-link">Catálogo</a>
									</li>
									<li class="nav-item">
										<a href="#" class="nav-link sub-move-horarios">Horarios</a>
									</li>
									<li class="nav-item">
										<a href="directorio/directorio.html" target="_blank" class="nav-link">Contacto</a>
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
												<li class="d-flex box-yellow"><a href="#" class="move-todo-servicios w-100">Servicios en Biblioteca Central</a></li>
												<div class="menu-enlaces mb-3">
													<ul class="list-unstyled">
														<li class="d-flex"><a href="#" class="move-todo-servicios por-nivel w-100">Navega por niveles</a></li>
														<li class="d-flex"><a href="#" class="move-todo-servicios por-lista w-100">Ver servicios en modo lista</a></li>
														<li class="d-flex"><a href="#" class="move-todo-servicios por-lista l-fondor w-100">Fondo Reservado</a></li>
														<li class="d-flex"><a href="#" class="move-todo-servicios por-lista l-salas w-100">Salas de lectura</a></li>
														<li class="d-flex"><a href="#" class="move-todo-servicios por-lista l-hemeroteca w-100">Hemeroteca</a></li>
														<li class="d-flex"><a href="#" class="move-todo-servicios por-lista l-prestamo w-100">Préstamo de computadoras</a></li>
														<li class="d-flex"><a href="#" class="move-todo-servicios por-lista l-cubiculos w-100">Cubículos de estudio grupal</a></li>
														<li class="d-flex"><a href="#" class="move-todo-servicios por-lista l-visual w-100">Servicios para usuarios con limitación visual</a></li>
													</ul>
												</div>
												<li class="d-flex box-yellow"><a href="#" class="move-bibliotecas w-100">Sistema de bibliotecas</a></li>
											</ul>
										</div>
										<div style="">
											<ul class="list-unstyled">
												<li class="d-flex box-yellow"><a href="#" class="move-carne w-100">Carné de Biblioteca</a></li>
												<div class="menu-enlaces mb-3">
													<ul class="list-unstyled">
														<!-- <li class="d-flex"><a href="archivos/documentos/GuiaIngresantes_2019.pdf" target="_blank" class="move-carne-inmenu w-100">Ingresantes</a></li> -->
														<li class="d-flex"><a href="#" class="move-carne link-grad w-100">Graduados</a></li>
														<li class="d-flex"><a href="#" class="move-carne link-visit w-100">Visitantes</a></li>
														<li class="d-flex"><a href="#" class="move-carne link-regular w-100">Regulares</a></li>
													</ul>
												</div>
												<li class="d-flex box-yellow"><a href="#" class="move-tesis w-100">Recepción de trabajos de investigación</a></li>
												<div class="menu-enlaces mb-3">
													<ul class="list-unstyled">
														<li class="d-flex">
															<a href="#" target="_blank" class="move-tesis link-procrec w-100">Proceso de recepción y publicación de tesis</a>
														</li>
														<li class="d-flex">
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
								<!-- <ul class="dropdown-menu">
									<div class="w-100" style="height: .5rem"></div>
									<div class="drop-box">
										<li class="d-flex"><a href="#" class="move-carne w-100">Carné de biblioteca</a></li>
										<li class="d-flex"><a href="#" class="move-tesis w-100">Recepción de tesis</a></li>
										<li class="d-flex"><a href="colec_fondor/" target="_blank" class="move-fondor w-100">Fondo reservado</a></li>
										<li class="d-flex"><a href="#" class="move-mas-servicios w-100">Más...</a></li>
									</div>
								</ul> -->
							</div>
							<li class="dropdown hover-drop-servicios">
								<a href="#" class="move-todo-servicios" style="color: white;">Servicios</a>
								
							</li>
							<div class="drop-recursos">
								<ul class="dropdown-menu">
									<div class="w-100" style="height: .5rem"></div>
									<div class="drop-box">
										<div style="">
											<ul class="list-unstyled">
												<li class="d-flex box-yellow" data-animation="14" data-to="2"><a href="#" class="move-bd w-100">Bases de datos</a></li>
												<div class="menu-enlaces mb-3">
													<ul class="list-unstyled">
														<li class="d-flex" data-animation="14" data-to="2"><a href="#" class="move-bd w-100">Buscador de bases de datos</a></li>
														<li class="d-flex"><a href="http://sisbib.unmsm.edu.pe/Intranet.asp?DB=gvrl" target="_blank" class="w-100">Gale</a></li>
														<li class="d-flex"><a href="http://sisbib.unmsm.edu.pe/Intranet.asp?DB=wileyEbook" target="_blank" class="w-100">Wiley</a></li>
														<li class="d-flex"><a href="http://sisbib.unmsm.edu.pe/Intranet.asp?DB=pqcentral" target="_blank" class="w-100">Proquest</a></li>
														<li class="d-flex"><a href="https://www.scopus.com/search/form.uri?display=basic" target="_blank" class="w-100">Scopus</a></li>
														<li class="d-flex"><a href="http://www.sciencedirect.com/" target="_blank" class="w-100">ScienceDirect</a></li>
														<li class="d-flex"><a href="http://www.tandfonline.com/" target="_blank" class="w-100">Taylor&Francis</a></li>
														<li class="d-flex" data-animation="14" data-to="2"><a href="#" class="move-bd w-100">Más bases</a></li>
													</ul>
												</div>
												<li class="d-flex box-yellow" data-animation="14" data-to="2"><a href="#" class="move-gestor w-100">Gestores Bibliográficos</a></li>
											</ul>
										</div>
										<div style="">
											<ul class="list-unstyled">
												<li class="d-flex box-yellow" data-animation="14" data-to="2"><a href="#" class="move-repo w-100">Repositorios</a></li>
												<div class="menu-enlaces mb-3">
													<ul class="list-unstyled">
														<li class="d-flex"><a href="http://revistasinvestigacion.unmsm.edu.pe/" target="_blank" class="w-100">Revistas UNMSM</a></li>
														<li class="d-flex"><a href="http://cybertesis.unmsm.edu.pe/" target="_blank" class="w-100">Cybertesis</a></li>
														<li class="d-flex"><a href="http://fondoeditorial.unmsm.edu.pe/" target="_blank" class="w-100">Fondo Editorial</a></li>
														<li class="d-flex"><a href="http://sisbib.unmsm.edu.pe/Memoria_Oral/index.html" target="_blank" class="w-100">Archivo de Memoria Oral</a></li>
													</ul>
												</div>
												<li class="d-flex box-yellow" data-animation="14" data-to="2"><a href="#" class="move-capacitaciones w-100">Capacitaciones en Recursos Electrónicos</a></li>
												<div class="menu-enlaces mb-3">
													<ul class="list-unstyled">
														<li class="d-flex" data-animation="14" data-to="2"><a href="" class="move-capacitaciones w-100">Fechas y horarios</a></li>
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
												<li class="d-flex box-dark" data-animation="14" data-to="2"><a href="#" class="move-preguntas w-100">Preguntas Frecuentes</a></li>
												<div class="menu-enlaces mb-3">
													<ul class="list-unstyled">
														<li class="d-flex" data-animation="14" data-to="2"><a href="#" class="move-preguntas como-bd w-100">Cómo acceder a las bases de datos dentro y fuera del campus</a></li>
														<li class="d-flex" data-animation="14" data-to="2"><a href="#" class="move-preguntas que-bd w-100">Qué son las bases de datos</a></li>
														<li class="d-flex" data-animation="14" data-to="2"><a href="#" class="move-preguntas como-gestores w-100">Cómo utilzar los gestores bibliográficos</a></li>
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
							<li data-animation="14" data-to="2" class="dropdown hover-drop-recursos">
								<a href="#" class="move-rec-elec" style="color: white;">Recursos electrónicos</a>
								
							</li>
							<li data-animation="13" data-to="0"><a href="#" class="move-eventos" style="color: white;">Eventos</a></li>
							<li data-animation="13" data-to="0"><a href="#" class="move-alertas" style="color: white;">Alertas Bibliográficas</a></li>
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
<!-- SECCION 1 - IZQUIERDA -->
			<section class="section1 section1-left">
				<!-- <p class="h1 text-center text-hide">SERVICIOS EN BIBLIOTECA</p> -->
<!-- TRIGGERS - IZQUIERDA -->
				<div class="pt-triggers-left">
					<!-- <button type="button" id="" class="btn-move">SISBIB PRINCIPAL<span></span></button> -->
					<div class="container-margin">

						<div class="container-servicios option-todos-servicios">
							<img src="assets/principal/images/servicios/icons/icono-biblioteca-2.png" alt="">
							<div class="div-bg">
									<p class="mb-0">BIBLIOTECA CENTRAL</p>
							</div>
						</div>

						<div class="container-servicios option-bibliotecas">
							<img src="assets/principal/images/servicios/icons/icono-sistema-bibliotecas.png" alt="">
							<div class="div-bg">
								<p class="mb-0">SISTEMA DE BIBLIOTECAS</p>
							</div>
						</div>

						<div class="container-servicios option-carne">
							<img src="assets/principal/images/servicios/icons/carne(1).png" alt="">
							<div class="div-bg">
								<p class="mb-0">CARNÉ DE BIBLIOTECA</p>
							</div>
						</div>

						<div class="container-servicios option-tesis">
							<img src="assets/principal/images/servicios/icons/tesis_1(1).png" alt="">
							<div class="div-bg">
								<p class="mb-0">RECEPCIÓN DE TESIS</p>
							</div>
						</div>

					</div>
					
					<div class="float-right dl-menus cont-button-to-mid"><!-- //CAMBIOHANS -->
						<!-- //CAMBIOHANS -->
							<ul class="cont dl-menu">
								<li class="cont" data-animation="13" data-to="0" style="width: fit-content; float: right;">
									<button id="btn-left-to-right" class="btn-move click-side-to-mid" title="Ir a página central">
										<div class="volver">volver <i class="fas fa-chevron-right"></i></div>
										<div class="container-chevron float-left">
												<div class="chevron"></div>
												<div class="chevron"></div>
												<div class="chevron"></div>
										</div>
									</button>
								</li>
							</ul>
					</div>
				</div><!-- FIN TRIGGERS - IZQUIERDA -->
<!-- CONTENEDOR AREAS BLANCAS - IZQUIERDA -->
				<div class="white-containers">
<!-- CONTENEDOR OPCION 1 - TODOS LOS SERVICIOS - IZQUIERDA -->
					<div class="white-section section-todos-servicios py-4 py-sm-5">
						
						<!-- INICIO DE TABS IZQUIERDA -->

						<div>

						<div style="margin: auto;">
							<p class="sub-title-sisbib title-sisbib font-weight-bold text-uppercase">Servicios de la Biblioteca Central</p>
						</div>

						<ul class="nav nav-tabs" id="myTabIzq" role="tablist">
							<li class="nav-item">
								<!-- <a class="nav-link active" id="estructure-tab" data-toggle="tab" href="#estructure" role="tab" aria-controls="estructure" aria-selected="true">Navegar por nivel</a> -->
								<a class="nav-link nav-services-bibcen" id="estructure-tab" data-toggle="tab" href="#estructure" role="tab" aria-controls="estructure" aria-selected="false">Navegar por nivel</a>
							</li>
							<li class="nav-item">
								<a class="nav-link nav-services-bibcen" id="estruclist-tab" data-toggle="tab" href="#estruclist" role="tab" aria-controls="estruclist" aria-selected="false">Ver lista completa</a>
							</li>
						</ul>
						<div class="tab-content" id="myTabContentIzq">
							<!-- <div class="content-services-bibcent px-md-2 py-3 py-md-5 tab-pane fade show active" id="estructure" role="tabpanel" aria-labelledby="estructure-tab"> -->
							<div class="content-services-bibcent px-md-2 py-3 py-md-5 tab-pane fade" id="estructure" role="tabpanel" aria-labelledby="estructure-tab">

								
									
								<div style=" padding: 0 15px;" class="container leyenda-structure">
									<div class="text-center">
										<p>
											<span class="d-inline-block chevron-down-services">
												<svg xmlns="http://www.w3.org/2000/svg" class="fa-chevron-circle-down" viewBox="0 0 485 485"><path fill="currentColor" d="M414 71C368.2 25.2 307.3 0 242.5 0S116.8 25.2 71 71C25.2 116.8 0 177.7 0 242.5s25.2 125.7 71 171.5C116.8 459.8 177.7 485 242.5 485s125.7-25.2 171.5-71C459.8 368.2 485 307.3 485 242.5S459.8 116.8 414 71zM242.5 455C125.3 455 30 359.7 30 242.5S125.3 30 242.5 30 455 125.3 455 242.5 359.7 455 242.5 455z"/><polygon fill="currentColor" points="242.5 299.8 135.6 193.2 114.4 214.5 242.5 342.1 370.6 214.5 349.4 193.2 "/></svg>
											</span>
											
											&nbsp;&nbsp;Despliega para ver los servicios y horarios en cada nivel
										</p>
										<!-- <p>
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 437.6 437.6" width="20" height="20" data-icon="info-circle"><path fill="currentColor" d="M194 142.8c0.8 1.6 1.6 3.2 2.4 4.4 0.8 1.2 2 2.4 2.8 3.6 1.2 1.2 2.4 2.4 4 3.6 1.2 0.8 2.8 2 4.8 2.4 1.6 0.8 3.2 1.2 5.2 1.6 2 0.4 3.6 0.4 5.2 0.4 1.6 0 3.6 0 5.2-0.4 1.6-0.4 3.2-0.8 4.4-1.6h0.4c1.6-0.8 3.2-1.6 4.8-2.8 1.2-0.8 2.4-2 3.6-3.2l0.4-0.4c1.2-1.2 2-2.4 2.8-3.6s1.6-2.4 2-4c0-0.4 0-0.4 0.4-0.8 0.8-1.6 1.2-3.6 1.6-5.2 0.4-1.6 0.4-3.6 0.4-5.2s0-3.6-0.4-5.2c-0.4-1.6-0.8-3.2-1.6-5.2 -1.2-2.8-2.8-5.2-4.8-7.2 -0.4-0.4-0.4-0.4-0.8-0.8 -1.2-1.2-2.4-2-4-3.2 -1.6-0.8-2.8-1.6-4.4-2.4 -1.6-0.8-3.2-1.2-4.8-1.6 -2-0.4-3.6-0.4-5.2-0.4 -1.6 0-3.6 0-5.2 0.4 -1.6 0.4-3.2 0.8-4.8 1.6H208c-1.6 0.8-3.2 1.6-4.4 2.4 -1.6 1.2-2.8 2-4 3.2 -1.2 1.2-2.4 2.4-3.2 3.6 -0.8 1.2-1.6 2.8-2.4 4.4 -0.8 1.6-1.2 3.2-1.6 4.8 -0.4 2-0.4 3.6-0.4 5.2 0 1.6 0 3.6 0.4 5.2C192.8 139.6 193.6 141.2 194 142.8z"/><path fill="currentColor" d="M249.6 289.2h-9.2v-98c0-5.6-4.4-10.4-10.4-10.4h-42c-5.6 0-10.4 4.4-10.4 10.4v21.6c0 5.6 4.4 10.4 10.4 10.4h8.4v66.4H188c-5.6 0-10.4 4.4-10.4 10.4v21.6c0 5.6 4.4 10.4 10.4 10.4h61.6c5.6 0 10.4-4.4 10.4-10.4V300C260 294 255.2 289.2 249.6 289.2z"/><path fill="currentColor" d="M218.8 0C98 0 0 98 0 218.8s98 218.8 218.8 218.8 218.8-98 218.8-218.8S339.6 0 218.8 0zM218.8 408.8c-104.8 0-190-85.2-190-190s85.2-190 190-190 190 85.2 190 190S323.6 408.8 218.8 408.8z"/></svg>
											&nbsp;&nbsp;Acerca el cursor para ver la lista de todos los servicios del nivel
										</p> -->
									</div>
								</div>
								<div class="container-structure" style=" padding: 0 15px;">

									<img src="assets/principal/images/structure/base_biblio(1).png" class="structure-left">

									<div class="accordion-left structure-right" id="accordionIzquierda">

										<div class="card" id="card-nivel-4">

											<div id="headingOne">

												<img src="assets/principal/images/structure/nivel_4(1).png">
												<div class="txtinimg">NIVEL 4</div>
				
											</div>

											<div id="collapsePrimero" class="collapse" aria-labelledby="headingOne" data-parent="#accordionIzquierda">
												<div class="card-body">
										    		<!-- <img src="assets/principal/images/structure/nivel_4_info.png"> -->
												</div>
											</div>

										</div>

										<div class="card" id="card-nivel-3">

											<div id="headingTwo">

												<img src="assets/principal/images/structure/nivel_3(1).png" usemap="#nivel3">
												<a class="collapsed" type="button" data-toggle="collapse" href="#collapseSegundo" aria-expanded="false" aria-controls="collapseSegundo" style="z-index: 1; position: absolute; top: 0; left: 0; width: 100%; height: 100%; -webkit-clip-path: polygon(28% 0, 100% 64%, 100% 100%, 28% 48%, 0 75%, 0 34%); clip-path: polygon(28% 0, 100% 64%, 100% 100%, 28% 48%, 0 75%, 0 34%);"></a>
												<div class="txtinimg">NIVEL 3</div>

												<a class="btn collapsed click-toggle chevron-down-services" type="button" data-toggle="collapse" href="#collapseSegundo" aria-expanded="false" aria-controls="collapseSegundo">
													<svg data-toggle="tooltip" data-placement="right" data-html="true" title="<ul><li>Préstamo de computadoras</li><li>Capacitación en el uso de Recursos Electrónicos</li></ul>" xmlns="http://www.w3.org/2000/svg" class="fa-chevron-circle-down" viewBox="0 0 485 485"><path fill="currentColor" d="M414 71C368.2 25.2 307.3 0 242.5 0S116.8 25.2 71 71C25.2 116.8 0 177.7 0 242.5s25.2 125.7 71 171.5C116.8 459.8 177.7 485 242.5 485s125.7-25.2 171.5-71C459.8 368.2 485 307.3 485 242.5S459.8 116.8 414 71zM242.5 455C125.3 455 30 359.7 30 242.5S125.3 30 242.5 30 455 125.3 455 242.5 359.7 455 242.5 455z"/><polygon fill="currentColor" points="242.5 299.8 135.6 193.2 114.4 214.5 242.5 342.1 370.6 214.5 349.4 193.2 "/></svg>
												</a>

												<!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 437.6 437.6" width="20" height="20" data-icon="info-circle"><path fill="currentColor" d="M194 142.8c0.8 1.6 1.6 3.2 2.4 4.4 0.8 1.2 2 2.4 2.8 3.6 1.2 1.2 2.4 2.4 4 3.6 1.2 0.8 2.8 2 4.8 2.4 1.6 0.8 3.2 1.2 5.2 1.6 2 0.4 3.6 0.4 5.2 0.4 1.6 0 3.6 0 5.2-0.4 1.6-0.4 3.2-0.8 4.4-1.6h0.4c1.6-0.8 3.2-1.6 4.8-2.8 1.2-0.8 2.4-2 3.6-3.2l0.4-0.4c1.2-1.2 2-2.4 2.8-3.6s1.6-2.4 2-4c0-0.4 0-0.4 0.4-0.8 0.8-1.6 1.2-3.6 1.6-5.2 0.4-1.6 0.4-3.6 0.4-5.2s0-3.6-0.4-5.2c-0.4-1.6-0.8-3.2-1.6-5.2 -1.2-2.8-2.8-5.2-4.8-7.2 -0.4-0.4-0.4-0.4-0.8-0.8 -1.2-1.2-2.4-2-4-3.2 -1.6-0.8-2.8-1.6-4.4-2.4 -1.6-0.8-3.2-1.2-4.8-1.6 -2-0.4-3.6-0.4-5.2-0.4 -1.6 0-3.6 0-5.2 0.4 -1.6 0.4-3.2 0.8-4.8 1.6H208c-1.6 0.8-3.2 1.6-4.4 2.4 -1.6 1.2-2.8 2-4 3.2 -1.2 1.2-2.4 2.4-3.2 3.6 -0.8 1.2-1.6 2.8-2.4 4.4 -0.8 1.6-1.2 3.2-1.6 4.8 -0.4 2-0.4 3.6-0.4 5.2 0 1.6 0 3.6 0.4 5.2C192.8 139.6 193.6 141.2 194 142.8z"/><path fill="currentColor" d="M249.6 289.2h-9.2v-98c0-5.6-4.4-10.4-10.4-10.4h-42c-5.6 0-10.4 4.4-10.4 10.4v21.6c0 5.6 4.4 10.4 10.4 10.4h8.4v66.4H188c-5.6 0-10.4 4.4-10.4 10.4v21.6c0 5.6 4.4 10.4 10.4 10.4h61.6c5.6 0 10.4-4.4 10.4-10.4V300C260 294 255.2 289.2 249.6 289.2z"/><path fill="currentColor" d="M218.8 0C98 0 0 98 0 218.8s98 218.8 218.8 218.8 218.8-98 218.8-218.8S339.6 0 218.8 0zM218.8 408.8c-104.8 0-190-85.2-190-190s85.2-190 190-190 190 85.2 190 190S323.6 408.8 218.8 408.8z"/></svg> -->

										    </div>

											<div id="collapseSegundo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionIzquierda">
												<div class="card-body">

													<div class="txtin">
														<p>TERCER NIVEL</p>
														<p style="background-color: #333; border-radius: 6px; padding: 5px 10px; color: #fff; width: 68%; display: inline-block;">Préstamo de laptops</p>
														<a class="hover-icon a-camera" data-target="#structure-modal-IMG1" data-toggle="modal" href="#">
															<i class="fas fa-camera"></i>
														</a>
														<!-- <div style="background-color: rgba(0, 0, 0, 0.5);" class="modal fade modal-img" id="structure-modal-IMG1" tabindex="-1" role="dialog" aria-labelledby="modalIMGLabel" aria-hidden="true">
														  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
														    <div class="modal-content">
														      <div class="modal-body">
														      	<button style="position: absolute; top: 20px; right: 20px;" type="button" class="close" data-dismiss="modal" aria-label="Close">
														          <span aria-hidden="true">&times;</span>
														        </button>
														        <img src="assets/principal/images/servicios/SALA DE LAPTOPS (2).JPG" alt="" style="width:100%">
														      </div>
														    </div>
														  </div>
														</div> -->

														<div class="row mb-3">
															<div class="col-6" style="border-right: 2px solid #515151;">
																<ul>
																	<li>Acceso a internet.</li>
																	<li>Facilita el manejo de base de datos.</li>
																</ul>
																<div class="text-center mt-2 dl-menus">
																	<ul class="dl-menu">
																		<li data-animation="14" data-to="2"><a class="link-bd abox mb-0" href="#">Más sobre base de datos</a></li>
																	</ul>
																</div>
																<!-- <div class="text-center mt-2"><a class="link-bd abox mb-0" href="#">Más sobre base de datos</a></div> -->
															</div>
															<div class="col-6" style="border-left: 2px solid #515151;">
																<p class="mb-0">HORARIOS DE ATENCIÓN</p>
																<p class="mb-0">Lunes a Sábado / 8:15 a.m. a 7:30 p.m.</p>
																<!-- <p class="mb-0">Lunes a Viernes / 8:15 a.m. a 7:00 p.m.</p> -->
																<!-- <p class="mb-0">Sábados / 8:15 a.m. a 5:00 p.m.</p> -->
															</div>
															
														</div>
														<p style="background-color: #333; border-radius: 6px; padding: 5px 10px; color: #fff; width: 68%; display: inline-block;">Capacitación en el uso de Recursos Electrónicos</p>
														<a class="hover-icon a-camera" data-target="#structure-modal-IMG2" data-toggle="modal" href="#">
															<i class="fas fa-camera"></i>
														</a>
														<!-- <div style="background-color: rgba(0, 0, 0, 0.5);" class="modal fade modal-img" id="structure-modal-IMG2" tabindex="-1" role="dialog" aria-labelledby="modalIMGLabel" aria-hidden="true">
														  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
														    <div class="modal-content">
														      <div class="modal-body">
														      	<button style="position: absolute; top: 20px; right: 20px;" type="button" class="close" data-dismiss="modal" aria-label="Close">
														          <span aria-hidden="true">&times;</span>
														        </button>
														        <img src="assets/principal/images/servicios/SALA UNIVERSIA (2).JPG" alt="" style="width:100%">
														      </div>
														    </div>
														  </div>
														</div> -->

														<div class="row mb-3">
															<div class="col-6" style="border-right: 2px solid #515151;">
																<ul>
																	<li>Capacitaciones en uso de base de datos, gestores bibliográficos y repositorios.</li>
																</ul>
															</div>
															<div class="col-6 d-flex justify-content-center align-items-center" style="border-left: 2px solid #515151;">
																<div class="dl-menus">
																	<ul class="dl-menu">
																		<li data-animation="14" data-to="2"><a class="link-cap abox mb-0" href="">Ver fechas y horarios</a></li>
																	</ul>
																</div>
																<!-- <div><a class="link-cap abox mb-0" href="">Ver fechas y horarios</a></div> -->
															</div>
														</div>

														<p style="background-color: #333; border-radius: 6px; padding: 5px 10px; color: #fff; width: 68%; display: inline-block;">Hemeroteca</p>
														<a class="hover-icon a-camera" data-target="#structure-modal-IMG13" data-toggle="modal" href="#">
															<i class="fas fa-camera"></i>
														</a>
														<div class="row mb-3">
															<div class="col-6" style="border-right: 2px solid #515151;">
																<ul>
																	<li>Préstamo de publicaciones periódicas (Periódicos y revistas).</li>
																</ul>
															</div>
															<div class="col-6" style="border-left: 2px solid #515151;">
																<p class="mb-0">HORARIOS DE ATENCIÓN</p>
																<p class="mb-0">Lunes a Viernes / 8:15 a.m. a 7:00 p.m.</p>
																<p class="mb-0">Sábados / 8:15 a.m. a 2:00 p.m.</p>
															</div>
															
														</div>

													</div>

													<style>
														.modal-backdrop {
															display: none;
														}

														.pt-page-left .modal-img .modal-body {
															padding: .2rem !important;
														}
													</style>
													

													<!-- MODAL DE PRESTAMO DE COMPUTADORAS -->
													<!-- <div aria-hidden="true" aria-labelledby="modalIMGLabel" class="modal fade" id="modalIMG" role="dialog" tabindex="-1">
														<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
															<div class="modal-content">
																<div class="modal-body mb-0 p-0">
																	<img src="assets/principal/images/servicios/PRESTAMO DE COMPUTADORAS.JPG" alt="" style="width:100%">
																</div>
																<div class="modal-footer">
																	<div><a href="https://i3.ytimg.com/vi/vr0qNXmkUJ8/maxresdefault.jpg" target="_blank">Download</a></div>
																	<button class="btn btn-outline-primary btn-rounded btn-md ml-4 text-center" data-dismiss="modal" type="button">Close
																	</button>
																</div>
															</div>
														</div>
													</div> -->
													<!-- <style>
														h4 { font-family: 'Open Sans'; margin: 0;}

														.modal,body.modal-open {
		    												padding-right: 0!important
														}

														body.modal-open {
		    												overflow: auto
														}

														body.scrollable {
		    												overflow-y: auto
														}

														.modal-footer {
															display: flex;
															justify-content: flex-start;
															.btn {
															position: absolute;
															right: 10px;
															}
														}

													</style> -->
		  											
												</div>
											</div>


										</div>

										<div class="card" id="card-nivel-2">

											<div id="headingThree">

												<img src="assets/principal/images/structure/nivel_2(1).png" usemap="#nivel2">
												<a class="collapsed" type="button" data-toggle="collapse" href="#collapseTercero" aria-expanded="false" aria-controls="collapseTercero" style="z-index: 1; position: absolute; top: 0; left: 0; width: 100%; height: 100%; -webkit-clip-path: polygon(28% 0, 100% 58%, 100% 100%, 28% 48%, 0 80%, 0 33%); clip-path: polygon(28% 0, 100% 58%, 100% 100%, 28% 48%, 0 80%, 0 33%);"></a>
												<div class="txtinimg">NIVEL 2</div>

												<a class="btn collapsed click-toggle chevron-down-services" type="button" data-toggle="collapse" href="#collapseTercero" aria-expanded="false" aria-controls="collapseTercero">
													<svg data-toggle="tooltip" data-placement="right" data-html="true" title="<ul><li>Cubículos de estudio grupal</li><li>Sala de lectura</li></ul>" xmlns="http://www.w3.org/2000/svg" class="fa-chevron-circle-down" viewBox="0 0 485 485"><path fill="currentColor" d="M414 71C368.2 25.2 307.3 0 242.5 0S116.8 25.2 71 71C25.2 116.8 0 177.7 0 242.5s25.2 125.7 71 171.5C116.8 459.8 177.7 485 242.5 485s125.7-25.2 171.5-71C459.8 368.2 485 307.3 485 242.5S459.8 116.8 414 71zM242.5 455C125.3 455 30 359.7 30 242.5S125.3 30 242.5 30 455 125.3 455 242.5 359.7 455 242.5 455z"/><polygon fill="currentColor" points="242.5 299.8 135.6 193.2 114.4 214.5 242.5 342.1 370.6 214.5 349.4 193.2 "/></svg>
												</a>

												<!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 437.6 437.6" width="20" height="20" data-icon="info-circle"><path fill="currentColor" d="M194 142.8c0.8 1.6 1.6 3.2 2.4 4.4 0.8 1.2 2 2.4 2.8 3.6 1.2 1.2 2.4 2.4 4 3.6 1.2 0.8 2.8 2 4.8 2.4 1.6 0.8 3.2 1.2 5.2 1.6 2 0.4 3.6 0.4 5.2 0.4 1.6 0 3.6 0 5.2-0.4 1.6-0.4 3.2-0.8 4.4-1.6h0.4c1.6-0.8 3.2-1.6 4.8-2.8 1.2-0.8 2.4-2 3.6-3.2l0.4-0.4c1.2-1.2 2-2.4 2.8-3.6s1.6-2.4 2-4c0-0.4 0-0.4 0.4-0.8 0.8-1.6 1.2-3.6 1.6-5.2 0.4-1.6 0.4-3.6 0.4-5.2s0-3.6-0.4-5.2c-0.4-1.6-0.8-3.2-1.6-5.2 -1.2-2.8-2.8-5.2-4.8-7.2 -0.4-0.4-0.4-0.4-0.8-0.8 -1.2-1.2-2.4-2-4-3.2 -1.6-0.8-2.8-1.6-4.4-2.4 -1.6-0.8-3.2-1.2-4.8-1.6 -2-0.4-3.6-0.4-5.2-0.4 -1.6 0-3.6 0-5.2 0.4 -1.6 0.4-3.2 0.8-4.8 1.6H208c-1.6 0.8-3.2 1.6-4.4 2.4 -1.6 1.2-2.8 2-4 3.2 -1.2 1.2-2.4 2.4-3.2 3.6 -0.8 1.2-1.6 2.8-2.4 4.4 -0.8 1.6-1.2 3.2-1.6 4.8 -0.4 2-0.4 3.6-0.4 5.2 0 1.6 0 3.6 0.4 5.2C192.8 139.6 193.6 141.2 194 142.8z"/><path fill="currentColor" d="M249.6 289.2h-9.2v-98c0-5.6-4.4-10.4-10.4-10.4h-42c-5.6 0-10.4 4.4-10.4 10.4v21.6c0 5.6 4.4 10.4 10.4 10.4h8.4v66.4H188c-5.6 0-10.4 4.4-10.4 10.4v21.6c0 5.6 4.4 10.4 10.4 10.4h61.6c5.6 0 10.4-4.4 10.4-10.4V300C260 294 255.2 289.2 249.6 289.2z"/><path fill="currentColor" d="M218.8 0C98 0 0 98 0 218.8s98 218.8 218.8 218.8 218.8-98 218.8-218.8S339.6 0 218.8 0zM218.8 408.8c-104.8 0-190-85.2-190-190s85.2-190 190-190 190 85.2 190 190S323.6 408.8 218.8 408.8z"/></svg> -->

											</div>

											<div id="collapseTercero" class="collapse" aria-labelledby="headingThree" data-parent="#accordionIzquierda">
												<div class="card-body">
													<!-- <img src="assets/principal/images/structure/nivel_2_info(2).png"> -->
													<div class="txtin">
														<p>SEGUNDO NIVEL</p>
														<p style="background-color: #333; border-radius: 6px; padding: 5px 10px; color: #fff; width: 60%; display: inline-block;">Cubículos de estudio grupal</p>
														<a class="hover-icon a-camera" data-target="#structure-modal-IMG3" data-toggle="modal" href="#">
															<i class="fas fa-camera"></i>
														</a>
														<!-- <div style="background-color: rgba(0, 0, 0, 0.5);" class="modal fade modal-img" id="structure-modal-IMG3" tabindex="-1" role="dialog" aria-labelledby="modalIMGLabel" aria-hidden="true">
														  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
														    <div class="modal-content">
														      <div class="modal-body">
														      	<button style="position: absolute; top: 20px; right: 20px;" type="button" class="close" data-dismiss="modal" aria-label="Close">
														          <span aria-hidden="true">&times;</span>
														        </button>
														        <img src="assets/principal/images/servicios/CUBICULOS DE ESTUDIO GRUPAL (2).JPG" alt="" style="width:100%">
														      </div>
														    </div>
														  </div>
														</div> -->

														<div class="row mb-3">
															<div class="col-6" style="border-right: 2px solid #515151;">
																<ul>
																	<li>6 ambientes.</li>
																	<li>Ingresan de 3 a 6 alumnos por cubículo.</li>
																</ul>
															</div>
															<div class="col-6" style="border-left: 2px solid #515151;">
																<p class="mb-0">ATENCIÓN E INFORMES</p>
																<p class="mb-0">Módulo de registro - Sala de lectura del segundo nivel</p>
																<p class="mb-0">HORARIO</p>
																<p class="mb-0">Lunes a Sábado / 8:15 a.m. a 8:00 p.m.</p>
															</div>
															
														</div>
														<p style="background-color: #333; border-radius: 6px; padding: 5px 10px; color: #fff; width: 60%; display: inline-block;">Sala de lectura</p>
														<a class="hover-icon a-camera" data-target="#structure-modal-IMG4" data-toggle="modal" href="#">
															<i class="fas fa-camera"></i>
														</a>
														<!-- <div style="background-color: rgba(0, 0, 0, 0.5);" class="modal fade modal-img" id="structure-modal-IMG4" tabindex="-1" role="dialog" aria-labelledby="modalIMGLabel" aria-hidden="true">
														  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
														    <div class="modal-content">
														      <div class="modal-body">
														      	<button style="position: absolute; top: 20px; right: 20px;" type="button" class="close" data-dismiss="modal" aria-label="Close">
														          <span aria-hidden="true">&times;</span>
														        </button>
														        <img src="assets/principal/images/servicios/ESPACIOS DE LECTURA 2DO NIVEL.JPG" alt="" style="width:100%">
														      </div>
														    </div>
														  </div>
														</div> -->

														<div class="row mb-3">
															<div class="col-6" style="border-right: 2px solid #515151;">
																<ul>
																	<li>Colección de ciencias, tesis e investigaciones afines.</li>
																</ul>
															</div>
															<div class="col-6" style="border-left: 2px solid #515151;">
																<p class="mb-0">HORARIO DE ATENCIÓN</p>
																<p class="mb-0">Lunes a Sábado / 8:15 a.m. a 8:00 p.m.</p>
															</div>
														</div>

													</div>
												</div>
											</div>

										</div>

										<div class="card" id="card-nivel-1">

											<div id="headingFour">

												<img src="assets/principal/images/structure/nivel_1(1).png" usemap="#nivel1">
												<a class="collapsed" type="button" data-toggle="collapse" href="#collapseCuarto" aria-expanded="false" aria-controls="collapseCuarto" style="z-index: 1; position: absolute; top: 0; left: 0; width: 100%; height: 100%; -webkit-clip-path: polygon(29% 0, 100% 39%, 100% 100%, 29% 100%, 0 100%, 0 26%); clip-path: polygon(29% 0, 100% 39%, 100% 100%, 29% 100%, 0 100%, 0 26%);"></a>
												<div class="txtinimg">NIVEL 1</div>

												<a class="btn collapsed click-toggle chevron-down-services" type="button" data-toggle="collapse" href="#collapseCuarto" aria-expanded="false" aria-controls="collapseCuarto">
													<svg data-toggle="tooltip" data-placement="right" data-html="true" title="<ul><li>Cubículos de estudio grupal</li><li>Estantería abierta</li><li>Sala de lectura</li><li>Préstamo de computadoras</li><li>Servicio para Usuarios con Limitación visual</li><li>Sala de exposiciones</li></ul>" xmlns="http://www.w3.org/2000/svg" class="fa-chevron-circle-down" viewBox="0 0 485 485"><path fill="currentColor" d="M414 71C368.2 25.2 307.3 0 242.5 0S116.8 25.2 71 71C25.2 116.8 0 177.7 0 242.5s25.2 125.7 71 171.5C116.8 459.8 177.7 485 242.5 485s125.7-25.2 171.5-71C459.8 368.2 485 307.3 485 242.5S459.8 116.8 414 71zM242.5 455C125.3 455 30 359.7 30 242.5S125.3 30 242.5 30 455 125.3 455 242.5 359.7 455 242.5 455z"/><polygon fill="currentColor" points="242.5 299.8 135.6 193.2 114.4 214.5 242.5 342.1 370.6 214.5 349.4 193.2 "/></svg>
												</a>

												<!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 437.6 437.6" width="20" height="20" data-icon="info-circle"><path fill="currentColor" d="M194 142.8c0.8 1.6 1.6 3.2 2.4 4.4 0.8 1.2 2 2.4 2.8 3.6 1.2 1.2 2.4 2.4 4 3.6 1.2 0.8 2.8 2 4.8 2.4 1.6 0.8 3.2 1.2 5.2 1.6 2 0.4 3.6 0.4 5.2 0.4 1.6 0 3.6 0 5.2-0.4 1.6-0.4 3.2-0.8 4.4-1.6h0.4c1.6-0.8 3.2-1.6 4.8-2.8 1.2-0.8 2.4-2 3.6-3.2l0.4-0.4c1.2-1.2 2-2.4 2.8-3.6s1.6-2.4 2-4c0-0.4 0-0.4 0.4-0.8 0.8-1.6 1.2-3.6 1.6-5.2 0.4-1.6 0.4-3.6 0.4-5.2s0-3.6-0.4-5.2c-0.4-1.6-0.8-3.2-1.6-5.2 -1.2-2.8-2.8-5.2-4.8-7.2 -0.4-0.4-0.4-0.4-0.8-0.8 -1.2-1.2-2.4-2-4-3.2 -1.6-0.8-2.8-1.6-4.4-2.4 -1.6-0.8-3.2-1.2-4.8-1.6 -2-0.4-3.6-0.4-5.2-0.4 -1.6 0-3.6 0-5.2 0.4 -1.6 0.4-3.2 0.8-4.8 1.6H208c-1.6 0.8-3.2 1.6-4.4 2.4 -1.6 1.2-2.8 2-4 3.2 -1.2 1.2-2.4 2.4-3.2 3.6 -0.8 1.2-1.6 2.8-2.4 4.4 -0.8 1.6-1.2 3.2-1.6 4.8 -0.4 2-0.4 3.6-0.4 5.2 0 1.6 0 3.6 0.4 5.2C192.8 139.6 193.6 141.2 194 142.8z"/><path fill="currentColor" d="M249.6 289.2h-9.2v-98c0-5.6-4.4-10.4-10.4-10.4h-42c-5.6 0-10.4 4.4-10.4 10.4v21.6c0 5.6 4.4 10.4 10.4 10.4h8.4v66.4H188c-5.6 0-10.4 4.4-10.4 10.4v21.6c0 5.6 4.4 10.4 10.4 10.4h61.6c5.6 0 10.4-4.4 10.4-10.4V300C260 294 255.2 289.2 249.6 289.2z"/><path fill="currentColor" d="M218.8 0C98 0 0 98 0 218.8s98 218.8 218.8 218.8 218.8-98 218.8-218.8S339.6 0 218.8 0zM218.8 408.8c-104.8 0-190-85.2-190-190s85.2-190 190-190 190 85.2 190 190S323.6 408.8 218.8 408.8z"/></svg> -->

											</div>

											<div id="collapseCuarto" class="collapse" aria-labelledby="headingFour" data-parent="#accordionIzquierda">
												<div class="card-body">
													<!-- <img src="assets/principal/images/structure/nivel_1_info(2).png"> -->
													<div class="txtin">
														<p>PRIMER NIVEL</p>
														<p style="background-color: #333; border-radius: 6px; padding: 5px 10px; color: #fff; width: 60%; display: inline-block;">Cubículos de estudio grupal</p>
														<a class="hover-icon a-camera" data-target="#structure-modal-IMG5" data-toggle="modal" href="#">
															<i class="fas fa-camera"></i>
														</a>
														<!-- <div style="background-color: rgba(0, 0, 0, 0.5);" class="modal fade modal-img" id="structure-modal-IMG5" tabindex="-1" role="dialog" aria-labelledby="modalIMGLabel" aria-hidden="true">
														  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
														    <div class="modal-content">
														      <div class="modal-body">
														      	<button style="position: absolute; top: 20px; right: 20px;" type="button" class="close" data-dismiss="modal" aria-label="Close">
														          <span aria-hidden="true">&times;</span>
														        </button>
														        <img src="assets/principal/images/servicios/CUBICULOS DE ESTUDIO GRUPAL.JPG" alt="" style="width:100%">
														      </div>
														    </div>
														  </div>
														</div> -->

														<div class="row mb-3">
															<div class="col-6" style="border-right: 2px solid #515151;">
																<ul>
																	<li>7 ambientes.</li>
																	<li>Ingresan de 3 a 6 alumnos por cubículo.</li>
																	<li>Equipado con pizarra.</li>
																</ul>
															</div>
															<div class="col-6" style="border-left: 2px solid #515151;">
																<p class="mb-0">ATENCIÓN E INFORMES</p>
																<p class="mb-0">Módulo de registro - Sala de lectura del primer nivel</p>
																<p class="mb-0">HORARIO</p>
																<p class="mb-0">Lunes a Sábado / 8:15 a.m. a 8:00 p.m.</p>
															</div>
															
														</div>
														<p style="background-color: #333; border-radius: 6px; padding: 5px 10px; color: #fff; width: 60%; display: inline-block;">Estantería abierta</p>
														<a class="hover-icon a-camera" data-target="#structure-modal-IMG6" data-toggle="modal" href="#">
															<i class="fas fa-camera"></i>
														</a>
														<!-- <div style="background-color: rgba(0, 0, 0, 0.5);" class="modal fade modal-img" id="structure-modal-IMG6" tabindex="-1" role="dialog" aria-labelledby="modalIMGLabel" aria-hidden="true">
														  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
														    <div class="modal-content">
														      <div class="modal-body">
														      	<button style="position: absolute; top: 20px; right: 20px;" type="button" class="close" data-dismiss="modal" aria-label="Close">
														          <span aria-hidden="true">&times;</span>
														        </button>
														        <img src="assets/principal/images/servicios/SALA DE HUMANIDADES.JPG" alt="" style="width:100%">
														      </div>
														    </div>
														  </div>
														</div> -->

														<div class="row mb-3">
															<div class="col-6" style="border-right: 2px solid #515151;">
																<ul>
																	<li>Colección de humanidades.</li>
																</ul>
															</div>
															<div class="col-6" style="border-left: 2px solid #515151;">
																<p class="mb-0">HORARIO DE ATENCIÓN</p>
																<p class="mb-0">Lunes a Sábado / 8:15 a.m. a 8:00 p.m.</p>
															</div>
														</div>
														<p style="background-color: #333; border-radius: 6px; padding: 5px 10px; color: #fff; width: 60%; display: inline-block;">Sala de lectura</p>
														<a class="hover-icon a-camera" data-target="#structure-modal-IMG7" data-toggle="modal" href="#">
															<i class="fas fa-camera"></i>
														</a>
														<!-- <div style="background-color: rgba(0, 0, 0, 0.5);" class="modal fade modal-img" id="structure-modal-IMG7" tabindex="-1" role="dialog" aria-labelledby="modalIMGLabel" aria-hidden="true">
														  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
														    <div class="modal-content">
														      <div class="modal-body">
														      	<button style="position: absolute; top: 20px; right: 20px;" type="button" class="close" data-dismiss="modal" aria-label="Close">
														          <span aria-hidden="true">&times;</span>
														        </button>
														        <img src="assets/principal/images/servicios/SALA DE HUMANIDADES (4).JPG" alt="" style="width:100%">
														      </div>
														    </div>
														  </div>
														</div> -->

														<div class="row mb-3">
															<div class="col-6" style="border-right: 2px solid #515151;">
																<ul>
																	<li>Colección de humanidades.</li>
																</ul>
															</div>
															<div class="col-6" style="border-left: 2px solid #515151;">
																<p class="mb-0">HORARIO DE ATENCIÓN</p>
																<p class="mb-0">Lunes a Sábado / 8:15 a.m. a 8:00 p.m.</p>
															</div>
														</div>
														<p style="background-color: #333; border-radius: 6px; padding: 5px 10px; color: #fff; width: 60%; display: inline-block;">Préstamo de computadoras</p>
														<a class="hover-icon a-camera" data-target="#structure-modal-IMG8" data-toggle="modal" href="#">
															<i class="fas fa-camera"></i>
														</a>
														<!-- <div style="background-color: rgba(0, 0, 0, 0.5);" class="modal fade modal-img" id="structure-modal-IMG8" tabindex="-1" role="dialog" aria-labelledby="modalIMGLabel" aria-hidden="true">
														  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
														    <div class="modal-content">
														      <div class="modal-body">
														      	<button style="position: absolute; top: 20px; right: 20px;" type="button" class="close" data-dismiss="modal" aria-label="Close">
														          <span aria-hidden="true">&times;</span>
														        </button>
														        <img src="assets/principal/images/servicios/PRESTAMO DE COMPUTADORAS.JPG" alt="" style="width:100%">
														      </div>
														    </div>
														  </div>
														</div> -->

														<div class="row mb-3">
															<div class="col-6" style="border-right: 2px solid #515151;">
																<ul>
																	<li>Acceso a internet.</li>
																	<li>Facilita el acceso a los recursos electrónicos de la UNMSM y para los trabajos académicos.</li>
																</ul>
															</div>
															<div class="col-6" style="border-left: 2px solid #515151;">
																<p class="mb-0">HORARIO DE ATENCIÓN</p>
																<p class="mb-0">Lunes a Sábado / 8:15 a.m. a 8:00 p.m.</p>
																<!-- <p class="mb-0">Sábados / 8:15 a.m. a 5:00 p.m.</p> -->
															</div>
														</div>

														<p style="background-color: #333; border-radius: 6px; padding: 5px 10px; color: #fff; width: 60%; display: inline-block;">Servicio para Usuarios con Limitación visual</p>
														<a class="hover-icon a-camera" data-target="#structure-modal-IMG9" data-toggle="modal" href="#">
															<i class="fas fa-camera"></i>
														</a>
														<!-- <div style="background-color: rgba(0, 0, 0, 0.5);" class="modal fade modal-img" id="structure-modal-IMG9" tabindex="-1" role="dialog" aria-labelledby="modalIMGLabel" aria-hidden="true">
														  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
														    <div class="modal-content">
														      <div class="modal-body">
														      	<button style="position: absolute; top: 20px; right: 20px;" type="button" class="close" data-dismiss="modal" aria-label="Close">
														          <span aria-hidden="true">&times;</span>
														        </button>
														        <img src="assets/principal/images/servicios/SALA LIMITACION VISUAL (2).JPG" alt="" style="width:100%">
														      </div>
														    </div>
														  </div>
														</div> -->

														<div class="row mb-3">
															<div class="col-6" style="border-right: 2px solid #515151;">
																<ul>
																	<li>Equipos y softwares para el manejo independiente de la computadora y lectura del material.</li>
																</ul>
															</div>
															<div class="col-6" style="border-left: 2px solid #515151;">
																<p class="mb-0">HORARIO DE ATENCIÓN</p>
																<p class="mb-0">Lunes a Sábado / 8:15 a.m. a 8:00 p.m.</p>
															</div>
															
														</div>

														<p style="background-color: #333; border-radius: 6px; padding: 5px 10px; color: #fff; width: 60%; display: inline-block;">Sala de exposiciones</p>
														<a class="hover-icon a-camera" data-target="#structure-modal-IMG10" data-toggle="modal" href="#">
															<i class="fas fa-camera"></i>
														</a>
														<!-- <div style="background-color: rgba(0, 0, 0, 0.5);" class="modal fade modal-img" id="structure-modal-IMG10" tabindex="-1" role="dialog" aria-labelledby="modalIMGLabel" aria-hidden="true">
														  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
														    <div class="modal-content">
														      <div class="modal-body">
														      	<button style="position: absolute; top: 20px; right: 20px;" type="button" class="close" data-dismiss="modal" aria-label="Close">
														          <span aria-hidden="true">&times;</span>
														        </button>
														        <img src="assets/principal/images/servicios/SALA EXPOSICIONES.JPG" alt="" style="width:100%">
														      </div>
														    </div>
														  </div>
														</div> -->

														<div class="row mb-3">
															<div class="col-6">
																<ul>
																	<li>Ambiente acondicionado para la realización de exposiciones de arte, muestras bibliográficas y otros.</li>
																</ul>
																<!-- <div class="text-center mt-2">
																	<a class="eventos-sala abox mb-0" href="#">Ver eventos</a>
																</div> -->
															</div>
															<!-- <div class="col-6" style="border-left: 2px solid #515151;">
																<p class="mb-0">HORARIO DE ATENCIÓN</p>
																<p class="mb-0">Lunes a Sábado / 8:15 a.m. a 8:00 p.m.</p>
															</div> -->
															
														</div>

													</div>
												</div>
											</div>

										</div>

										<div class="card" id="card-nivel-0">

											<div id="headingFive">

												<img src="assets/principal/images/structure/nivel_0(3).jpg">
												<a class="collapsed" type="button" data-toggle="collapse" href="#collapseQuinto" aria-expanded="false" aria-controls="collapseQuinto" style="z-index: 1; position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></a>
												<div class="txtinimg">NIVEL 0</div>

												<a class="btn collapsed click-toggle chevron-down-services" type="button" data-toggle="collapse" href="#collapseQuinto" aria-expanded="false" aria-controls="collapseQuinto">
													<svg data-toggle="tooltip" data-placement="right" data-html="true" title="<ul><li>Sala del Fondo Reservado</li><li>Archivo Histórico</li></ul>" xmlns="http://www.w3.org/2000/svg" class="fa-chevron-circle-down" viewBox="0 0 485 485"><path fill="currentColor" d="M414 71C368.2 25.2 307.3 0 242.5 0S116.8 25.2 71 71C25.2 116.8 0 177.7 0 242.5s25.2 125.7 71 171.5C116.8 459.8 177.7 485 242.5 485s125.7-25.2 171.5-71C459.8 368.2 485 307.3 485 242.5S459.8 116.8 414 71zM242.5 455C125.3 455 30 359.7 30 242.5S125.3 30 242.5 30 455 125.3 455 242.5 359.7 455 242.5 455z"/><polygon fill="currentColor" points="242.5 299.8 135.6 193.2 114.4 214.5 242.5 342.1 370.6 214.5 349.4 193.2 "/></svg>
												</a>

												<!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 437.6 437.6" width="20" height="20" data-icon="info-circle"><path fill="currentColor" d="M194 142.8c0.8 1.6 1.6 3.2 2.4 4.4 0.8 1.2 2 2.4 2.8 3.6 1.2 1.2 2.4 2.4 4 3.6 1.2 0.8 2.8 2 4.8 2.4 1.6 0.8 3.2 1.2 5.2 1.6 2 0.4 3.6 0.4 5.2 0.4 1.6 0 3.6 0 5.2-0.4 1.6-0.4 3.2-0.8 4.4-1.6h0.4c1.6-0.8 3.2-1.6 4.8-2.8 1.2-0.8 2.4-2 3.6-3.2l0.4-0.4c1.2-1.2 2-2.4 2.8-3.6s1.6-2.4 2-4c0-0.4 0-0.4 0.4-0.8 0.8-1.6 1.2-3.6 1.6-5.2 0.4-1.6 0.4-3.6 0.4-5.2s0-3.6-0.4-5.2c-0.4-1.6-0.8-3.2-1.6-5.2 -1.2-2.8-2.8-5.2-4.8-7.2 -0.4-0.4-0.4-0.4-0.8-0.8 -1.2-1.2-2.4-2-4-3.2 -1.6-0.8-2.8-1.6-4.4-2.4 -1.6-0.8-3.2-1.2-4.8-1.6 -2-0.4-3.6-0.4-5.2-0.4 -1.6 0-3.6 0-5.2 0.4 -1.6 0.4-3.2 0.8-4.8 1.6H208c-1.6 0.8-3.2 1.6-4.4 2.4 -1.6 1.2-2.8 2-4 3.2 -1.2 1.2-2.4 2.4-3.2 3.6 -0.8 1.2-1.6 2.8-2.4 4.4 -0.8 1.6-1.2 3.2-1.6 4.8 -0.4 2-0.4 3.6-0.4 5.2 0 1.6 0 3.6 0.4 5.2C192.8 139.6 193.6 141.2 194 142.8z"/><path fill="currentColor" d="M249.6 289.2h-9.2v-98c0-5.6-4.4-10.4-10.4-10.4h-42c-5.6 0-10.4 4.4-10.4 10.4v21.6c0 5.6 4.4 10.4 10.4 10.4h8.4v66.4H188c-5.6 0-10.4 4.4-10.4 10.4v21.6c0 5.6 4.4 10.4 10.4 10.4h61.6c5.6 0 10.4-4.4 10.4-10.4V300C260 294 255.2 289.2 249.6 289.2z"/><path fill="currentColor" d="M218.8 0C98 0 0 98 0 218.8s98 218.8 218.8 218.8 218.8-98 218.8-218.8S339.6 0 218.8 0zM218.8 408.8c-104.8 0-190-85.2-190-190s85.2-190 190-190 190 85.2 190 190S323.6 408.8 218.8 408.8z"/></svg> -->

											</div>

											<div id="collapseQuinto" class="collapse" aria-labelledby="headingFive" data-parent="#accordionIzquierda">
												<div class="card-body">
													<!-- <img src="assets/principal/images/structure/nivel_0_info(1).png"> -->
													<div class="txtin">
														<p>NIVEL 0</p>
														<p style="background-color: #333; border-radius: 6px; padding: 5px 10px; color: #fff; width: 60%; display: inline-block;">Sala del Fondo Reservado</p>
														<!-- <a class="hover-icon a-camera" data-target="#structure-modal-IMG11" data-toggle="modal" href="#">
															<i class="fas fa-camera"></i>
														</a> -->
														<!-- <div style="background-color: rgba(0, 0, 0, 0.5);" class="modal fade modal-img" id="structure-modal-IMG11" tabindex="-1" role="dialog" aria-labelledby="modalIMGLabel" aria-hidden="true">
														  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
														    <div class="modal-content">
														      <div class="modal-body">
														      	<button style="position: absolute; top: 20px; right: 20px;" type="button" class="close" data-dismiss="modal" aria-label="Close">
														          <span aria-hidden="true">&times;</span>
														        </button>
														        <img src="assets/principal/images/servicios/FONDO RESERVADO.JPG" alt="" style="width:100%">
														      </div>
														    </div>
														  </div>
														</div> -->
														
														<div class="row mb-3">
															<div class="col-6" style="border-right: 2px solid #515151;">
																<ul>
																	<li>El aforo es de 24 personas.</li>
																	<li>4 puestos de lectura.</li>
																</ul>
																<div class="text-center mt-2">
																	<a data-target="#colecciones-modal" data-toggle="modal" class="abox" href="#">Acerca de Fondo Reservado</a>
																	<a class="abox" href="colec_fondor/" target="_blank">Colecciones</a>
																</div>
																
															</div>
															<div class="col-6" style="border-left: 2px solid #515151;">
																<p class="mb-0">HORARIO DE ATENCIÓN</p>
																<p class="mb-0">Lunes a Viernes / 8:15 a.m. a 8:00 p.m.</p>
															</div>
														</div>

														<p style="background-color: #333; border-radius: 6px; padding: 5px 10px; color: #fff; width: 60%; display: inline-block;">Archivo Histórico</p>
														<!-- <a class="hover-icon a-camera" data-target="#structure-modal-IMG12" data-toggle="modal" href="#">
															<i class="fas fa-camera"></i>
														</a> -->
														<!-- <div style="background-color: rgba(0, 0, 0, 0.5);" class="modal fade modal-img" id="structure-modal-IMG12" tabindex="-1" role="dialog" aria-labelledby="modalIMGLabel" aria-hidden="true">
														  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
														    <div class="modal-content">
														      <div class="modal-body">
														      	<button style="position: absolute; top: 20px; right: 20px;" type="button" class="close" data-dismiss="modal" aria-label="Close">
														          <span aria-hidden="true">&times;</span>
														        </button>
														        <img src="assets/principal/images/servicios/FONDO RESERVADO.JPG" alt="" style="width:100%">
														      </div>
														    </div>
														  </div>
														</div> -->
														
														<div class="row mb-3">
															<div class="col-6" style="border-right: 2px solid #515151;">
																<ul>
																	<li>Custodia y conserva el conjunto de documentos producidos y recibidos a partir de 1551 por la Universidad en el desempeño de sus funciones.</li>
																</ul>
															</div>
															<div class="col-6" style="border-left: 2px solid #515151; display: flex; align-items: center;">
																<!-- <p class="mb-0">HORARIO DE ATENCIÓN</p> -->
																<a href="https://www.facebook.com/pg/archivohistorico.unmsm/posts/" style="font-size: 45px;" class="hover-icon d-inline-block" target="_blank"><i class="fab fa-facebook-square"></i></a>
															</div>
														</div>
														
														<p style="background-color: #333; border-radius: 6px; padding: 5px 10px; color: #fff; width: 60%; display: inline-block;">Auditorio "Rosa Alarco Larrabure"</p>

														<div class="row mb-3">
															<div class="col-6" style="border-right: 2px solid #515151;">
																<ul>
																	<li>Ambiente diseñado para la realización de eventos académicos (conferencias, congresos, cursos, etc.) y culturales.</li>
																	<li>Características:
																		<!-- <ul class="list-unstyled child-pl"> -->
																		<ul>
																			<li>Aforo 400 personas.</li>
																			<li>Escenario de 10 metros de ancho por 4 de profundidad.</li>
																			<li>Acceso a internet.</li>
																			<li>Proyector multimedia.</li>
																			<li>Ecran panorámico.</li>
																			<li>Sistema de aire acondicionado.</li>
																			<li>Equipos de audio y sonido profesional.</li>
																			<li>Iluminación ambiental y escénica.</li>
																		</ul>
																	</li>
																</ul>
															</div>
															<div class="col-6" style="border-left: 2px solid #515151;">
																<p class="mb-0">¿Desea realizar un evento en el auditorio?, para mayor información contactarse con la Unidad de Coordinación Cultural:</p>
																<p class="mb-0">Correo: fredy.vidalon@unmsm.edu.pe</p>
																<p class="mb-0">Horario de atención: De Lunes a Sábado de 8:15 a.m. a 8:00 p.m.</p>
																<p class="mb-0">Teléfonos: 619-7000, anexo 7619 ó 515-8023, anexo 205</p>
															</div>
														</div>

													</div>
												</div>
											</div>

										</div>
									
									</div>
								</div>
							</div>
							<div class="content-services-bibcent px-md-2 py-3 py-md-5 tab-pane fade cont" id="estruclist" role="tabpanel" aria-labelledby="estruclist-tab">

								<div class="structlist-ops">
									<div>
										<select  name="lista-servicios" id="lista-servicios">
											<option class="input-option-services-bibcen" value="fondo_reservado">Fondo Reservado</option>
											<option class="input-option-services-bibcen" value="archivo_historico">Archivo Historico</option>
											<option class="input-option-services-bibcen" value="sala_lectura">Sala de lectura</option>
											<option class="input-option-services-bibcen" value="hemeroteca">Hemeroteca</option>
											<option class="input-option-services-bibcen" value="estanteria_abierta">Estantería abierta</option>
											<option class="input-option-services-bibcen" value="prestamo_computadoras">Préstamo de computadoras</option>
											<option class="input-option-services-bibcen" value="cubiculos_estudio">Cúbiculos de estudio grupal</option>
											<option class="input-option-services-bibcen" value="limitacion_visual">Servicio para usuarios con limitación visual</option>
											<option class="input-option-services-bibcen" value="auditorio_sotano">Auditorio "Rosa Alarco Larrabure"</option>
										</select>
									</div>
									
									<div>
										<!-- <div class="margen"><div id="l-op1" class="bd cajas cajas-select" ><p>Fondo Reservado</p></div></div> -->
										<div class="margen"><div id="l-op1" class="bd cajas" ><p>Fondo Reservado</p></div></div>
										<div class="margen"><div id="l-op2" class="repositorios cajas"><p class="mb-0">Archivo Histórico</p></div></div>
										<div class="margen"><div id="l-op3" class="gestores cajas"><p class="mb-0">Salas de lectura</p></div></div>
										<div class="margen"><div id="l-op4" class="gestores cajas"><p class="mb-0">Hemeroteca</p></div></div>
										<div class="margen"><div id="l-op5" class="capacitaciones cajas"><p class="mb-0">Estantería abierta</p></div></div>
										<div class="margen"><div id="l-op6" class="capacitaciones cajas"><p class="mb-0">Préstamo de computadoras</p></div></div>
										<div class="margen"><div id="l-op7" class="capacitaciones cajas"><p class="mb-0">Cubículos de estudio grupal</p></div></div>
										<div class="margen"><div id="l-op8" class="capacitaciones cajas"><p class="mb-0">Servicio para usuarios con limitación visual</p></div></div>
										<div class=""><div id="l-op9" class="capacitaciones cajas"><p class="mb-0">Auditorio "Rosa Alarco Larrabure"</p></div></div>
									</div>
								</div>
								<div class="structlist-info px-0 px-md-3 text-justify">
									<!-- <div id="l-cont1" class="d-block movercont3"> -->
									<div id="l-cont1" class="d-none movercont3">
										<div>
											<div class="d-flex justify-content-between mb-3">
												<div class="d-flex">
													<i class="h2 mb-0 far fa-clock mr-2"></i>
													<div class="d-inline-block">
														<p class="mb-0">HORARIO DE ATENCIÓN:</p>
														<p class="mb-0 d-block d-md-inline-block">Lunes a Viernes&nbsp;</p>
														<p class="mb-0 d-block d-md-inline-block">8:15 a.m. a 8:00 p.m.</p>
													</div>
												</div>
												<div class="d-flex">
													<i class="h2 mb-0 fas fa-map-marker-alt mr-2"></i>
													<div class="d-inline-block">
														<p class="mb-0">NIVEL:</p>
														<p class="mb-0">0</p>
													</div>
												</div>
												<div class="d-flex">
													<a class="hover-icon a-camera" data-target="#structure-modal-IMG11" data-toggle="modal" href="#">
														<i class="h2 mb-0 fas fa-camera"></i>
													</a>
												</div>
											</div>
											<p>La colección del Fondo Reservado fue seleccionada entre 1995 y 1996, por un grupo de profesores dirigidos por el Dr. Raúl Rivera Serna, en el que se encontraba el Dr. Miguel Marticorena y la profesora de literatura Esther Castañeda. De esta forma, se determinaron los materiales con que contaría esta sala, a partir de colecciones antiguas y valiosas de la Universidad.</p>
											
											<div>
												<p class="mb-0">Colecciones</p>
												<div class="block-colecciones-fondo-r my-3">
													<a data-toggle="tooltip" data-placement="bottom" data-html="true" title="" data-original-title="<ul><li>Libros del siglo XVI, siglo XVII y siglo XVIII</li><li>Libros del siglo XIX y principios siglo XX</li><li>Folletos antiguos: siglo XIX</li><li>Biblioteca Mariátegui</li><li>Periódicos y revistas: siglo XIX y principios siglo XX</li><li>Tesis: siglo XIX</li></ul>" href="colec_fondor/?colec=0" target="_blank" class="with-info-mobile enlace-colec p-1 p-md-2 text-decoration-none">
														<div class="">
															<div class="d-flex align-items-center justify-content-around">
																<img class="icon-img-colec" src="assets/principal/images/Referencia.png" alt="">
																<div class="text-center">Colecciones de referencia</div>
															</div>
														</div>
														<svg data-toggle="tooltip" data-placement="bottom" data-html="true" title="" data-original-title="<ul><li>Libros del siglo XVI, siglo XVII y siglo XVIII</li><li>Libros del siglo XIX y principios siglo XX</li><li>Folletos antiguos: siglo XIX</li><li>Biblioteca Mariátegui</li><li>Periódicos y revistas: siglo XIX y principios siglo XX</li><li>Tesis: siglo XIX</li></ul>" class="info-mobile" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 437.6 437.6" width="20" height="20" data-icon="info-circle"><path fill="currentColor" d="M194 142.8c0.8 1.6 1.6 3.2 2.4 4.4 0.8 1.2 2 2.4 2.8 3.6 1.2 1.2 2.4 2.4 4 3.6 1.2 0.8 2.8 2 4.8 2.4 1.6 0.8 3.2 1.2 5.2 1.6 2 0.4 3.6 0.4 5.2 0.4 1.6 0 3.6 0 5.2-0.4 1.6-0.4 3.2-0.8 4.4-1.6h0.4c1.6-0.8 3.2-1.6 4.8-2.8 1.2-0.8 2.4-2 3.6-3.2l0.4-0.4c1.2-1.2 2-2.4 2.8-3.6s1.6-2.4 2-4c0-0.4 0-0.4 0.4-0.8 0.8-1.6 1.2-3.6 1.6-5.2 0.4-1.6 0.4-3.6 0.4-5.2s0-3.6-0.4-5.2c-0.4-1.6-0.8-3.2-1.6-5.2 -1.2-2.8-2.8-5.2-4.8-7.2 -0.4-0.4-0.4-0.4-0.8-0.8 -1.2-1.2-2.4-2-4-3.2 -1.6-0.8-2.8-1.6-4.4-2.4 -1.6-0.8-3.2-1.2-4.8-1.6 -2-0.4-3.6-0.4-5.2-0.4 -1.6 0-3.6 0-5.2 0.4 -1.6 0.4-3.2 0.8-4.8 1.6H208c-1.6 0.8-3.2 1.6-4.4 2.4 -1.6 1.2-2.8 2-4 3.2 -1.2 1.2-2.4 2.4-3.2 3.6 -0.8 1.2-1.6 2.8-2.4 4.4 -0.8 1.6-1.2 3.2-1.6 4.8 -0.4 2-0.4 3.6-0.4 5.2 0 1.6 0 3.6 0.4 5.2C192.8 139.6 193.6 141.2 194 142.8z"/><path fill="currentColor" d="M249.6 289.2h-9.2v-98c0-5.6-4.4-10.4-10.4-10.4h-42c-5.6 0-10.4 4.4-10.4 10.4v21.6c0 5.6 4.4 10.4 10.4 10.4h8.4v66.4H188c-5.6 0-10.4 4.4-10.4 10.4v21.6c0 5.6 4.4 10.4 10.4 10.4h61.6c5.6 0 10.4-4.4 10.4-10.4V300C260 294 255.2 289.2 249.6 289.2z"/><path fill="currentColor" d="M218.8 0C98 0 0 98 0 218.8s98 218.8 218.8 218.8 218.8-98 218.8-218.8S339.6 0 218.8 0zM218.8 408.8c-104.8 0-190-85.2-190-190s85.2-190 190-190 190 85.2 190 190S323.6 408.8 218.8 408.8z"/></svg>

													</a>
													<a data-toggle="tooltip" data-placement="bottom" data-html="true" title="" data-original-title="<ul><li>Dora Mayer: Vida interior (memorias)</li><li>Revista Prisma</li></ul>" href="colec_fondor/?colec=6" target="_blank" class="with-info-mobile enlace-colec p-1 p-md-2 text-decoration-none">
														<div class="">
															<div class="d-flex align-items-center justify-content-around">
																<img class="icon-img-colec" src="assets/principal/images/Digitalizados.png" alt="">
																<div class="text-center">Colecciones digitalizadas</div>
															</div>
														</div>
														<svg data-toggle="tooltip" data-placement="bottom" data-html="true" title="" data-original-title="<ul><li>Dora Mayer: Vida interior (memorias)</li><li>Revista Prisma</li></ul>" class="info-mobile" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 437.6 437.6" width="20" height="20" data-icon="info-circle"><path fill="currentColor" d="M194 142.8c0.8 1.6 1.6 3.2 2.4 4.4 0.8 1.2 2 2.4 2.8 3.6 1.2 1.2 2.4 2.4 4 3.6 1.2 0.8 2.8 2 4.8 2.4 1.6 0.8 3.2 1.2 5.2 1.6 2 0.4 3.6 0.4 5.2 0.4 1.6 0 3.6 0 5.2-0.4 1.6-0.4 3.2-0.8 4.4-1.6h0.4c1.6-0.8 3.2-1.6 4.8-2.8 1.2-0.8 2.4-2 3.6-3.2l0.4-0.4c1.2-1.2 2-2.4 2.8-3.6s1.6-2.4 2-4c0-0.4 0-0.4 0.4-0.8 0.8-1.6 1.2-3.6 1.6-5.2 0.4-1.6 0.4-3.6 0.4-5.2s0-3.6-0.4-5.2c-0.4-1.6-0.8-3.2-1.6-5.2 -1.2-2.8-2.8-5.2-4.8-7.2 -0.4-0.4-0.4-0.4-0.8-0.8 -1.2-1.2-2.4-2-4-3.2 -1.6-0.8-2.8-1.6-4.4-2.4 -1.6-0.8-3.2-1.2-4.8-1.6 -2-0.4-3.6-0.4-5.2-0.4 -1.6 0-3.6 0-5.2 0.4 -1.6 0.4-3.2 0.8-4.8 1.6H208c-1.6 0.8-3.2 1.6-4.4 2.4 -1.6 1.2-2.8 2-4 3.2 -1.2 1.2-2.4 2.4-3.2 3.6 -0.8 1.2-1.6 2.8-2.4 4.4 -0.8 1.6-1.2 3.2-1.6 4.8 -0.4 2-0.4 3.6-0.4 5.2 0 1.6 0 3.6 0.4 5.2C192.8 139.6 193.6 141.2 194 142.8z"/><path fill="currentColor" d="M249.6 289.2h-9.2v-98c0-5.6-4.4-10.4-10.4-10.4h-42c-5.6 0-10.4 4.4-10.4 10.4v21.6c0 5.6 4.4 10.4 10.4 10.4h8.4v66.4H188c-5.6 0-10.4 4.4-10.4 10.4v21.6c0 5.6 4.4 10.4 10.4 10.4h61.6c5.6 0 10.4-4.4 10.4-10.4V300C260 294 255.2 289.2 249.6 289.2z"/><path fill="currentColor" d="M218.8 0C98 0 0 98 0 218.8s98 218.8 218.8 218.8 218.8-98 218.8-218.8S339.6 0 218.8 0zM218.8 408.8c-104.8 0-190-85.2-190-190s85.2-190 190-190 190 85.2 190 190S323.6 408.8 218.8 408.8z"/></svg>
													</a>
													
													
												</div>
												<!-- <ul class="list-unstyled pl-5">
													<li><a href="colec_fondor/?colec=0" target="_blank">Libros del siglo XVI, siglo XVII y siglo XVIII</a></li>
													<li><a href="colec_fondor/?colec=1" target="_blank">Libros del siglo XIX y principios siglo XX</a></li>
													<li><a href="colec_fondor/?colec=2" target="_blank">Folletos antiguos: siglo XIX</a></li>
													<li><a href="colec_fondor/?colec=3" target="_blank">Biblioteca Mariátegui</a></li>
													<li><a href="colec_fondor/?colec=4" target="_blank">Periódicos y revistas: siglo XIX y principios siglo XX</a></li>
													<li><a href="colec_fondor/?colec=5" target="_blank">Tesis: siglo XIX</a></li>
													<li><a href="colec_fondor/?colec=6" target="_blank">Dora Mayer: Vida interior (memorias)</a></li>
												</ul> -->
											</div>

										</div>
									</div>
									<div id="l-cont2" class="d-none movercont3">
										<div>
											<!-- <div class="d-flex justify-content-between mb-3"> -->
											<div class="d-none justify-content-between mb-3">
												<div class="d-flex">
													<i class="h2 mb-0 far fa-clock mr-2"></i>
													<div class="d-inline-block">
														<p class="mb-0">HORARIO DE ATENCIÓN:</p>
														<p class="mb-0 d-block d-md-inline-block">Lunes a Viernes&nbsp;</p>
														<p class="mb-0 d-block d-md-inline-block">0:00 a.m. a 0:00 p.m.</p>
													</div>
												</div>
												<div class="d-flex">
													<i class="h2 mb-0 fas fa-map-marker-alt mr-2"></i>
													<div class="d-inline-block">
														<p class="mb-0">NIVEL:</p>
														<p class="mb-0">000000</p>
													</div>
												</div>
												<!-- <div class="d-flex align-items-center">
													<a class="hover-icon a-camera" data-target="#structure-modal-IMG11" data-toggle="modal" href="#">
														<i class="h2 mb-0 fas fa-camera"></i>
													</a>
												</div> -->
											</div>
											<p>Custodia y conserva el conjunto de documentos producidos y recibidos a partir de 1551 por la Universidad en el desempeño de sus funciones.</p>
											<div style="display: flex; align-items: center; justify-content: center;">
												<a href="https://www.facebook.com/pg/archivohistorico.unmsm/posts/" style="font-size: 45px;" class="hover-icon d-inline-block" target="_blank"><i class="fab fa-facebook-square"></i></a>
											</div>
										</div>
									</div>
									<div id="l-cont3" class="d-none movercont3">
										<div>
											<div class="d-flex justify-content-between mb-3">
												<div class="d-flex">
													<i class="h2 mb-0 far fa-clock mr-2"></i>
													<div class="d-inline-block">
														<p class="mb-0">HORARIO DE ATENCIÓN:</p>
														<p class="mb-0 d-block d-md-inline-block">Lunes a Sábado&nbsp;</p>
														<p class="mb-0 d-block d-md-inline-block">8:15 a.m. a 8:00 p.m.</p>
													</div>
												</div>
												<div class="d-flex">
													<i class="h2 mb-0 fas fa-map-marker-alt mr-2"></i>
													<div class="d-inline-block">
														<p class="mb-0">NIVEL:</p>
														<p class="mb-0">2</p>
													</div>
												</div>
												<div class="d-flex">
													<a class="hover-icon a-camera" data-target="#structure-modal-IMG4" data-toggle="modal" href="#">
														<i class="h2 mb-0 fas fa-camera"></i>
													</a>
												</div>
											</div>
											<p>Colección de ciencias, tesis e investigaciones afines.</p>
										</div>
										<hr>
										<div>
											<div class="d-flex justify-content-between mb-3">
												<div class="d-flex">
													<i class="h2 mb-0 far fa-clock mr-2"></i>
													<div class="d-inline-block">
														<p class="mb-0">HORARIO DE ATENCIÓN:</p>
														<p class="mb-0 d-block d-md-inline-block">Lunes a Sábado&nbsp;</p>
														<p class="mb-0 d-block d-md-inline-block">8:15 a.m. a 8:00 p.m.</p>
													</div>
												</div>
												<div class="d-flex">
													<i class="h2 mb-0 fas fa-map-marker-alt mr-2"></i>
													<div class="d-inline-block">
														<p class="mb-0">NIVEL:</p>
														<p class="mb-0">1</p>
													</div>
												</div>
												<div class="d-flex">
													<a class="hover-icon a-camera" data-target="#structure-modal-IMG7" data-toggle="modal" href="#">
														<i class="h2 mb-0 fas fa-camera"></i>
													</a>
												</div>
											</div>
											<p>Colección de humanidades.</p>
										</div>
										
									</div>
									<div id="l-cont4" class="d-none movercont3">
										<div>
											<div class="d-flex justify-content-between mb-3">
												<div class="d-flex">
													<i class="h2 mb-0 far fa-clock mr-2"></i>
													<div class="d-inline-block">
														<p class="mb-0">HORARIO DE ATENCIÓN:</p>
														<div>
															<p class="mb-0 d-block d-md-inline-block">Lunes a Viernes&nbsp;</p>
															<p class="mb-0 d-block d-md-inline-block">8:15 a.m. a 7:00 p.m.</p>
														</div>
														<div>
															<p class="mb-0 d-block d-md-inline-block">Sábados&nbsp;</p>
															<p class="mb-0 d-block d-md-inline-block">8:15 a.m. a 2:00 p.m.</p>
														</div>
													</div>
												</div>
												<div class="d-flex">
													<i class="h2 mb-0 fas fa-map-marker-alt mr-2"></i>
													<div class="d-inline-block">
														<p class="mb-0">NIVEL:</p>
														<p class="mb-0">3</p>
													</div>
												</div>
												<div class="d-flex">
													<a class="hover-icon a-camera" data-target="#structure-modal-IMG13" data-toggle="modal" href="#">
														<i class="h2 mb-0 fas fa-camera"></i>
													</a>
												</div>
											</div>
											<p>Préstamo de publicaciones periódicas (Periódicos y revistas).</p>
										</div>
									</div>
									<div id="l-cont5" class="d-none movercont3">
										<div>
											<div class="d-flex justify-content-between mb-3">
												<div class="d-flex">
													<i class="h2 mb-0 far fa-clock mr-2"></i>
													<div class="d-inline-block">
														<p class="mb-0">HORARIO DE ATENCIÓN:</p>
														<p class="mb-0 d-block d-md-inline-block">Lunes a Sábado&nbsp;</p>
														<p class="mb-0 d-block d-md-inline-block">8:15 a.m. a 8:00 p.m.</p>
													</div>
												</div>
												<div class="d-flex">
													<i class="h2 mb-0 fas fa-map-marker-alt mr-2"></i>
													<div class="d-inline-block">
														<p class="mb-0">NIVEL:</p>
														<p class="mb-0">1</p>
													</div>
												</div>
												<div class="d-flex">
													<a class="hover-icon a-camera" data-target="#structure-modal-IMG6" data-toggle="modal" href="#">
														<i class="h2 mb-0 fas fa-camera"></i>
													</a>
												</div>
											</div>
											<p>Colección de humanidades.</p>
										</div>
										<!-- <p style="background-color: #333; border-radius: 6px; padding: 5px 10px; color: #fff; width: 60%; display: inline-block;">Estantería abierta</p>
										<a class="hover-icon a-camera" data-target="#structure-modal-IMG6" data-toggle="modal" href="#">
											<i class="h2 mb-0 fas fa-camera"></i>
										</a>

										<div class="row mb-3">
											<div class="col-6" style="border-right: 2px solid #515151;">
												<p class="mb-0">- Colección de humanidades</p>
											</div>
											<div class="col-6" style="border-left: 2px solid #515151;">
												<p class="mb-0">HORARIO DE ATENCIÓN</p>
												<p class="mb-0">Lunes a Sábado / 8:15 a.m. a 8:00 p.m.</p>
											</div>
										</div> -->
									</div>
									<div id="l-cont6" class="d-none movercont3">
										<div>
											<div class="d-flex justify-content-between mb-3">
												<div class="d-flex">
													<i class="h2 mb-0 far fa-clock mr-2"></i>
													<div class="d-inline-block">
														<p class="mb-0">HORARIOS DE ATENCIÓN:</p>
														<div>
															<p class="mb-0 d-block d-md-inline-block">Lunes a Sábado&nbsp;</p>
															<p class="mb-0 d-block d-md-inline-block">8:15 a.m. a 7:30 p.m.</p>
														</div>
														<!-- <div>
															<p class="mb-0 d-block d-md-inline-block">Sábados&nbsp;</p>
															<p class="mb-0 d-block d-md-inline-block">8:15 a.m. a 5:00 p.m.</p>
														</div> -->
													</div>
												</div>
												<div class="d-flex">
													<i class="h2 mb-0 fas fa-map-marker-alt mr-2"></i>
													<div class="d-inline-block">
														<p class="mb-0">NIVEL:</p>
														<p class="mb-0">3</p>
													</div>
												</div>
												<div class="d-flex">
													<a class="hover-icon a-camera" data-target="#structure-modal-IMG1" data-toggle="modal" href="#">
														<i class="h2 mb-0 fas fa-camera"></i>
													</a>
												</div>
											</div>
											<ul>
												<li>Acceso a internet.</li>
												<li>Facilita el manejo de base de datos.</li>
											</ul>
											<!-- <p class="mb-0">- Acceso a internet.</p>
											<p class="mb-0">- Facilita el manejo de base de datos.</p> -->
											<div class="text-center mt-2 dl-menus">
												<ul class="dl-menu">
													<li data-animation="14" data-to="2"><a class="link-bd abox mb-0" href="#">Más sobre base de datos</a></li>
												</ul>
											</div>
										</div>
										<hr>
										<div>
											<div class="d-flex justify-content-between mb-3">
												<div class="d-flex">
													<i class="h2 mb-0 far fa-clock mr-2"></i>
													<div class="d-inline-block">
														<p class="mb-0">HORARIOS DE ATENCIÓN:</p>
														<div>
															<p class="mb-0 d-block d-md-inline-block">Lunes a Sábado&nbsp;</p>
															<p class="mb-0 d-block d-md-inline-block">8:15 a.m. a 8:00 p.m.</p>
														</div>
													</div>
												</div>
												<div class="d-flex">
													<i class="h2 mb-0 fas fa-map-marker-alt mr-2"></i>
													<div class="d-inline-block">
														<p class="mb-0">NIVEL:</p>
														<p class="mb-0">1</p>
													</div>
												</div>
												<div class="d-flex">
													<a class="hover-icon a-camera" data-target="#structure-modal-IMG8" data-toggle="modal" href="#">
														<i class="h2 mb-0 fas fa-camera"></i>
													</a>
												</div>
											</div>
											<ul>
												<li>Acceso a internet.</li>
												<li>Facilita el acceso a los recursos electrónicos de la UNMSM y para los trabajos académicos.</li>
											</ul>
											<!-- <p class="mb-0">- Acceso a internet.</p>
											<p class="mb-0">- Facilita el acceso a los recursos electrónicos de la UNMSM y para los trabajos académicos.</p> -->
										</div>
									</div>
									<div id="l-cont7" class="d-none movercont3">
										<div>
											<div class="d-flex justify-content-between mb-3">
												<div class="d-flex">
													<i class="h2 mb-0 far fa-clock mr-2"></i>
													<div class="d-inline-block">
														<p class="mb-0">ATENCIÓN E INFORMES:</p>
														<p class="mb-0">Módulo de registro - Sala de lectura del segundo nivel</p>
														<p class="mb-0">HORARIO:</p>
														<p class="mb-0 d-block d-md-inline-block">Lunes a Sábado&nbsp;</p>
														<p class="mb-0 d-block d-md-inline-block">8:15 a.m. a 8:00 p.m.</p>
													</div>
												</div>
												<div class="d-flex">
													<i class="h2 mb-0 fas fa-map-marker-alt mr-2"></i>
													<div class="d-inline-block">
														<p class="mb-0">NIVEL:</p>
														<p class="mb-0">2</p>
													</div>
												</div>
												<div class="d-flex">
													<a class="hover-icon a-camera" data-target="#structure-modal-IMG3" data-toggle="modal" href="#">
														<i class="h2 mb-0 fas fa-camera"></i>
													</a>
												</div>
											</div>
											<ul>
												<li>6 ambientes.</li>
												<li>Ingresan de 3 a 6 alumnos por cubículo.</li>
											</ul>
											<!-- <p class="mb-0">- 6 ambientes.</p>
											<p class="mb-0">- Ingresan de 3 a 6 alumnos por cubículo.</p> -->
										</div>
										<hr>
										<div>
											<div class="d-flex justify-content-between mb-3">
												<div class="d-flex">
													<i class="h2 mb-0 far fa-clock mr-2"></i>
													<div class="d-inline-block">
														<p class="mb-0">ATENCIÓN E INFORMES:</p>
														<p class="mb-0">Módulo de registro - Sala de lectura del primer nivel</p>
														<p class="mb-0">HORARIO:</p>
														<p class="mb-0 d-block d-md-inline-block">Lunes a Sábado&nbsp;</p>
														<p class="mb-0 d-block d-md-inline-block">8:15 a.m. a 8:00 p.m.</p>
													</div>
												</div>
												<div class="d-flex">
													<i class="h2 mb-0 fas fa-map-marker-alt mr-2"></i>
													<div class="d-inline-block">
														<p class="mb-0">NIVEL:</p>
														<p class="mb-0">1</p>
													</div>
												</div>
												<div class="d-flex">
													<a class="hover-icon a-camera" data-target="#structure-modal-IMG5" data-toggle="modal" href="#">
														<i class="h2 mb-0 fas fa-camera"></i>
													</a>
												</div>
											</div>
											<ul>
												<li>7 ambientes.</li>
												<li>Ingresan de 3 a 6 alumnos por cubículo.</li>
											</ul>
											<!-- <p class="mb-0">- 7 ambientes.</p>
											<p class="mb-0">- Ingresan de 3 a 6 alumnos por cubículo.</p> -->
										</div>
									</div>
									<div id="l-cont8" class="d-none movercont3">
										<div>
											<div class="d-flex justify-content-between mb-3">
												<div class="d-flex">
													<i class="h2 mb-0 far fa-clock mr-2"></i>
													<div class="d-inline-block">
														<p class="mb-0">HORARIO DE ATENCIÓN:</p>
														<p class="mb-0 d-block d-md-inline-block">Lunes a Sábado&nbsp;</p>
														<p class="mb-0 d-block d-md-inline-block">8:15 a.m. a 8:00 p.m.</p>
													</div>
												</div>
												<div class="d-flex">
													<i class="h2 mb-0 fas fa-map-marker-alt mr-2"></i>
													<div class="d-inline-block">
														<p class="mb-0">NIVEL:</p>
														<p class="mb-0">1</p>
													</div>
												</div>
												<div class="d-flex">
													<a class="hover-icon a-camera" data-target="#structure-modal-IMG9" data-toggle="modal" href="#">
														<i class="h2 mb-0 fas fa-camera"></i>
													</a>
												</div>
											</div>
											<p class="mb-0">Equipos y softwares para el manejo independiente de la computadora y lectura del material.</p>
										</div>

									</div>

									<div id="l-cont9" class="d-none movercont3">
										<div>
											<div class="d-flex justify-content-between mb-3">
												<div class="d-flex">
													<i class="h2 mb-0 far fa-clock mr-2"></i>
													<div class="d-inline-block">
														<p class="mb-0">HORARIO DE ATENCIÓN:</p>
														<p class="mb-0 d-block d-md-inline-block">Lunes a Sábado&nbsp;</p>
														<p class="mb-0 d-block d-md-inline-block">8:15 a.m. a 8:00 p.m.</p>
													</div>
												</div>
												<div class="d-flex">
													<i class="h2 mb-0 fas fa-map-marker-alt mr-2"></i>
													<div class="d-inline-block">
														<p class="mb-0">NIVEL:</p>
														<p class="mb-0">0</p>
													</div>
												</div>
												<!-- <div class="d-flex">
													<a class="hover-icon a-camera" data-target="#structure-modal-IMG9" data-toggle="modal" href="#">
														<i class="h2 mb-0 fas fa-camera"></i>
													</a>
												</div> -->
											</div>
											<ul>
												<li>Ambiente diseñado para la realización de eventos académicos (conferencias, congresos, cursos, etc.) y culturales.</li>
												<li>Características:
													<ul>
														<li>Aforo 400 personas.</li>
														<li>Escenario de 10 metros de ancho por 4 de profundidad.</li>
														<li>Acceso a internet.</li>
														<li>Proyector multimedia.</li>
														<li>Ecran panorámico.</li>
														<li>Sistema de aire acondicionado.</li>
														<li>Equipos de audio y sonido profesional.</li>
														<li>Iluminación ambiental y escénica.</li>
													</ul>
												</li>
											</ul>
											<p class="mb-0">¿Desea realizar un evento en el auditorio?, para mayor información contactarse con la Unidad de Coordinación Cultural:</p>
											<p class="mb-0">Correo: fredy.vidalon@unmsm.edu.pe</p>
											<!-- <p class="mb-0">Horario de atención: De Lunes a Sábado de 8:15 a.m. a 8:00 p.m.</p> -->
											<p class="mb-0">Teléfonos: 619-7000, anexo 7619 ó 515-8023, anexo 205</p>
										</div>

									</div>
									
								</div>
								
							</div>
						</div>

						<!-- MODAL DE TABS -->
						<div style="background-color: rgba(0, 0, 0, 0.5);" class="modal fade modal-img" id="structure-modal-IMG1" tabindex="-1" role="dialog" aria-labelledby="modalIMGLabel" aria-hidden="true">
						  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
						    <div class="modal-content">
						      <div class="modal-body">
						      	<button style="position: absolute; top: 20px; right: 20px;" type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						        <img src="assets/principal/images/servicios/SALA DE LAPTOPS (2).JPG" alt="" style="width:100%">
						      </div>
						    </div>
						  </div>
						</div>

						<div style="background-color: rgba(0, 0, 0, 0.5);" class="modal fade modal-img" id="structure-modal-IMG2" tabindex="-1" role="dialog" aria-labelledby="modalIMGLabel" aria-hidden="true">
						  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
						    <div class="modal-content">
						      <div class="modal-body">
						      	<button style="position: absolute; top: 20px; right: 20px;" type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						        <img src="assets/principal/images/servicios/SALA UNIVERSIA (2).JPG" alt="" style="width:100%">
						      </div>
						    </div>
						  </div>
						</div>

						<div style="background-color: rgba(0, 0, 0, 0.5);" class="modal fade modal-img" id="structure-modal-IMG3" tabindex="-1" role="dialog" aria-labelledby="modalIMGLabel" aria-hidden="true">
						  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
						    <div class="modal-content">
						      <div class="modal-body">
						      	<button style="position: absolute; top: 20px; right: 20px;" type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						        <img src="assets/principal/images/servicios/CUBICULOS DE ESTUDIO GRUPAL (2).JPG" alt="" style="width:100%">
						      </div>
						    </div>
						  </div>
						</div>

						<div style="background-color: rgba(0, 0, 0, 0.5);" class="modal fade modal-img" id="structure-modal-IMG4" tabindex="-1" role="dialog" aria-labelledby="modalIMGLabel" aria-hidden="true">
						  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
						    <div class="modal-content">
						      <div class="modal-body">
						      	<button style="position: absolute; top: 20px; right: 20px;" type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						        <img src="assets/principal/images/servicios/ESPACIOS DE LECTURA 2DO NIVEL.JPG" alt="" style="width:100%">
						      </div>
						    </div>
						  </div>
						</div>

						<div style="background-color: rgba(0, 0, 0, 0.5);" class="modal fade modal-img" id="structure-modal-IMG5" tabindex="-1" role="dialog" aria-labelledby="modalIMGLabel" aria-hidden="true">
						  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
						    <div class="modal-content">
						      <div class="modal-body">
						      	<button style="position: absolute; top: 20px; right: 20px;" type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						        <img src="assets/principal/images/servicios/CUBICULOS DE ESTUDIO GRUPAL.JPG" alt="" style="width:100%">
						      </div>
						    </div>
						  </div>
						</div>

						<div style="background-color: rgba(0, 0, 0, 0.5);" class="modal fade modal-img" id="structure-modal-IMG6" tabindex="-1" role="dialog" aria-labelledby="modalIMGLabel" aria-hidden="true">
						  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
						    <div class="modal-content">
						      <div class="modal-body">
						      	<button style="position: absolute; top: 20px; right: 20px;" type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						        <img src="assets/principal/images/servicios/SALA DE HUMANIDADES.JPG" alt="" style="width:100%">
						      </div>
						    </div>
						  </div>
						</div>

						<div style="background-color: rgba(0, 0, 0, 0.5);" class="modal fade modal-img" id="structure-modal-IMG7" tabindex="-1" role="dialog" aria-labelledby="modalIMGLabel" aria-hidden="true">
						  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
						    <div class="modal-content">
						      <div class="modal-body">
						      	<button style="position: absolute; top: 20px; right: 20px;" type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						        <img src="assets/principal/images/servicios/SALA DE HUMANIDADES (4).JPG" alt="" style="width:100%">
						      </div>
						    </div>
						  </div>
						</div>

						<div style="background-color: rgba(0, 0, 0, 0.5);" class="modal fade modal-img" id="structure-modal-IMG8" tabindex="-1" role="dialog" aria-labelledby="modalIMGLabel" aria-hidden="true">
						  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
						    <div class="modal-content">
						      <div class="modal-body">
						      	<button style="position: absolute; top: 20px; right: 20px;" type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						        <img src="assets/principal/images/servicios/PRESTAMO DE COMPUTADORAS.JPG" alt="" style="width:100%">
						      </div>
						    </div>
						  </div>
						</div>

						<div style="background-color: rgba(0, 0, 0, 0.5);" class="modal fade modal-img" id="structure-modal-IMG9" tabindex="-1" role="dialog" aria-labelledby="modalIMGLabel" aria-hidden="true">
						  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
						    <div class="modal-content">
						      <div class="modal-body">
						      	<button style="position: absolute; top: 20px; right: 20px;" type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						        <img src="assets/principal/images/servicios/SALA LIMITACION VISUAL (2).JPG" alt="" style="width:100%">
						      </div>
						    </div>
						  </div>
						</div>

						<div style="background-color: rgba(0, 0, 0, 0.5);" class="modal fade modal-img" id="structure-modal-IMG10" tabindex="-1" role="dialog" aria-labelledby="modalIMGLabel" aria-hidden="true">
						  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
						    <div class="modal-content">
						      <div class="modal-body">
						      	<button style="position: absolute; top: 20px; right: 20px;" type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						        <img src="assets/principal/images/servicios/SALA EXPOSICIONES.JPG" alt="" style="width:100%">
						      </div>
						    </div>
						  </div>
						</div>

						<div style="background-color: rgba(0, 0, 0, 0.5);" class="modal fade modal-img" id="structure-modal-IMG11" tabindex="-1" role="dialog" aria-labelledby="modalIMGLabel" aria-hidden="true">
						  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
						    <div class="modal-content">
						      <div class="modal-body">
						      	<button style="position: absolute; top: 20px; right: 20px;" type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						        <img src="assets/principal/images/servicios/FONDO RESERVADO.JPG" alt="" style="width:100%">
						      </div>
						    </div>
						  </div>
						</div>

						<div style="background-color: rgba(0, 0, 0, 0.5);" class="modal fade modal-img" id="structure-modal-IMG12" tabindex="-1" role="dialog" aria-labelledby="modalIMGLabel" aria-hidden="true">
						  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
						    <div class="modal-content">
						      <div class="modal-body">
						      	<button style="position: absolute; top: 20px; right: 20px;" type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						        <img src="assets/principal/images/servicios/FONDO RESERVADO.JPG" alt="" style="width:100%">
						      </div>
						    </div>
						  </div>
						</div>

						<div style="background-color: rgba(0, 0, 0, 0.5);" class="modal fade modal-img" id="structure-modal-IMG13" tabindex="-1" role="dialog" aria-labelledby="modalIMGLabel" aria-hidden="true">
						  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
						    <div class="modal-content">
						      <div class="modal-body">
						      	<button style="position: absolute; top: 20px; right: 20px;" type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						        <img src="assets/principal/images/servicios/HEMEROTECA (3).JPG" alt="" style="width:100%">
						      </div>
						    </div>
						  </div>
						</div>

						<div style="background-color: rgba(0, 0, 0, 0.5);" class="modal fade" id="colecciones-modal" tabindex="-1" role="dialog" aria-labelledby="ColeccionesModalTitle" aria-hidden="true">
				            <div style="max-width: 900px;" class="modal-dialog modal-dialog-centered" role="document">
				                <div class="modal-content">
				                    <div class="modal-header">
				                        <h5 class="modal-title" id="ColeccionesModalTitle">Sala de Fondo Reservado</h5>
				                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				                            <span aria-hidden="true">&times;</span>
				                        </button>
				                    </div>
				                    <div class="modal-body">
				                    	<p>La colección del Fondo Reservado fue seleccionada entre 1995 y 1996, por un grupo de profesores dirigidos por el Dr. Raúl Rivera Serna, en el que se encontraba el Dr. Miguel Marticorena y la profesora de literatura Esther Castañeda. De esta forma, se determinaron los materiales con que contaría esta sala, a partir de colecciones antiguas y valiosas de la Universidad.</p>
				                    <div class="w-100">
				                        <div class="slide-photo-modal-2" style="margin: 30px auto; width: 40%;">
					                        <div class="container-photos">
					                          <div class="mySlides">
					                            <div class="numbertext">1 / 5</div>
					                                <img src="assets/principal/images/colec_fondor/fondo_reservado_1.jpg" style="width:100%">
					                          </div>

					                          <div class="mySlides">
					                            <div class="numbertext">2 / 5</div>
					                                <img src="assets/principal/images/colec_fondor/fondo_reservado_2.JPG" style="width:100%">
					                          </div>

					                          <div class="mySlides">
					                            <div class="numbertext">3 / 5</div>
					                                <img src="assets/principal/images/colec_fondor/fondo_reservado_3.JPG" style="width:100%">
					                          </div>
					                            
					                          <div class="mySlides">
					                            <div class="numbertext">4 / 5</div>
					                                <img src="assets/principal/images/colec_fondor/fondo_reservado_4.JPG" style="width:100%">
					                          </div>

					                          <div class="mySlides">
					                            <div class="numbertext">5 / 5</div>
					                                <img src="assets/principal/images/colec_fondor/fondo_reservado_5.jpg" style="width:100%">
					                          </div>
					                            
					                          <a class="prev" onclick="plusSlides(-1)">❮</a>
					                          <a class="next" onclick="plusSlides(1)">❯</a>

					                          <div class="caption-container">
					                            <p id="caption"></p>
					                          </div>

					                          <div class="row-photos">
					                            <div class="column">
					                              <img class="demo cursor" src="assets/principal/images/colec_fondor/fondo_reservado_1.jpg" style="width:100%" onclick="currentSlide(1)" alt="">
					                            </div>
					                            <div class="column">
					                              <img class="demo cursor" src="assets/principal/images/colec_fondor/fondo_reservado_2.jpg" style="width:100%" onclick="currentSlide(2)" alt="">
					                            </div>
					                            <div class="column">
					                              <img class="demo cursor" src="assets/principal/images/colec_fondor/fondo_reservado_3.jpg" style="width:100%" onclick="currentSlide(3)" alt="">
					                            </div>
					                            <div class="column">
					                              <img class="demo cursor" src="assets/principal/images/colec_fondor/fondo_reservado_4.jpg" style="width:100%" onclick="currentSlide(4)" alt="">
					                            </div>
					                            <div class="column">
					                              <img class="demo cursor" src="assets/principal/images/colec_fondor/fondo_reservado_5.jpg" style="width:100%" onclick="currentSlide(5)" alt="">
					                            </div>    
					                          </div>
					                        </div>
					                    </div>
					                </div>

				                    </div>
				                    <div class="modal-footer">
				                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
				                    </div>
				                </div>
				            </div>
				        </div>

						</div>

						<!-- FIN DE TABS IZQUIERDA -->						

					</div><!-- FIN CONTENEDOR OPCION 1 - TODOS LOS SERVICIOS - IZQUIERDA -->

<!-- CONTENEDOR OPCION 2 - BIBLIOTECAS - IZQUIERDA -->	

					<div class="white-section section-bibliotecas py-4 py-sm-5">
						<div>
						<div style="margin: auto;">
							<p class="sub-title-sisbib title-sisbib font-weight-bold text-uppercase">Sistema de bibliotecas</p>
						</div>

						<ul class="nav nav-tabs" id="myTabIzq2" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="librero-tab" data-toggle="tab" href="#librero" role="tab" aria-controls="librero" aria-selected="true">Navegar por biblioteca</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="apps-tab" data-toggle="tab" href="#apps" role="tab" aria-controls="apps" aria-selected="false">Aplicaciones y Documentos</a>
							</li>
						</ul>

						<div class="tab-content" id="myTabContentIzq">
							<div class="px-2 py-2 py-lg-5 tab-pane fade show active" id="librero" role="tabpanel" aria-labelledby="librero-tab">
								 	<div class="sb-main mx-auto">
										<!-- <div style="width: 80%; margin: auto;"> -->


								 	    <!-- <div class="ttl v-word">SISTEMA DE BIBLIOTECAS</div> -->

								 	    <div class="libros">
								 	        <div class="w-lib">

								 	            <div class="grid-item">
								 	                <div class="sub-grid">
								 	                    <div class="book-group">
								 	                        <a data-target="#bib-modal-1" data-toggle="modal" href="#" title="Ciencias biológicas"><img src="assets/principal/images/bibliotecas/Ciencias biologicas.png" alt=""></a>
								 	                        <a data-target="#bib-modal-2" data-toggle="modal" href="#" title="Ciencias físicas"><img src="assets/principal/images/bibliotecas/Ciencias físicas.png" alt=""></a>
								 	                        <a data-target="#bib-modal-3" data-toggle="modal" href="#" title="Ciencias matemáticas"><img src="assets/principal/images/bibliotecas/Ciencias matemáticas.png" alt=""></a>
								 	                        <a data-target="#bib-modal-4" data-toggle="modal" href="#" title="Química e Ing. Química"><img src="assets/principal/images/bibliotecas/Química.png" alt=""></a>
								 	                    </div>
								 	                    
								 	                    <div class="name-category">Ciencias Básicas</div>
								 	                </div>
								 	            </div>

								 	            <div class="grid-item">
								 	                <div class="sub-grid">
								 	                    <div class="book-group">
								 	                        <a data-target="#bib-modal-5" data-toggle="modal" href="#" title="Farmacia y bioquímica"><img src="assets/principal/images/bibliotecas/Farmacia y bioquímica.png" alt=""></a>
								 	                        <a data-target="#bib-modal-6" data-toggle="modal" href="#" title="Medicina Veterinaria"><img src="assets/principal/images/bibliotecas/Medicna verterinaria.png" alt=""></a>
								 	                        <a data-target="#bib-modal-7" data-toggle="modal" href="#" title="Medicina"><img src="assets/principal/images/bibliotecas/Medicina.png" alt=""></a>
								 	                        <a data-target="#bib-modal-8" data-toggle="modal" href="#" title="Odontología"><img src="assets/principal/images/bibliotecas/Odontología.png" alt=""></a>
								 	                        <a data-target="#bib-modal-9" data-toggle="modal" href="#" title="Psicología"><img src="assets/principal/images/bibliotecas/Psicología.png" alt=""></a>
								 	                    </div>
								 	                    <div class="name-category">Ciencias de la Salud</div>
								 	                </div>
								 	            </div>

								 	            <div class="grid-item">
								 	                <div class="sub-grid">
								 	                    <div class="book-group">
								 	                        <a data-target="#bib-modal-10" data-toggle="modal" href="#" title="Ciencias Administrativas"><img src="assets/principal/images/bibliotecas/Ciencias administrativas.png" alt=""></a>
								 	                        <a data-target="#bib-modal-11" data-toggle="modal" href="#" title="Ciencias Contables"><img src="assets/principal/images/bibliotecas/Ciencias contables.png" alt=""></a>
								 	                        <a data-target="#bib-modal-12" data-toggle="modal" href="#" title="Ciencias Económicas"><img src="assets/principal/images/bibliotecas/Ciencias económicas.png" alt=""></a>
								 	                    </div>
								 	                    <div class="name-category">Cc. Económicas y de la Gestión</div>
								 	                </div>
								 	            </div>

								 	            <div class="grid-item">
								 	                <div class="sub-grid">
								 	                    <div class="book-group">
								 	                        <a data-target="#bib-modal-13" data-toggle="modal" href="#" title="Letras y Cc. Humanas"><img src="assets/principal/images/bibliotecas/Letras y ciencias humanas.png" alt=""></a>
								 	                        <a data-target="#bib-modal-14" data-toggle="modal" href="#" title="Educación"><img src="assets/principal/images/bibliotecas/Educación.png" alt=""></a>
								 	                        <a data-target="#bib-modal-15" data-toggle="modal" href="#" title="Ciencias Sociales"><img src="assets/principal/images/bibliotecas/Ciencias Sociales.png" alt=""></a>
								 	                        <a data-target="#bib-modal-16" data-toggle="modal" href="#" title="Derecho y Cc. Políticas"><img src="assets/principal/images/bibliotecas/Derecho y ciencias políticas.png" alt=""></a>
								 	                    </div>
								 	                    <div class="name-category">Humanidades, Cc. Jurídicas y Sociales</div>
								 	                </div>       
								 	            </div>

								 	            <div class="grid-item">
								 	                <div class="sub-grid">
								 	                    <div class="book-group">
								 	                        <a data-target="#bib-modal-17" data-toggle="modal" href="#" title="Electrónica y Eléctrica"><img src="assets/principal/images/bibliotecas/Electrónica y eléctrica.png" alt=""></a>
								 	                        <a data-target="#bib-modal-18" data-toggle="modal" href="#" title="Sistemas e Informática"><img src="assets/principal/images/bibliotecas/Sistemas e informática.png" alt=""></a>
								 	                        <a data-target="#bib-modal-19" data-toggle="modal" href="#" title="Geológica, Minera, Metalúrgica y Geográfica"><img src="assets/principal/images/bibliotecas/Geológica.png" alt=""></a>
								 	                        <a data-target="#bib-modal-20" data-toggle="modal" href="#" title="Industrial"><img src="assets/principal/images/bibliotecas/Industrial.png" alt=""></a>
								 	                    </div>
								 	                    <div class="name-category">Ingenierías</div>
								 	                </div>
								 	            </div>
								 	            <div class="grid-item">
								 	                <div class="sub-grid">
								 	                    <div class="book-group">
								 	                        <a data-target="#bib-modal-21" data-toggle="modal" href="#" title="Temple Radicati"><img src="assets/principal/images/bibliotecas/temple radicati.gif" alt=""></a>
								 	                    </div>
								 	                    <div class="name-category">Institutos de investigación</div>
								 	                </div>
								 	            </div>
								 	        </div>
								 	    </div>

								 	    <!-- Modal bib-modal-1 -->
								 	    <div style="background-color: rgba(0, 0, 0, 0.5);" class="modal fade" id="bib-modal-1" tabindex="-1" role="dialog" aria-labelledby="BibModalTitle1" aria-hidden="true">
								 	        <div style="max-width: 1000px;" class="modal-dialog modal-dialog-centered" role="document">
								 	            <div class="modal-content">
								 	                <div class="modal-header">
								 	                    <h5 class="modal-title" id="BibModalTitle1">Ciencias biológicas</h5>
								 	                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								 	                        <span aria-hidden="true">&times;</span>
								 	                    </button>
								 	                </div>
								 	                <div class="modal-body">
								 	                    ...
								 	                </div>
								 	                <div class="modal-footer">
								 	                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
								 	                </div>
								 	            </div>
								 	        </div>
								 	    </div>

								 	    <!-- Modal bib-modal-2 -->
								 	    <div style="background-color: rgba(0, 0, 0, 0.5);" class="modal fade" id="bib-modal-2" tabindex="-1" role="dialog" aria-labelledby="BibModalTitle2" aria-hidden="true">
								 	        <div style="max-width: 1000px;" class="modal-dialog modal-dialog-centered" role="document">
								 	            <div class="modal-content">
								 	                <div class="modal-header">
								 	                    <h5 class="modal-title" id="BibModalTitle2">Ciencias físicas</h5>
								 	                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								 	                        <span aria-hidden="true">&times;</span>
								 	                    </button>
								 	                </div>
								 	                <div class="modal-body">
								 	                    <p>
								 	                    	<b>UBICACIÓN</b>:<br>
								 	                    	Tercer piso de la Facultad de Ciencias Físicas
								 	                    </p>
								 	                    <p>
								 	                    	<b>HORARIOS</b>:<br>
								 	                    	<ul class="list-unstyled">
								 	                    		<li>Atención regular: 8 a.m. a 9 p.m.</li>
								 	                    		<li>Atención para visitantes (internos y externos): lunes, miércoles y viernes de 8 a.m. a 9 p.m.</li>
								 	                    	</ul>
								 	                    </p>
								 	                    <p>
								 	                    	<b>CONTACTO</b>:<br>
								 	                    	<ul class="list-unstyled">
								 	                    		<li>Teléfono:<br>
								 	                    		(511) 619-7000 anexo 3816</li>
								 	                    		<li>Correo:<br>
								 	                    		bibliofis@unmsm.edu.pe</li>
								 	                    		<li>Página Web:<br>
								 	                    		<a href="https://www.facebook.com/bibliotecacienciasfisicasunmsm" target="_blank">https://www.facebook.com/bibliotecacienciasfisicasunmsm</a></li>
								 	                    	</ul>
								 	                    </p>
								 	                    <p>
								 	                    	<b>SERVICIOS OFRECIDOS</b>:<br>
								 	                    	<ul class="list-unstyled">
								 	                    		<li>Bibliográficos (Préstamo de libros, tesis y folletos)</li>
								 	                    		<li>Hemerográficos (Préstamo de revistas y boletines)</li>
								 	                    		<li>Préstamo de equipos informáticos</li>
								 	                    		<li>Catálogo en Línea</li>
								 	                    		<li>Página Web</li>
								 	                    		<li>Uso de sala solo para lectura</li>
								 	                    	</ul>
								 	                    	
								 	                    </p>
								 	                    <p>
								 	                    	<ul class="list-unstyled">
								 	                    		<li><b>RECURSOS ELECTRÓNICOS SÓLO DE ACCESO EN ESTA BIBLIOTECA</b>: CD's</li>
								 	                    		<li><b>NÚMERO DE PUESTOS DE LECTURA</b>: 52</li>
								 	                    		<li><b>NÚMERO DE COMPUTADORAS CON ACCESO LIBRE</b>: 3</li>
								 	                    		<li><b>NÚMERO DE COMPUTADORAS DEDICADAS AL CATÁLOGO EN LÍNEA</b>: 1</li>
								 	                    	</ul>					 	                    	
								 	                    </p>
								 	                </div>
								 	                <div class="modal-footer">
								 	                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
								 	                </div>
								 	            </div>
								 	        </div>
								 	    </div>

								 	    <!-- Modal bib-modal-3 -->
								 	    <div style="background-color: rgba(0, 0, 0, 0.5);" class="modal fade" id="bib-modal-3" tabindex="-1" role="dialog" aria-labelledby="BibModalTitle3" aria-hidden="true">
								 	        <div style="max-width: 1000px;" class="modal-dialog modal-dialog-centered" role="document">
								 	            <div class="modal-content">
								 	                <div class="modal-header">
								 	                    <h5 class="modal-title" id="BibModalTitle3">Ciencias matemáticas</h5>
								 	                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								 	                        <span aria-hidden="true">&times;</span>
								 	                    </button>
								 	                </div>
								 	                <div class="modal-body">
								 	                    ...
								 	                </div>
								 	                <div class="modal-footer">
								 	                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
								 	                </div>
								 	            </div>
								 	        </div>
								 	    </div>

								 	    <!-- Modal bib-modal-4 -->
								 	    <div style="background-color: rgba(0, 0, 0, 0.5);" class="modal fade" id="bib-modal-4" tabindex="-1" role="dialog" aria-labelledby="BibModalTitle4" aria-hidden="true">
								 	        <div style="max-width: 1000px;" class="modal-dialog modal-dialog-centered" role="document">
								 	            <div class="modal-content">
								 	                <div class="modal-header">
								 	                    <h5 class="modal-title" id="BibModalTitle4">Química e Ing. Química</h5>
								 	                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								 	                        <span aria-hidden="true">&times;</span>
								 	                    </button>
								 	                </div>
								 	                <div class="modal-body">
								 	                    <p>
								 	                    	<b>UBICACIÓN</b>:<br>
								 	                    	Segundo piso del pabellón antiguo de la Facultad de Química e Ingeniería Química
								 	                    </p>
								 	                    <p>
								 	                    	<b>HORARIOS</b>:<br>
								 	                    	<ul class="list-unstyled">
								 	                    		<li>Atención regular: lunes a viernes 8:30 a.m. a 9: 45 p.m./ sábados hasta las 8:30 p.m.</li>
								 	                    		<li>Atención para visitantes (internos y externos): lunes y viernes de 8:30 a.m. a 9: 45 p.m.</li>
								 	                    	</ul>
								 	                    </p>
								 	                    <p>
								 	                    	<b>CONTACTO</b>:<br>
								 	                    	<ul class="list-unstyled">
								 	                    		<li>Teléfono:<br>
								 	                    		(511) 619-7000 anexo 1225</li>
								 	                    		<li>Correo:<br>
								 	                    		biblioteca.quimica@unmsm.edu.pe</li>
								 	                    	</ul>
								 	                    </p>
								 	                    <p>
								 	                    	<b>SERVICIOS OFRECIDOS</b>:<br>
								 	                    	<ul class="list-unstyled">
								 	                    		<li>Bibliográficos (Préstamo de libros, tesis y folletos)</li>
								 	                    		<li>Hemerográficos (Préstamo de revistas y boletines)</li>
								 	                    		<li>Préstamo de equipos informáticos</li>
								 	                    		<li>Cubículos de estudio grupal</li>
								 	                    		<li>Capacitaciones en Recursos Electrónicos</li>
								 	                    		<li>Catálogo en Línea</li>
								 	                    		<li>Uso de sala solo para lectura</li>
								 	                    	</ul>
								 	                    	
								 	                    </p>
								 	                    <p>
								 	                    	<ul class="list-unstyled">
								 	                    		<li><b>RECURSOS ELECTRÓNICOS SÓLO DE ACCESO EN ESTA BIBLIOTECA</b>: Recursos bibliográficos en CD y catálogos en PDF</li>
								 	                    		<li><b>NÚMERO DE PUESTOS DE LECTURA</b>: 132</li>
								 	                    		<li><b>NÚMERO DE COMPUTADORAS CON ACCESO LIBRE</b>: 8</li>
								 	                    		<li><b>NÚMERO DE COMPUTADORAS DEDICADAS AL CATÁLOGO EN LÍNEA</b>: 3</li>
								 	                    	</ul>					 	                    	
								 	                    </p>
								 	                </div>
								 	                <div class="modal-footer">
								 	                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
								 	                </div>
								 	            </div>
								 	        </div>
								 	    </div>

								 	    <!-- Modal bib-modal-5 -->
								 	    <div style="background-color: rgba(0, 0, 0, 0.5);" class="modal fade" id="bib-modal-5" tabindex="-1" role="dialog" aria-labelledby="BibModalTitle5" aria-hidden="true">
								 	        <div style="max-width: 1000px;" class="modal-dialog modal-dialog-centered" role="document">
								 	            <div class="modal-content">
								 	                <div class="modal-header">
								 	                    <h5 class="modal-title" id="BibModalTitle5">Farmacia y bioquímica</h5>
								 	                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								 	                        <span aria-hidden="true">&times;</span>
								 	                    </button>
								 	                </div>
								 	                <div class="modal-body">
								 	                    <p>
								 	                    	<b>UBICACIÓN</b>:<br>
								 	                    	Jr. Puno 1002- Cercado de Lima
								 	                    </p>
								 	                    <p>
								 	                    	<b>HORARIOS</b>:<br>
								 	                    	<ul class="list-unstyled">
								 	                    		<li>Atención regular: 8 a.m. a 8 p.m.</li>
								 	                    		<li>Atención para visitantes (internos y externos): martes de 8 a.m. a 8 p.m.</li>
								 	                    	</ul>
								 	                    </p>
								 	                    <p>
								 	                    	<b>CONTACTO</b>:<br>
								 	                    	<ul class="list-unstyled">
								 	                    		<li>Teléfono:<br>
								 	                    		(511) 619-7000 anexo 4815</li>
								 	                    		<li>Correo:<br>
								 	                    		bibfyb@unmsm.edu.pe</li>
								 	                    		<li>Página Web:<br>
								 	                    		<a href="https://farmacia.unmsm.edu.pe/index.php/unidad-de-biblioteca/" target="_blank">https://farmacia.unmsm.edu.pe/index.php/unidad-de-biblioteca/</a></li>
								 	                    	</ul>
								 	                    </p>
								 	                    <p>
								 	                    	<b>SERVICIOS OFRECIDOS</b>:<br>
								 	                    	<ul class="list-unstyled">
								 	                    		<li>Bibliográficos (Préstamo de libros, tesis y folletos)</li>
								 	                    		<li>Hemerográficos (Préstamo de revistas y boletines)</li>
								 	                    		<li>Préstamo de equipos informáticos</li>
								 	                    		<li>Cubículos de estudio grupal</li>
								 	                    		<li>Catálogo en Línea</li>
								 	                    		<li>Uso de sala solo para lectura</li>
								 	                    	</ul>
								 	                    	
								 	                    </p>
								 	                    <p>
								 	                    	<ul class="list-unstyled">
								 	                    		<li><b>NÚMERO DE PUESTOS DE LECTURA</b>: 63</li>
								 	                    		<li><b>NÚMERO DE COMPUTADORAS CON ACCESO LIBRE</b>: 24</li>
								 	                    		<li><b>NÚMERO DE COMPUTADORAS DEDICADAS AL CATÁLOGO EN LÍNEA</b>: 2</li>
								 	                    	</ul>					 	                    	
								 	                    </p>
								 	                </div>
								 	                <div class="modal-footer">
								 	                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
								 	                </div>
								 	            </div>
								 	        </div>
								 	    </div>

								 	    <!-- Modal bib-modal-6 -->
								 	    <div style="background-color: rgba(0, 0, 0, 0.5);" class="modal fade" id="bib-modal-6" tabindex="-1" role="dialog" aria-labelledby="BibModalTitle6" aria-hidden="true">
								 	        <div style="max-width: 1000px;" class="modal-dialog modal-dialog-centered" role="document">
								 	            <div class="modal-content">
								 	                <div class="modal-header">
								 	                    <h5 class="modal-title" id="BibModalTitle6">Medicina Veterinaria</h5>
								 	                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								 	                        <span aria-hidden="true">&times;</span>
								 	                    </button>
								 	                </div>
								 	                <div class="modal-body">
								 	                    <p>
								 	                    	<b>UBICACIÓN</b>:<br>
								 	                    	Av. Circunvalación Cdra. 28. Edificio Central Administrativo. 2do Piso
								 	                    </p>
								 	                    <p>
								 	                    	<b>HORARIOS</b>:<br>
								 	                    	<ul class="list-unstyled">
								 	                    		<li>Atención regular: lunes a viernes de 8 a.m. a 5:45 p.m.</li>
								 	                    		<li>Atención para visitantes (internos y externos): lunes a viernes de 8 a.m. a 5:45 p.m.</li>
								 	                    	</ul>
								 	                    </p>
								 	                    <p>
								 	                    	<b>CONTACTO</b>:<br>
								 	                    	<ul class="list-unstyled">
								 	                    		<li>Teléfono:<br>
								 	                    		(511) 619-7000 anexo 5027</li>
								 	                    		<li>Correo:<br>
								 	                    		biblioteca.veterinaria@unmsm.edu.pe</li>
								 	                    		<li>Página Web:<br>
								 	                    		<a href="https://veterinaria.unmsm.edu.pe/vicedecanatoacad.html#planif" target="_blank">https://veterinaria.unmsm.edu.pe/vicedecanatoacad.html#planif</a></li>
								 	                    	</ul>
								 	                    </p>
								 	                    <p>
								 	                    	<b>SERVICIOS OFRECIDOS</b>:<br>
								 	                    	<ul class="list-unstyled">
								 	                    		<li>Bibliográficos (Préstamo de libros, tesis y folletos)</li>
								 	                    		<li>Hemerográficos (Préstamo de revistas y boletines)</li>
								 	                    		<li>Préstamo de equipos informáticos</li>
								 	                    		<li>Cubículos de estudio grupal</li>
								 	                    		<li>Uso de sala solo para lectura</li>
								 	                    	</ul>
								 	                    	
								 	                    </p>
								 	                    <p>
								 	                    	<ul class="list-unstyled">
								 	                    		<li><b>NÚMERO DE PUESTOS DE LECTURA</b>: 66</li>
								 	                    	</ul>					 	                    	
								 	                    </p>
								 	                </div>
								 	                <div class="modal-footer">
								 	                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
								 	                </div>
								 	            </div>
								 	        </div>
								 	    </div>

								 	    <!-- Modal bib-modal-7 -->
								 	    <div style="background-color: rgba(0, 0, 0, 0.5);" class="modal fade" id="bib-modal-7" tabindex="-1" role="dialog" aria-labelledby="BibModalTitle7" aria-hidden="true">
								 	        <div style="max-width: 1000px;" class="modal-dialog modal-dialog-centered" role="document">
								 	            <div class="modal-content">
								 	                <div class="modal-header">
								 	                    <h5 class="modal-title" id="BibModalTitle7">Medicina</h5>
								 	                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								 	                        <span aria-hidden="true">&times;</span>
								 	                    </button>
								 	                </div>
								 	                <div class="modal-body">
								 	                    <p>
								 	                    	<b>UBICACIÓN</b>:<br>
								 	                    	Avenida Grau 755 Cercado de Lima
								 	                    </p>
								 	                    <p>
								 	                    	<b>HORARIOS</b>:<br>
								 	                    	<ul class="list-unstyled">
								 	                    		<li>Atención regular: 8:30 a.m. a 7:45 p.m.</li>
								 	                    		<li>Atención para visitantes (internos y externos): lunes a viernes de 8:30 a.m. a 3:30 p.m.</li>
								 	                    	</ul>
								 	                    </p>
								 	                    <p>
								 	                    	<b>CONTACTO</b>:<br>
								 	                    	<ul class="list-unstyled">
								 	                    		<li>Teléfono:<br>
								 	                    		(511) 619-7000</li>
								 	                    		<li>Celular:<br>
								 	                    		993764612</li>
								 	                    		<li>Correo:<br>
								 	                    		ubiblioteca.medicina@unmsm.edu.pe</li>
								 	                    		<li>Página Web:<br>
								 	                    		<a href="https://medicina.unmsm.edu.pe/index.php/en/pages/biblioteca" target="_blank">https://medicina.unmsm.edu.pe/index.php/en/pages/biblioteca</a></li>
								 	                    	</ul>
								 	                    </p>
								 	                    <p>
								 	                    	<b>SERVICIOS OFRECIDOS</b>:<br>
								 	                    	<ul class="list-unstyled">
								 	                    		<li>Bibliográficos (Préstamo de libros, tesis y folletos)</li>
								 	                    		<li>Hemerográficos (Préstamo de revistas y boletines)</li>
								 	                    		<li>Capacitaciones en Recursos Electrónicos</li>
								 	                    		<li>Catálogo en Línea</li>
								 	                    		<li>Página Web</li>
								 	                    		<li>Uso de sala solo para lectura</li>
								 	                    	</ul>
								 	                    	
								 	                    </p>
								 	                    <p>
								 	                    	<ul class="list-unstyled">
								 	                    		<li><b>RECURSOS ELECTRÓNICOS SÓLO DE ACCESO EN ESTA BIBLIOTECA</b>: Dynamed / Enfermería al día</li>
								 	                    		<li><b>NÚMERO DE PUESTOS DE LECTURA</b>: 200</li>
								 	                    		<li><b>NÚMERO DE COMPUTADORAS CON ACCESO LIBRE</b>: 20</li>
								 	                    		<li><b>NÚMERO DE COMPUTADORAS DEDICADAS AL CATÁLOGO EN LÍNEA</b>: 3</li>
								 	                    	</ul>					 	                    	
								 	                    </p>
								 	                </div>
								 	                <div class="modal-footer">
								 	                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
								 	                </div>
								 	            </div>
								 	        </div>
								 	    </div>

								 	    <!-- Modal bib-modal-8 -->
								 	    <div style="background-color: rgba(0, 0, 0, 0.5);" class="modal fade" id="bib-modal-8" tabindex="-1" role="dialog" aria-labelledby="BibModalTitle8" aria-hidden="true">
								 	        <div style="max-width: 1000px;" class="modal-dialog modal-dialog-centered" role="document">
								 	            <div class="modal-content">
								 	                <div class="modal-header">
								 	                    <h5 class="modal-title" id="BibModalTitle8">Odontología</h5>
								 	                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								 	                        <span aria-hidden="true">&times;</span>
								 	                    </button>
								 	                </div>
								 	                <div class="modal-body">
								 	                    <p>
								 	                    	<b>UBICACIÓN</b>:<br>
								 	                    	Segundo piso de la Facultad de Odontología
								 	                    </p>
								 	                    <p>
								 	                    	<b>HORARIOS</b>:<br>
								 	                    	<ul class="list-unstyled">
								 	                    		<li>Atención regular: 9 a.m. a 6 p.m.</li>
								 	                    		<li>Atención para visitantes (internos y externos): 9 a.m. a 6 p.m.</li>
								 	                    	</ul>
								 	                    </p>
								 	                    <p>
								 	                    	<b>CONTACTO</b>:<br>
								 	                    	<ul class="list-unstyled">
								 	                    		<li>Teléfono:<br>
								 	                    		(511) 619-7000</li>
								 	                    		<li>Correo:<br>
								 	                    		bibodont@unmsm.edu.pe</li>
								 	                    		<li>Página Web:<br>
								 	                    		<a href="https://odontologia.unmsm.edu.pe/biblioteca/" target="_blank">https://odontologia.unmsm.edu.pe/biblioteca/</a></li>
								 	                    	</ul>
								 	                    </p>
								 	                    <p>
								 	                    	<b>SERVICIOS OFRECIDOS</b>:<br>
								 	                    	<ul class="list-unstyled">
								 	                    		<li>Bibliográficos (Préstamo de libros, tesis y folletos)</li>
								 	                    		<li>Hemerográficos (Préstamo de revistas y boletines)</li>
								 	                    		<li>Catálogo en Línea</li>
								 	                    		<li>Uso de sala solo para lectura</li>
								 	                    	</ul>
								 	                    	
								 	                    </p>
								 	                    <p>
								 	                    	<ul class="list-unstyled">
								 	                    		<li><b>NÚMERO DE PUESTOS DE LECTURA</b>: 48</li>
								 	                    		<li><b>NÚMERO DE COMPUTADORAS DEDICADAS AL CATÁLOGO EN LÍNEA</b>: 2</li>
								 	                    	</ul>					 	                    	
								 	                    </p>
								 	                </div>
								 	                <div class="modal-footer">
								 	                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
								 	                </div>
								 	            </div>
								 	        </div>
								 	    </div>

								 	    <!-- Modal bib-modal-9 -->
								 	    <div style="background-color: rgba(0, 0, 0, 0.5);" class="modal fade" id="bib-modal-9" tabindex="-1" role="dialog" aria-labelledby="BibModalTitle9" aria-hidden="true">
								 	        <div style="max-width: 1000px;" class="modal-dialog modal-dialog-centered" role="document">
								 	            <div class="modal-content">
								 	                <div class="modal-header">
								 	                    <h5 class="modal-title" id="BibModalTitle9">Psicología</h5>
								 	                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								 	                        <span aria-hidden="true">&times;</span>
								 	                    </button>
								 	                </div>
								 	                <div class="modal-body">
								 	                    <p>
								 	                    	<b>UBICACIÓN</b>:<br>
								 	                    	Tercer piso de la Facultad de Psicología
								 	                    </p>
								 	                    <p>
								 	                    	<b>HORARIOS</b>:<br>
								 	                    	<ul class="list-unstyled">
								 	                    		<li>Atención regular: lunes a viernes de 9 a.m. a 1 p.m. y de 2 a 9 p.m./ sábados de 2 a 5:30 p.m.</li>
								 	                    		<li>Atención para visitantes: internos (lunes y miércoles: 9 a.m. a 1 p.m. y 2 a 9 p.m.), externos (martes y jueves de 9 a.m. a 1 p.m. y de 2 a 9 p.m.)</li>
								 	                    	</ul>
								 	                    </p>
								 	                    <p>
								 	                    	<b>CONTACTO</b>:<br>
								 	                    	<ul class="list-unstyled">
								 	                    		<li>Teléfono:<br>
								 	                    		(511) 619-7000 anexo 3219</li>
								 	                    		<li>Correo:<br>
								 	                    		dchavezl_af@unmsm.edu.pe</li>
								 	                    	</ul>
								 	                    </p>
								 	                    <p>
								 	                    	<b>SERVICIOS OFRECIDOS</b>:<br>
								 	                    	<ul class="list-unstyled">
								 	                    		<li>Bibliográficos (Préstamo de libros, tesis y folletos)</li>
								 	                    		<li>Cubículos de estudio grupal</li>
								 	                    		<li>Catálogo en Línea</li>
								 	                    		<li>Uso de sala solo para lectura</li>
								 	                    	</ul>
								 	                    	
								 	                    </p>
								 	                    <p>
								 	                    	<ul class="list-unstyled">
								 	                    		<li><b>NÚMERO DE PUESTOS DE LECTURA</b>: 101</li>
								 	                    		<li><b>NÚMERO DE COMPUTADORAS DEDICADAS AL CATÁLOGO EN LÍNEA</b>: 3</li>
								 	                    	</ul>					 	                    	
								 	                    </p>
								 	                </div>
								 	                <div class="modal-footer">
								 	                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
								 	                </div>
								 	            </div>
								 	        </div>
								 	    </div>

								 	    <!-- Modal bib-modal-10 -->
								 	    <div style="background-color: rgba(0, 0, 0, 0.5);" class="modal fade" id="bib-modal-10" tabindex="-1" role="dialog" aria-labelledby="BibModalTitle10" aria-hidden="true">
								 	        <div style="max-width: 1000px;" class="modal-dialog modal-dialog-centered" role="document">
								 	            <div class="modal-content">
								 	                <div class="modal-header">
								 	                    <h5 class="modal-title" id="BibModalTitle10">Ciencias Administrativas</h5>
								 	                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								 	                        <span aria-hidden="true">&times;</span>
								 	                    </button>
								 	                </div>
								 	                <div class="modal-body">
								 	                    <p>
								 	                    	<b>UBICACIÓN</b>:<br>
								 	                    	Sótano de la Facultad de Ciencias Contables
								 	                    </p>
								 	                    <p>
								 	                    	<b>HORARIOS</b>:<br>
								 	                    	<ul class="list-unstyled">
								 	                    		<li>Atención regular: 8 a.m. a 9 p.m.</li>
								 	                    		<li>Atención para visitantes (internos y externos): jueves de 8 a.m. a 6 p.m.</li>
								 	                    	</ul>
								 	                    </p>
								 	                    <p>
								 	                    	<b>CONTACTO</b>:<br>
								 	                    	<ul class="list-unstyled">
								 	                    		<li>Teléfono:<br>
								 	                    		(511) 619-7000</li>
								 	                    		<li>Correo:<br>
								 	                    		mrojasy_af@unmsm.edu.pe</li>
								 	                    	</ul>
								 	                    </p>
								 	                    <p>
								 	                    	<b>SERVICIOS OFRECIDOS</b>:<br>
								 	                    	<ul class="list-unstyled">
								 	                    		<li>Bibliográficos (Préstamo de libros, tesis y folletos)</li>
								 	                    		<li>Hemerográficos (Préstamo de revistas y boletines)</li>
								 	                    		<li>Capacitaciones en Recursos Electrónicos</li>
								 	                    		<li>Catálogo en Línea</li>
								 	                    		<li>Página Web</li>
								 	                    		<li>Uso de sala solo para lectura</li>
								 	                    	</ul>
								 	                    	
								 	                    </p>
								 	                    <p>
								 	                    	<ul class="list-unstyled">
								 	                    		<li><b>RECURSOS ELECTRÓNICOS SÓLO DE ACCESO EN ESTA BIBLIOTECA</b>: E-books Cengage</li>
								 	                    		<li><b>NÚMERO DE PUESTOS DE LECTURA</b>: 12</li>
								 	                    		<li><b>NÚMERO DE COMPUTADORAS CON ACCESO LIBRE</b>:</li>
								 	                    		<li><b>NÚMERO DE COMPUTADORAS DEDICADAS AL CATÁLOGO EN LÍNEA</b>: 3</li>
								 	                    	</ul>					 	                    	
								 	                    </p>
								 	                </div>
								 	                <div class="modal-footer">
								 	                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
								 	                </div>
								 	            </div>
								 	        </div>
								 	    </div>

								 	    <!-- Modal bib-modal-11 -->
								 	    <div style="background-color: rgba(0, 0, 0, 0.5);" class="modal fade" id="bib-modal-11" tabindex="-1" role="dialog" aria-labelledby="BibModalTitle11" aria-hidden="true">
								 	        <div style="max-width: 1000px;" class="modal-dialog modal-dialog-centered" role="document">
								 	            <div class="modal-content">
								 	                <div class="modal-header">
								 	                    <h5 class="modal-title" id="BibModalTitle11">Ciencias Contables</h5>
								 	                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								 	                        <span aria-hidden="true">&times;</span>
								 	                    </button>
								 	                </div>
								 	                <div class="modal-body">
								 	                    <p>
								 	                    	<b>UBICACIÓN</b>:<br>
								 	                    	Tercer piso de la Facultad de Ciencias Contables
								 	                    </p>
								 	                    <p>
								 	                    	<b>HORARIOS</b>:<br>
								 	                    	<ul class="list-unstyled">
								 	                    		<li>Atención regular: lunes a viernes 8:30 a.m. a 9:30 p.m./ sábados de 9 a.m. a 5 p.m.</li>
								 	                    		<li>Atención para visitantes (internos y externos): martes y jueves de 9 a.m. a 9 p.m.</li>
								 	                    	</ul>
								 	                    </p>
								 	                    <p>
								 	                    	<b>CONTACTO</b>:<br>
								 	                    	<ul class="list-unstyled">
								 	                    		<li>Teléfono:<br>
								 	                    		(511) 619-7000 anexo 2414</li>
								 	                    		<li>Correo:<br>
								 	                    		bibcont@unmsm.edu.pe</li>
								 	                    		<li>Página Web:<br>
								 	                    		<a href="https://contabilidad.unmsm.edu.pe/" target="_blank">https://contabilidad.unmsm.edu.pe/</a></li>
								 	                    	</ul>
								 	                    </p>
								 	                    <p>
								 	                    	<b>SERVICIOS OFRECIDOS</b>:<br>
								 	                    	<ul class="list-unstyled">
								 	                    		<li>Bibliográficos (Préstamo de libros, tesis y folletos)</li>
								 	                    		<li>Hemerográficos (Préstamo de revistas y boletines)</li>
								 	                    		<li>Préstamo de equipos informáticos</li>
								 	                    		<li>Capacitaciones en Recursos Electrónicos</li>
								 	                    		<li>Catálogo en Línea</li>
								 	                    		<li>Uso de sala solo para lectura</li>
								 	                    	</ul>
								 	                    	
								 	                    </p>
								 	                    <p>
								 	                    	<ul class="list-unstyled">
								 	                    		<li><b>RECURSOS ELECTRÓNICOS SÓLO DE ACCESO EN ESTA BIBLIOTECA</b>: Biblioteca Virtual: Pearson, Cengage, Ecoe y McGraw-Hill</li>
								 	                    		<li><b>NÚMERO DE PUESTOS DE LECTURA</b>: 150</li>
								 	                    		<li><b>NÚMERO DE COMPUTADORAS CON ACCESO LIBRE</b>: 25</li>
								 	                    		<li><b>NÚMERO DE COMPUTADORAS DEDICADAS AL CATÁLOGO EN LÍNEA</b>: 6</li>
								 	                    	</ul>					 	                    	
								 	                    </p>
								 	                </div>
								 	                <div class="modal-footer">
								 	                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
								 	                </div>
								 	            </div>
								 	        </div>
								 	    </div>

								 	    <!-- Modal bib-modal-12 -->
								 	    <div style="background-color: rgba(0, 0, 0, 0.5);" class="modal fade" id="bib-modal-12" tabindex="-1" role="dialog" aria-labelledby="BibModalTitle12" aria-hidden="true">
								 	        <div style="max-width: 1000px;" class="modal-dialog modal-dialog-centered" role="document">
								 	            <div class="modal-content">
								 	                <div class="modal-header">
								 	                    <h5 class="modal-title" id="BibModalTitle12">Ciencias Económicas</h5>
								 	                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								 	                        <span aria-hidden="true">&times;</span>
								 	                    </button>
								 	                </div>
								 	                <div class="modal-body">
								 	                    <p>
								 	                    	<b>UBICACIÓN</b>:<br>
								 	                    	Sótano de la Facultad de Economía
								 	                    </p>
								 	                    <p>
								 	                    	<b>HORARIOS</b>:<br>
								 	                    	<ul class="list-unstyled">
								 	                    		<li>Atención regular: lunes a viernes de 8 a.m. a 10 p.m., sábados de 8 a.m. a 5 p.m.</li>
								 	                    		<li>Atención para visitantes: internos (martes y jueves), externos (miércoles)</li>
								 	                    	</ul>
								 	                    </p>
								 	                    <p>
								 	                    	<b>CONTACTO</b>:<br>
								 	                    	<ul class="list-unstyled">
								 	                    		<li>Teléfono:<br>
								 	                    		(511) 619-7000 anexo 2227</li>
								 	                    		<li>Correo:<br>
								 	                    		biblioteca.economia@unmsm.edu.pe</li>
								 	                    	</ul>
								 	                    </p>
								 	                    <p>
								 	                    	<b>SERVICIOS OFRECIDOS</b>:<br>
								 	                    	<ul class="list-unstyled">
								 	                    		<li>Bibliográficos (Préstamo de libros, tesis y folletos)</li>
								 	                    		<li>Hemerográficos (Préstamo de revistas y boletines)</li>
								 	                    		<li>Préstamo de equipos informáticos</li>
								 	                    		<li>Cubículos de estudio grupal</li>
								 	                    		<li>Capacitaciones en Recursos Electrónicos</li>
								 	                    		<li>Catálogo en Línea</li>
								 	                    		<li>Página Web</li>
								 	                    		<li>Uso de sala solo para lectura</li>
								 	                    	</ul>
								 	                    	
								 	                    </p>
								 	                    <p>
								 	                    	<ul class="list-unstyled">
								 	                    		<li><b>NÚMERO DE PUESTOS DE LECTURA</b>: 219</li>
								 	                    		<li><b>NÚMERO DE COMPUTADORAS CON ACCESO LIBRE</b>: 18</li>
								 	                    		<li><b>NÚMERO DE COMPUTADORAS DEDICADAS AL CATÁLOGO EN LÍNEA</b>: 4</li>
								 	                    	</ul>					 	                    	
								 	                    </p>
								 	                </div>
								 	                <div class="modal-footer">
								 	                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
								 	                </div>
								 	            </div>
								 	        </div>
								 	    </div>

								 	    <!-- Modal bib-modal-13 -->
								 	    <div style="background-color: rgba(0, 0, 0, 0.5);" class="modal fade" id="bib-modal-13" tabindex="-1" role="dialog" aria-labelledby="BibModalTitle13" aria-hidden="true">
								 	        <div style="max-width: 1000px;" class="modal-dialog modal-dialog-centered" role="document">
								 	            <div class="modal-content">
								 	                <div class="modal-header">
								 	                    <h5 class="modal-title" id="BibModalTitle13">Letras y Cc. Humanas</h5>
								 	                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								 	                        <span aria-hidden="true">&times;</span>
								 	                    </button>
								 	                </div>
								 	                <div class="modal-body">
								 	                    <p>
								 	                    	<b>UBICACIÓN</b>:<br>
								 	                    	Facultad de Letras y Ciencias Humanas
								 	                    </p>
								 	                    <p>
								 	                    	<b>HORARIOS</b>:<br>
								 	                    	<ul class="list-unstyled">
								 	                    		<li>Atención regular: lunes a viernes: 8 a.m. a 9 p.m.  / sábado: 8 a.m. a 11:30 a.m.</li>
								 	                    		<li>Atención para visitantes (internos y externos): lunes a viernes: 8 a.m. a 9 p.m.  / sábado: 8 a.m. a 11:30 a.m.</li>
								 	                    	</ul>
								 	                    </p>
								 	                    <p>
								 	                    	<b>CONTACTO</b>:<br>
								 	                    	<ul class="list-unstyled">
								 	                    		<li>Teléfono:<br>
								 	                    		(511) 619-7000 anexo 2819</li>
								 	                    		<li>Correo:<br>
								 	                    		biblioteca.letras@unmsm.edu.pe</li>
								 	                    	</ul>
								 	                    </p>
								 	                    <p>
								 	                    	<b>SERVICIOS OFRECIDOS</b>:<br>
								 	                    	<ul class="list-unstyled">
								 	                    		<li>Bibliográficos (Préstamo de libros, tesis y folletos)</li>
								 	                    		<li>Hemerográficos (Préstamo de revistas y boletines)</li>
								 	                    		<li>Catálogo en Línea</li>
								 	                    		<li>Página Web</li>
								 	                    	</ul>
								 	                    	
								 	                    </p>
								 	                    <p>
								 	                    	<ul class="list-unstyled">
								 	                    		<li><b>RECURSOS ELECTRÓNICOS SÓLO DE ACCESO EN ESTA BIBLIOTECA</b>: Libros digitales</li>
								 	                    		<li><b>NÚMERO DE PUESTOS DE LECTURA</b>: 89</li>
								 	                    		<li><b>NÚMERO DE COMPUTADORAS CON ACCESO LIBRE</b>: 6</li>
								 	                    		<li><b>NÚMERO DE COMPUTADORAS DEDICADAS AL CATÁLOGO EN LÍNEA</b>: 1</li>
								 	                    	</ul>					 	                    	
								 	                    </p>
								 	                </div>
								 	                <div class="modal-footer">
								 	                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
								 	                </div>
								 	            </div>
								 	        </div>
								 	    </div>

								 	    <!-- Modal bib-modal-14 -->
								 	    <div style="background-color: rgba(0, 0, 0, 0.5);" class="modal fade" id="bib-modal-14" tabindex="-1" role="dialog" aria-labelledby="BibModalTitle14" aria-hidden="true">
								 	        <div style="max-width: 1000px;" class="modal-dialog modal-dialog-centered" role="document">
								 	            <div class="modal-content">
								 	                <div class="modal-header">
								 	                    <h5 class="modal-title" id="BibModalTitle14">Educación</h5>
								 	                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								 	                        <span aria-hidden="true">&times;</span>
								 	                    </button>
								 	                </div>
								 	                <div class="modal-body">
								 	                    <p>
								 	                    	<b>UBICACIÓN</b>:<br>
								 	                    	Facultad de Educación
								 	                    </p>
								 	                    <p>
								 	                    	<b>HORARIOS</b>:<br>
								 	                    	<ul class="list-unstyled">
								 	                    		<li>Atención regular:<br>
								 	                    			E.P.E: lunes. a viernes. 8 a.m. a 9:30 p.m./ sábados 8 a.m. a 6:45 p.m.<br>
								 	                    			E.P.E.F: 8 a.m. a 3:45 p.m.</li>
								 	                    		<li>Atención para visitantes:<br>
								 	                    			Internos:<br>
								 	                    			E.P.E.: miércoles y viernes de 8:00 a.m. a 9:30 p.m./ Egresados de otras facultades: jueves y sábado 8:00 a.m. a 6:45 pm.<br>
								 	                    			Externos:<br>
								 	                    			E.P.E.F.: 8 a.m. a 3:45 p.m.
																</li>
								 	                    	</ul>
								 	                    </p>
								 	                    <p>
								 	                    	<b>CONTACTO</b>:<br>
								 	                    	<ul class="list-unstyled">
								 	                    		<li>Teléfono:<br>
								 	                    		(511) 619-7000/ Celular: 940347285</li>
								 	                    		<li>Correo:<br>
								 	                    		bibedu@unmsm.edu.pe</li>
								 	                    		<li>Página Web:<br>
								 	                    		<a href="https://educacion.unmsm.edu.pe/biblioteca/horario.html" target="_blank">https://educacion.unmsm.edu.pe/biblioteca/horario.html</a></li>
								 	                    	</ul>
								 	                    </p>
								 	                    <p>
								 	                    	<b>SERVICIOS OFRECIDOS</b>:<br>
								 	                    	<ul class="list-unstyled">
								 	                    		<li>Bibliográficos (Préstamo de libros, tesis y folletos)</li>
								 	                    		<li>Hemerográficos (Préstamo de revistas y boletines)</li>
								 	                    		<li>Catálogo en Línea</li>
								 	                    		<li>Página Web</li>
								 	                    		<li>Uso de sala solo para lectura</li>
								 	                    	</ul>
								 	                    	
								 	                    </p>
								 	                    <p>
								 	                    	<ul class="list-unstyled">
								 	                    		<li><b>NÚMERO DE PUESTOS DE LECTURA</b>: 54</li>
								 	                    		<li><b>NÚMERO DE COMPUTADORAS DEDICADAS AL CATÁLOGO EN LÍNEA</b>: 3</li>
								 	                    	</ul>					 	                    	
								 	                    </p>
								 	                </div>
								 	                <div class="modal-footer">
								 	                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
								 	                </div>
								 	            </div>
								 	        </div>
								 	    </div>

								 	    <!-- Modal bib-modal-15 -->
								 	    <div style="background-color: rgba(0, 0, 0, 0.5);" class="modal fade" id="bib-modal-15" tabindex="-1" role="dialog" aria-labelledby="BibModalTitle15" aria-hidden="true">
								 	        <div style="max-width: 1000px;" class="modal-dialog modal-dialog-centered" role="document">
								 	            <div class="modal-content">
								 	                <div class="modal-header">
								 	                    <h5 class="modal-title" id="BibModalTitle15">Ciencias Sociales</h5>
								 	                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								 	                        <span aria-hidden="true">&times;</span>
								 	                    </button>
								 	                </div>
								 	                <div class="modal-body">
								 	                    <p>
								 	                    	<b>UBICACIÓN</b>:<br>
								 	                    	Facultad de Ciencias Sociales/ Pabellón José Carlos Mariátegui
								 	                    </p>
								 	                    <p>
								 	                    	<b>HORARIOS</b>:<br>
								 	                    	<ul class="list-unstyled">
								 	                    		<li>Atención regular: 8:30 a.m. a 9:45 p.m.</li>
								 	                    		<li>Atención para visitantes (internos y externos): sábado 8:30 a.m. a 1:45 p.m.</li>
								 	                    	</ul>
								 	                    </p>
								 	                    <p>
								 	                    	<b>CONTACTO</b>:<br>
								 	                    	<ul class="list-unstyled">
								 	                    		<li>Teléfono:<br>
								 	                    		(511) 619-7000</li>
								 	                    		<li>Correo:<br>
								 	                    		bibliocsoc@unmsm.edu.pe</li>
								 	                    	</ul>
								 	                    </p>
								 	                    <p>
								 	                    	<b>SERVICIOS OFRECIDOS</b>:<br>
								 	                    	<ul class="list-unstyled">
								 	                    		<li>Bibliográficos (Préstamo de libros, tesis y folletos)</li>
								 	                    		<li>Hemerográficos (Préstamo de revistas y boletines)</li>
								 	                    		<li>Préstamo de equipos informáticos</li>
								 	                    		<li>Cubículos de estudio grupal</li>
								 	                    		<li>Capacitaciones de Recursos Electrónicos</li>
								 	                    		<li>Catálogo en Línea</li>
								 	                    		<li>Página Web</li>
								 	                    		<li>Sala de investigaciones</li>
								 	                    	</ul>
								 	                    	
								 	                    </p>
								 	                    <p>
								 	                    	<ul class="list-unstyled">
								 	                    		<li><b>NÚMERO DE PUESTOS DE LECTURA</b>: 160</li>
								 	                    		<li><b>NÚMERO DE COMPUTADORAS DEDICADAS AL CATÁLOGO EN LÍNEA</b>: 2</li>
								 	                    	</ul>					 	                    	
								 	                    </p>
								 	                </div>
								 	                <div class="modal-footer">
								 	                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
								 	                </div>
								 	            </div>
								 	        </div>
								 	    </div>

								 	    <!-- Modal bib-modal-16 -->
								 	    <div style="background-color: rgba(0, 0, 0, 0.5);" class="modal fade" id="bib-modal-16" tabindex="-1" role="dialog" aria-labelledby="BibModalTitle16" aria-hidden="true">
								 	        <div style="max-width: 1000px;" class="modal-dialog modal-dialog-centered" role="document">
								 	            <div class="modal-content">
								 	                <div class="modal-header">
								 	                    <h5 class="modal-title" id="BibModalTitle16">Derecho y Cc. Políticas</h5>
								 	                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								 	                        <span aria-hidden="true">&times;</span>
								 	                    </button>
								 	                </div>
								 	                <div class="modal-body">
								 	                    <p>
								 	                    	<b>UBICACIÓN</b>:<br>
								 	                    	sótano de la Facultad de Derecho y Ciencia Política
								 	                    </p>
								 	                    <p>
								 	                    	<b>HORARIOS</b>:<br>
								 	                    	<ul class="list-unstyled">
								 	                    		<li>Atención regular: lunes a viernes de 8 a.m. a 10 p.m. y sábados de 8 a.m. a 6 p.m.</li>
								 	                    		<li>Atención para visitantes:<br>
								 	                    			Internos: martes y jueves<br>
								 	                    			Externos: miércoles y viernes
								 	                    		</li>
								 	                    	</ul>
								 	                    </p>
								 	                    <p>
								 	                    	<b>CONTACTO</b>:<br>
								 	                    	<ul class="list-unstyled">
								 	                    		<li>Teléfono:<br>
								 	                    		(511) 619-7000</li>
								 	                    		<li>Celular:<br>
								 	                    		941944181</li>
								 	                    		<li>Correo:<br>
								 	                    		gperezr_af@unmsm.edu.pe</li>
								 	                    		<li>Página Web:<br>
								 	                    			<a href="https://derecho2.unmsm.edu.pe/" target="_blank">https://derecho2.unmsm.edu.pe/</a></li>
								 	                    	</ul>
								 	                    </p>
								 	                    <p>
								 	                    	<b>SERVICIOS OFRECIDOS</b>:<br>
								 	                    	<ul class="list-unstyled">
								 	                    		<li>Bibliográficos (Préstamo de libros, tesis y folletos)</li>
								 	                    		<li>Hemerográficos (Préstamo de revistas y boletines)</li>
								 	                    		<li>Cubículos de estudio grupal</li>
								 	                    		<li>Capacitaciones de Recursos Electrónicos</li>
								 	                    		<li>Catálogo en Línea</li>
								 	                    		<li>Página Web</li>
								 	                    		<li>Uso de sala solo para lectura</li>
								 	                    	</ul>
								 	                    	
								 	                    </p>
								 	                    <p>
								 	                    	<ul class="list-unstyled">
								 	                    		<li><b>NÚMERO DE PUESTOS DE LECTURA</b>: 104</li>
								 	                    		<li><b>NÚMERO DE COMPUTADORAS DEDICADAS AL CATÁLOGO EN LÍNEA</b>: 8</li>
								 	                    	</ul>					 	                    	
								 	                    </p>
								 	                </div>
								 	                <div class="modal-footer">
								 	                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
								 	                </div>
								 	            </div>
								 	        </div>
								 	    </div>

								 	    <!-- Modal bib-modal-17 -->
								 	    <div style="background-color: rgba(0, 0, 0, 0.5);" class="modal fade" id="bib-modal-17" tabindex="-1" role="dialog" aria-labelledby="BibModalTitle17" aria-hidden="true">
								 	        <div style="max-width: 1000px;" class="modal-dialog modal-dialog-centered" role="document">
								 	            <div class="modal-content">
								 	                <div class="modal-header">
								 	                    <h5 class="modal-title" id="BibModalTitle17">Electrónica y Eléctrica</h5>
								 	                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								 	                        <span aria-hidden="true">&times;</span>
								 	                    </button>
								 	                </div>
								 	                <div class="modal-body">
								 	                    ...
								 	                </div>
								 	                <div class="modal-footer">
								 	                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
								 	                </div>
								 	            </div>
								 	        </div>
								 	    </div>
								 	    <!-- Modal bib-modal-18 -->
								 	    <div style="background-color: rgba(0, 0, 0, 0.5);" class="modal fade" id="bib-modal-18" tabindex="-1" role="dialog" aria-labelledby="BibModalTitle18" aria-hidden="true">
								 	        <div style="max-width: 1000px;" class="modal-dialog modal-dialog-centered" role="document">
								 	            <div class="modal-content">
								 	                <div class="modal-header">
								 	                    <h5 class="modal-title" id="BibModalTitle18">Sistemas e Informática</h5>
								 	                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								 	                        <span aria-hidden="true">&times;</span>
								 	                    </button>
								 	                </div>
								 	                <div class="modal-body">
								 	                    <p>
								 	                    	<b>UBICACIÓN</b>:<br>
								 	                    	Primer piso de la Facultad de Ingeniería de Sistemas e Informática
								 	                    </p>
								 	                    <p>
								 	                    	<b>HORARIOS</b>:<br>
								 	                    	<ul class="list-unstyled">
								 	                    		<li>Atención regular: lunes a viernes de 8:30 a.m. a 8 p.m. /sábados de 8:30 a.m. a 1 p.m.</li>
								 	                    		<li>Atención para visitantes (internos y externos): lunes a viernes de 8:30 a.m. a 8 p.m. /sábados de 8:30 a.m. a 1 p.m.</li>
								 	                    	</ul>
								 	                    </p>
								 	                    <p>
								 	                    	<b>CONTACTO</b>:<br>
								 	                    	<ul class="list-unstyled">
								 	                    		<li>Teléfono:<br>
								 	                    		(511) 619-7000 anexo 3634</li>
								 	                    		<li>Correo:<br>
								 	                    		biblioteca.fisi@unmsm.edu.pe</li>
								 	                    		<li>Página Web:<br>
								 	                    		<a href="https://sistemas.unmsm.edu.pe" target="_blank">https://sistemas.unmsm.edu.pe</a></li>
								 	                    	</ul>
								 	                    </p>
								 	                    <p>
								 	                    	<b>SERVICIOS OFRECIDOS</b>:<br>
								 	                    	<ul class="list-unstyled">
								 	                    		<li>Bibliográficos (Préstamo de libros, tesis y folletos)</li>
								 	                    		<li>Préstamo de equipos informáticos</li>
								 	                    		<li>Cubículos de estudio grupal</li>
								 	                    		<li>Capacitaciones en Recursos Electrónicos</li>
								 	                    		<li>Página Web</li>
								 	                    		<li>Uso de sala solo para lectura</li>
								 	                    	</ul>
								 	                    	
								 	                    </p>
								 	                    <p>
								 	                    	<ul class="list-unstyled">
								 	                    		<li><b>NÚMERO DE PUESTOS DE LECTURA</b>: 52</li>
								 	                    		<li><b>NÚMERO DE COMPUTADORAS CON ACCESO LIBRE</b>: 32</li>
								 	                    	</ul>					 	                    	
								 	                    </p>
								 	                </div>
								 	                <div class="modal-footer">
								 	                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
								 	                </div>
								 	            </div>
								 	        </div>
								 	    </div>

								 	    <!-- Modal bib-modal-19 -->
								 	    <div style="background-color: rgba(0, 0, 0, 0.5);" class="modal fade" id="bib-modal-19" tabindex="-1" role="dialog" aria-labelledby="BibModalTitle19" aria-hidden="true">
								 	        <div style="max-width: 1000px;" class="modal-dialog modal-dialog-centered" role="document">
								 	            <div class="modal-content">
								 	                <div class="modal-header">
								 	                    <h5 class="modal-title" id="BibModalTitle19">Geológica, Minera, Metalúrgica y Geográfica</h5>
								 	                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								 	                        <span aria-hidden="true">&times;</span>
								 	                    </button>
								 	                </div>
								 	                <div class="modal-body">
								 	                    <p>
								 	                    	<b>UBICACIÓN</b>:<br>
								 	                    	Facultad de Ciencias Sociales, 2do piso
								 	                    </p>
								 	                    <p>
								 	                    	<b>HORARIOS</b>:<br>
								 	                    	<ul class="list-unstyled">
								 	                    		<li>Atención regular: 8:30 a.m. a 7:45 p.m.</li>
								 	                    		<li>Atención para visitantes (internos y externos): sábado de 8 a.m. a 1:45 p.m.</li>
								 	                    	</ul>
								 	                    </p>
								 	                    <p>
								 	                    	<b>CONTACTO</b>:<br>
								 	                    	<ul class="list-unstyled">
								 	                    		<li>Teléfono:<br>
								 	                    		(511) 619-7000</li>
								 	                    		<li>Correo:<br>
								 	                    		bibliocsoc@unmsm.edu.pe</li>
								 	                    	</ul>
								 	                    </p>
								 	                    <p>
								 	                    	<b>SERVICIOS OFRECIDOS</b>:<br>
								 	                    	<ul class="list-unstyled">
								 	                    		<li>Bibliográficos (Préstamo de libros, tesis y folletos)</li>
								 	                    		<li>Hemerográficos (Préstamo de revistas y boletines)</li>
								 	                    		<li>Catálogo en Línea</li>
								 	                    		<li>Uso de sala solo para lectura</li>
								 	                    	</ul>
								 	                    	
								 	                    </p>
								 	                    <p>
								 	                    	<ul class="list-unstyled">
								 	                    		<li><b>NÚMERO DE PUESTOS DE LECTURA</b>: 30</li>
								 	                    		<li><b>NÚMERO DE COMPUTADORAS DEDICADAS AL CATÁLOGO EN LÍNEA</b>: 1</li>
								 	                    	</ul>					 	                    	
								 	                    </p>
								 	                </div>
								 	                <div class="modal-footer">
								 	                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
								 	                </div>
								 	            </div>
								 	        </div>
								 	    </div>

								 	    <!-- Modal bib-modal-20 -->
								 	    <div style="background-color: rgba(0, 0, 0, 0.5);" class="modal fade" id="bib-modal-20" tabindex="-1" role="dialog" aria-labelledby="BibModalTitle20" aria-hidden="true">
								 	        <div style="max-width: 1000px;" class="modal-dialog modal-dialog-centered" role="document">
								 	            <div class="modal-content">
								 	                <div class="modal-header">
								 	                    <h5 class="modal-title" id="BibModalTitle20">Industrial</h5>
								 	                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								 	                        <span aria-hidden="true">&times;</span>
								 	                    </button>
								 	                </div>
								 	                <div class="modal-body">
								 	                    <p>
								 	                    	<b>UBICACIÓN</b>:<br>
								 	                    	Primer piso de la Facultad de Ingeniería Industrial
								 	                    </p>
								 	                    <p>
								 	                    	<b>HORARIOS</b>:<br>
								 	                    	<ul class="list-unstyled">
								 	                    		<li>Atención regular: lunes a viernes de 8:30 a.m. a 1 p.m./ 2 a 8:30 p.m., sábados de 9 a.m. a 2:30 p.m.</li>
								 	                    		<li>Atención para visitantes (internos y externos): lunes a viernes de 8:30 a.m. a 1 p.m./ 2 a 8:30 p.m., sábados de 9 a.m. a 2:30 p.m., excepto durante semana de exámenes</li>
								 	                    	</ul>
								 	                    </p>
								 	                    <p>
								 	                    	<b>CONTACTO</b>:<br>
								 	                    	<ul class="list-unstyled">
								 	                    		<li>Teléfono:<br>
								 	                    		(511) 619-7000</li>
								 	                    		<li>Celular:<br>
								 	                    		942049142</li>
								 	                    		<li>Correo:<br>
								 	                    		gbenitezp@unmsm.edu.pe</li>
								 	                    		<li>Página Web:<br>
								 	                    		<a href="https://industrial.unmsm.edu.pe/biblioteca-fii/consultas-en-linea/" target="_blank">https://industrial.unmsm.edu.pe/biblioteca-fii/consultas-en-linea/</a></li>
								 	                    	</ul>
								 	                    </p>
								 	                    <p>
								 	                    	<b>SERVICIOS OFRECIDOS</b>:<br>
								 	                    	<ul class="list-unstyled">
								 	                    		<li>Bibliográficos (Préstamo de libros, tesis y folletos)</li>
								 	                    		<li>Hemerográficos (Préstamo de revistas y boletines)</li>
								 	                    		<li>Catálogo en Línea</li>
								 	                    		<li>Página Web</li>
								 	                    		<li>Uso de sala solo para lectura</li>
								 	                    	</ul>
								 	                    	
								 	                    </p>
								 	                    <p>
								 	                    	<ul class="list-unstyled">
								 	                    		<li><b>RECURSOS ELECTRÓNICOS SÓLO DE ACCESO EN ESTA BIBLIOTECA:</b>: Plataforma virtual de E-books</li>
								 	                    		<li><b>NÚMERO DE PUESTOS DE LECTURA</b>: 226</li>
								 	                    		<li><b>NÚMERO DE COMPUTADORAS CON ACCESO LIBRE</b>: 6</li>
								 	                    		<li><b>NÚMERO DE COMPUTADORAS DEDICADAS AL CATÁLOGO EN LÍNEA</b>: 4</li>
								 	                    	</ul>					 	                    	
								 	                    </p>
								 	                </div>
								 	                <div class="modal-footer">
								 	                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
								 	                </div>
								 	            </div>
								 	        </div>
								 	    </div>

								 	    <!-- Modal bib-modal-21 -->
								 	    <div style="background-color: rgba(0, 0, 0, 0.5);" class="modal fade" id="bib-modal-21" tabindex="-1" role="dialog" aria-labelledby="BibModalTitle21" aria-hidden="true">
								 	        <div style="max-width: 1000px;" class="modal-dialog modal-dialog-centered" role="document">
								 	            <div class="modal-content">
								 	                <div class="modal-header">
								 	                    <h5 class="modal-title" id="BibModalTitle19">Temple Radicati</h5>
								 	                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								 	                        <span aria-hidden="true">&times;</span>
								 	                    </button>
								 	                </div>
								 	                <div class="modal-body">
								 	                    <div>
								 	                    	<b>UBICACIÓN</b>:<br>
								 	                    	<ul class="list-unstyled">
								 	                    		<li>Calle Francisco Valle Riestra 591, San Isidro. (Altura de cuadras 14 y 15 de Av. General Pezet y 33 de Av. Salaverry)</li>
								 	                    	</ul>
								 	                    </div>
								 	                    <div>
								 	                    	<b>HORARIOS</b>:<br>
								 	                    	<ul class="list-unstyled">
								 	                    		<li>Para consultas en la biblioteca, en relación con trabajos de investigación especializados, se requiere contar con una carta de presentación o acreditación de la universidad, institución o centro de estudios donde se realiza la investigación, certificada por la autoridad competente. Puede acreditarse también con el carnet de investigador emitido por la Biblioteca Nacional del Perú.</li>
								 	                    	</ul>
								 	                    </div>
								 	                    <div>
								 	                    	<b>CONTACTO</b>:<br>
								 	                    	<ul class="list-unstyled">
								 	                    		<li>Teléfono:<br>
								 	                    		(511) 619-7000 anexo 6252</li>
								 	                    		<li>Correo:<br>
								 	                    		bibmuseotemple@unmsm.edu.pe<br>
								 	                    		rmancillah@unmsm.edu.pe</li>
								 	                    		<li>Página Web:<br>
								 	                    		<a href="http://templeradicati.org.pe/" target="_blank">http://templeradicati.org.pe/</a></li>
								 	                    	</ul>
								 	                    </div>
								 	                    <div>
								 	                    	<b>SERVICIOS OFRECIDOS</b>:<br>
								 	                    	<ul class="list-unstyled">
								 	                    		<li>Libros del Fondo Antiguo</li>
								 	                    		<li>Hemeroteca</li>
								 	                    		<li>Mapoteca</li>
								 	                    		<li>Fondos manuscritos con materiales inéditos y repertorios bibliográficos.</li>
								 	                    		<li>Epistolario con correspondencia institucional, académica y personal.</li>
								 	                    		<li>Archivo fotográfico con 973 fotografías.</li>
								 	                    	</ul>
								 	                    	
								 	                    </div>
								 	                    <div>
								 	                    	<ul class="list-unstyled">
								 	                    		<li><b>NÚMERO TOTAL DE LA COLECCIÓN</b>: 9 257</li>
								 	                    	</ul>					 	                    	
								 	                    </div>
								 	                </div>
								 	                <div class="modal-footer">
								 	                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
								 	                </div>
								 	            </div>
								 	        </div>
								 	    </div>

								 	</div>
							</div>
							<div class="px-2 py-2 py-lg-5 tab-pane fade" id="apps" role="tabpanel" aria-labelledby="apps-tab">
								<div class="mb-4 mb-sm-5">
									<p class="text-justify">Las aplicaciones y documentos de interés para la administración del sistema de bibliotecas y biblioteca central, se encuentran en esta sección.
									<b>Algunas aplicaciones requieren la creación de un usuario y contraseña para acceder; para obternerlos, contáctese con la Oficina de Automatización y Capacitación Informacional de la Dirección del Sistema de Bibliotecas y Biblioteca Central: 01 619-7000 Anexo: 7643 o envíe un correo a automatizacion_bc@unmsm.edu.pe)</b></p>
								</div>
								<div class="cont-intra-apps block-1">
									<a href="http://172.16.160.16/sistemaBoole" class="intra-apps text-center text-decoration-none" target="_blank">
										<img class="icon-app" src="assets/principal/images/Apps/Boolepng.png" alt="Boole">
										<p class="mb-0 h5">Sistema Boole</p>
										<p class="mb-0" style="color: #232323; font-size: 14px;">Digitalización</p>
									</a>
									<!-- <a href="http://172.16.160.109:8082/login" class="intra-apps text-center text-decoration-none" target="_blank"> -->
									<!-- <a href="http://172.16.160.16/dist" class="intra-apps text-center text-decoration-none" target="_blank"> -->
									<a href="http://172.16.160.16/dist/" class="intra-apps text-center text-decoration-none" target="_blank">
										<img class="icon-app" src="assets/principal/images/Apps/Pearson.png" alt="Pearson">
										<p class="mb-0 h5">Sistema Pearson</p>
										<p class="mb-0" style="color: #232323; font-size: 14px;">Registro de usuarios</p>
									</a>
									<a href="http://172.16.160.109/estadisticasBD/public" class="intra-apps text-center text-decoration-none" target="_blank">
										<img class="icon-app" src="assets/principal/images/Apps/Graunt.png" alt="Graunt">
										<p class="mb-0 h5">Sistema Graunt</p>
										<p class="mb-0" style="color: #232323; font-size: 14px;">Estadísticas de servicios<br>de biblioteca</p>
									</a>
								</div>
								<div class="cont-intra-apps block-2">
									<a href="intra-docs.php" target="_blank" class="intra-apps text-center text-decoration-none">
										<img class="icon-app" src="assets/principal/images/Apps/Documentos.png" alt="Docs">
										<p class="mb-0 h5">Documentación</p>
										<p class="mb-0" style="color: #232323; font-size: 14px;">Actas, resoluciones, directivas y otros</p>
									</a>
									<a href="http://172.16.160.16/reserva_laptops/" class="intra-apps text-center text-decoration-none" target="_blank">
										<img class="icon-app" src="assets/principal/images/Apps/Turing.png" alt="Reserva de laptops">
										<p class="mb-0 h5">Sistema Turing</p>
										<p class="mb-0" style="color: #232323; font-size: 14px;">Reserva de laptops</p>
									</a>
								</div>
							</div>

					 	
					 	</div>
					 	</div>
					</div><!-- FIN CONTENEDOR OPCION 2 - BIBLIOTECAS - IZQUIERDA -->

<!-- CONTENEDOR OPCION 3 - CARNÉ DE BIBLIOTECA - IZQUIERDA -->
					<div class="white-section section-carne py-4 py-sm-5">
						<div>
							<p class="sub-title-sisbib title-sisbib font-weight-bold">CARNÉ DE BIBLIOTECA</p>
							<div class="horario-carne">
								<div class="mb-3 sub-title-sisbib">Modulo de orientacion - Trámite de carné</div>
								<p class="mb-0">Horario:<br>
									Lunes a Sábado<br>
									8:30 a.m. - 1:00 p.m. y 2:00 p.m. - 7:30 p.m. (primer nivel)</p>
							</div>
							<div>
								<!-- <a href="archivos/documentos/informacion_de_la_renovacion_de_carne.pdf" target="_blank">
									<img class="w-100" src="assets/principal/images/renovacion_carne.jpg" alt="">
								</a> -->
								<!-- 8:30 - 7:30 L a V -->
								<!-- Modulo de orientacion - Tramite de carne -->
								<img src="assets/principal/images/carne2.png" alt="">
								<img src="assets/principal/images/carne1.png" alt="">
<!-- 								<div class="horario-carne">
									<div>
										<p class="mb-0">Lunes a Viernes<br>8:30a.m. a 7:30p.m.</p>
									</div>
								</div> -->
								<div class="link-box">
									<!-- <a href="archivos/documentos/GuiaIngresantes_2019.pdf" target="_blank">Ingresantes</a>
									<p>Pregrado</p>
									<a href="archivos/documentos/encuesta.pdf" target="_blank">Renovación</a>
									<p>Pregrado/Postgrado/Docentes</p> -->
									<div class="accordion text-justify" id="accordionCarne">

									  <div class="card-carne">
									    <div class="card-header-carne" id="headingOneCarne">

									        <button id="buttonCollapseOneCarne" class="btn carne-collapse btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOneCarne" aria-expanded="falsed" aria-controls="collapseOneCarne">
									          Graduados
									          <i class="h2 mb-0 fas fa-angle-double-down"></i>
									        </button>

									    </div>

									    <div id="collapseOneCarne" class="collapse" aria-labelledby="headingOneCarne" data-parent="#accordionCarne">
											<div class="card-body">
												<div class="row mb-3">
										        	<div class="col-12">
										        		<p>Requisitos:</p>
										        		<ul>
										        			<li>Una foto actual tamaño carné o pasaporte a color con fondo blanco.</li>
										        			<li>Recibo de pago.</li>
										        			<li>Copia del diploma del grado (ambas caras), título (ambas caras) o Resolución Rectoral.</li>
										        			<li>Copia del DNI.</li>
										        			<li>Completar el <a href="archivos/documentos/FUT.pdf" target="_blank">FUT</a></li>
										        		</ul>
										        	</div>
										        	<div class="col-12">
										        		<p>Los pagos por concepto de emisión de carné de biblioteca se efectuarán solo en las agencias del Banco Pichincha</p>
										        		<style>
										        			.table-bordered td, .table-bordered th {
																border: 1px solid #515151 !important;
															}
										        		</style>
										        		<table class="table table-bordered">
										        			<thead>
										        				<tr>
										        					<th>Concepto de pago</th>
										        					<th>Descripción</th>
										        					<th>Costo</th>
										        				</tr>
										        			</thead>
										        			<tbody>
										        				<tr>
										        					<td>204-304</td>
										        					<td>Carné de graduado y renovación de carné</td>
										        					<td>S/.34.00</td>
										        				</tr>
										        			</tbody>
										        		</table>
										        	</div>
												</div>
											</div>
										</div>
									  </div>
									  <div class="card-carne">
									    <div class="card-header-carne" id="headingTwoCarne">

									        <button id="buttonCollapseTwoCarne" class="btn carne-collapse btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwoCarne" aria-expanded="false" aria-controls="collapseTwoCarne">
									          Visitantes
									          <i class="h2 mb-0 fas fa-angle-double-down"></i>
									        </button>

									    </div>
										<div id="collapseTwoCarne" class="collapse" aria-labelledby="headingTwoCarne" data-parent="#accordionCarne">
											<div class="card-body">
												<div class="row mb-3">
										        	<div class="col-12">
										        		<li class="h6 font-weight-bold" style="margin-left: -16px;">Carné por un año</li>
										        		<p>Requisitos:</p>
										        		<ul>
										        			<li>Una foto actual tamaño carné o pasaporte a color con fondo blanco.</li>
										        			<li>Recibo de pago.</li>
										        			<li>Copia del DNI.</li>
										        			<li>Completar el <a href="archivos/documentos/FUT.pdf" target="_blank">FUT</a></li>
										        		</ul>
										        	</div>
										        	<div class="col-12">
										        		<p>Los pagos por concepto de emisión de carné de biblioteca se efectuarán solo en las agencias del Banco Pichincha</p>
										        		<style>
										        			.table-bordered td, .table-bordered th {
																border: 1px solid #515151 !important;
															}
										        		</style>
										        		<table class="table table-bordered">
										        			<thead>
										        				<tr>
										        					<th>Concepto de pago</th>
										        					<th>Descripción</th>
										        					<th>Costo</th>
										        				</tr>
										        			</thead>
										        			<tbody>
										        				<tr>
										        					<td>204-313</td>
										        					<td>Carné de visitante y renovación de carné</td>
										        					<td>S/.21.00</td>
										        				</tr>
										        			</tbody>
										        		</table>
										        	</div>
												</div>
												<div class="row mb-3">
										        	<div class="col-12">
										        		<li class="h6 font-weight-bold" style="margin-left: -16px;">Pase por un día</li>
										        		<p>Requisitos:</p>
										        		<ul>
										        			<li>Recibo de pago.</li>
										        		</ul>
										        	</div>
										        	<div class="col-12">
										        		<p>Los pagos por concepto de emisión de carné de biblioteca se efectuarán solo en las agencias del Banco Pichincha</p>
										        		<style>
										        			.table-bordered td, .table-bordered th {
																border: 1px solid #515151 !important;
															}
										        		</style>
										        		<table class="table table-bordered">
										        			<thead>
										        				<tr>
										        					<th>Concepto de pago</th>
										        					<th>Descripción</th>
										        					<th>Costo</th>
										        				</tr>
										        			</thead>
										        			<tbody>
										        				<tr>
										        					<td>204-320</td>
										        					<td>Carné de visitante y renovación de carné</td>
										        					<td>S/.3.00</td>
										        				</tr>
										        			</tbody>
										        		</table>
										        	</div>
												</div>
											</div>
										</div>
									</div>

									<div class="card-carne">
									    <div class="card-header-carne" id="headingThreeCarne">

									        <button id="buttonCollapseThreeCarne" class="btn carne-collapse btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThreeCarne" aria-expanded="false" aria-controls="collapseThreeCarne">
									          Regulares
									          <i class="h2 mb-0 fas fa-angle-double-down"></i>
									        </button>

									    </div>
										<div id="collapseThreeCarne" class="collapse" aria-labelledby="headingThreeCarne" data-parent="#accordionCarne">
											<div class="card-body">
												<div class="row mb-3">
										        	<div class="col-12">
										        		<p>Requisitos:</p>
										        		<ul>
										        			<li>Copia del DNI.</li>
										        			<li>Copia del último Reporte de matrícula, emitido por el SUM.</li>
										        			<li>Una foto actual tamaño carné o pasaporte a color con fondo blanco<br>(para los que son tres bases anteriores a la actual).</li>
										        			<li>Completar el <a href="archivos/documentos/FUT.pdf" target="_blank">FUT</a></li>
										        		</ul>
										        	</div>
												</div>
											</div>
										</div>
									</div>

									<div class="card-carne">
									    <div class="card-header-carne" id="headingFourCarne">

									        <button id="buttonCollapseFourCarne" class="btn carne-collapse btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFourCarne" aria-expanded="false" aria-controls="collapseFourCarne">
									          Postgrado
									          <i class="h2 mb-0 fas fa-angle-double-down"></i>
									        </button>

									    </div>
										<div id="collapseFourCarne" class="collapse" aria-labelledby="headingFourCarne" data-parent="#accordionCarne">
											<div class="card-body">
												<div class="row mb-3">
										        	<div class="col-12">
										        		<p>Requisitos:</p>
										        		<ul>
										        			<li>Una foto actual tamaño carné o pasaporte a color con fondo blanco.</li>
										        			<li>Copia del último Reporte de matrícula, emitido por el SUM.</li>
										        			<li>Copia del DNI.</li>
										        			<li>Completar el <a href="archivos/documentos/FUT.pdf" target="_blank">FUT</a></li>
										        		</ul>
										        	</div>
												</div>
											</div>
										</div>
									</div>

									<div class="card-carne">
									    <div class="card-header-carne" id="headingFiveCarne">

									        <button id="buttonCollapseFiveCarne" class="btn carne-collapse btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFiveCarne" aria-expanded="false" aria-controls="collapseFiveCarne">
									          Docentes
									          <i class="h2 mb-0 fas fa-angle-double-down"></i>
									        </button>

									    </div>
										<div id="collapseFiveCarne" class="collapse" aria-labelledby="headingFiveCarne" data-parent="#accordionCarne">
											<div class="card-body">
												<div class="row mb-3">
										        	<div class="col-12">
										        		<p>Requisitos:</p>
										        		<ul>
										        			<li>Una foto actual tamaño carné o pasaporte a color con fondo blanco.</li>
										        			<li>Copia del DNI.</li>
										        			<li>Copia de última boleta de pago.</li>
										        		</ul>
										        	</div>
												</div>
											</div>
										</div>
									</div>

									<div class="card-carne">
									    <div class="card-header-carne" id="headingSixCarne">

									        <button id="buttonCollapseSixCarne" class="btn carne-collapse btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSixCarne" aria-expanded="false" aria-controls="collapseSixCarne">
									          Duplicado de carné
									          <i class="h2 mb-0 fas fa-angle-double-down"></i>
									        </button>

									    </div>
										<div id="collapseSixCarne" class="collapse" aria-labelledby="headingSixCarne" data-parent="#accordionCarne">
											<div class="card-body">
												<div class="row mb-3">
										        	<div class="col-12">
										        		<p>En caso de haber pérdida o robo del carné de biblioteca.</p>
										        		<p>Requisitos:</p>
										        		<ul>
										        			<li>Recibo de pago.</li>
										        			<li>Copia del DNI.</li>
										        			<li>Completar el <a href="archivos/documentos/FUT.pdf" target="_blank">FUT</a></li>
										        		</ul>
										        	</div>
										        	<div class="col-12">
										        		<p>Los pagos por concepto de duplicado de carné de biblioteca se efectuarán solo en las agencias del Banco Pichincha</p>
										        		<style>
										        			.table-bordered td, .table-bordered th {
																border: 1px solid #515151 !important;
															}
										        		</style>
										        		<table class="table table-bordered">
										        			<thead>
										        				<tr>
										        					<th>Concepto de pago</th>
										        					<th>Descripción</th>
										        					<th>Costo</th>
										        				</tr>
										        			</thead>
										        			<tbody>
										        				<tr>
										        					<td>204-305</td>
										        					<td>Duplicado de carné para pregrado, posgrado, graduado, docente, administrativo y visitante.</td>
										        					<td>S/.16.00</td>
										        				</tr>
										        			</tbody>
										        		</table>
										        		<p>
										        			Nota: De no solicitar el duplicado de carné tan pronto se deseé se tiene que proceder a <b>SOLICITAR LA ANULACIÓN DEL CARNÉ</b> así se evitará que otra persona pueda suplantar su identidad y se haga un manejo indebido. Para ello deberá descargar la solicitud y presentarla en su biblioteca.
										        		</p>
										        	</div>
												</div>
											</div>
										</div>
									</div>
									
									</div>
								</div>
							</div>

							<!-- <div class="accordion" id="accordionCarne">

							  <div class="card-carne">
							    <div class="card-header-carne" id="headingOneCarne">

							        <button class="btn carne-collapse btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOneCarne" aria-expanded="falsed" aria-controls="collapseOneCarne">
							          Graduados
							          <i class="h2 mb-0 fas fa-angle-double-down"></i>
							        </button>

							    </div>

							    <div id="collapseOneCarne" class="collapse" aria-labelledby="headingOneCarne" data-parent="#accordionCarne">
									<div class="card-body">
										<div class="row mb-3">
								        	<div class="col-12 col-md-6">
								        		<p>Requisitos:</p>
								        		<ul>
								        			<li>Una foto actual tamaño carné o pasaporte a color con fondo blanco.</li>
								        			<li>Recibo de pago.</li>
								        			<li>Copia del diploma del grado (ambas caras), título (ambas caras) o Resolución Rectoral.</li>
								        			<li>Copia del DNI.</li>
								        			<li>Completar el FUT</li>
								        		</ul>
								        	</div>
								        	<div class="col-12 col-md-6">
								        		<p>Los pagos por concepto de emisión de carné de biblioteca se efectuarán solo en las agencias del Banco Pichincha</p>
								        		<style>
								        			.table-bordered td, .table-bordered th {
														border: 1px solid #515151 !important;
													}
								        		</style>
								        		<table class="table table-bordered">
								        			<thead>
								        				<tr>
								        					<th>Concepto de pago</th>
								        					<th>Descripción</th>
								        					<th>Costo</th>
								        				</tr>
								        			</thead>
								        			<tbody>
								        				<tr>
								        					<td>204-304</td>
								        					<td>Carné de graduado y renovación de carné</td>
								        					<td>S/.34.00</td>
								        				</tr>
								        			</tbody>
								        		</table>
								        	</div>
										</div>
									</div>
								</div>
							  </div>
							  <div class="card-carne">
							    <div class="card-header-carne" id="headingTwoCarne">

							        <button class="btn carne-collapse btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwoCarne" aria-expanded="false" aria-controls="collapseTwoCarne">
							          Visitantes
							          <i class="h2 mb-0 fas fa-angle-double-down"></i>
							        </button>

							    </div>
								<div id="collapseTwoCarne" class="collapse" aria-labelledby="headingTwoCarne" data-parent="#accordionCarne">
									<div class="card-body">
										<div class="row mb-3">
								        	<div class="col-12 col-md-6">
								        		<p>Requisitos:</p>
								        		<ul>
								        			<li>Una foto actual tamaño carné o pasaporte a color con fondo blanco.</li>
								        			<li>Recibo de pago.</li>
								        			<li>Copia del DNI.</li>
								        			<li>Completar el FUT</li>
								        		</ul>
								        	</div>
								        	<div class="col-12 col-md-6">
								        		<p>Los pagos por concepto de emisión de carné de biblioteca se efectuarán solo en las agencias del Banco Pichincha</p>
								        		<style>
								        			.table-bordered td, .table-bordered th {
														border: 1px solid #515151 !important;
													}
								        		</style>
								        		<table class="table table-bordered">
								        			<thead>
								        				<tr>
								        					<th>Concepto de pago</th>
								        					<th>Descripción</th>
								        					<th>Costo</th>
								        				</tr>
								        			</thead>
								        			<tbody>
								        				<tr>
								        					<td>204-313</td>
								        					<td>Carné de visitante y renovación de carné</td>
								        					<td>S/.21.00</td>
								        				</tr>
								        			</tbody>
								        		</table>
								        	</div>
										</div>
									</div>
								</div>
							</div>
							
							</div> -->


						</div>

					</div><!-- FIN CONTENEDOR OPCION 3 - CARNÉ DE BIBLIOTECA - IZQUIERDA -->
<!-- CONTENEDOR OPCION 4 - RECEPCION DE TESIS - IZQUIERDA -->
					<div class="white-section section-recepcion-tesis py-4 py-sm-5">
						<div>
							<div class="w-100">
								<p class="sub-title-sisbib title-sisbib font-weight-bold">RECEPCIÓN DE TRABAJOS DE INVESTIGACIÓN</p>
								<div class="part-1 mb-5">
									<div class="mb-3 sub-title-sisbib">Proceso de recepción de trabajos, emisión de constancia y publicación</div>
									<div>
										<img class="flecha" src="assets/principal/images/flecha.png" alt="">
									</div>
									<div class="row mb-3">
										<div class="col-12 col-md-4 text-left text-md-center mb-4 mb-md-0" style="z-index: 1;">
											<p>1. RECEPCIÓN</p>
											<p class="text-center">ÁREA DE RECEPCIÓN DE TRABAJOS DE INVESTIGACIÓN</p>
											<p>
												<!-- <a href="">Ver en biblioteca</a> -->
											</p>
											<div class="text-left pl-4 recepcion">
												<p class="color-y">REQUISITOS</p>
												<p>
													1 CD serigrafiado con los datos de la carátula de la tesis o trabajo de investigación (revisar la Guía)<br>
													Debe contener:<br>
													<ul>
														<li>El documento de la tesis o trabajo de investigación</li>
														<li>Los documentos añadidos</li>
													</ul>

													<!-- <svg data-toggle="tooltip" data-placement="right" data-html="true" title="Los datos colocados y carátula deben coincidir con la información que aparece en el acta. El formato deberá ser en Word o compatible con cualquier procesador de texto." class="ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 437.6 437.6" width="20" height="20" data-icon="info-circle"><path fill="currentColor" d="M194 142.8c0.8 1.6 1.6 3.2 2.4 4.4 0.8 1.2 2 2.4 2.8 3.6 1.2 1.2 2.4 2.4 4 3.6 1.2 0.8 2.8 2 4.8 2.4 1.6 0.8 3.2 1.2 5.2 1.6 2 0.4 3.6 0.4 5.2 0.4 1.6 0 3.6 0 5.2-0.4 1.6-0.4 3.2-0.8 4.4-1.6h0.4c1.6-0.8 3.2-1.6 4.8-2.8 1.2-0.8 2.4-2 3.6-3.2l0.4-0.4c1.2-1.2 2-2.4 2.8-3.6s1.6-2.4 2-4c0-0.4 0-0.4 0.4-0.8 0.8-1.6 1.2-3.6 1.6-5.2 0.4-1.6 0.4-3.6 0.4-5.2s0-3.6-0.4-5.2c-0.4-1.6-0.8-3.2-1.6-5.2 -1.2-2.8-2.8-5.2-4.8-7.2 -0.4-0.4-0.4-0.4-0.8-0.8 -1.2-1.2-2.4-2-4-3.2 -1.6-0.8-2.8-1.6-4.4-2.4 -1.6-0.8-3.2-1.2-4.8-1.6 -2-0.4-3.6-0.4-5.2-0.4 -1.6 0-3.6 0-5.2 0.4 -1.6 0.4-3.2 0.8-4.8 1.6H208c-1.6 0.8-3.2 1.6-4.4 2.4 -1.6 1.2-2.8 2-4 3.2 -1.2 1.2-2.4 2.4-3.2 3.6 -0.8 1.2-1.6 2.8-2.4 4.4 -0.8 1.6-1.2 3.2-1.6 4.8 -0.4 2-0.4 3.6-0.4 5.2 0 1.6 0 3.6 0.4 5.2C192.8 139.6 193.6 141.2 194 142.8z"/><path fill="currentColor" d="M249.6 289.2h-9.2v-98c0-5.6-4.4-10.4-10.4-10.4h-42c-5.6 0-10.4 4.4-10.4 10.4v21.6c0 5.6 4.4 10.4 10.4 10.4h8.4v66.4H188c-5.6 0-10.4 4.4-10.4 10.4v21.6c0 5.6 4.4 10.4 10.4 10.4h61.6c5.6 0 10.4-4.4 10.4-10.4V300C260 294 255.2 289.2 249.6 289.2z"/><path fill="currentColor" d="M218.8 0C98 0 0 98 0 218.8s98 218.8 218.8 218.8 218.8-98 218.8-218.8S339.6 0 218.8 0zM218.8 408.8c-104.8 0-190-85.2-190-190s85.2-190 190-190 190 85.2 190 190S323.6 408.8 218.8 408.8z"/></svg> -->
													<!-- <br>
													2 copias simples del acta de sustentación<br>
													1 copia simple del informe de originalidad<svg data-toggle="tooltip" data-placement="right" data-html="true" title="firmado y sellado por el Director de la Escuela Profesional o Director de Unidad de Posgrado de la Facultad." class="ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 437.6 437.6" width="20" height="20" data-icon="info-circle"><path fill="currentColor" d="M194 142.8c0.8 1.6 1.6 3.2 2.4 4.4 0.8 1.2 2 2.4 2.8 3.6 1.2 1.2 2.4 2.4 4 3.6 1.2 0.8 2.8 2 4.8 2.4 1.6 0.8 3.2 1.2 5.2 1.6 2 0.4 3.6 0.4 5.2 0.4 1.6 0 3.6 0 5.2-0.4 1.6-0.4 3.2-0.8 4.4-1.6h0.4c1.6-0.8 3.2-1.6 4.8-2.8 1.2-0.8 2.4-2 3.6-3.2l0.4-0.4c1.2-1.2 2-2.4 2.8-3.6s1.6-2.4 2-4c0-0.4 0-0.4 0.4-0.8 0.8-1.6 1.2-3.6 1.6-5.2 0.4-1.6 0.4-3.6 0.4-5.2s0-3.6-0.4-5.2c-0.4-1.6-0.8-3.2-1.6-5.2 -1.2-2.8-2.8-5.2-4.8-7.2 -0.4-0.4-0.4-0.4-0.8-0.8 -1.2-1.2-2.4-2-4-3.2 -1.6-0.8-2.8-1.6-4.4-2.4 -1.6-0.8-3.2-1.2-4.8-1.6 -2-0.4-3.6-0.4-5.2-0.4 -1.6 0-3.6 0-5.2 0.4 -1.6 0.4-3.2 0.8-4.8 1.6H208c-1.6 0.8-3.2 1.6-4.4 2.4 -1.6 1.2-2.8 2-4 3.2 -1.2 1.2-2.4 2.4-3.2 3.6 -0.8 1.2-1.6 2.8-2.4 4.4 -0.8 1.6-1.2 3.2-1.6 4.8 -0.4 2-0.4 3.6-0.4 5.2 0 1.6 0 3.6 0.4 5.2C192.8 139.6 193.6 141.2 194 142.8z"/><path fill="currentColor" d="M249.6 289.2h-9.2v-98c0-5.6-4.4-10.4-10.4-10.4h-42c-5.6 0-10.4 4.4-10.4 10.4v21.6c0 5.6 4.4 10.4 10.4 10.4h8.4v66.4H188c-5.6 0-10.4 4.4-10.4 10.4v21.6c0 5.6 4.4 10.4 10.4 10.4h61.6c5.6 0 10.4-4.4 10.4-10.4V300C260 294 255.2 289.2 249.6 289.2z"/><path fill="currentColor" d="M218.8 0C98 0 0 98 0 218.8s98 218.8 218.8 218.8 218.8-98 218.8-218.8S339.6 0 218.8 0zM218.8 408.8c-104.8 0-190-85.2-190-190s85.2-190 190-190 190 85.2 190 190S323.6 408.8 218.8 408.8z"/></svg> -->
												</p>
												<div>
													<div>
														<a class="abox" style="width: 88%;" href="archivos/documentos/recepcion_investigacion/Guia para recepcion de trabajos de investigacion_junio2019_incluyeHojaMC.pdf" target="_blank">Guía para estructurar y ordenar el contenido del CD</a>
													</div>

													<div><a class="abox" style="width: 88%;" href="archivos/documentos/recepcion_investigacion/Autorizacion Cybertesis.doc">Formato de autorización de publicación</a><svg data-toggle="tooltip" data-placement="right" data-html="true" title="debidamente llenado y firmado por el autor de la tesis." class="ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 437.6 437.6" width="20" height="20" data-icon="info-circle"><path fill="currentColor" d="M194 142.8c0.8 1.6 1.6 3.2 2.4 4.4 0.8 1.2 2 2.4 2.8 3.6 1.2 1.2 2.4 2.4 4 3.6 1.2 0.8 2.8 2 4.8 2.4 1.6 0.8 3.2 1.2 5.2 1.6 2 0.4 3.6 0.4 5.2 0.4 1.6 0 3.6 0 5.2-0.4 1.6-0.4 3.2-0.8 4.4-1.6h0.4c1.6-0.8 3.2-1.6 4.8-2.8 1.2-0.8 2.4-2 3.6-3.2l0.4-0.4c1.2-1.2 2-2.4 2.8-3.6s1.6-2.4 2-4c0-0.4 0-0.4 0.4-0.8 0.8-1.6 1.2-3.6 1.6-5.2 0.4-1.6 0.4-3.6 0.4-5.2s0-3.6-0.4-5.2c-0.4-1.6-0.8-3.2-1.6-5.2 -1.2-2.8-2.8-5.2-4.8-7.2 -0.4-0.4-0.4-0.4-0.8-0.8 -1.2-1.2-2.4-2-4-3.2 -1.6-0.8-2.8-1.6-4.4-2.4 -1.6-0.8-3.2-1.2-4.8-1.6 -2-0.4-3.6-0.4-5.2-0.4 -1.6 0-3.6 0-5.2 0.4 -1.6 0.4-3.2 0.8-4.8 1.6H208c-1.6 0.8-3.2 1.6-4.4 2.4 -1.6 1.2-2.8 2-4 3.2 -1.2 1.2-2.4 2.4-3.2 3.6 -0.8 1.2-1.6 2.8-2.4 4.4 -0.8 1.6-1.2 3.2-1.6 4.8 -0.4 2-0.4 3.6-0.4 5.2 0 1.6 0 3.6 0.4 5.2C192.8 139.6 193.6 141.2 194 142.8z"/><path fill="currentColor" d="M249.6 289.2h-9.2v-98c0-5.6-4.4-10.4-10.4-10.4h-42c-5.6 0-10.4 4.4-10.4 10.4v21.6c0 5.6 4.4 10.4 10.4 10.4h8.4v66.4H188c-5.6 0-10.4 4.4-10.4 10.4v21.6c0 5.6 4.4 10.4 10.4 10.4h61.6c5.6 0 10.4-4.4 10.4-10.4V300C260 294 255.2 289.2 249.6 289.2z"/><path fill="currentColor" d="M218.8 0C98 0 0 98 0 218.8s98 218.8 218.8 218.8 218.8-98 218.8-218.8S339.6 0 218.8 0zM218.8 408.8c-104.8 0-190-85.2-190-190s85.2-190 190-190 190 85.2 190 190S323.6 408.8 218.8 408.8z"/></svg></div>

													<div><a class="abox" style="width: 88%;" href="archivos/documentos/recepcion_investigacion/Modelo de solicitud de postergación de publicación de documentos en Cybertesis.doc">Solicitud de postergación</a><svg data-toggle="tooltip" data-placement="right" data-html="true" title="El graduado que desea postergar la publicación de su tesis o investigación en el Repositorio y requiere de un período de exclusividad para publicar en una revista científica o registrar como patente, deberá entregar a la Dirección del Sistema de Bibliotecas y Biblioteca Central el formato debidamente llenado y acompañado de documentos que justifiquen el pedido." class="ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 437.6 437.6" width="20" height="20" data-icon="info-circle"><path fill="currentColor" d="M194 142.8c0.8 1.6 1.6 3.2 2.4 4.4 0.8 1.2 2 2.4 2.8 3.6 1.2 1.2 2.4 2.4 4 3.6 1.2 0.8 2.8 2 4.8 2.4 1.6 0.8 3.2 1.2 5.2 1.6 2 0.4 3.6 0.4 5.2 0.4 1.6 0 3.6 0 5.2-0.4 1.6-0.4 3.2-0.8 4.4-1.6h0.4c1.6-0.8 3.2-1.6 4.8-2.8 1.2-0.8 2.4-2 3.6-3.2l0.4-0.4c1.2-1.2 2-2.4 2.8-3.6s1.6-2.4 2-4c0-0.4 0-0.4 0.4-0.8 0.8-1.6 1.2-3.6 1.6-5.2 0.4-1.6 0.4-3.6 0.4-5.2s0-3.6-0.4-5.2c-0.4-1.6-0.8-3.2-1.6-5.2 -1.2-2.8-2.8-5.2-4.8-7.2 -0.4-0.4-0.4-0.4-0.8-0.8 -1.2-1.2-2.4-2-4-3.2 -1.6-0.8-2.8-1.6-4.4-2.4 -1.6-0.8-3.2-1.2-4.8-1.6 -2-0.4-3.6-0.4-5.2-0.4 -1.6 0-3.6 0-5.2 0.4 -1.6 0.4-3.2 0.8-4.8 1.6H208c-1.6 0.8-3.2 1.6-4.4 2.4 -1.6 1.2-2.8 2-4 3.2 -1.2 1.2-2.4 2.4-3.2 3.6 -0.8 1.2-1.6 2.8-2.4 4.4 -0.8 1.6-1.2 3.2-1.6 4.8 -0.4 2-0.4 3.6-0.4 5.2 0 1.6 0 3.6 0.4 5.2C192.8 139.6 193.6 141.2 194 142.8z"/><path fill="currentColor" d="M249.6 289.2h-9.2v-98c0-5.6-4.4-10.4-10.4-10.4h-42c-5.6 0-10.4 4.4-10.4 10.4v21.6c0 5.6 4.4 10.4 10.4 10.4h8.4v66.4H188c-5.6 0-10.4 4.4-10.4 10.4v21.6c0 5.6 4.4 10.4 10.4 10.4h61.6c5.6 0 10.4-4.4 10.4-10.4V300C260 294 255.2 289.2 249.6 289.2z"/><path fill="currentColor" d="M218.8 0C98 0 0 98 0 218.8s98 218.8 218.8 218.8 218.8-98 218.8-218.8S339.6 0 218.8 0zM218.8 408.8c-104.8 0-190-85.2-190-190s85.2-190 190-190 190 85.2 190 190S323.6 408.8 218.8 408.8z"/></svg></div>

													<div>
														<a class="abox" style="width: 88%;" href="archivos/documentos/recepcion_investigacion/HojaMC.doc" target="_blank">Hojas de metadatos complementarios</a>
													</div>

													<div>
														<a class="abox" style="width: 88%;" href="archivos/documentos/recepcion_investigacion/Ejemplos de caratulas.pdf" target="_blank">Ejemplos de carátulas</a>
													</div>
													
												</div>
											</div>
										</div>
										<div class="col-12 col-md-4 text-left mb-4 mb-md-0">
											<div class="w-75 m-0 m-md-auto">
												<p>2. ENTREGA DE CONSTANCIA DE RECEPCIÓN DE TRABAJO</p>
											</div>
											<p class="text-center">Un día después de la entrega de los requisitos.</p>
										</div>
										<div class="col-12 col-md-4 text-left text-md-center">
											<p>3. PUBLICACIÓN EN CYBERTESIS</p>
											<p>
												<a class="abox" href="http://cybertesis.unmsm.edu.pe/" target="_blank">Ir al Cybertesis</a>
											</p>
											<div class="text-left mb-3">
												<p class="color-y">RESOLUCIONES VIGENTES RESPECTO AL DEPÓSITO EN CYBERTESIS</p>
												<a class="abox w-100" href="archivos/documentos/recepcion_investigacion/R.R. 06893-R-18 Directiva para el depósito de Grados y Títulos en Cybertesis - UNMSM.pdf" target="_blank">Directiva para el depósito</a><br>
												<a class="abox w-100" href="archivos/documentos/recepcion_investigacion/00584-R-19  Modificación R.R. 06893 Deposito documentos Grados y Títulos en Cybertesis.pdf" target="_blank">Modificatoria del anexo de la Directiva</a><br>
												<a class="abox w-100" href="archivos/documentos/recepcion_investigacion/R.R. 04305-R-18 Procedimiento para la evaluación de la orginalidad de los documentos de investigación conducentes a grados o títulos de la UNMSM.pdf" target="_blank">Evaluación de la originalidad</a>
											</div>
											<div class="text-left">
												<p class="color-y">Lista de Tesis ingresadas 2017 - 2019</p>
												<a class="abox w-100" href="archivos/documentos/intra_docs/Lista2017-2019-Cybertesis.xlsx">Descargar lista</a>
											</div>
										</div>
									</div>
								</div>
								<div class="part-2">
									<div class="mb-3 sub-title-sisbib">Constancia de no adeudo de material bibliográfico</div>
									<div class="row pl-4">
										<!-- <div class="col-12 col-md-5">
											<p class="color-y">REQUISITOS</p>
											<div><a class="abox" href="archivos/documentos/no_adeudo_material_bibliografico/fut.pdf" target="_blank">Formato de autorización de publicación</a></div>
											<p>No tener deuda y/o sanciones en el Sistema de Bibliotecas de la UNMSM</p>
										</div>
										<div class="col-12 col-md-7">
											<p class="color-y">COSTOS</p>
											<p>El trámite es gratuito para el grado académico de bachiller y el título profesional<br>(<a href="archivos/documentos/RR_02514_R_13.pdf" target="_blank">RR-02514-R-13</a>).<br>El trámite para el grado de magister, doctor y para el cese docente deben de realizar el pago de S/16 soles al Banco Financiero bajo el concepto 204-157.</p>
										</div> -->
										<div class="col-12">
											<p class="mb-0">No tener deuda y/o sanciones en el Sistema de Bibliotecas de la UNMSM.</p>
											<p class="mb-0">El tramite es gratuito.</p>
											<p class="mb-0">La entrega de la constancia es inmediata, se realizará en el área de Recepción de Trabajos de Investigación.</p>
											<!-- <p class="color-y">ENTREGA</p> -->
											<!-- <p>La entrega de la constancia es inmediata, se realiza en el área de Recepción de Trabajos de Investigación.</p> -->
											<!-- <p><a href="">Ver en biblioteca</a></p> -->
										</div>
									</div>
								</div>
							</div>
						</div>

					</div><!-- FIN CONTENEDOR OPCION 4 - RECEPCION DE TESIS - IZQUIERDA -->

				</div><!-- FIN CONTENEDOR AREA BLANCA - IZQUIERDA -->
				<!-- INICIO FOOTER - IZQUIERDA -->
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
								<div class="last" style="display: block;">
									<span class="counter">19,760</span>
									<p class="text-center mb-0">FOLLETOS</p>
								</div>
							</div>
						</div>
						<div style="float: right; margin: auto;">
							<div class="mb-1"><a data-target="#ModalQuestion-1" data-toggle="modal" class="link-white" href="#">NOSOTROS</a> / <a href="https://goo.gl/maps/uTYzmpT41ES2" target="_blank" class="link-white">UBICACIÓN</a></div>
							<div class="mb-1"><a href="directorio/directorio.html" target="_blank" class="link-white">DIRECTORIO BC</a></div>
							<div class="icons mb-1" style="display: flex; align-items: center; justify-content: space-evenly; font-size: 40px;">
								<a href="https://www.facebook.com/BibliotecaCentralPedroZulen" target="_blank"><i class="h2 mb-0 fab fa-facebook-square"></i></a>
								<a href="mailto:bibcent@unmsm.edu.pe" target="_blank"><i class="h2 mb-0 fas fa-envelope"></i></a>
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
				<!-- FIN FOOTER - IZQUIERDA -->
			</section><!-- FIN SECCION 1 - IZQUIERDA -->
			

		</div>

<!---------------------------------->
<!--------- PAGINA DERECHA --------->
<!---------------------------------->

		<div class="pt-page pt-page-right">
<!-- OVERLAY NAV - DERECHA -->
			<div class="overlay2" id="overlay2-right"></div>
			<div class="overlay" id="overlay-right">
				
				<div class="overlay-menu dl-menus">
					<ul class="overlay-items dl-menu">
						<li><a href="#" class="item move-nosotros">NOSOTROS</a></li>
						<li><a href="https://unmsm.ent.sirsi.net/client/es_ES/all_libs/?dt=list" target="_blank" class="item move-catalogo">CATÁLOGO</a></li>
						<!-- <li><a href="#" class="item move-servi">SERVICIOS</a></li> -->
						<li data-animation="13" data-to="1"><a href="#" class="item move-todo-servicios">SERVICIOS</a></li>
						<li>
							<ul class="sub-nav">
								<!-- <li><a href="#" class="move-todo-servicios">EN SALA</a></li> -->
								<li data-animation="13" data-to="1"><a href="#" class="move-carne">CARNÉ DE BIBLIOTECA</a></li>
								<li data-animation="13" data-to="1"><a href="#" class="move-tesis">RECEPCIÓN DE TESIS</a></li>
								<li><a href="colec_fondor/" target="_blank" class="move-fondor">FONDO RESERVADO</a></li>
								<li data-animation="13" data-to="1"><a href="#" class="move-mas-servicios">MÁS...</a></li>
							</ul>
						</li>
						<li><a href="#" class="item move-rec-elec">RECURSOS ELECTRÓNICOS</a></li>
						<li>
							<ul class="sub-nav">
								<li><a href="#" class="move-bd">BASES DE DATOS</a></li>
								<li><a href="#" class="move-repo">REPOSITORIOS</a></li>
								<li><a href="#" class="move-capa">CAPACITACIONES</a></li>
								<li><a href="#" class="move-mas-recursos">MÁS...</a></li>
							</ul>
						</li>
						<!-- <li><a href="bibliotecas.html" class="item move-sistemabib" target="_blank">SISTEMA DE BIBLIOTECAS</a></li> -->
						<li data-animation="14" data-to="0"><a href="#" class="item click-side-to-mid move-eventos">EVENTOS</a></li>
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
<!-- NAV - DERECHA -->
			<header class="container-navbar" id="container-navbar-right">
			

					<div class="nav-elements container-fluid">
						<div class="nav-elements-size mx-auto">

							<div class="header-grid">
								<a id="logo-unmsm-right" class="container-img mr-0" title="UNMSM" href="http://www.unmsm.edu.pe/" target="_blank">
									<img class="pr-2 pr-sm-4" src="assets/principal/images/header/unmsm_blanco-min.png" alt="UNMSM">
								</a>
								<!-- <a title="SISBIB" href="index.php"><img src="assets/principal/images/header/bibcentral_blanco-min.png" alt="SISBIB"></a> -->
								<!-- <a id="logo-unmsm-right-h" class="d-none h-100" title="UNMSM" href="http://www.unmsm.edu.pe/" target="_blank"><img src="assets/principal/images/header/unmsm_blanco-min.png" alt="UNMSM"></a> -->
								<!-- <div id="title-bib-right" class="h-100" style="margin-left: 95px;"> -->
							    <a id="logo-sisbib-right" href="http://sisbib.unmsm.edu.pe/" class="h-100 d-flex align-items-center justify-content-between text-decoration-none position-relative" title="SISBIB">
							        <div class="text-white border-0 pl-2 pl-sm-4 py-md-3 cont-title-header">
							            <!-- <p class="mb-0">Universidad Nacional Mayor de San Marcos</p> -->
							            <h1 class="mb-0">SISTEMA DE BIBLIOTECAS Y BIBLIOTECA CENTRAL</h1>
							        </div>
							        <div class="h-100">
							        	<div class="container-img d-flex align-items-center justify-content-between">
							        		<div title="SISBIB" class="h-100">
							        			<img src="assets/principal/images/header/bibcentral_blanco-min.png" alt="SISBIB">
							        		</div>
							        		<!-- <a id="logo-vrip-right" class="h-100" title="VRIP" href="https://vrip.unmsm.edu.pe/" target="_blank">
							        			<img class="px-1" src="assets/principal/images/header/LOGO VICERRECTORADO.png" alt="VRIP">
							        		</a> -->
							        		<!-- <a id="logo-unmsm-right" class="h-100" title="UNMSM" href="http://www.unmsm.edu.pe/" target="_blank">
							        			<img class="px-1" src="assets/principal/images/header/unmsm_blanco-min.png" alt="UNMSM">
							        		</a> -->
							        		
							        	</div>
							        </div>
							    </a>

							    <button id="icon-menu-right" type="button" class="container-icon-menu">
							    	<div class="icon-menu"></div>
							    	<div class="icon-menu"></div>
							    	<div class="icon-menu"></div>
							    </button>
								<!-- </div> -->
							</div>
							
							<!-- <div id="div-nav-right" class="div-nav d-none dl-menus">
								<ul class="nav dl-menu">
									<li class="nav-item">
										<a href="#" class="nav-link sub-move-bd">Bases de datos</a>
									</li>
									<li class="nav-item">
										<a href="#" class="nav-link sub-move-repo">Repositorios</a>
									</li>
									<li class="nav-item">
										<a href="https://unmsm.ent.sirsi.net/client/es_ES/all_libs/?dt=list" target="_blank" class="nav-link">Catálogo</a>
									</li>
									<li data-animation="13" data-to="1" class="nav-item">
										<a href="#" class="nav-link sub-move-horarios">Horarios</a>
									</li>
									<li class="nav-item">
										<a href="directorio/directorio.html" target="_blank" class="nav-link">Contacto</a>
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
												<li class="d-flex box-yellow" data-animation="13" data-to="1"><a href="#" class="move-todo-servicios w-100">Servicios en Biblioteca Central</a></li>
												<div class="menu-enlaces mb-3">
													<ul class="list-unstyled">
														<li class="d-flex" data-animation="13" data-to="1"><a href="#" class="move-todo-servicios por-nivel w-100">Navega por niveles</a></li>
														<li class="d-flex" data-animation="13" data-to="1"><a href="#" class="move-todo-servicios por-lista w-100">Ver servicios en modo lista</a></li>
														<li class="d-flex" data-animation="13" data-to="1"><a href="#" class="move-todo-servicios por-lista l-fondor w-100">Fondo Reservado</a></li>
														<li class="d-flex" data-animation="13" data-to="1"><a href="#" class="move-todo-servicios por-lista l-salas w-100">Salas de lectura</a></li>
														<li class="d-flex" data-animation="13" data-to="1"><a href="#" class="move-todo-servicios por-lista l-hemeroteca w-100">Hemeroteca</a></li>
														<li class="d-flex" data-animation="13" data-to="1"><a href="#" class="move-todo-servicios por-lista l-prestamo w-100">Préstamo de computadoras</a></li>
														<li class="d-flex" data-animation="13" data-to="1"><a href="#" class="move-todo-servicios por-lista l-cubiculos w-100">Cubículos de estudio grupal</a></li>
														<li class="d-flex" data-animation="13" data-to="1"><a href="#" class="move-todo-servicios por-lista l-visual w-100">Servicios para usuarios con limitación visual</a></li>
													</ul>
												</div>
												<li class="d-flex box-yellow" data-animation="13" data-to="1"><a href="#" class="move-bibliotecas w-100">Sistema de bibliotecas</a></li>
											</ul>
										</div>
										<div style="">
											<ul class="list-unstyled">
												<li class="d-flex box-yellow" data-animation="13" data-to="1"><a href="#" class="move-carne w-100">Carné de Biblioteca</a></li>
												<div class="menu-enlaces mb-3">
													<ul class="list-unstyled">
														<!-- <li class="d-flex" data-animation="13" data-to="1"><a href="archivos/documentos/GuiaIngresantes_2019.pdf" target="_blank" class="move-carne-inmenu w-100">Ingresantes</a></li> -->
														<li class="d-flex" data-animation="13" data-to="1"><a href="#" class="move-carne link-grad w-100">Graduados</a></li>
														<li class="d-flex" data-animation="13" data-to="1"><a href="#" class="move-carne link-visit w-100">Visitantes</a></li>
														<li class="d-flex" data-animation="13" data-to="1"><a href="#" class="move-carne link-regular w-100">Regulares</a></li>
													</ul>
												</div>
												<li class="d-flex box-yellow" data-animation="13" data-to="1"><a href="#" class="move-tesis w-100">Recepción de trabajos de investigación</a></li>
												<div class="menu-enlaces mb-3">
													<ul class="list-unstyled">
														<li class="d-flex" data-animation="13" data-to="1">
															<a href="#" target="_blank" class="move-tesis link-procrec w-100">Proceso de recepción y publicación de tesis</a>
														</li>
														<li class="d-flex" data-animation="13" data-to="1">
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
								<a href="#" class="move-todo-servicios" style="color: white;">Servicios</a>
								
							</li>
							<div class="drop-recursos">
								<ul class="dropdown-menu">
									<div class="w-100" style="height: .5rem"></div>
									<div class="drop-box">
										<div style="">
											<ul class="list-unstyled">
												<li class="d-flex box-yellow"><a href="#" class="move-bd w-100">Bases de datos</a></li>
												<div class="menu-enlaces mb-3">
													<ul class="list-unstyled">
														<li class="d-flex"><a href="#" class="move-bd w-100">Buscador de bases de datos</a></li>
														<li class="d-flex"><a href="http://sisbib.unmsm.edu.pe/Intranet.asp?DB=gvrl" target="_blank" class="w-100">Gale</a></li>
														<li class="d-flex"><a href="http://sisbib.unmsm.edu.pe/Intranet.asp?DB=wileyEbook" target="_blank" class="w-100">Wiley</a></li>
														<li class="d-flex"><a href="http://sisbib.unmsm.edu.pe/Intranet.asp?DB=pqcentral" target="_blank" class="w-100">Proquest</a></li>
														<li class="d-flex"><a href="https://www.scopus.com/search/form.uri?display=basic" target="_blank" class="w-100">Scopus</a></li>
														<li class="d-flex"><a href="http://www.sciencedirect.com/" target="_blank" class="w-100">ScienceDirect</a></li>
														<li class="d-flex"><a href="http://www.tandfonline.com/" target="_blank" class="w-100">Taylor&Francis</a></li>
														<li class="d-flex"><a href="#" class="move-bd w-100">Más bases</a></li>
													</ul>
												</div>
												<li class="d-flex box-yellow"><a href="#" class="move-gestor w-100">Gestores Bibliográficos</a></li>
											</ul>
										</div>
										<div style="">
											<ul class="list-unstyled">
												<li class="d-flex box-yellow"><a href="#" class="move-repo w-100">Repositorios</a></li>
												<div class="menu-enlaces mb-3">
													<ul class="list-unstyled">
														<li class="d-flex"><a href="http://revistasinvestigacion.unmsm.edu.pe/" target="_blank" class="w-100">Revistas UNMSM</a></li>
														<li class="d-flex"><a href="http://cybertesis.unmsm.edu.pe/" target="_blank" class="w-100">Cybertesis</a></li>
														<li class="d-flex"><a href="http://fondoeditorial.unmsm.edu.pe/" target="_blank" class="w-100">Fondo Editorial</a></li>
														<li class="d-flex"><a href="http://sisbib.unmsm.edu.pe/Memoria_Oral/index.html" target="_blank" class="w-100">Archivo de Memoria Oral</a></li>
													</ul>
												</div>
												<li class="d-flex box-yellow"><a href="#" class="move-capacitaciones w-100">Capacitaciones en Recursos Electrónicos</a></li>
												<div class="menu-enlaces mb-3">
													<ul class="list-unstyled">
														<li class="d-flex"><a href="" class="move-capacitaciones w-100">Fechas y horarios</a></li>
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
												<li class="d-flex box-dark"><a href="#" class="move-preguntas w-100">Preguntas Frecuentes</a></li>
												<div class="menu-enlaces mb-3">
													<ul class="list-unstyled">
														<li class="d-flex"><a href="#" class="move-preguntas como-bd w-100">Cómo acceder a las bases de datos dentro y fuera del campus</a></li>
														<li class="d-flex"><a href="#" class="move-preguntas que-bd w-100">Qué son las bases de datos</a></li>
														<li class="d-flex"><a href="#" class="move-preguntas como-gestores w-100">Cómo utilzar los gestores bibliográficos</a></li>
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
								<a href="#" class="move-rec-elec" style="color: white;">Recursos electrónicos</a>

							</li>
							<li data-animation="14" data-to="0"><a href="#" class="move-eventos" style="color: white;">Eventos</a></li>
							<li data-animation="14" data-to="0"><a href="#" class="move-alertas" style="color: white;">Alertas Bibliográficas</a></li>
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
<!-- SECCION 1 - DERECHA -->
			<section class="section1 section1-right">
				<div class="pt-triggers-rigth cont">
					<div class="float-left dl-menus cont-button-to-mid"><!-- //CAMBIOHANS -->
						<!-- //CAMBIOHANS -->
							<ul class="dl-menu">
								<li class="cont float-left" data-animation="14" data-to="0" style="width: fit-content;">
									<button id="btn-right-to-left" class="btn-move click-side-to-mid" title="Ir a página central">
										<div class="container-chevron" style="transform: rotate(90deg); top: -22px;">
												<div class="chevron"></div>
												<div class="chevron"></div>
												<div class="chevron"></div>
										</div>
										<div class="volver"><i class="fas fa-chevron-left"></i> volver</div>
									</button>
								</li>
							</ul>
					</div>

					<div class="second-search">
						<form class="sirsi-search" method="get" label="search" id="searchForm2" action="http://unmsm.ent.sirsi.net/client/es_ES/all_libs/search/results" style="margin-bottom: 0;" target="_blank">
							<input name="ln" value="es_ES" type="hidden" />
							<input id="q2" class="text-input" size="18" maxlength="40" name="q" onblur="this.value = this.value || this.defaultValue; this.style.color = '#999';" onfocus="this.value=''; this.style.color = '#000';" placeholder="Busca en nuestro catálogo en línea y bases de datos de investigación" accesskey="s" type="text" autocomplete="off" />
							<input value="Buscar" id="searchButton2" class="submit-input" title="Buscar" type="submit" />
						</form>
					</div>


				<!-- </div> -->
				
			</div>

			</section>
<!-- CONTENEDOR AREA BLANCA - DERECHA -->	
				<section class="section2 section2-right cont mx-auto">
				<div class="blanco cont py-1 py-sm-2">

				<div class="posicion">
					<div>
						<select  name="recursos-electronicos" id="recursos-electronicos">
							<option class="input-option-recursos-e" value="bases_datos">Bases de datos</option>
							<option class="input-option-recursos-e" value="repositorios">Repositorios</option>
							<option class="input-option-recursos-e" value="gestores_bibliograficos">Gestores bibliográficos</option>
							<option class="input-option-recursos-e" value="capacitaciones">Capacitaciones en uso de Recursos Electrónicos</option>
							<option class="input-option-recursos-e" value="preguntas_frecuentes">Preguntas frecuentes</option>
						</select>
					</div>
					
					<div>
						<div class="margen"><div id="op1" class="bd cajas" ><p>Bases de datos</p></div></div>
						<div class="margen"><div id="op2" class="repositorios cajas"><p class="mb-0">Repositorios</p></div></div>
						<div class="margen"><div id="op3" class="gestores cajas"><p class="mb-0">Gestores bibliográficos</p></div></div>
						<div class="margen"><div id="op5" class="capacitaciones cajas"><p class="mb-0">Capacitaciones en uso de Recursos Electrónicos</p></div></div>
						<div class="margen"><div id="op6" class="preguntas cajas"><p class="mb-0">Preguntas frecuentes</p></div></div>
						<a class="like-caja d-block text-white" href="https://search.ebscohost.com/login.aspx?direct=true&site=eds-live&scope=site&type=2&custid=s1248620&groupid=main&profid=eds&lang=es&authtype=ip,guest" target="_blank">EBSCO Discovery</a>
					</div>
				</div>
				<div class="contcont text-justify">
				<!-- BASES DE DATOS -->
				<div id="cont1" class="movercont1">
				<!-- INICIO DE LA BASE DE DATOS-->
					<style>
						a.btn.btn-link {
							width: 100%;
							text-align: left;
						}
					</style>
					<div class="mb-3 sub-title-sisbib" style="color: #C8A22B;">BASES DE DATOS DE INVESTIGACIÓN</div>
					<p>Son selecciones de materiales académicos y científicos. Contienen principalmente artículos de revistas, libros, publicaciones, materiales audiovisuales, etc.</p>
					<!-- <i class="fas fa-lock-open"></i> : Acceso libre. <br>
					<i class="fas fa-lock"></i> : Acceso por suscripción.
					<br>
					<br> -->

					<!-- HERE -->

					<div>
						<div class="block-search mb-3">
							<!-- <label for="caja_busqueda">Buscar:</label> -->
							<input class="db-search-input w-100" type="search" name="caja_busqueda" id="caja_busqueda" placeholder="Buscar aquí por nombre o tipo de recurso (libro/revista/etc.)">
						</div>
						<div class="block-category mb-3">
							<!-- <label for="catlist">Categorías:</label> -->
							<select class="db-search-input filter-change w-100" name="catlist" id="catlist">
								<option class="category" value="cat_all">Todas las áreas</option>
								<option class="category" value="c_cbas">Ciencias básicas</option>
								<option class="category" value="c_csal">Ciencias de la salud</option>
								<option class="category" value="c_ceco">Ciencias económicas y de la gestión</option>
								<option class="category" value="c_cshe">Ciencias sociales, humanidades y educación</option>
								<option class="category" value="c_der">Derecho</option>
								<option class="category" value="c_ing">Ingenierías</option>
								<option class="category" value="c_multi">Multidisciplinario</option>
							</select>
						</div>
						<div class="block-letters mb-3">
							<div id="letter_filter" class="d-flex flex-row justify-content-start align-items-center flex-wrap">
								<a class="letter-link mx-1 px-1 position-relative letter-link-select" href="#">TODO</a>
								<?php
									for ($i=65;$i<=90;$i++) {
										?><a class="letter-link m-1 px-1 position-relative" href="#"><?php echo chr($i); ?></a><?php
									}
								?>
							</div>
						</div>
						<div class="block-access mb-3">
							<div class="custom-control custom-radio custom-control-inline">
								<input type="radio" id="acces_radio_inline_1" class="access custom-control-input" name="access" value="acc_all">
								<label class="custom-control-label" for="acces_radio_inline_1">Todas las bases</label>
							</div>
							<div class="custom-control custom-radio custom-control-inline">
								<input type="radio" id="acces_radio_inline_2" class="access custom-control-input" name="access" value="suscripcion" checked="checked">
								<label class="custom-control-label" for="acces_radio_inline_2"><i class="fas fa-lock"></i> Acceso por suscripción</label>
								<div class="d-flex align-items-center justify-content-center">
									<p data-toggle="tooltip" data-placement="right" data-html="true"
									title="Ingreso sólo para personas de la institución, para acceder necesitarás un usuario y contraseña:
									<br>
									<br>USUARIO: Correo Institucional (ejemplo@unmsm.edu.pe)
									<br>CONTRASEÑA: Contraseña del correo institucional"
									class="moreinfo mb-0 ml-1" style="color:#C8A22B;cursor:default;">+Información</p>
								</div>
							</div>
							<div class="custom-control custom-radio custom-control-inline">
								<input type="radio" id="acces_radio_inline_3" class="access custom-control-input" name="access" value="libre">
								<label class="custom-control-label" for="acces_radio_inline_3"><i class="fas fa-lock-open"></i> Acceso libre</label>
							</div>
						</div>
						
					</div>

					<div>
						<div id="bdatos_all" class="d-flex flex-column-reverse" style="font-size: 14px;"></div>
					</div>

					
				</div>
				<!-- FIN BASE DE DATOS -->
				<!-- REPOSITORIOS -->
				<div id="cont2" class="movercont1">
					<div class="mb-3 sub-title-sisbib" style="color: #C8A22B;">REPOSITORIOS - UNMSM</div>
					<p>Son espacios o archivos virtuales que contienen la producción científica y académica desarrollada en la universidad. Almacenan tesis, revistas, libros y otros trabajos de investigación a texto completo; así como material multimedia.</p>

					<div class="wrapper-ziczac cont m-auto">

						<!-- <div> -->
						<!--INICIO DE FONDO EDITORIAL-->
						<a data-toggle="tooltip" data-placement="right" title="Contiene la producción científica, humanística, docente, técnica, cultural y artística, tanto de los miembros de la UNMSM, como de los académicos de otras instituciones. Adicionalmente, este catálogo dispone de obras de valor histórico que son parte del patrimonio cultural de nuestra casa de estudios." href="http://fondoeditorial.unmsm.edu.pe/index.php/fondoeditorial" target="_blank" class="with-info-mobile ziczacblock"><!--<i class="fas fa-info-circle"></i>--><!--<img src="assets/principal/images/información.png" id="info" class="info" alt="Informacion" width="30" height="30">-->
							<!-- <a href="http://fondoeditorial.unmsm.edu.pe/index.php/fondoeditorial" target="_blank"> -->
								<img src="assets/principal/images/libro.png" class="libro" alt="Fondo Editorial" width="90" height="90">
								<div>
									<p class="mb-0">Fondo Editorial UNMSM</p>
								</div>
								<svg data-toggle="tooltip" data-placement="bottom" data-html="true" title="" data-original-title="Contiene la producción científica, humanística, docente, técnica, cultural y artística, tanto de los miembros de la UNMSM, como de los académicos de otras instituciones. Adicionalmente, este catálogo dispone de obras de valor histórico que son parte del patrimonio cultural de nuestra casa de estudios." class="info-mobile" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 437.6 437.6" width="20" height="20" data-icon="info-circle"><path fill="currentColor" d="M194 142.8c0.8 1.6 1.6 3.2 2.4 4.4 0.8 1.2 2 2.4 2.8 3.6 1.2 1.2 2.4 2.4 4 3.6 1.2 0.8 2.8 2 4.8 2.4 1.6 0.8 3.2 1.2 5.2 1.6 2 0.4 3.6 0.4 5.2 0.4 1.6 0 3.6 0 5.2-0.4 1.6-0.4 3.2-0.8 4.4-1.6h0.4c1.6-0.8 3.2-1.6 4.8-2.8 1.2-0.8 2.4-2 3.6-3.2l0.4-0.4c1.2-1.2 2-2.4 2.8-3.6s1.6-2.4 2-4c0-0.4 0-0.4 0.4-0.8 0.8-1.6 1.2-3.6 1.6-5.2 0.4-1.6 0.4-3.6 0.4-5.2s0-3.6-0.4-5.2c-0.4-1.6-0.8-3.2-1.6-5.2 -1.2-2.8-2.8-5.2-4.8-7.2 -0.4-0.4-0.4-0.4-0.8-0.8 -1.2-1.2-2.4-2-4-3.2 -1.6-0.8-2.8-1.6-4.4-2.4 -1.6-0.8-3.2-1.2-4.8-1.6 -2-0.4-3.6-0.4-5.2-0.4 -1.6 0-3.6 0-5.2 0.4 -1.6 0.4-3.2 0.8-4.8 1.6H208c-1.6 0.8-3.2 1.6-4.4 2.4 -1.6 1.2-2.8 2-4 3.2 -1.2 1.2-2.4 2.4-3.2 3.6 -0.8 1.2-1.6 2.8-2.4 4.4 -0.8 1.6-1.2 3.2-1.6 4.8 -0.4 2-0.4 3.6-0.4 5.2 0 1.6 0 3.6 0.4 5.2C192.8 139.6 193.6 141.2 194 142.8z"/><path fill="currentColor" d="M249.6 289.2h-9.2v-98c0-5.6-4.4-10.4-10.4-10.4h-42c-5.6 0-10.4 4.4-10.4 10.4v21.6c0 5.6 4.4 10.4 10.4 10.4h8.4v66.4H188c-5.6 0-10.4 4.4-10.4 10.4v21.6c0 5.6 4.4 10.4 10.4 10.4h61.6c5.6 0 10.4-4.4 10.4-10.4V300C260 294 255.2 289.2 249.6 289.2z"/><path fill="currentColor" d="M218.8 0C98 0 0 98 0 218.8s98 218.8 218.8 218.8 218.8-98 218.8-218.8S339.6 0 218.8 0zM218.8 408.8c-104.8 0-190-85.2-190-190s85.2-190 190-190 190 85.2 190 190S323.6 408.8 218.8 408.8z"/></svg>
								<!-- <div data-toggle="tooltip" data-placement="right" title="Contiene la producción científica, humanística, docente, técnica, cultural y artística, tanto de los miembros de la UNMSM, como de los académicos de otras instituciones. Adicionalmente, este catálogo dispone de obras de valor histórico que son parte del patrimonio cultural de nuestra casa de estudios."> -->
								<!-- <div class="tooltip" title="Contiene la producción científica, humanística, docente, técnica, cultural y artística, tanto de los miembros de la UNMSM, como de los académicos de otras instituciones. Adicionalmente, este catálogo dispone de obras de valor histórico que son parte del patrimonio cultural de nuestra casa de estudios."> -->
									<!-- <svg class="info" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 437.6 437.6" width="32" height="32" data-icon="info-circle"><path fill="currentColor" d="M194 142.8c0.8 1.6 1.6 3.2 2.4 4.4 0.8 1.2 2 2.4 2.8 3.6 1.2 1.2 2.4 2.4 4 3.6 1.2 0.8 2.8 2 4.8 2.4 1.6 0.8 3.2 1.2 5.2 1.6 2 0.4 3.6 0.4 5.2 0.4 1.6 0 3.6 0 5.2-0.4 1.6-0.4 3.2-0.8 4.4-1.6h0.4c1.6-0.8 3.2-1.6 4.8-2.8 1.2-0.8 2.4-2 3.6-3.2l0.4-0.4c1.2-1.2 2-2.4 2.8-3.6s1.6-2.4 2-4c0-0.4 0-0.4 0.4-0.8 0.8-1.6 1.2-3.6 1.6-5.2 0.4-1.6 0.4-3.6 0.4-5.2s0-3.6-0.4-5.2c-0.4-1.6-0.8-3.2-1.6-5.2 -1.2-2.8-2.8-5.2-4.8-7.2 -0.4-0.4-0.4-0.4-0.8-0.8 -1.2-1.2-2.4-2-4-3.2 -1.6-0.8-2.8-1.6-4.4-2.4 -1.6-0.8-3.2-1.2-4.8-1.6 -2-0.4-3.6-0.4-5.2-0.4 -1.6 0-3.6 0-5.2 0.4 -1.6 0.4-3.2 0.8-4.8 1.6H208c-1.6 0.8-3.2 1.6-4.4 2.4 -1.6 1.2-2.8 2-4 3.2 -1.2 1.2-2.4 2.4-3.2 3.6 -0.8 1.2-1.6 2.8-2.4 4.4 -0.8 1.6-1.2 3.2-1.6 4.8 -0.4 2-0.4 3.6-0.4 5.2 0 1.6 0 3.6 0.4 5.2C192.8 139.6 193.6 141.2 194 142.8z"/><path fill="currentColor" d="M249.6 289.2h-9.2v-98c0-5.6-4.4-10.4-10.4-10.4h-42c-5.6 0-10.4 4.4-10.4 10.4v21.6c0 5.6 4.4 10.4 10.4 10.4h8.4v66.4H188c-5.6 0-10.4 4.4-10.4 10.4v21.6c0 5.6 4.4 10.4 10.4 10.4h61.6c5.6 0 10.4-4.4 10.4-10.4V300C260 294 255.2 289.2 249.6 289.2z"/><path fill="currentColor" d="M218.8 0C98 0 0 98 0 218.8s98 218.8 218.8 218.8 218.8-98 218.8-218.8S339.6 0 218.8 0zM218.8 408.8c-104.8 0-190-85.2-190-190s85.2-190 190-190 190 85.2 190 190S323.6 408.8 218.8 408.8z"/></svg> -->
									<!-- <p class="mb-0 moreinfo invisible">+Información</p> -->
								<!-- </div> -->
							<!-- </a> -->
						</a>
						<!--<div id="triangulo" class="triangulo" style="z-index: 2;" ></div>
						<div id="bocadillo" class="bocadillo" style="z-index: 3">
						Contiene la producción científica, humanística, docente, técnica, cultural y artística, tanto de los miembros de la UNMSM, como de los académicos de otras instituciones. Adicionalmente, este catálogo dispone de obras de valor histórico que son parte del patrimonio cultural de nuestra casa de estudios.
						</div>-->
						<!-- </div> -->
						<!--FIN DE FONDO EDITORIAL-->
						<!--INICIO DE REVISTAS -->
						<!-- <div> -->
						<a data-toggle="tooltip" data-placement="right" title="Contiene las revistas de investigación de las facultades e institutos de investigación de la UNMSM." href="http://revistasinvestigacion.unmsm.edu.pe/" target="_blank" class="with-info-mobile ziczacblock">
							<!--<i class="fas fa-info-circle"></i>--><!-- <img src="assets/principal/images/información.png" id="info2" class="info2" alt="Informacion" width="30" height="30"> -->
							<img src="assets/principal/images/revista.png" alt="Revistas" width="80" height="75" class="rev">
							<div>
								<p class="mb-0">Revistas UNMSM</p>
							</div>
							<svg data-toggle="tooltip" data-placement="bottom" data-html="true" title="" data-original-title="Contiene las revistas de investigación de las facultades e institutos de investigación de la UNMSM." class="info-mobile" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 437.6 437.6" width="20" height="20" data-icon="info-circle"><path fill="currentColor" d="M194 142.8c0.8 1.6 1.6 3.2 2.4 4.4 0.8 1.2 2 2.4 2.8 3.6 1.2 1.2 2.4 2.4 4 3.6 1.2 0.8 2.8 2 4.8 2.4 1.6 0.8 3.2 1.2 5.2 1.6 2 0.4 3.6 0.4 5.2 0.4 1.6 0 3.6 0 5.2-0.4 1.6-0.4 3.2-0.8 4.4-1.6h0.4c1.6-0.8 3.2-1.6 4.8-2.8 1.2-0.8 2.4-2 3.6-3.2l0.4-0.4c1.2-1.2 2-2.4 2.8-3.6s1.6-2.4 2-4c0-0.4 0-0.4 0.4-0.8 0.8-1.6 1.2-3.6 1.6-5.2 0.4-1.6 0.4-3.6 0.4-5.2s0-3.6-0.4-5.2c-0.4-1.6-0.8-3.2-1.6-5.2 -1.2-2.8-2.8-5.2-4.8-7.2 -0.4-0.4-0.4-0.4-0.8-0.8 -1.2-1.2-2.4-2-4-3.2 -1.6-0.8-2.8-1.6-4.4-2.4 -1.6-0.8-3.2-1.2-4.8-1.6 -2-0.4-3.6-0.4-5.2-0.4 -1.6 0-3.6 0-5.2 0.4 -1.6 0.4-3.2 0.8-4.8 1.6H208c-1.6 0.8-3.2 1.6-4.4 2.4 -1.6 1.2-2.8 2-4 3.2 -1.2 1.2-2.4 2.4-3.2 3.6 -0.8 1.2-1.6 2.8-2.4 4.4 -0.8 1.6-1.2 3.2-1.6 4.8 -0.4 2-0.4 3.6-0.4 5.2 0 1.6 0 3.6 0.4 5.2C192.8 139.6 193.6 141.2 194 142.8z"/><path fill="currentColor" d="M249.6 289.2h-9.2v-98c0-5.6-4.4-10.4-10.4-10.4h-42c-5.6 0-10.4 4.4-10.4 10.4v21.6c0 5.6 4.4 10.4 10.4 10.4h8.4v66.4H188c-5.6 0-10.4 4.4-10.4 10.4v21.6c0 5.6 4.4 10.4 10.4 10.4h61.6c5.6 0 10.4-4.4 10.4-10.4V300C260 294 255.2 289.2 249.6 289.2z"/><path fill="currentColor" d="M218.8 0C98 0 0 98 0 218.8s98 218.8 218.8 218.8 218.8-98 218.8-218.8S339.6 0 218.8 0zM218.8 408.8c-104.8 0-190-85.2-190-190s85.2-190 190-190 190 85.2 190 190S323.6 408.8 218.8 408.8z"/></svg>
							<!-- <div data-toggle="tooltip" data-placement="right" title="Contiene las revistas de investigación de las facultades e institutos de investigación de la UNMSM."> -->
								<!-- <svg class="info" data-toggle="tooltip" data-placement="right" title="Contiene las revistas de investigación de las facultades e institutos de investigación de la UNMSM."xmlns="http://www.w3.org/2000/svg" viewBox="0 0 437.6 437.6" width="32" height="32" data-icon="info-circle"><path fill="currentColor" d="M194 142.8c0.8 1.6 1.6 3.2 2.4 4.4 0.8 1.2 2 2.4 2.8 3.6 1.2 1.2 2.4 2.4 4 3.6 1.2 0.8 2.8 2 4.8 2.4 1.6 0.8 3.2 1.2 5.2 1.6 2 0.4 3.6 0.4 5.2 0.4 1.6 0 3.6 0 5.2-0.4 1.6-0.4 3.2-0.8 4.4-1.6h0.4c1.6-0.8 3.2-1.6 4.8-2.8 1.2-0.8 2.4-2 3.6-3.2l0.4-0.4c1.2-1.2 2-2.4 2.8-3.6s1.6-2.4 2-4c0-0.4 0-0.4 0.4-0.8 0.8-1.6 1.2-3.6 1.6-5.2 0.4-1.6 0.4-3.6 0.4-5.2s0-3.6-0.4-5.2c-0.4-1.6-0.8-3.2-1.6-5.2 -1.2-2.8-2.8-5.2-4.8-7.2 -0.4-0.4-0.4-0.4-0.8-0.8 -1.2-1.2-2.4-2-4-3.2 -1.6-0.8-2.8-1.6-4.4-2.4 -1.6-0.8-3.2-1.2-4.8-1.6 -2-0.4-3.6-0.4-5.2-0.4 -1.6 0-3.6 0-5.2 0.4 -1.6 0.4-3.2 0.8-4.8 1.6H208c-1.6 0.8-3.2 1.6-4.4 2.4 -1.6 1.2-2.8 2-4 3.2 -1.2 1.2-2.4 2.4-3.2 3.6 -0.8 1.2-1.6 2.8-2.4 4.4 -0.8 1.6-1.2 3.2-1.6 4.8 -0.4 2-0.4 3.6-0.4 5.2 0 1.6 0 3.6 0.4 5.2C192.8 139.6 193.6 141.2 194 142.8z"/><path fill="currentColor" d="M249.6 289.2h-9.2v-98c0-5.6-4.4-10.4-10.4-10.4h-42c-5.6 0-10.4 4.4-10.4 10.4v21.6c0 5.6 4.4 10.4 10.4 10.4h8.4v66.4H188c-5.6 0-10.4 4.4-10.4 10.4v21.6c0 5.6 4.4 10.4 10.4 10.4h61.6c5.6 0 10.4-4.4 10.4-10.4V300C260 294 255.2 289.2 249.6 289.2z"/><path fill="currentColor" d="M218.8 0C98 0 0 98 0 218.8s98 218.8 218.8 218.8 218.8-98 218.8-218.8S339.6 0 218.8 0zM218.8 408.8c-104.8 0-190-85.2-190-190s85.2-190 190-190 190 85.2 190 190S323.6 408.8 218.8 408.8z"/></svg> -->
								<!-- <p class="mb-0 moreinfo invisible">+Información</p> -->
							<!-- </div> -->
							<!-- <a href="http://revistasinvestigacion.unmsm.edu.pe/" target="_blank"> -->
							<!-- </a> -->
						</a>
						<!-- <div id="triangulo2" class="triangulo2" style="z-index: 2;" ></div>
						<div id="bocadillo2" class="bocadillo2" style="z-index: 3">
						Contiene las revistas de investigación de las facultades e institutos de investigación de la UNMSM.
						</div> -->
						<!-- </div> -->
						<!--FIN DE REVISTAS-->
						<!-- INICIO DE CYBERTESIS -->
						<!-- <div> -->
						<a data-toggle="tooltip" data-placement="right" title="Contiene los trabajos de investigación a texto completo, que han sido realizados y autorizados por egresados de nuestra casa de estudios." href="http://cybertesis.unmsm.edu.pe/" target="_blank" class="with-info-mobile ziczacblock">
							<!--<i class="fas fa-info-circle"></i>-->
							<!-- <img src="assets/principal/images/información.png" id="info3" class="info3" alt="Informacion" width="30" height="30"> -->
							<img src="assets/principal/images/tesis.png" alt="Fondo Editorial" class="tesis" width="90" height="90">
							<div>
								<p class="mb-0">Cybertesis: Tesis digitales UNMSM</p>
							</div>
							<svg data-toggle="tooltip" data-placement="bottom" data-html="true" title="" data-original-title="Contiene los trabajos de investigación a texto completo, que han sido realizados y autorizados por egresados de nuestra casa de estudios." class="info-mobile" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 437.6 437.6" width="20" height="20" data-icon="info-circle"><path fill="currentColor" d="M194 142.8c0.8 1.6 1.6 3.2 2.4 4.4 0.8 1.2 2 2.4 2.8 3.6 1.2 1.2 2.4 2.4 4 3.6 1.2 0.8 2.8 2 4.8 2.4 1.6 0.8 3.2 1.2 5.2 1.6 2 0.4 3.6 0.4 5.2 0.4 1.6 0 3.6 0 5.2-0.4 1.6-0.4 3.2-0.8 4.4-1.6h0.4c1.6-0.8 3.2-1.6 4.8-2.8 1.2-0.8 2.4-2 3.6-3.2l0.4-0.4c1.2-1.2 2-2.4 2.8-3.6s1.6-2.4 2-4c0-0.4 0-0.4 0.4-0.8 0.8-1.6 1.2-3.6 1.6-5.2 0.4-1.6 0.4-3.6 0.4-5.2s0-3.6-0.4-5.2c-0.4-1.6-0.8-3.2-1.6-5.2 -1.2-2.8-2.8-5.2-4.8-7.2 -0.4-0.4-0.4-0.4-0.8-0.8 -1.2-1.2-2.4-2-4-3.2 -1.6-0.8-2.8-1.6-4.4-2.4 -1.6-0.8-3.2-1.2-4.8-1.6 -2-0.4-3.6-0.4-5.2-0.4 -1.6 0-3.6 0-5.2 0.4 -1.6 0.4-3.2 0.8-4.8 1.6H208c-1.6 0.8-3.2 1.6-4.4 2.4 -1.6 1.2-2.8 2-4 3.2 -1.2 1.2-2.4 2.4-3.2 3.6 -0.8 1.2-1.6 2.8-2.4 4.4 -0.8 1.6-1.2 3.2-1.6 4.8 -0.4 2-0.4 3.6-0.4 5.2 0 1.6 0 3.6 0.4 5.2C192.8 139.6 193.6 141.2 194 142.8z"/><path fill="currentColor" d="M249.6 289.2h-9.2v-98c0-5.6-4.4-10.4-10.4-10.4h-42c-5.6 0-10.4 4.4-10.4 10.4v21.6c0 5.6 4.4 10.4 10.4 10.4h8.4v66.4H188c-5.6 0-10.4 4.4-10.4 10.4v21.6c0 5.6 4.4 10.4 10.4 10.4h61.6c5.6 0 10.4-4.4 10.4-10.4V300C260 294 255.2 289.2 249.6 289.2z"/><path fill="currentColor" d="M218.8 0C98 0 0 98 0 218.8s98 218.8 218.8 218.8 218.8-98 218.8-218.8S339.6 0 218.8 0zM218.8 408.8c-104.8 0-190-85.2-190-190s85.2-190 190-190 190 85.2 190 190S323.6 408.8 218.8 408.8z"/></svg>
							<!-- <p>ARCHIVO</p> -->
							<!-- <div data-toggle="tooltip" data-placement="right" title="Contiene los trabajos de investigación a texto completo, que han sido realizados y autorizados por egresados de nuestra casa de estudios."> -->
								<!-- <svg class="info" data-toggle="tooltip" data-placement="right" title="Contiene los trabajos de investigación a texto completo, que han sido realizados y autorizados por egresados de nuestra casa de estudios."xmlns="http://www.w3.org/2000/svg" viewBox="0 0 437.6 437.6" width="32" height="32" data-icon="info-circle"><path fill="currentColor" d="M194 142.8c0.8 1.6 1.6 3.2 2.4 4.4 0.8 1.2 2 2.4 2.8 3.6 1.2 1.2 2.4 2.4 4 3.6 1.2 0.8 2.8 2 4.8 2.4 1.6 0.8 3.2 1.2 5.2 1.6 2 0.4 3.6 0.4 5.2 0.4 1.6 0 3.6 0 5.2-0.4 1.6-0.4 3.2-0.8 4.4-1.6h0.4c1.6-0.8 3.2-1.6 4.8-2.8 1.2-0.8 2.4-2 3.6-3.2l0.4-0.4c1.2-1.2 2-2.4 2.8-3.6s1.6-2.4 2-4c0-0.4 0-0.4 0.4-0.8 0.8-1.6 1.2-3.6 1.6-5.2 0.4-1.6 0.4-3.6 0.4-5.2s0-3.6-0.4-5.2c-0.4-1.6-0.8-3.2-1.6-5.2 -1.2-2.8-2.8-5.2-4.8-7.2 -0.4-0.4-0.4-0.4-0.8-0.8 -1.2-1.2-2.4-2-4-3.2 -1.6-0.8-2.8-1.6-4.4-2.4 -1.6-0.8-3.2-1.2-4.8-1.6 -2-0.4-3.6-0.4-5.2-0.4 -1.6 0-3.6 0-5.2 0.4 -1.6 0.4-3.2 0.8-4.8 1.6H208c-1.6 0.8-3.2 1.6-4.4 2.4 -1.6 1.2-2.8 2-4 3.2 -1.2 1.2-2.4 2.4-3.2 3.6 -0.8 1.2-1.6 2.8-2.4 4.4 -0.8 1.6-1.2 3.2-1.6 4.8 -0.4 2-0.4 3.6-0.4 5.2 0 1.6 0 3.6 0.4 5.2C192.8 139.6 193.6 141.2 194 142.8z"/><path fill="currentColor" d="M249.6 289.2h-9.2v-98c0-5.6-4.4-10.4-10.4-10.4h-42c-5.6 0-10.4 4.4-10.4 10.4v21.6c0 5.6 4.4 10.4 10.4 10.4h8.4v66.4H188c-5.6 0-10.4 4.4-10.4 10.4v21.6c0 5.6 4.4 10.4 10.4 10.4h61.6c5.6 0 10.4-4.4 10.4-10.4V300C260 294 255.2 289.2 249.6 289.2z"/><path fill="currentColor" d="M218.8 0C98 0 0 98 0 218.8s98 218.8 218.8 218.8 218.8-98 218.8-218.8S339.6 0 218.8 0zM218.8 408.8c-104.8 0-190-85.2-190-190s85.2-190 190-190 190 85.2 190 190S323.6 408.8 218.8 408.8z"/></svg> -->
								<!-- <p class="mb-0 moreinfo invisible">+Información</p> -->
							<!-- </div> -->
							<!-- <a href="http://cybertesis.unmsm.edu.pe/" target="_blank"> -->
							<!-- </a> -->
						<!-- <div id="triangulo3" class="triangulo3" style="z-index: 2;" ></div>
						<div id="bocadillo3" class="bocadillo3" style="z-index: 3">
						Contiene los trabajos de investigación a texto completo, que han sido realizados y autorizados por egresados de nuestra casa de estudios.
						</div> -->
						</a>
						<!-- <a href="../archivos/documentos/Lista2017-2019-Cybertesis.xlsx" target="_blank" style="background: #e84807;">
                            <i class="fas fa-angle-double-down"></i>&nbsp;
                            <u>Lista de Tesis ingresadas 2017 - 2019</u>
                        </a> -->
						<!-- </div> -->
						<!--FIN DE CYBERTESIS-->
						<!--INICIO DE ARCHIVOS DE MEMORIA-->
						<!-- <div> -->
						<a data-toggle="tooltip" data-placement="right" title="Contiene entrevistas con exestudiantes y otros miembros de la comunidad sanmarquina durante los años 1945 a 1960." href="http://sisbib.unmsm.edu.pe/Memoria_Oral/" target="_blank" class="with-info-mobile ziczacblock">
							<!-- <img src="assets/principal/images/información.png" id="info4" class="info4" alt="Informacion" width="30" height="30"> -->
							<img src="assets/principal/images/video.png" alt="Video" class="arch" width="80" height="80">
							<div>
								<p class="mb-0">Archivo de memoria oral de San Marcos</p>
							</div>
							<svg data-toggle="tooltip" data-placement="bottom" data-html="true" title="" data-original-title="Contiene entrevistas con exestudiantes y otros miembros de la comunidad sanmarquina durante los años 1945 a 1960." class="info-mobile" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 437.6 437.6" width="20" height="20" data-icon="info-circle"><path fill="currentColor" d="M194 142.8c0.8 1.6 1.6 3.2 2.4 4.4 0.8 1.2 2 2.4 2.8 3.6 1.2 1.2 2.4 2.4 4 3.6 1.2 0.8 2.8 2 4.8 2.4 1.6 0.8 3.2 1.2 5.2 1.6 2 0.4 3.6 0.4 5.2 0.4 1.6 0 3.6 0 5.2-0.4 1.6-0.4 3.2-0.8 4.4-1.6h0.4c1.6-0.8 3.2-1.6 4.8-2.8 1.2-0.8 2.4-2 3.6-3.2l0.4-0.4c1.2-1.2 2-2.4 2.8-3.6s1.6-2.4 2-4c0-0.4 0-0.4 0.4-0.8 0.8-1.6 1.2-3.6 1.6-5.2 0.4-1.6 0.4-3.6 0.4-5.2s0-3.6-0.4-5.2c-0.4-1.6-0.8-3.2-1.6-5.2 -1.2-2.8-2.8-5.2-4.8-7.2 -0.4-0.4-0.4-0.4-0.8-0.8 -1.2-1.2-2.4-2-4-3.2 -1.6-0.8-2.8-1.6-4.4-2.4 -1.6-0.8-3.2-1.2-4.8-1.6 -2-0.4-3.6-0.4-5.2-0.4 -1.6 0-3.6 0-5.2 0.4 -1.6 0.4-3.2 0.8-4.8 1.6H208c-1.6 0.8-3.2 1.6-4.4 2.4 -1.6 1.2-2.8 2-4 3.2 -1.2 1.2-2.4 2.4-3.2 3.6 -0.8 1.2-1.6 2.8-2.4 4.4 -0.8 1.6-1.2 3.2-1.6 4.8 -0.4 2-0.4 3.6-0.4 5.2 0 1.6 0 3.6 0.4 5.2C192.8 139.6 193.6 141.2 194 142.8z"/><path fill="currentColor" d="M249.6 289.2h-9.2v-98c0-5.6-4.4-10.4-10.4-10.4h-42c-5.6 0-10.4 4.4-10.4 10.4v21.6c0 5.6 4.4 10.4 10.4 10.4h8.4v66.4H188c-5.6 0-10.4 4.4-10.4 10.4v21.6c0 5.6 4.4 10.4 10.4 10.4h61.6c5.6 0 10.4-4.4 10.4-10.4V300C260 294 255.2 289.2 249.6 289.2z"/><path fill="currentColor" d="M218.8 0C98 0 0 98 0 218.8s98 218.8 218.8 218.8 218.8-98 218.8-218.8S339.6 0 218.8 0zM218.8 408.8c-104.8 0-190-85.2-190-190s85.2-190 190-190 190 85.2 190 190S323.6 408.8 218.8 408.8z"/></svg>
							<!-- <div data-toggle="tooltip" data-placement="right" title="Contiene entrevitas con ex estudiantes y otros miembros de la comunidad sanmarquina durante los años 1945 a 1960."> -->
								<!-- <svg class="info" data-toggle="tooltip" data-placement="right" title="Contiene entrevitas con ex estudiantes y otros miembros de la comunidad sanmarquina durante los años 1945 a 1960."xmlns="http://www.w3.org/2000/svg" viewBox="0 0 437.6 437.6" width="32" height="32" data-icon="info-circle"><path fill="currentColor" d="M194 142.8c0.8 1.6 1.6 3.2 2.4 4.4 0.8 1.2 2 2.4 2.8 3.6 1.2 1.2 2.4 2.4 4 3.6 1.2 0.8 2.8 2 4.8 2.4 1.6 0.8 3.2 1.2 5.2 1.6 2 0.4 3.6 0.4 5.2 0.4 1.6 0 3.6 0 5.2-0.4 1.6-0.4 3.2-0.8 4.4-1.6h0.4c1.6-0.8 3.2-1.6 4.8-2.8 1.2-0.8 2.4-2 3.6-3.2l0.4-0.4c1.2-1.2 2-2.4 2.8-3.6s1.6-2.4 2-4c0-0.4 0-0.4 0.4-0.8 0.8-1.6 1.2-3.6 1.6-5.2 0.4-1.6 0.4-3.6 0.4-5.2s0-3.6-0.4-5.2c-0.4-1.6-0.8-3.2-1.6-5.2 -1.2-2.8-2.8-5.2-4.8-7.2 -0.4-0.4-0.4-0.4-0.8-0.8 -1.2-1.2-2.4-2-4-3.2 -1.6-0.8-2.8-1.6-4.4-2.4 -1.6-0.8-3.2-1.2-4.8-1.6 -2-0.4-3.6-0.4-5.2-0.4 -1.6 0-3.6 0-5.2 0.4 -1.6 0.4-3.2 0.8-4.8 1.6H208c-1.6 0.8-3.2 1.6-4.4 2.4 -1.6 1.2-2.8 2-4 3.2 -1.2 1.2-2.4 2.4-3.2 3.6 -0.8 1.2-1.6 2.8-2.4 4.4 -0.8 1.6-1.2 3.2-1.6 4.8 -0.4 2-0.4 3.6-0.4 5.2 0 1.6 0 3.6 0.4 5.2C192.8 139.6 193.6 141.2 194 142.8z"/><path fill="currentColor" d="M249.6 289.2h-9.2v-98c0-5.6-4.4-10.4-10.4-10.4h-42c-5.6 0-10.4 4.4-10.4 10.4v21.6c0 5.6 4.4 10.4 10.4 10.4h8.4v66.4H188c-5.6 0-10.4 4.4-10.4 10.4v21.6c0 5.6 4.4 10.4 10.4 10.4h61.6c5.6 0 10.4-4.4 10.4-10.4V300C260 294 255.2 289.2 249.6 289.2z"/><path fill="currentColor" d="M218.8 0C98 0 0 98 0 218.8s98 218.8 218.8 218.8 218.8-98 218.8-218.8S339.6 0 218.8 0zM218.8 408.8c-104.8 0-190-85.2-190-190s85.2-190 190-190 190 85.2 190 190S323.6 408.8 218.8 408.8z"/></svg> -->
								<!-- <p class="mb-0 moreinfo invisible">+Información</p> -->
							<!-- </div> -->
							<!-- <a href="http://sisbib.unmsm.edu.pe/Memoria_Oral/" target="_blank"> -->
							<!-- </a> -->
						<!-- </div> -->
						<!-- <div id="triangulo4" class="triangulo4" style="z-index: 2;"></div>
						<div id="bocadillo4" class="bocadillo4" style="z-index: 3">
						Contiene entrevitas con ex estudiantes y otros miembros de la comunidad sanmarquina durante los años 1945 a 1960.
						</div> -->
						</a>
						<!--FIN DE ARCHIVOS DE MEMORIA-->

						<!--INICIO DE ACTAS DEL CONSEJO DE MINISTROS-->
						<!-- <div> -->
						<a data-toggle="tooltip" data-placement="right" title="" href="http://sisbib.unmsm.edu.pe/Repositorio_ACM/" target="_blank" class="with-info-mobile ziczacblock">
							<img src="assets/principal/images/repo-actas.png" alt="ACM" class="arch" width="80" height="80">
							<div>
								<p class="mb-0">Actas del Consejo de Ministros</p>
							</div>
							<!-- <svg data-toggle="tooltip" data-placement="bottom" data-html="true" title="" data-original-title="Contiene entrevistas con exestudiantes y otros miembros de la comunidad sanmarquina durante los años 1945 a 1960." class="info-mobile" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 437.6 437.6" width="20" height="20" data-icon="info-circle"><path fill="currentColor" d="M194 142.8c0.8 1.6 1.6 3.2 2.4 4.4 0.8 1.2 2 2.4 2.8 3.6 1.2 1.2 2.4 2.4 4 3.6 1.2 0.8 2.8 2 4.8 2.4 1.6 0.8 3.2 1.2 5.2 1.6 2 0.4 3.6 0.4 5.2 0.4 1.6 0 3.6 0 5.2-0.4 1.6-0.4 3.2-0.8 4.4-1.6h0.4c1.6-0.8 3.2-1.6 4.8-2.8 1.2-0.8 2.4-2 3.6-3.2l0.4-0.4c1.2-1.2 2-2.4 2.8-3.6s1.6-2.4 2-4c0-0.4 0-0.4 0.4-0.8 0.8-1.6 1.2-3.6 1.6-5.2 0.4-1.6 0.4-3.6 0.4-5.2s0-3.6-0.4-5.2c-0.4-1.6-0.8-3.2-1.6-5.2 -1.2-2.8-2.8-5.2-4.8-7.2 -0.4-0.4-0.4-0.4-0.8-0.8 -1.2-1.2-2.4-2-4-3.2 -1.6-0.8-2.8-1.6-4.4-2.4 -1.6-0.8-3.2-1.2-4.8-1.6 -2-0.4-3.6-0.4-5.2-0.4 -1.6 0-3.6 0-5.2 0.4 -1.6 0.4-3.2 0.8-4.8 1.6H208c-1.6 0.8-3.2 1.6-4.4 2.4 -1.6 1.2-2.8 2-4 3.2 -1.2 1.2-2.4 2.4-3.2 3.6 -0.8 1.2-1.6 2.8-2.4 4.4 -0.8 1.6-1.2 3.2-1.6 4.8 -0.4 2-0.4 3.6-0.4 5.2 0 1.6 0 3.6 0.4 5.2C192.8 139.6 193.6 141.2 194 142.8z"/><path fill="currentColor" d="M249.6 289.2h-9.2v-98c0-5.6-4.4-10.4-10.4-10.4h-42c-5.6 0-10.4 4.4-10.4 10.4v21.6c0 5.6 4.4 10.4 10.4 10.4h8.4v66.4H188c-5.6 0-10.4 4.4-10.4 10.4v21.6c0 5.6 4.4 10.4 10.4 10.4h61.6c5.6 0 10.4-4.4 10.4-10.4V300C260 294 255.2 289.2 249.6 289.2z"/><path fill="currentColor" d="M218.8 0C98 0 0 98 0 218.8s98 218.8 218.8 218.8 218.8-98 218.8-218.8S339.6 0 218.8 0zM218.8 408.8c-104.8 0-190-85.2-190-190s85.2-190 190-190 190 85.2 190 190S323.6 408.8 218.8 408.8z"/></svg> -->
						</a>
						<!--FIN DE ACTAS DEL CONSEJO DE MINISTROS-->

					</div>
					
				</div>
				<!-- FIN REPOSITORIOS -->
				<!-- GESTORES BIBLIOGRAFICOS -->
				<div id="cont3" class="movercont1">
					<!-- <div> -->
					<div class="mb-3 sub-title-sisbib" style="color: #C8A22B;">GESTORES BIBLIOGRÁFICOS</div>
					<br>
					<div class="wrapper-ziczac cont m-auto">
						<a data-toggle="tooltip" data-placement="right" data-html="true" title="Permite organizar, revisar y compartir material de investigación a través de su versión para escritorio y plataforma web.<br>Habilitado en inglés/ Apto para MAC, WINDOWS y LINUX." href="https://www.mendeley.com/?interaction_required=true" target="_blank" class="with-info-mobile ziczacblock"><!--<i class="fas fa-info-circle"></i>-->
							<!-- <img src="assets/principal/images/información.png" alt="Informacion" id="info5" width="30" height="30" class="info" id="info5"> -->
							<img src="assets/principal/images/mendeley.png" alt="Mendeley" width="90" height="90">
							<div>
								<p class="mb-0">Mendeley</p>
							</div>
							<svg data-toggle="tooltip" data-placement="bottom" data-html="true" title="" data-original-title="Permite organizar, revisar y compartir material de investigación a través de su versión para escritorio y plataforma web.<br>Habilitado en inglés/ Apto para MAC, WINDOWS y LINUX." class="info-mobile" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 437.6 437.6" width="20" height="20" data-icon="info-circle"><path fill="currentColor" d="M194 142.8c0.8 1.6 1.6 3.2 2.4 4.4 0.8 1.2 2 2.4 2.8 3.6 1.2 1.2 2.4 2.4 4 3.6 1.2 0.8 2.8 2 4.8 2.4 1.6 0.8 3.2 1.2 5.2 1.6 2 0.4 3.6 0.4 5.2 0.4 1.6 0 3.6 0 5.2-0.4 1.6-0.4 3.2-0.8 4.4-1.6h0.4c1.6-0.8 3.2-1.6 4.8-2.8 1.2-0.8 2.4-2 3.6-3.2l0.4-0.4c1.2-1.2 2-2.4 2.8-3.6s1.6-2.4 2-4c0-0.4 0-0.4 0.4-0.8 0.8-1.6 1.2-3.6 1.6-5.2 0.4-1.6 0.4-3.6 0.4-5.2s0-3.6-0.4-5.2c-0.4-1.6-0.8-3.2-1.6-5.2 -1.2-2.8-2.8-5.2-4.8-7.2 -0.4-0.4-0.4-0.4-0.8-0.8 -1.2-1.2-2.4-2-4-3.2 -1.6-0.8-2.8-1.6-4.4-2.4 -1.6-0.8-3.2-1.2-4.8-1.6 -2-0.4-3.6-0.4-5.2-0.4 -1.6 0-3.6 0-5.2 0.4 -1.6 0.4-3.2 0.8-4.8 1.6H208c-1.6 0.8-3.2 1.6-4.4 2.4 -1.6 1.2-2.8 2-4 3.2 -1.2 1.2-2.4 2.4-3.2 3.6 -0.8 1.2-1.6 2.8-2.4 4.4 -0.8 1.6-1.2 3.2-1.6 4.8 -0.4 2-0.4 3.6-0.4 5.2 0 1.6 0 3.6 0.4 5.2C192.8 139.6 193.6 141.2 194 142.8z"/><path fill="currentColor" d="M249.6 289.2h-9.2v-98c0-5.6-4.4-10.4-10.4-10.4h-42c-5.6 0-10.4 4.4-10.4 10.4v21.6c0 5.6 4.4 10.4 10.4 10.4h8.4v66.4H188c-5.6 0-10.4 4.4-10.4 10.4v21.6c0 5.6 4.4 10.4 10.4 10.4h61.6c5.6 0 10.4-4.4 10.4-10.4V300C260 294 255.2 289.2 249.6 289.2z"/><path fill="currentColor" d="M218.8 0C98 0 0 98 0 218.8s98 218.8 218.8 218.8 218.8-98 218.8-218.8S339.6 0 218.8 0zM218.8 408.8c-104.8 0-190-85.2-190-190s85.2-190 190-190 190 85.2 190 190S323.6 408.8 218.8 408.8z"/></svg>
							<!-- <svg class="info" data-toggle="tooltip" data-placement="right" data-html="true" title="Permite organizar, revisar y compartir material de investigación a través de su versión para escritorio y plataforma web.<br>Habilitado en inglés/ Apto para MAC, WINDOWS y LINUX." xmlns="http://www.w3.org/2000/svg" viewBox="0 0 437.6 437.6" width="32" height="32" data-icon="info-circle"><path fill="currentColor" d="M194 142.8c0.8 1.6 1.6 3.2 2.4 4.4 0.8 1.2 2 2.4 2.8 3.6 1.2 1.2 2.4 2.4 4 3.6 1.2 0.8 2.8 2 4.8 2.4 1.6 0.8 3.2 1.2 5.2 1.6 2 0.4 3.6 0.4 5.2 0.4 1.6 0 3.6 0 5.2-0.4 1.6-0.4 3.2-0.8 4.4-1.6h0.4c1.6-0.8 3.2-1.6 4.8-2.8 1.2-0.8 2.4-2 3.6-3.2l0.4-0.4c1.2-1.2 2-2.4 2.8-3.6s1.6-2.4 2-4c0-0.4 0-0.4 0.4-0.8 0.8-1.6 1.2-3.6 1.6-5.2 0.4-1.6 0.4-3.6 0.4-5.2s0-3.6-0.4-5.2c-0.4-1.6-0.8-3.2-1.6-5.2 -1.2-2.8-2.8-5.2-4.8-7.2 -0.4-0.4-0.4-0.4-0.8-0.8 -1.2-1.2-2.4-2-4-3.2 -1.6-0.8-2.8-1.6-4.4-2.4 -1.6-0.8-3.2-1.2-4.8-1.6 -2-0.4-3.6-0.4-5.2-0.4 -1.6 0-3.6 0-5.2 0.4 -1.6 0.4-3.2 0.8-4.8 1.6H208c-1.6 0.8-3.2 1.6-4.4 2.4 -1.6 1.2-2.8 2-4 3.2 -1.2 1.2-2.4 2.4-3.2 3.6 -0.8 1.2-1.6 2.8-2.4 4.4 -0.8 1.6-1.2 3.2-1.6 4.8 -0.4 2-0.4 3.6-0.4 5.2 0 1.6 0 3.6 0.4 5.2C192.8 139.6 193.6 141.2 194 142.8z"/><path fill="currentColor" d="M249.6 289.2h-9.2v-98c0-5.6-4.4-10.4-10.4-10.4h-42c-5.6 0-10.4 4.4-10.4 10.4v21.6c0 5.6 4.4 10.4 10.4 10.4h8.4v66.4H188c-5.6 0-10.4 4.4-10.4 10.4v21.6c0 5.6 4.4 10.4 10.4 10.4h61.6c5.6 0 10.4-4.4 10.4-10.4V300C260 294 255.2 289.2 249.6 289.2z"/><path fill="currentColor" d="M218.8 0C98 0 0 98 0 218.8s98 218.8 218.8 218.8 218.8-98 218.8-218.8S339.6 0 218.8 0zM218.8 408.8c-104.8 0-190-85.2-190-190s85.2-190 190-190 190 85.2 190 190S323.6 408.8 218.8 408.8z"/></svg> -->
							<!-- <p class="mb-0 moreinfo invisible">+Información</p> -->
							<!-- <a href="https://www.mendeley.com/?interaction_required=true" target="_blank"> -->
							<!-- </a> -->
							<!--<div id="triangulo5" class="triangulo5" style="z-index: 2;" ></div>
							<div id="bocadillo5" class="bocadillo5" style="z-index: 3">
							Contiene los trabajos de investigación a texto completo, que han sido realizados y autorizados por egresados de nuestra casa de estudios.
							</div>-->
						</a>
						<!-- </div> -->

						<!-- <div> -->
						<a data-toggle="tooltip" data-placement="right" data-html="true" title="Permite organizar, revisar y compartir material de investigación a través de su versión para escritorio y plataforma web.<br>Habilitado en español/ Apto para MAC, WINDOWS y LINUX." href="https://www.zotero.org/" target="_blank" class="with-info-mobile ziczacblock"><!--<i class="fas fa-info-circle"></i>--> 
							<!-- <img src="assets/principal/images/información.png" alt="Zotero" id="info6" width="30" height="30" class="info" id="info6"> -->
							<img src="assets/principal/images/zotero.png" alt="Revistas" width="80" height="75">
							<div>
								<p class="mb-0">Zotero</p>
							</div>
							<svg data-toggle="tooltip" data-placement="bottom" data-html="true" title="" data-original-title="Permite organizar, revisar y compartir material de investigación a través de su versión para escritorio y plataforma web.<br>Habilitado en español/ Apto para MAC, WINDOWS y LINUX." class="info-mobile" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 437.6 437.6" width="20" height="20" data-icon="info-circle"><path fill="currentColor" d="M194 142.8c0.8 1.6 1.6 3.2 2.4 4.4 0.8 1.2 2 2.4 2.8 3.6 1.2 1.2 2.4 2.4 4 3.6 1.2 0.8 2.8 2 4.8 2.4 1.6 0.8 3.2 1.2 5.2 1.6 2 0.4 3.6 0.4 5.2 0.4 1.6 0 3.6 0 5.2-0.4 1.6-0.4 3.2-0.8 4.4-1.6h0.4c1.6-0.8 3.2-1.6 4.8-2.8 1.2-0.8 2.4-2 3.6-3.2l0.4-0.4c1.2-1.2 2-2.4 2.8-3.6s1.6-2.4 2-4c0-0.4 0-0.4 0.4-0.8 0.8-1.6 1.2-3.6 1.6-5.2 0.4-1.6 0.4-3.6 0.4-5.2s0-3.6-0.4-5.2c-0.4-1.6-0.8-3.2-1.6-5.2 -1.2-2.8-2.8-5.2-4.8-7.2 -0.4-0.4-0.4-0.4-0.8-0.8 -1.2-1.2-2.4-2-4-3.2 -1.6-0.8-2.8-1.6-4.4-2.4 -1.6-0.8-3.2-1.2-4.8-1.6 -2-0.4-3.6-0.4-5.2-0.4 -1.6 0-3.6 0-5.2 0.4 -1.6 0.4-3.2 0.8-4.8 1.6H208c-1.6 0.8-3.2 1.6-4.4 2.4 -1.6 1.2-2.8 2-4 3.2 -1.2 1.2-2.4 2.4-3.2 3.6 -0.8 1.2-1.6 2.8-2.4 4.4 -0.8 1.6-1.2 3.2-1.6 4.8 -0.4 2-0.4 3.6-0.4 5.2 0 1.6 0 3.6 0.4 5.2C192.8 139.6 193.6 141.2 194 142.8z"/><path fill="currentColor" d="M249.6 289.2h-9.2v-98c0-5.6-4.4-10.4-10.4-10.4h-42c-5.6 0-10.4 4.4-10.4 10.4v21.6c0 5.6 4.4 10.4 10.4 10.4h8.4v66.4H188c-5.6 0-10.4 4.4-10.4 10.4v21.6c0 5.6 4.4 10.4 10.4 10.4h61.6c5.6 0 10.4-4.4 10.4-10.4V300C260 294 255.2 289.2 249.6 289.2z"/><path fill="currentColor" d="M218.8 0C98 0 0 98 0 218.8s98 218.8 218.8 218.8 218.8-98 218.8-218.8S339.6 0 218.8 0zM218.8 408.8c-104.8 0-190-85.2-190-190s85.2-190 190-190 190 85.2 190 190S323.6 408.8 218.8 408.8z"/></svg>
							<!-- <svg class="info" data-toggle="tooltip" data-placement="right" data-html="true" title="Permite organizar, revisar y compartir material de investigación a través de su versión para escritorio y plataforma web.<br>Habilitado en español/ Apto para MAC, WINDOWS y LINUX." xmlns="http://www.w3.org/2000/svg" viewBox="0 0 437.6 437.6" width="32" height="32" data-icon="info-circle"><path fill="currentColor" d="M194 142.8c0.8 1.6 1.6 3.2 2.4 4.4 0.8 1.2 2 2.4 2.8 3.6 1.2 1.2 2.4 2.4 4 3.6 1.2 0.8 2.8 2 4.8 2.4 1.6 0.8 3.2 1.2 5.2 1.6 2 0.4 3.6 0.4 5.2 0.4 1.6 0 3.6 0 5.2-0.4 1.6-0.4 3.2-0.8 4.4-1.6h0.4c1.6-0.8 3.2-1.6 4.8-2.8 1.2-0.8 2.4-2 3.6-3.2l0.4-0.4c1.2-1.2 2-2.4 2.8-3.6s1.6-2.4 2-4c0-0.4 0-0.4 0.4-0.8 0.8-1.6 1.2-3.6 1.6-5.2 0.4-1.6 0.4-3.6 0.4-5.2s0-3.6-0.4-5.2c-0.4-1.6-0.8-3.2-1.6-5.2 -1.2-2.8-2.8-5.2-4.8-7.2 -0.4-0.4-0.4-0.4-0.8-0.8 -1.2-1.2-2.4-2-4-3.2 -1.6-0.8-2.8-1.6-4.4-2.4 -1.6-0.8-3.2-1.2-4.8-1.6 -2-0.4-3.6-0.4-5.2-0.4 -1.6 0-3.6 0-5.2 0.4 -1.6 0.4-3.2 0.8-4.8 1.6H208c-1.6 0.8-3.2 1.6-4.4 2.4 -1.6 1.2-2.8 2-4 3.2 -1.2 1.2-2.4 2.4-3.2 3.6 -0.8 1.2-1.6 2.8-2.4 4.4 -0.8 1.6-1.2 3.2-1.6 4.8 -0.4 2-0.4 3.6-0.4 5.2 0 1.6 0 3.6 0.4 5.2C192.8 139.6 193.6 141.2 194 142.8z"/><path fill="currentColor" d="M249.6 289.2h-9.2v-98c0-5.6-4.4-10.4-10.4-10.4h-42c-5.6 0-10.4 4.4-10.4 10.4v21.6c0 5.6 4.4 10.4 10.4 10.4h8.4v66.4H188c-5.6 0-10.4 4.4-10.4 10.4v21.6c0 5.6 4.4 10.4 10.4 10.4h61.6c5.6 0 10.4-4.4 10.4-10.4V300C260 294 255.2 289.2 249.6 289.2z"/><path fill="currentColor" d="M218.8 0C98 0 0 98 0 218.8s98 218.8 218.8 218.8 218.8-98 218.8-218.8S339.6 0 218.8 0zM218.8 408.8c-104.8 0-190-85.2-190-190s85.2-190 190-190 190 85.2 190 190S323.6 408.8 218.8 408.8z"/></svg> -->
							<!-- <p class="mb-0 moreinfo invisible">+Información</p> -->
							<!-- <a href="https://www.mendeley.com/?interaction_required=true" target="_blank"> -->
							<!-- </a> -->
							<!--<div id="triangulo6" class="triangulo6" style="z-index: 2;" ></div>
							<div id="bocadillo6" class="bocadillo6" style="z-index: 3">
							Contiene los trabajos de investigación a texto completo, que han sido realizados y autorizados por egresados de nuestra casa de estudios.
							</div>-->
						</a>
						<!-- </div> -->
						<!-- <div id="goto_cont5" class="ziczacblock justify-content-center"> -->
						<a id="goto_cont5" class="ziczacblock justify-content-center" href="#">
							<p class="mb-0">¿No sabes como utilizar estos recursos?</p>
						</a>
					</div>
					<!-- </div> -->
				</div>
				<!-- FIN DE GESTORES BIBLIOGRAFICOS -->
				<!-- INICIO DE CAPACITACIONES EN USO DE RECURSOS ELECTRONICOS -->
				<div id="cont5" class="movercont1">
					<div style="width: 100%;">
						<!-- <img style="width: 100%;" src="assets/principal/images/capacitacion_lunes(2).png" alt="">
						<a class="abox mb-4" style="display: block; width: max-content; margin: auto;" href="https://forms.gle/YddAJUgFb7TPpJip6" target="_blank">Formulario de inscripción</a>
						<div class="mb-4">
							<p>También puedes solicitar una capacitación con un grupo mínimo de 7 personas. Para ello puedes enviarnos un correo o escribirnos a través de Facebook, incluyendo la lista de los participantes.</p>
						</div>
						<div class="social">
							<a href="https://www.facebook.com/pg/RecursosElectronicosBibliotecaCentral/posts/" class="hover-icon" target="_blank"><i class="fab fa-facebook-square"></i></a>
							<a href="mailto:capacitacioninformacional.dsbbc@unmsm.edu.pe" class="hover-icon" target="_blank"><i class="fas fa-envelope-square"></i></a>
						</div> -->
						<div class="mb-3 sub-title-sisbib" style="color: #C8A22B;">CAPACITACIONES EN USO DE RECURSOS ELECTRÓNICOS</div>
						<p>Las capacitaciones en uso de Recursos Electrónicos se realizan de manera gratuita a lo largo de todo el año en el tercer piso de la Biblioteca Central</p>
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="fechas-tab" data-toggle="tab" href="#fechas" role="tab" aria-controls="fechas" aria-selected="true">Fechas e inscripción</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="aprender-tab" data-toggle="tab" href="#aprender" role="tab" aria-controls="aprender" aria-selected="false">¿Qué aprenderé?</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="solicitar-tab" data-toggle="tab" href="#solicitar" role="tab" aria-controls="solicitar" aria-selected="false">Solicitar una capacitación</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="asisti-tab" data-toggle="tab" href="#asisti" role="tab" aria-controls="asisti" aria-selected="false">Asistí a una capacitación</a>
							</li>
						</ul>
						<div class="tab-content" id="myTabContent">
							<div class="px-2 py-4 tab-pane fade show active" id="fechas" role="tabpanel" aria-labelledby="fechas-tab">
								<!-- <div>
									<p class="font-weight-bold h5 mb-3">Noviembre</p>
									<div class="grupo-fechas">
										<div class="cont block-fecha">
											<div class="h-100 cont float-left">
												<div class="h-100 block-calendar float-left">
													<div class="text-center">29</div>
													<div class="text-center">Viernes</div>
												</div>
												<div class="float-left side-borde">
													<p class="mb-0">Capacitación en uso de base de datos</p>
													<p class="mb-0"><i class="far fa-clock"></i>&nbsp;6 p.m. a 8 p.m.</p>
													<p class="mb-0"><i class="fas fa-map-marker-alt"></i>&nbsp;Tercer piso de la Biblioteca Central</p>
												</div>
											</div>
											<div class="float-right h-100 d-flex align-items-center justify-content-center">
												<a class="like-button" href="#">Inscripción</a>
											</div>
										</div>
										<div class="cont block-fecha">
											<div class="h-100 cont float-left">
												<div class="h-100 block-calendar float-left">
													<div class="text-center">30</div>
													<div class="text-center">Sábado</div>
												</div>
												<div class="float-left side-borde">
													<p class="mb-0">Capacitación en uso de gestores bibliográficos</p>
													<p class="mb-0"><i class="far fa-clock"></i>&nbsp;9 a.m. a 11 m.</p>
													<p class="mb-0"><i class="fas fa-map-marker-alt"></i>&nbsp;Tercer piso de la Biblioteca Central</p>
												</div>
											</div>
											<div class="float-right h-100 d-flex align-items-center justify-content-center">
												<a class="like-button" href="#">Inscripción</a>
											</div>
										</div>
										<div class="cont block-fecha cust">
											<div class="h-100 cont float-left">
												<div class="h-100 block-calendar float-left">
													<div class="text-center">3</div>
													<div class="text-center">Martes</div>
												</div>
												<div class="float-left side-borde">
													<p class="mb-0">Capacitación virtual. Aprende más sobre SciFinder</p>
													<p class="mb-0"><i class="far fa-clock"></i>&nbsp;9:30 a.m.</p>
													<p class="mb-0"><i class="fas fa-map-marker-alt"></i><span>&nbsp;&nbsp;</span><a href="https://casevents.webex.com/casevents/j.php?MTID=m1049fba6017d76fac055024336916b69" target="_blank">Enlace aquí</a></p>
													<p>
														<span class="ml-2">Reunión número (código de acceso): 620 607 781</span><br>
														<span class="ml-2">Contraseña de reunión: UNMSM</span>
													</p>
													<hr>
													<p class="mb-0"><a href="archivos/documentos/Scifinder.pdf" target="_blank">Manual SciFinder</a></p>
												</div>
											</div>
											<div class="float-right h-100 d-flex align-items-center justify-content-center">
												<a class="like-button" href="#">Inscripción</a>
											</div>
										</div>
									</div>
								</div> -->
								<!-- EJEMPLO CAPACITACION FIN -->
								<div>

									<p class="font-weight-bold h5 mb-3">Marzo</p>

									<div class="grupo-fechas">

										<!-- <div class="cont block-fecha">
											<div class="d-grid">
												<div class="block-calendar">
													<div class="text-center">4</div>
													<div class="text-center">Miércoles</div>
												</div>
												<div class="side-borde">
													<p class="mb-0">Bases de datos abiertas</p>
													<p class="mb-0"><i class="far fa-clock"></i>&nbsp;9:30 a.m. a 11:30 a.m.</p>
													<p class="mb-0"><i class="fas fa-map-marker-alt"></i>&nbsp;Aula de capacitaciones - Tercer piso de la Biblioteca Central</p>
												</div>
											</div>
										</div> -->

										<p><b>CAPACIDAD LIMITADA (29 personas)</b></p>

										<div class="cont block-fecha">
											<div class="d-grid">
												<div class="block-calendar">
													<div class="text-center">4</div>
													<div class="text-center">Miércoles</div>
												</div>
												<div class="side-borde">
													<p class="mb-0">
														<i class="far fa-clock"></i>
														<span class="font-weight-bold">&nbsp;9:00 a.m. a 10:30 a.m.</span><span>&nbsp;Bases de datos abiertas y repositorios UNMSM.</span>
													</p>
													<p class="mb-0">
														<i class="far fa-clock"></i>
														<span class="font-weight-bold">&nbsp;10:30 a.m. a 12 m.</span><span>&nbsp;Statista y otras bases de datos.</span>
													</p>
													<p class="mb-0">
														<i class="far fa-clock"></i>
														<span class="font-weight-bold">&nbsp;12:30 p.m. a 2:00 p.m.</span><span>&nbsp;Mendeley.</span>
													</p>
													<p class="mb-0">
														<i class="far fa-clock"></i>
														<span class="font-weight-bold">&nbsp;5:00 p.m. a 6:30 p.m.</span><span>&nbsp;Mendeley.</span>
													</p>
													<p class="mb-0">
														<i class="fas fa-map-marker-alt"></i>
														<span>&nbsp;Aula de capacitaciones - Tercer piso de la Biblioteca Central</span>
													</p>
												</div>
											</div>
										</div>
										<div class="cont block-fecha">
											<div class="d-grid">
												<div class="block-calendar">
													<div class="text-center">6</div>
													<div class="text-center">Viernes</div>
												</div>
												<div class="side-borde">
													<p class="mb-0">
														<i class="far fa-clock"></i>
														<span class="font-weight-bold">&nbsp;2:00 p.m. a 3:30 p.m.</span><span>&nbsp;Mendeley.</span>
													</p>
													<p class="mb-0">
														<i class="far fa-clock"></i>
														<span class="font-weight-bold">&nbsp;3:30 p.m. a 5:00 p.m.</span><span>&nbsp;Statista y otras bases de datos.</span>
													</p>
													<p class="mb-0">
														<i class="far fa-clock"></i>
														<span class="font-weight-bold">&nbsp;5:00 p.m. a 6:30 p.m.</span><span>&nbsp;Normas Apa.</span>
													</p>
													<p class="mb-0">
														<i class="far fa-clock"></i>
														<span class="font-weight-bold">&nbsp;6:30 p.m. a 8:00 p.m.</span><span>&nbsp;Bases de datos abiertas.</span>
													</p>
													<p class="mb-0">
														<i class="fas fa-map-marker-alt"></i>
														<span>&nbsp;Aula de capacitaciones - Tercer piso de la Biblioteca Central</span>
													</p>
												</div>
											</div>
										</div>
										<div class="cont block-fecha">
											<div class="d-grid">
												<div class="block-calendar">
													<div class="text-center">7</div>
													<div class="text-center">Sábado</div>
												</div>
												<div class="side-borde">
													<p class="mb-0">
														<i class="far fa-clock"></i>
														<span class="font-weight-bold">&nbsp;9:00 a.m. a 10:30 a.m.</span><span>&nbsp;Normas Apa.</span>
													</p>
													<p class="mb-0">
														<i class="far fa-clock"></i>
														<span class="font-weight-bold">&nbsp;10:30 a.m. a 12:00 m.</span><span>&nbsp;Bases de datos abiertas y Repositorios UNMSM.</span>
													</p>
													<p class="mb-0">
														<i class="far fa-clock"></i>
														<span class="font-weight-bold">&nbsp;2:00 p.m. a 3:30 p.m.</span><span>&nbsp;Perfil del investigador.</span>
													</p>
													<p class="mb-0">
														<i class="far fa-clock"></i>
														<span class="font-weight-bold">&nbsp;5:00 p.m. a 6:30 p.m.</span><span>&nbsp;Normas Apa.</span>
													</p>
													<p class="mb-0">
														<i class="far fa-clock"></i>
														<span class="font-weight-bold">&nbsp;6:30 p.m. a 8:00 p.m.</span><span>&nbsp;Zotero.</span>
													</p>
													<p class="mb-0">
														<i class="fas fa-map-marker-alt"></i>
														<span>&nbsp;Aula de capacitaciones - Tercer piso de la Biblioteca Central</span>
													</p>
												</div>
											</div>
										</div>
										<div class="cont block-fecha">
											<div class="d-grid">
												<div class="block-calendar">
													<div class="text-center">9</div>
													<div class="text-center">Lunes</div>
												</div>
												<div class="side-borde">
													<p class="mb-0">
														<i class="far fa-clock"></i>
														<span class="font-weight-bold">&nbsp;9:00 a.m. a 10:30 a.m.</span><span>&nbsp;Statista y otras bases de datos.</span>
													</p>
													<p class="mb-0">
														<i class="far fa-clock"></i>
														<span class="font-weight-bold">&nbsp;10:30 a.m. a 12:00 m.</span><span>&nbsp;Mendeley.</span>
													</p>
													<p class="mb-0">
														<i class="far fa-clock"></i>
														<span class="font-weight-bold">&nbsp;3:30 p.m. a 5:00 p.m.</span><span>&nbsp;Normas Apa.</span>
													</p>
													<p class="mb-0">
														<i class="far fa-clock"></i>
														<span class="font-weight-bold">&nbsp;5:00 p.m. a 6:30 p.m.</span><span>&nbsp;Mendeley.</span>
													</p>
													<p class="mb-0">
														<i class="fas fa-map-marker-alt"></i>
														<span>&nbsp;Aula de capacitaciones - Tercer piso de la Biblioteca Central</span>
													</p>
												</div>
											</div>
										</div>
										<div class="cont block-fecha">
											<div class="d-grid">
												<div class="block-calendar">
													<div class="text-center">12</div>
													<div class="text-center">Jueves</div>
												</div>
												<div class="side-borde">
													<p class="mb-0">
														<i class="far fa-clock"></i>
														<span class="font-weight-bold">&nbsp;9:00 a.m. a 10:30 a.m.</span><span>&nbsp;Ebsco y Gale.</span>
													</p>
													<p class="mb-0">
														<i class="far fa-clock"></i>
														<span class="font-weight-bold">&nbsp;10:30 a.m. a 12:00 m.</span><span>&nbsp;Scopus y ScienceDirect.</span>
													</p>
													<p class="mb-0">
														<i class="far fa-clock"></i>
														<span class="font-weight-bold">&nbsp;5:00 p.m. a 6:30 p.m.</span><span>&nbsp;Mendeley.</span>
													</p>
													<p class="mb-0">
														<i class="far fa-clock"></i>
														<span class="font-weight-bold">&nbsp;6:30 p.m. a 8:00 p.m.</span><span>&nbsp;Bases de datos abiertas y Repositorios UNMSM.</span>
													</p>
													<p class="mb-0">
														<i class="fas fa-map-marker-alt"></i>
														<span>&nbsp;Aula de capacitaciones - Tercer piso de la Biblioteca Central</span>
													</p>
												</div>
											</div>
										</div>
										<div class="cont block-fecha">
											<div class="d-grid">
												<div class="block-calendar">
													<div class="text-center">16</div>
													<div class="text-center">Lunes</div>
												</div>
												<div class="side-borde">
													<p class="mb-0">
														<i class="far fa-clock"></i>
														<span class="font-weight-bold">&nbsp;9:00 a.m. a 10:30 a.m.</span><span>&nbsp;Normas Apa.</span>
													</p>
													<p class="mb-0">
														<i class="far fa-clock"></i>
														<span class="font-weight-bold">&nbsp;10:30 a.m. a 12:00 m.</span><span>&nbsp;Perfil del investigador.</span>
													</p>
													<p class="mb-0">
														<i class="fas fa-map-marker-alt"></i>
														<span>&nbsp;Aula de capacitaciones - Tercer piso de la Biblioteca Central</span>
													</p>
												</div>
											</div>
										</div>
										<div class="cont block-fecha">
											<div class="d-grid">
												<div class="block-calendar">
													<div class="text-center">17</div>
													<div class="text-center">Martes</div>
												</div>
												<div class="side-borde">
													<p class="mb-0">
														<i class="far fa-clock"></i>
														<span class="font-weight-bold">&nbsp;9:00 a.m. a 11:00 a.m.</span><span>&nbsp;Capacitación de Proquest <b>para personal de biblioteca</b>.</span>
													</p>
													<p class="mb-0">
														<i class="far fa-clock"></i>
														<span class="font-weight-bold">&nbsp;11:30 a.m. a 12:30 p.m.</span><span>&nbsp;Capacitación de Proquest <b>para docentes e investigadores</b>.</span>
													</p>
													<p class="mb-0">
														<i class="fas fa-map-marker-alt"></i>
														<span>&nbsp;Aula de capacitaciones - Tercer piso de la Biblioteca Central</span>
													</p>
												</div>
											</div>
										</div>
										<div class="cont block-fecha">
											<div class="d-grid">
												<div class="block-calendar">
													<div class="text-center">18</div>
													<div class="text-center">Miércoles</div>
												</div>
												<div class="side-borde">
													<p class="mb-0">
														<i class="far fa-clock"></i>
														<span class="font-weight-bold">&nbsp;5:00 p.m. a 6:00 p.m.</span><span>&nbsp;Normas Apa.</span>
													</p>
													<p class="mb-0">
														<i class="far fa-clock"></i>
														<span class="font-weight-bold">&nbsp;6:30 p.m. a 8:00 p.m.</span><span>&nbsp;Bases de datos abiertas y Repositorios UNMSM.</span>
													</p>
													<p class="mb-0">
														<i class="fas fa-map-marker-alt"></i>
														<span>&nbsp;Aula de capacitaciones - Tercer piso de la Biblioteca Central</span>
													</p>
												</div>
											</div>
										</div>
										<div class="cont block-fecha">
											<div class="d-grid">
												<div class="block-calendar">
													<div class="text-center">20</div>
													<div class="text-center">Viernes</div>
												</div>
												<div class="side-borde">
													<p class="mb-0">
														<i class="far fa-clock"></i>
														<span class="font-weight-bold">&nbsp;9:00 a.m. a 10:30 a.m.</span><span>&nbsp;Normas Apa.</span>
													</p>
													<p class="mb-0">
														<i class="far fa-clock"></i>
														<span class="font-weight-bold">&nbsp;5:00 p.m. a 6:30 p.m.</span><span>&nbsp;Statista y otras bases de datos estadísticas.</span>
													</p>
													<p class="mb-0">
														<i class="far fa-clock"></i>
														<span class="font-weight-bold">&nbsp;6:30 p.m. a 8:00 p.m.</span><span>&nbsp;Bases de datos abiertas y Repositorios UNMSM.</span>
													</p>
													<p class="mb-0">
														<i class="fas fa-map-marker-alt"></i>
														<span>&nbsp;Aula de capacitaciones - Tercer piso de la Biblioteca Central</span>
													</p>
												</div>
											</div>
										</div>
										<div class="cont block-fecha">
											<div class="d-grid">
												<div class="block-calendar">
													<div class="text-center">21</div>
													<div class="text-center">Sábado</div>
												</div>
												<div class="side-borde">
													<p class="mb-0">
														<i class="far fa-clock"></i>
														<span class="font-weight-bold">&nbsp;9:00 a.m. a 10:30 a.m.</span><span>&nbsp;Normas Apa.</span>
													</p>
													<p class="mb-0">
														<i class="far fa-clock"></i>
														<span class="font-weight-bold">&nbsp;10:30 p.m. a 12:00 m.</span><span>&nbsp;Scopus y ScienceDirect.</span>
													</p>
													<p class="mb-0">
														<i class="far fa-clock"></i>
														<span class="font-weight-bold">&nbsp;5:00 p.m. a 6:30 p.m.</span><span>&nbsp;Normas Apa.</span>
													</p>
													<p class="mb-0">
														<i class="far fa-clock"></i>
														<span class="font-weight-bold">&nbsp;6:30 p.m. a 8:00 p.m.</span><span>&nbsp;Bases de datos abiertas y Repositorios UNMSM.</span>
													</p>
													<p class="mb-0">
														<i class="fas fa-map-marker-alt"></i>
														<span>&nbsp;Aula de capacitaciones - Tercer piso de la Biblioteca Central</span>
													</p>
												</div>
											</div>
										</div>
										<div class="cont block-fecha">
											<div class="d-grid">
												<div class="block-calendar">
													<div class="text-center">25</div>
													<div class="text-center">Miércoles</div>
												</div>
												<div class="side-borde">
													<p class="mb-0">
														<i class="far fa-clock"></i>
														<span class="font-weight-bold">&nbsp;3:00 p.m. a 5:00 p.m.</span><span>&nbsp;Capacitación de Proquest <b>para alumnos de pregrado</b>.</span>
													</p>
													<p class="mb-0">
														<i class="fas fa-map-marker-alt"></i>
														<span>&nbsp;Aula de capacitaciones - Tercer piso de la Biblioteca Central</span>
													</p>
												</div>
											</div>
										</div>

									</div>

								</div>
							</div>
							<div class="px-2 py-4 tab-pane fade" id="aprender" role="tabpanel" aria-labelledby="aprender-tab">
								<p>Capacitación en uso de base de datos</p>
								<div class="pl-3">
									<p class="mb-0">Aprenderás:</p>
									<ul>
										<li>A mejorar y agilizar tu búsqueda de material bibliográfico al momento de realizar un trabajo de investigación.</li>
										<li>Qué es una base de datos y a familiarizarte con la interfaz.</li>
										<li>A realizar una búsqueda simple y avanzada en las bases de datos.</li>
										<li>A utilizar herramientas de citación, tesauros, etc.</li>
									</ul>
								</div>
								<p>Capacitación en uso de gestores bibliográficos</p>
								<div class="pl-3">
									<p class="mb-0">Aprenderás:</p>
									<ul>
										<li>Qué son los gestores bibliográficos, interfaz y herramientas.</li>
										<li>A gestionar tus materiales de investigación y sincronizarlos en la nube.</li>
										<li>A exportar citas en diversos formatos.</li>
									</ul>
								</div>
							</div>
							<div class="px-2 py-4 tab-pane fade" id="solicitar" role="tabpanel" aria-labelledby="solicitar-tab">
								<p>Puedes solicitar una capacitación con un grupo mínimo de 7 personas. Para ello puedes enviarnos un correo o escribirnos a través de Facebook, incluyendo la lista de los participantes.</p>
								<div class="social">
									<a href="https://www.facebook.com/pg/RecursosElectronicosBibliotecaCentral/posts/" class="hover-icon" target="_blank"><i class="fab fa-facebook-square"></i></a>
									<a href="mailto:capacitacioninformacional.dsbbc@unmsm.edu.pe" class="hover-icon" target="_blank"><i class="fas fa-envelope-square"></i></a>
								</div>
							</div>
							<div class="px-2 py-4 tab-pane fade" id="asisti" role="tabpanel" aria-labelledby="asisti-tab">
								<div class="mb-3">
									<p class="mb-0 font-weight-bold">Capacitación de uso y aplicación de las Normas de la APA</p>
									<p class="mb-3">Capacitador: Alberto Carrasco Torres</p>
									<a class="abox" href="archivos/documentos/APA-BC-UNMSM.pdf" target="_blank">Descargar material de exposición</a>
								</div>
								<div class="mb-3">
									<p class="mb-0 font-weight-bold">Capacitación en bases de datos</p>
									<p class="mb-3">Capacitador: Luis Angel Vega Mori</p>
									<a class="abox" href="archivos/documentos/Capacitación (BD).pdf" target="_blank">Descargar material de exposición</a>
									<a class="abox" href="https://docs.google.com/forms/d/e/1FAIpQLSd20fszMIvtWFX3x3j2Ffwyj0dPTCV74iWVXQkl5Hkr17Izvw/viewform?usp=sf_link" target="_blank">Encuesta</a>
									<a class="abox" href="http://172.16.160.81:8080">Sistema Sullivan</a>
								</div>
								
							</div>
						</div>
					</div>
				</div>
				<!-- FIN DE CAPACITACIONES EN USO DE RECURSOS ELECTRONICOS -->
				<!-- INICIO DE PREGUNTAS FRECUENTES -->
				<div id="cont6" class="movercont1">

					<style>
						a.btn.btn-link {
							width: 100%;
							text-align: left;
						}
					</style>
					<div class="mb-3 sub-title-sisbib" style="color: #C8A22B;">PREGUNTAS FRECUENTES</div>
					<div class="accordion" id="accordionExample">

						<div class="card">

							<div id="headingOne" class="borde">
								
									<a class="btn btn-link collapsed barrapreg" id="boton1" type="button" data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
										¿Qué son las bases de datos? <i class="fas fa-angle-double-down"></i>
									</a>
								
							</div>

							<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
								<div class="card-body">
						    		<p>Las bases de datos bibliográficas son colecciones de materiales académicos y científicos. Contienen principalmente artículos de revistas, libros, publicaciones, materiales audiovisuales, etc.; a los que se tiene acceso mediante motores de búsqueda especializados que ayudan a limitar y ampliar los resultados en base a las necesidades de investigación específicas de cada usuario. 
									Existen bases de datos especializadas en algunas materias, así como multidisciplinares; y cada una de ellas puede contar diferentes herramientas de traducción, exportación de citas, tesauros, etc.</p>
									<div class="text-center">
										<button type="button" class="btn shad" id="capacitar" style="color:white!important; background: #C8A22B; font-size: 15px;">Capacitarme en uso de bases de datos</button>
									</div>
									

								</div>
							</div>
							
						</div>

						<div class="card">

							<div id="headingTwo" class="borde">

									<a class="btn btn-link collapsed barrapreg" id="boton2" type="button" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										¿Cómo accedo a las bases de datos?<i class="fas fa-angle-double-down"></i>
									</a>

						    </div>

							<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
								<div class="card-body">
						        <p>En esta página encontrarás bases de datos que cuentan con suscripción de la universidad y otras que son de uso libre para todos. Para acceder fuera de la universidad (Acceso remoto) a las bases a las que estamos suscritos, debes ingresar un usuario y contraseña:<br>
								USUARIO: Correo Institucional (ejemplo@unmsm.edu.pe)<br>
								CONTRASEÑA: Contraseña del correo institucional<br>
								Existen algunas bases que no permiten el acceso remoto, pero esa información la encontrarás en la descripción de cada una de ellas.</p>
								<div class="text-center">
									<button type="button" class="btn shad" id="base" style="color:white!important; background: #C8A22B; font-size: 15px;">Ir a bases de datos</button>
								</div>
								
								</div>
							</div>

						</div>

						<div class="card">

							<div id="headingThree" class="borde">

								<a class="btn btn-link collapsed barrapreg" id="boton3" type="button" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									¿Cómo puedo utilizar los gestores bibliográficos?<i class="fas fa-angle-double-down"></i>
								</a>

							</div>

							<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
								<div class="card-body">
								<p>Los gestores bibliográficos son herramientas que te permiten organizar la información al momento de investigar. Se presentan como plataformas web y aplicaciones que te ayudan a extraer y gestionar diversos tipos de documentos. 
								Puedes utilizar un gestor bibliográfico desde su página web o descargando su aplicación para escritorio.</p>
								<div class="text-center">
									<button type="button" class="btn shad" id="gestor" style="color:white!important; background: #C8A22B; font-size: 15px;">Capacitarme en uso de gestores bibliográficos</button>
								</div>
								
								</div>
							</div>

						</div>

						<div class="card">

							<div id="headingFour" class="borde">

								<a class="btn btn-link collapsed barrapreg" id="boton4" type="button" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
									¿Qué encontraré en Cybertesis?<i class="fas fa-angle-double-down"></i>
								</a>

							</div>

							<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
								<div class="card-body">
								<p>Cybertesis es un repositorio institucional que contiene los trabajos de investigación presentados a la universidad para obtener un grado. Encontrarás tesis de licenciatura, maestría, etc.; ordenados por áreas, facultades y escuelas profesionales; a texto completo en formato PDF. </p>
								<div class="text-center">
									<button type="button" class="btn shad" id="cyber" style="color:white!important; background: #C8A22B; font-size: 15px;">Ir a Cybertesis</button>
								</div>
								
								
								</div>
							</div>

						</div>
						<div class="card">

							<div id="headingFive" class="borde">

								<a class="btn btn-link collapsed barrapreg" id="boton5" type="button" data-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
									¿Qué es el buscador universal?<i class="fas fa-angle-double-down"></i>
								</a>

							</div>

							<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
								<div class="card-body">
								Es el buscador que encontrarás al inicio de esta página y permite navegar en todos los <b>recursos físicos y electrónicos</b> del sistema de bibliotecas. Puedes limitar tu búsqueda por año; tipo de recurso (tesis, revista, libro, etc.); idioma; etc.
								</div>
							</div>

						</div>

					</div>

				<!-- FIN DE PREGUNTAS FRECUENTES -->
					<div id="caja" class="caja d-block visible">
						<p class="mb-2 text-center">¿Tienes otra pregunta? Escríbenos</p>
						<div style="display: flex; flex-wrap: wrap; flex-direction: row; justify-content: space-around; align-items: center;">
						<div style="display: inline-block;">
						<a class="d-inline-block hover-icon" href="https://es-la.facebook.com/pg/RecursosElectronicosBibliotecaCentral/posts/" target="_blank">
							<i class="fab fa-facebook-square"></i>
						</a></div>
						
						<div style="display: inline-block;">
						<a class="d-inline-block hover-icon" href="mailto:capacitacioninformacional.dsbbc@unmsm.edu.pe" target="_blank" class="gm">
							<i class="fas fa-envelope-square"></i>
						</a></div>
						
						<div style="display: inline-block;">
						<a class="d-inline-block hover-icon" href="https://wa.me/51922505128" target="_blank">
							<i class="fab fa-whatsapp-square"></i>
						</a></div>
						</div>
					</div>
				</div>
				
				</div>
				
			
			</div>

			</section>

			<!-- <footer class="footer">
				<div class="sec-top cont">
					<div style="float: left;">
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
							<div class="last" style="display: block;">
								<span class="counter">19,760</span>
								<p class="text-center mb-0">FOLLETOS</p>
							</div>
						</div>
					</div>
					<div style="float: right; margin: auto;">
						<div class="mb-1"><a data-target="#ModalQuestion-1" data-toggle="modal" class="link-white" href="#">NOSOTROS</a> / <a href="https://goo.gl/maps/uTYzmpT41ES2" target="_blank" class="link-white">UBICACIÓN</a></div>
						<div class="mb-1"><a href="directorio/directorio.html" target="_blank" class="link-white">DIRECTORIO BC</a></div>
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
		
	</div>

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
				                <p>La Biblioteca Central 'Pedro Zulen' de la Universidad Nacional Mayor de San Marcos, inaugurada en diciembre del año 1999, tiene como visión convertirse en un centro de información y modelo de biblioteca universitaria que brinde servicios de información innovadores a los usuarios internos y externos a través de una gestión basada en la optimización de recursos tecnológicos, económicos y humanos. Para ello, tiene como misión el ser un centro de recursos de información y difusión del conocimiento científico, tecnológico y humanístico que contribuya en la formación académico profesional y la investigación, brindando servicios de información pertinentes y de calidad, asumiendo el compromiso institucional de la Universidad, cuyos ejes están orientados al desarrollo humano y sostenible del país.</p>
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
	

</body>
</html>