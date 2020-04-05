$(document).ready(function(e) {
    $('img[usemap]').rwdImageMaps();

    $('.post-wrapper').slick({
	  slidesToShow: 4,
	  slidesToScroll: 1,
	  autoplay: true,
	  autoplaySpeed: 4000,
	  nextArrow: $('.next'),
	  prevArrow: $('.prev'),
	  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
	});

});

	function isMobile(){
	    return (
	        (navigator.userAgent.match(/Android/i)) ||
	        (navigator.userAgent.match(/webOS/i)) ||
	        (navigator.userAgent.match(/iPhone/i)) ||
	        (navigator.userAgent.match(/iPod/i)) ||
	        (navigator.userAgent.match(/iPad/i)) ||
	        (navigator.userAgent.match(/BlackBerry/i))
	    );
	}


	var 
		// service_current = 0,
		// resource_current = 0,
		$l_whites_op = $('.container-servicios'),
		$l_whites = $('.pt-page-left .white-section'),
		$r_whites_op = $('.blanco > .posicion .cajas'),
		$r_whites = $('.blanco .movercont1');

	$l_whites_op.eq( service_current ).addClass( 'selected' );
	$l_whites.eq( service_current ).addClass( 'show' );
	$r_whites_op.eq( resource_current ).addClass( 'cajas-select' );
	$r_whites.eq( resource_current ).addClass( 'd-block' );
	switch(resource_current) {
		case 0:
			$('#recursos-electronicos').val('bases_datos');
			break;
		case 1:
			$('#recursos-electronicos').val('repositorios');
			break;
		case 2:
			$('#recursos-electronicos').val('gestores_bibliograficos');
			break;
		case 3:
			$('#recursos-electronicos').val('capacitaciones');
			break;
		case 4:
			$('#recursos-electronicos').val('preguntas_frecuentes');
			break;
	}



//CLIC OPCIONES PAGINA IZQUIERDA

	// (function(){

		var op_todos_servicios = $('.option-todos-servicios'),
			op_bibliotecas = $('.option-bibliotecas'),
			op_carne = $('.option-carne'),
			op_tesis = $('.option-tesis'),
			todos_servicios = $('.section-todos-servicios'),
			bibliotecas = $('.section-bibliotecas'),
			carne = $('.section-carne'),
			tesis = $('.section-recepcion-tesis');


		op_todos_servicios.on('click', function() {
			if (!op_todos_servicios.hasClass('selected')) {
				if (op_carne.hasClass('selected')) {
					todos_servicios.addClass('show');
					carne.removeClass('show');
				}
				else if (op_tesis.hasClass('selected')) {
					todos_servicios.addClass('show');
					tesis.removeClass('show');
				}
				else if (op_bibliotecas.hasClass('selected')) {
					todos_servicios.addClass('show');
				 	bibliotecas.removeClass('show');
				}
			}
		});
		op_carne.on('click', function() {
			if (!op_carne.hasClass('selected')) {
				if (op_todos_servicios.hasClass('selected')) {
					carne.addClass('show');
					todos_servicios.removeClass('show');	
				}
				else if (op_tesis.hasClass('selected')) {		
					carne.addClass('show');			
					tesis.removeClass('show');
				}
				else if (op_bibliotecas.hasClass('selected')) {		
					carne.addClass('show');			
					bibliotecas.removeClass('show');
				}
			}
		});
		op_tesis.on('click', function() {
			if (!op_tesis.hasClass('selected')) {
				if (op_todos_servicios.hasClass('selected')) {
					tesis.addClass('show');
					todos_servicios.removeClass('show');	
				}
				else if (op_carne.hasClass('selected')) {
					tesis.addClass('show');
					carne.removeClass('show');
				}
				else if (op_bibliotecas.hasClass('selected')) {
					tesis.addClass('show');
					bibliotecas.removeClass('show');
				}
			}
		});
		op_bibliotecas.on('click', function() {
			if (!op_bibliotecas.hasClass('selected')) {
				if (op_todos_servicios.hasClass('selected')) {
					bibliotecas.addClass('show');
					todos_servicios.removeClass('show');	
				}
				else if (op_carne.hasClass('selected')) {
					bibliotecas.addClass('show');
					carne.removeClass('show');
				}
				else if (op_tesis.hasClass('selected')) {
					bibliotecas.addClass('show');
					tesis.removeClass('show');
				}
			}

		});

		// var transitionEvents = ["webkitTransitionEnd", "oTransitionEnd", "transitionend"];
		// for (var index in transitionEvents) {
		// 	todos_servicios.on(transitionEvents[index], function(){
		// 		todos_servicios.removeClass('_transition_');
		// 	});
		// 	tesis.on(transitionEvents[index], function(){
		// 		tesis.removeClass('_transition_');
		// 	});
		// 	carne.on(transitionEvents[index], function(){
		// 		carne.removeClass('_transition_');
		// 	});
		// }

		// PARA QUE LOS BOTONES CAMBIEN DE COLOR AL SER SELECCIONADOS
		
		$('.container-servicios:not(.option-catalogo)').on('click', function() {
			$(this).addClass('selected');
			$('.container-servicios').not(this).removeClass('selected');
		});

	// }());

	// EL SECTOR NOTICIAS APARECE ABAJO DE SECTION 1 CENTER
	// (function(){

	// 	$('.section1-center').css({
	// 		'height' : $(window).height() - $('.noticias-title').height()
	// 	});
			
	// 	$(window).resize(function() {

	// 		$(".section1-center").removeAttr("style");

	// 		$('.section1-center').css({
	// 			'height' : $(window).height() - $('.noticias-title').height()
	// 		});

	// 	});

	// }());

	// EL OVERLAY '.overlay.open' OCUPA EL 'height: 100%;' en dispositivos mobiles
	(function(){

		$('.overlay.open').css({
			'height' : '100%'
		});
			
		$(window).resize(function() {

			$(".overlay.open").removeAttr("style");

			$('.overlay.open').css({
				'height' : '100%'
			});

		});

	}());

	// GIRO DEL ICONO CUANDO SE HACE CLIC EN LA ESTRUCTURA DE LA PAGINA IZQUIERDA (SERVICIOS)
	// (function(){

	// 	$('.click-toggle').on('click', function() {
	// 		$('.fa-chevron-circle-down').css({
	// 			'transform' : 'rotate(0deg)',
	// 			'transition' : 'transform .4s'
	// 		});
	// 		if (!($(this).hasClass('collapsed'))) {
	// 			$('.fa-chevron-circle-down' ,this).css({
	// 				'transform' : 'rotate(0deg)',
	// 				'transition' : 'transform .4s'
	// 			});
	// 		} else {
	// 			$('.fa-chevron-circle-down' ,this).css({
	// 				'transform' : 'rotate(180deg)',
	// 				'transition' : 'transform .4s'
	// 			});
	// 		}

	// 	});

	// }());

//ELIMINAR TEXTO EN EL BUSCADOR EN RESPONSIVE

	(function(){

		$(window).resize(function() {
			if ($(window).width() <= 600) {
				// $('#ebscohostsearchtext').attr('placeholder', '');
				$('#q').attr('placeholder', '');
			} else {
				// $('#ebscohostsearchtext').attr('placeholder', 'Busca en nuestro catálogo en línea y bases de datos de investigación');
				$('#q').attr('placeholder', 'Busca en nuestro catálogo en línea y bases de datos de investigación');
			}
		});

	}());

//INFO HOVER TOOLTIP PARA DISPOSITIVOS MOBILES

	(function(){

		// $(window).resize(function() {
			if (isMobile()) {
				$('#l-cont1 .enlace-colec').attr('data-toggle', '');
				$('.section2-right .ziczacblock').attr('data-toggle', '');
				$('.ziczacblock.with-info-mobile').css('width', '91%');
				if ($(window).width() >= 768) {
					$('.enlace-colec.with-info-mobile').css('width', '46%');
				} else {
					$('.enlace-colec.with-info-mobile').css('width', '91%');
				}
				
				$('.info-mobile').css('display', 'block');
				$('.info-mobile').click(function(event) {
					event.preventDefault();
				});
			} else {
				$('#l-cont1 .enlace-colec').attr('data-toggle', 'tooltip');
				$('.section2-right .ziczacblock').attr('data-toggle', 'tooltip');
				$('.info-mobile').css('display', 'none');
			}
		// });

	}());

//NO MUESTRA EL '.div-nav' EN UN TAMAÑO MAXIMO DE 705px

	(function(){

		$(window).resize(function() {
			if ($(window).width() <= 705) {
				$('.div-nav').addClass('mobile-d-none');
			} else {
				$('.div-nav').removeClass('mobile-d-none');
			}
		});

	}());

// SI EL DISPOSITIVO ES MOBILE, NO HABRÁ TOOLTIP EN PAGE-LEFT
	(function(){

		if (isMobile()) {
			$('.pt-page-left .container-structure .structure-right .card .click-toggle svg').attr('data-toggle', '');
			$('.nav-elements-size').css('width', '100%');
		} else {
			$('.pt-page-left .container-structure .structure-right .card .click-toggle svg').attr('data-toggle', 'tooltip');
		}

	}());

// PARA QUE EL MAPEADO EN IMG PUEDA FUNCIONAR EN EL CAROUSEL
	(function(){
		function dnone_again () {
			$('.item-map').removeClass('item-map');
		}

		setTimeout(dnone_again, 2000)
	}());

// HIGHLIGHT
	
	$(document).ready(function() {
		for (var i = 0; i <= 5; i++) {
			$('.chevron-down-services').eq(i).css('animation-delay', '0.'+(i)+'s');
		}
	});

//TOOLTIP (va fuera del $ready)

$(function () {
	$('[data-toggle="tooltip"]').tooltip()
})

// CAMBIA IMAGEN DE FONDO

$(document).ready(function() {
	// var bgImageArray = ["bg_mid_slide_2.png", "bg_mid_slide_3.png", "bg_mid_slide_4.png", "bg_mid_slide_5.png", "bg_mid_slide_7.png", "bg_mid_slide_8.png"],
	var bgImageArray = ["bg_mid_slide_8.png", "bg_mid_slide_2.png"],
	pagecenter = document.getElementById("pt-page-center"),
	rutaBgImg = "assets/principal/images/background/",
	// secs = 5.5;
	secs = 10;

    // caches images, avoiding white flash between background replacements
	bgImageArray.forEach(function(img){
    	new Image().src = rutaBgImg + img;
	});

	function backgroundSequence() {
		window.clearTimeout();
		var k = 0;
		for (i = 0; i < bgImageArray.length; i++) {
			setTimeout(function(){
				// console.log('Correcto'+i);
				pagecenter.style.backgroundImage = "url(" + rutaBgImg + bgImageArray[k] + ")";
				// document.documentElement.style.backgroundSize ="cover";
			if ((k + 1) === bgImageArray.length) { setTimeout(function() { backgroundSequence() }, (secs * 1000))} else { k++; }			
			}, (secs * 1000) * i)
		}
	}

	backgroundSequence();


	$('.click-mid-to-side').on('click', function(argument) {
		// console.log('saliendo de mid');
		$('#pt-page-center').addClass('static-bg');
	});

	$('.click-side-to-mid').on('click', function(argument) {
		// console.log('entrando a mid');
		$('#pt-page-center').removeClass('static-bg');
	});

});

/* menu cascada del header */

$(document).ready(function() {
	// $('li.dropdown').hover(function() {
	//   $(this).find('.dropdown-menu').stop(true, true).fadeIn(300);
	// }, function() {
	//   $(this).find('.dropdown-menu').stop(true, true).fadeOut(300);
	// });

	$('li.dropdown.hover-drop-servicios').hover(function() {
	  $(this).parent().find('.drop-servicios .dropdown-menu').stop(true, true).fadeIn(0);
	}, function() {
	  $(this).parent().find('.drop-servicios .dropdown-menu').stop(true, true).fadeOut(0);
	});

	$('li.dropdown.hover-drop-recursos').hover(function() {
	  $(this).parent().find('.drop-recursos .dropdown-menu').stop(true, true).fadeIn(0);
	}, function() {
	  $(this).parent().find('.drop-recursos .dropdown-menu').stop(true, true).fadeOut(0);
	});

	$('.dropdown-menu').hover(function() {
	  $(this).stop(true, true).fadeIn(0);
	}, function() {
	  $(this).stop(true, true).fadeOut(0);
	});

	$('.pt-page-center .dropdown, .pt-page-center .dropdown-menu, .cole-body .dropdown, .cole-body .dropdown-menu').hover(function() {
		$('#overlay2-center').addClass('open');
		$('.cole-list.sticky-list').css('z-index', '-1');
		$('.dir-list.sticky-list').css('z-index', '-1');
	}, function() {
		$('#overlay2-center').removeClass('open');
		$('.cole-list.sticky-list').css('z-index', '0');
		$('.dir-list.sticky-list').css('z-index', '0');
	});

	$('.pt-page-left .dropdown, .pt-page-left .dropdown-menu').hover(function() {
		$('#overlay2-left').addClass('open');
	}, function() {
		$('#overlay2-left').removeClass('open');
	});

	$('.pt-page-right .dropdown, .pt-page-right .dropdown-menu').hover(function() {
		$('#overlay2-right').addClass('open');
	}, function() {
		$('#overlay2-right').removeClass('open');
	});

	// ANOTHER BRICK ON THE WALL

	$('.pt-page-right .dropdown-menu .drop-box a').on('click', function(event) {
		$('#overlay2-right').removeClass('open');
		$('.pt-page-right .drop-recursos .dropdown-menu').stop(true, true).fadeOut(100);
	});

	$('.pt-page-left .dropdown-menu .drop-box a').on('click', function(event) {
		$('#overlay2-left').removeClass('open');
		$('.pt-page-left .drop-servicios .dropdown-menu').stop(true, true).fadeOut(100);
	});

});

// $(document).ready(function() {
	$(window).resize(function() {

	function getScrollbarWidth() {

	  // Creating invisible container
	  const outer = document.createElement('div');
	  outer.style.visibility = 'hidden';
	  outer.style.overflow = 'scroll'; // forcing scrollbar to appear
	  outer.style.msOverflowStyle = 'scrollbar'; // needed for WinJS apps
	  document.body.appendChild(outer);

	  // Creating inner element and placing it in the container
	  const inner = document.createElement('div');
	  outer.appendChild(inner);

	  // Calculating difference between container's full width and the child width
	  const scrollbarWidth = (outer.offsetWidth - inner.offsetWidth);

	  // Removing temporary elements from the DOM
	  outer.parentNode.removeChild(outer);

	  return scrollbarWidth;

	}

	$('.container-navbar').css('padding-right', getScrollbarWidth()+'px');

	});
// });

$(document).ready(function() {
	$('a.no-link').click(function(event) {
		event.preventDefault();
	});
	$('a.no-link').hover(function() {
		$(this).css({
			color: 'initial',
			background: 'initial',
			cursor: 'default'
		});
	}, function() {
		$(this).css({
			color: 'initial',
			background: 'initial',
			cursor: 'default'
		});
	});
});

(function(){

	$(window).resize(function() {
		if ($(window).width() <= 767) {
			$('#estructure-tab').removeClass('active');
			$('#estructure-tab').attr('aria-selected', 'false');
			$('#estruclist-tab').addClass('active');
			$('#estruclist-tab').attr('aria-selected', 'true');
			$('#estructure').removeClass('show active');
			$('#estruclist').addClass('show active');
			$('#myTabIzq').css('display', 'none');
		} else {
			$('#myTabIzq').css('display', 'flex');
		}
	});

}());


