// $(document).ready(function() {

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

	// EL NAVEGADOR SE DESPALAZA HACIA ABAJO CON MAS INFORMACION DESDE CIERTO PUNTO
	/*(function(){

		$('.pt-page-center').on('scroll',function() {
		if ($('.pt-page-center').scrollTop() > 200) {
    		$('#container-navbar-center').addClass('nav-to-down');
    		$('#div-nav-center').removeClass('d-none');
    		$('#logo-unmsm-center-h').removeClass('d-none');
    		$('#title-bib-center').addClass('d-none');
    		$('#logo-unmsm-center').addClass('d-none');
    		$('#logo-vrip-center').addClass('d-none');
		} else {
    		$('#container-navbar-center').removeClass('nav-to-down');
    		$('#div-nav-center').addClass('d-none');
    		$('#logo-unmsm-center-h').addClass('d-none');
    		$('#title-bib-center').removeClass('d-none');
    		$('#logo-unmsm-center').removeClass('d-none');
    		$('#logo-vrip-center').removeClass('d-none');
		}
		});

		$('.pt-page-left').on('scroll',function() {
		if ($('.pt-page-left').scrollTop() > 200) {
    		$('#container-navbar-left').addClass('nav-to-down');
    		$('#div-nav-left').removeClass('d-none');
    		$('#logo-unmsm-left-h').removeClass('d-none');
    		$('#title-bib-left').addClass('d-none');
    		$('#logo-unmsm-left').addClass('d-none');
    		$('#logo-vrip-left').addClass('d-none');
		} else {
    		$('#container-navbar-left').removeClass('nav-to-down');
    		$('#div-nav-left').addClass('d-none');
    		$('#logo-unmsm-left-h').addClass('d-none');
    		$('#title-bib-left').removeClass('d-none');
    		$('#logo-unmsm-left').removeClass('d-none');
    		$('#logo-vrip-left').removeClass('d-none');
		}
		});

		$('.pt-page-right').on('scroll',function() {
		if ($('.pt-page-right').scrollTop() > 200) {
    		$('#container-navbar-right').addClass('nav-to-down');
    		$('#div-nav-right').removeClass('d-none');
    		$('#logo-unmsm-right-h').removeClass('d-none');
    		$('#title-bib-right').addClass('d-none');
    		$('#logo-unmsm-right').addClass('d-none');
    		$('#logo-vrip-right').addClass('d-none');
		} else {
    		$('#container-navbar-right').removeClass('nav-to-down');
    		$('#div-nav-right').addClass('d-none');
    		$('#logo-unmsm-right-h').addClass('d-none');
    		$('#title-bib-right').removeClass('d-none');
    		$('#logo-unmsm-right').removeClass('d-none');
    		$('#logo-vrip-right').removeClass('d-none');
		}
		});

	})();*/

	//MENU CENTER - OVERLAY

	$('#icon-menu-center').on('click', toggleBtnClickCenter);

	var clicked_menu_center = false;

	function toggleBtnClickCenter() {

		if (clicked_menu_center) {
			center_nav_down();
		} else {
			// $('#logo-unmsm-center, #logo-vrip-center').css('left', '-16px');
			$('.pt-page-center .nav-elements').css('background-color', 'transparent');
			$('#logo-unmsm-center, #logo-sisbib-center').animate({
				top : '-300px'
			}, 300);
			$(this).attr('disabled', 'disabled');
			setTimeout(function(){$('#icon-menu-center').removeAttr('disabled','disabled')}, 300);
			$('#overlay-center').addClass('open');
			$('.pt-page-center .container-icon-menu').css({
				position: 'relative'
			});
			if (isMobile()) {} else {
				$('.pt-page-center .container-icon-menu').css({
					right: '16px'
				});
			}
			$('#container-navbar-center').addClass('nav-to-down-bg');
			$('.carousel-indicators, .carousel-control-prev, .carousel-control-next').css('z-index','0');
			clicked_menu_center = true;
		}

	}

	//MENU LEFT - OVERLAY

	$('#icon-menu-left').on('click', toggleBtnClickLeft);

	var clicked_menu_left = false;

	function toggleBtnClickLeft() {

		if (clicked_menu_left) {
			left_nav_down();
		} else {
			// $('#logo-unmsm-left, #logo-vrip-left').css('left', '-16px');
			$('.pt-page-left .nav-elements').css('background-color', 'transparent');
			$('#logo-unmsm-left, #logo-sisbib-left').animate({
				top : '-300px'
			}, 300);
			$(this).attr('disabled', 'disabled');
			setTimeout(function(){$('#icon-menu-left').removeAttr('disabled','disabled')}, 300);
			$('#overlay-left').addClass('open');
			$('.pt-page-left .container-icon-menu').css({
			    position: 'relative'
			});
			if (isMobile()) {} else {
				$('.pt-page-left .container-icon-menu').css({
					right: '16px'
				});
			}
			$('#container-navbar-left').addClass('nav-to-down-bg');
			$('.container-servicios img').css('z-index', '0');
			$('.container-servicios .div-bg').css('opacity', '0');
			$('.txtinimg').css('z-index','0');
			$('.click-toggle').css('z-index','0');
			clicked_menu_left = true;
		}

	}

	//MENU RIGHT - OVERLAY

	$('#icon-menu-right').on('click', toggleBtnClickRight);

	var clicked_menu_right = false;

	function toggleBtnClickRight() {

		if (clicked_menu_right) {
			right_nav_down();
		} else {
			// $('#logo-unmsm-right, #logo-vrip-right').css('left', '-16px');
			$('.pt-page-right .nav-elements').css('background-color', 'transparent');
			$('#logo-unmsm-right, #logo-sisbib-right').animate({
				top : '-300px'
			}, 300);
			$(this).attr('disabled', 'disabled');
			setTimeout(function(){$('#icon-menu-right').removeAttr('disabled','disabled')}, 300);
			$('#overlay-right').addClass('open');
			$('.pt-page-right .container-icon-menu').css({
			    position: 'relative'
			});
			if (isMobile()) {} else {
				$('.pt-page-right .container-icon-menu').css({
					right: '16px'
				});
			}
			$('#container-navbar-right').addClass('nav-to-down-bg');
			clicked_menu_right = true;
		}

	}
	///////

	//VARIABLES
	var 
		// parent_element = $("#pt-main"),
		// pages = parent_element.children(),
		// btn_move = $('.btn-move'),
		cont1 = $('#cont1'),
		cont2 = $('#cont2'),
	 	cont3 = $('#cont3'),
	 	cont4 = $('#cont4'),
	 	cont5 = $('#cont5'),
	 	cont6 = $('#cont6'),
	 	op1 = $('#op1'),
		op2 = $('#op2'),
		op3 = $('#op3'),
		op4 = $('#op4'),
		op5 = $('#op5'),
		op6 = $('#op6'),
		// op_todos_servicios = $('.option-todos-servicios'),
		// op_carne = $('.option-carne'),
		// op_tesis = $('.option-tesis'),
		// todos_servicios = $('.section-todos-servicios'),
		// carne = $('.section-carne'),
		// tesis = $('.section-recepcion-tesis'),
		// transitionEvents = ["webkitTransitionEnd", "oTransitionEnd", "transitionend"],
		// curr = parent_element.find(".pt-page-current"),

		center_nav_down = function(){
			// $('#logo-unmsm-center, #logo-vrip-center').css('left', '0px');
			$('.pt-page-center .nav-elements').css('background-color', 'rgba(0, 0, 0, .7)');
			$('#logo-unmsm-center, #logo-sisbib-center').animate({
				top : '0px'
			}, 300);
			$('#icon-menu-center').attr('disabled', 'disabled');
			setTimeout(function(){$('#icon-menu-center').removeAttr('disabled','disabled')}, 300);
			$('#overlay-center').removeClass('open');
			$('.pt-page-center .container-icon-menu').css({
				position: 'static'
			});
			$('#container-navbar-center').removeClass('nav-to-down-bg');
			$('.carousel-indicators, .carousel-control-prev, .carousel-control-next').css('z-index','15');
			clicked_menu_center = false;
		},

		left_nav_down = function(){
			// $('#logo-unmsm-left, #logo-vrip-left').css('left', '0px');
			$('.pt-page-left .nav-elements').css('background-color', 'rgba(0, 0, 0, .7)');
			$('#logo-unmsm-left, #logo-sisbib-left').animate({
				top : '0px'
			}, 300);
			$('#icon-menu-left').attr('disabled', 'disabled');
			setTimeout(function(){$('#icon-menu-left').removeAttr('disabled','disabled')}, 300);
			$('#overlay-left').removeClass('open');
			$('.pt-page-left .container-icon-menu').css({
				position: 'static'
			});
			$('#container-navbar-left').removeClass('nav-to-down-bg');
			$('.container-servicios img').css('z-index', '1');
			$('.container-servicios .div-bg').css('opacity', '1');
			$('.txtinimg').css('z-index','1');
			$('.click-toggle').css('z-index','1');
			clicked_menu_left = false;
		},

		right_nav_down = function(){
			// $('#logo-unmsm-right, #logo-vrip-right').css('left', '0px');
			$('.pt-page-right .nav-elements').css('background-color', 'rgba(0, 0, 0, .7)');
			$('#logo-unmsm-right, #logo-sisbib-right').animate({
				top : '0px'
			}, 300);
			$('#icon-menu-right').attr('disabled', 'disabled');
			setTimeout(function(){$('#icon-menu-right').removeAttr('disabled','disabled')}, 300);
			$('#overlay-right').removeClass('open');
			$('.pt-page-right .container-icon-menu').css({
				position: 'static'
			});
			$('#container-navbar-right').removeClass('nav-to-down-bg');
			clicked_menu_right = false;
		};


	//ENVIAR LA PAGINA ARRIBA, FUNCIONA COMO UN TOTOP
	function totopscroll() {
	  $('.pt-page').animate({scrollTop:0},0);
	};

  ////////////////////////////////////////////////////////
 ///////////////////// MENU - CENTRO ////////////////////
////////////////////////////////////////////////////////
	
	// MENU OVERLAY CENTER A NOSOTROS

	$('.pt-page-center .move-nosotros').on('click', function() {
		// event.preventDefault();
		center_nav_down();
	});

	// MENU OVERLAY CENTER A CATÁLOGO

	$('.pt-page-center .move-catalogo').on('click', function() {
		// event.preventDefault();
		center_nav_down();
	});

	// MENU OVERLAY CENTER A SERVICIOS

	function c_animate3() {
	  btn_move.attr('disabled', 'disabled');
	  pages.eq(0).addClass("pt-page-moveToRightEasing pt-page-ontop");
	  pages.eq(1).addClass("pt-page-current pt-page-moveFromLeft");

	}
  
	function c_callback3() {
		pages.eq(0).removeClass("pt-page-current pt-page-moveToRightEasing pt-page-ontop");
		pages.eq(1).removeClass("pt-page-moveFromLeft");
		btn_move.removeAttr('disabled', 'disabled');
		curr = parent_element.find(".pt-page-current");
		center_nav_down();
		pages.eq(0).addClass('invisible');
	}

	$(".pt-page-center .move-servi").on("click", function() {
		event.preventDefault();
		// pages.eq(1).removeClass('invisible');
		// whites.removeClass('invisible');
		// c_animate3();
		// setTimeout(totopscroll,550);
		totopscroll();
		setTimeout(center_nav_down,600);
	});

	// MENU OVERLAY CENTER A EN SALA

	function c_animate4() {
		// btn_move.attr('disabled', 'disabled');
		// pages.eq(0).addClass("pt-page-moveToRightEasing pt-page-ontop");
		// pages.eq(1).addClass("pt-page-current pt-page-moveFromLeft");
		if (!(op_todos_servicios.hasClass('selected'))) {
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
			};
		$(op_todos_servicios).addClass('selected');
		$('.container-servicios').not(op_todos_servicios).removeClass('selected');
	}
	
	function c_callback4() {
		pages.eq(0).removeClass("pt-page-current pt-page-moveToRightEasing pt-page-ontop");
		pages.eq(1).removeClass("pt-page-moveFromLeft");
		btn_move.removeAttr('disabled', 'disabled');
		curr = parent_element.find(".pt-page-current");
		center_nav_down();
		pages.eq(0).addClass('invisible');
	}

	$(".pt-page-center .move-todo-servicios, .pt-page-center .sub-move-horarios").on("click", function() {
		event.preventDefault();
		// pages.eq(1).removeClass('invisible');
		// whites.removeClass('invisible');
		c_animate4();
		// setTimeout(totopscroll,550);
		totopscroll();//CAMBIOHANS
		setTimeout(center_nav_down,600);//CAMBIOHANS
		// console.log('hansprueba');
	});

	// MENU OVERLAY CENTER A CARNÉ

	function c_animate5() {
		// btn_move.attr('disabled', 'disabled');
		// pages.eq(0).addClass("pt-page-moveToRightEasing pt-page-ontop");
		// pages.eq(1).addClass("pt-page-current pt-page-moveFromLeft");
		if (!(op_carne.hasClass('selected'))) {
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
		$(op_carne).addClass('selected');
		$('.container-servicios').not(op_carne).removeClass('selected');
	}
  
	function c_callback5() {
		pages.eq(0).removeClass("pt-page-current pt-page-moveToRightEasing pt-page-ontop");
		pages.eq(1).removeClass("pt-page-moveFromLeft");
		btn_move.removeAttr('disabled', 'disabled');
		curr = parent_element.find(".pt-page-current");
		center_nav_down();
		pages.eq(0).addClass('invisible');
	}

	$(".pt-page-center .move-carne").on("click", function() {
		event.preventDefault();
		// pages.eq(1).removeClass('invisible');
		// whites.removeClass('invisible');
		c_animate5();
		// setTimeout(totopscroll,550);
		totopscroll();
		setTimeout(center_nav_down,600);
	});

	$(".pt-page-center .move-carne-inmenu").on("click", function() {
		// event.preventDefault();
		// pages.eq(1).removeClass('invisible');
		// whites.removeClass('invisible');
		c_animate5();
		// setTimeout(totopscroll,550);
		totopscroll();
		setTimeout(center_nav_down,600);
	});

	function c_callback5_2() {
		// pages.eq(0).removeClass("pt-page-current pt-page-moveToRightEasing pt-page-ontop");
		// pages.eq(1).removeClass("pt-page-moveFromLeft");
		// btn_move.removeAttr('disabled', 'disabled');
		// curr = parent_element.find(".pt-page-current");
		// pages.eq(0).addClass('invisible');
		$('.pt-page-left').animate({scrollTop:$('.white-containers').position().top - $('#container-navbar-center').height()},400);
	}

	$(".pt-page-center .link-area").on("click", function() {
		event.preventDefault();
		// pages.eq(1).removeClass('invisible');
		// whites.removeClass('invisible');
		c_animate5();
		// setTimeout(totopscroll,550);
		totopscroll();
		setTimeout(c_callback5_2,600);
	});

	// MENU OVERLAY CENTER A RECEPCIÓN DE TESIS

	function c_animate6() {
		// btn_move.attr('disabled', 'disabled');
		// pages.eq(0).addClass("pt-page-moveToRightEasing pt-page-ontop");
		// pages.eq(1).addClass("pt-page-current pt-page-moveFromLeft");
		if (!(op_tesis.hasClass('selected'))) {
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
		$(op_tesis).addClass('selected');
		$('.container-servicios').not(op_tesis).removeClass('selected');
	}
  
	function c_callback6() {
		pages.eq(0).removeClass("pt-page-current pt-page-moveToRightEasing pt-page-ontop");
		pages.eq(1).removeClass("pt-page-moveFromLeft");
		btn_move.removeAttr('disabled', 'disabled');
		curr = parent_element.find(".pt-page-current");
		center_nav_down();
		pages.eq(0).addClass('invisible');
	}

	$(".pt-page-center .move-tesis").on("click", function() {
		event.preventDefault();
		// pages.eq(1).removeClass('invisible');
		// whites.removeClass('invisible');
		c_animate6();
		// setTimeout(totopscroll,550);
		totopscroll();
		setTimeout(center_nav_down,600);
	});

	// MENU OVERLAY CENTER A MAS DE SERVICIOS BIBLIOTECARIOS

	function c_animate7() {
		// btn_move.attr('disabled', 'disabled');
		// pages.eq(0).addClass("pt-page-moveToRightEasing pt-page-ontop");
		// pages.eq(1).addClass("pt-page-current pt-page-moveFromLeft");
		if (!(op_todos_servicios.hasClass('selected'))) {
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
		$(op_todos_servicios).addClass('selected');
		$('.container-servicios').not(op_todos_servicios).removeClass('selected');
	}
	
	function c_callback7() {
		pages.eq(0).removeClass("pt-page-current pt-page-moveToRightEasing pt-page-ontop");
		pages.eq(1).removeClass("pt-page-moveFromLeft");
		btn_move.removeAttr('disabled', 'disabled');
		curr = parent_element.find(".pt-page-current");
		center_nav_down();
		pages.eq(0).addClass('invisible');
	}

	$(".pt-page-center .move-mas-servicios").on("click", function() {
		event.preventDefault();
		// pages.eq(1).removeClass('invisible');
		// whites.removeClass('invisible');
		c_animate7();
		// setTimeout(totopscroll,550);
		totopscroll();
		setTimeout(center_nav_down,600);
	});

	// MENU OVERLAY CENTER A RECURSOS ELECTRONICOS

	function c_animate8() {
		btn_move.attr('disabled', 'disabled');
		pages.eq(0).addClass("pt-page-moveToLeftEasing pt-page-ontop");
		pages.eq(2).addClass("pt-page-current pt-page-moveFromRight");   
	};

	function c_callback8() {
		pages.eq(0).removeClass("pt-page-current pt-page-moveToLeftEasing pt-page-ontop");
		pages.eq(2).removeClass("pt-page-moveFromRight");
		btn_move.removeAttr('disabled', 'disabled');
		curr = parent_element.find(".pt-page-current");
		center_nav_down();
		pages.eq(0).addClass('invisible');
	};

	$('.pt-page-center .move-rec-elec').on('click', function() {
		event.preventDefault();
		// pages.eq(2).removeClass('invisible');
		// c_animate8();
		// setTimeout(totopscroll,550);
		totopscroll();
		setTimeout(center_nav_down,600);
	});

	//MENU OVERLAY CENTER A BASE DE DATOS , MENU OCULTO CENTER A BD
	function c_animate9() {
		// btn_move.attr('disabled', 'disabled');
		// pages.eq(0).addClass("pt-page-moveToLeftEasing pt-page-ontop");
		// pages.eq(2).addClass("pt-page-current pt-page-moveFromRight");
		op1.addClass('cajas-select');
		op2.removeClass('cajas-select');
		op3.removeClass('cajas-select');
		op4.removeClass('cajas-select');
		op5.removeClass('cajas-select');
		op6.removeClass('cajas-select');
		cont1.addClass('d-block').removeClass('d-none');
		cont2.removeClass('d-block').addClass('d-none');
		cont3.removeClass('d-block').addClass('d-none');
		cont4.removeClass('d-block').addClass('d-none');
		cont5.removeClass('d-block').addClass('d-none');
		cont6.removeClass('d-block').addClass('d-none');
	};

	function c_callback9() {
		pages.eq(0).removeClass("pt-page-current pt-page-moveToLeftEasing pt-page-ontop");
		pages.eq(2).removeClass("pt-page-moveFromRight");
		btn_move.removeAttr('disabled', 'disabled');
		curr = parent_element.find(".pt-page-current");
		center_nav_down();
		pages.eq(0).addClass('invisible');
	};

	$('.pt-page-center .move-bd, .pt-page-center .sub-move-bd').on('click', function() {
		event.preventDefault();
		// pages.eq(2).removeClass('invisible');
		c_animate9();
		// setTimeout(totopscroll,550);
		totopscroll();
		setTimeout(center_nav_down,600);
	});

	//MENU OVERLAY CENTER A REPOSITORIOS, MENU OCULTO CENTER A REPOSITORIOS

	function c_animate10() {
		// btn_move.attr('disabled', 'disabled');
		// pages.eq(0).addClass("pt-page-moveToLeftEasing pt-page-ontop");
		// pages.eq(2).addClass("pt-page-current pt-page-moveFromRight");
		op2.addClass('cajas-select');
		op1.removeClass('cajas-select');
		op3.removeClass('cajas-select');
		op4.removeClass('cajas-select');
		op5.removeClass('cajas-select');
		op6.removeClass('cajas-select');
		cont2.addClass('d-block').removeClass('d-none');
		cont1.removeClass('d-block').addClass('d-none');
		cont3.removeClass('d-block').addClass('d-none');
		cont4.removeClass('d-block').addClass('d-none');
		cont5.removeClass('d-block').addClass('d-none');
		cont6.removeClass('d-block').addClass('d-none');
	};

	function c_callback10() {
		pages.eq(0).removeClass("pt-page-current pt-page-moveToLeftEasing pt-page-ontop");
		pages.eq(2).removeClass("pt-page-moveFromRight");
		btn_move.removeAttr('disabled', 'disabled');
		curr = parent_element.find(".pt-page-current");
		center_nav_down();
		pages.eq(0).addClass('invisible');
	};

	$('.pt-page-center .move-repo, .pt-page-center .sub-move-repo').on('click', function() {
		event.preventDefault();
		// pages.eq(2).removeClass('invisible');
		c_animate10();
		// setTimeout(totopscroll,550);
		totopscroll();
		setTimeout(center_nav_down,600);
	});

	//MENU OVERLAY CENTER A CAPACITACIONES
	function c_animate11() {
		// btn_move.attr('disabled', 'disabled');
		// pages.eq(0).addClass("pt-page-moveToLeftEasing pt-page-ontop");
		// pages.eq(2).addClass("pt-page-current pt-page-moveFromRight");
		op5.addClass('cajas-select');
		op2.removeClass('cajas-select');
		op3.removeClass('cajas-select');
		op4.removeClass('cajas-select');
		op1.removeClass('cajas-select');
		op6.removeClass('cajas-select');
		cont5.addClass('d-block').removeClass('d-none');
		cont2.removeClass('d-block').addClass('d-none');
		cont3.removeClass('d-block').addClass('d-none');
		cont4.removeClass('d-block').addClass('d-none');
		cont1.removeClass('d-block').addClass('d-none');
		cont6.removeClass('d-block').addClass('d-none');
	};

	function c_callback11() {
		pages.eq(0).removeClass("pt-page-current pt-page-moveToLeftEasing pt-page-ontop");
		pages.eq(2).removeClass("pt-page-moveFromRight");
		btn_move.removeAttr('disabled', 'disabled');
		curr = parent_element.find(".pt-page-current");
		center_nav_down();
		pages.eq(0).addClass('invisible');
	};

	$('.pt-page-center .move-capa').on('click', function() {
		event.preventDefault();
		// pages.eq(2).removeClass('invisible');
		c_animate11();
		// setTimeout(totopscroll,550);
		totopscroll();
		setTimeout(center_nav_down,600);
	});

	function c_callback11_2() {
		pages.eq(0).removeClass("pt-page-current pt-page-moveToLeftEasing pt-page-ontop");
		pages.eq(2).removeClass("pt-page-moveFromRight");
		btn_move.removeAttr('disabled', 'disabled');
		curr = parent_element.find(".pt-page-current");
		pages.eq(0).addClass('invisible');
		$('.pt-page-right').animate({scrollTop:$('.blanco').position().top - 50},400);
	};

	$('.pt-page-center .link-no-overlay').on('click', function() {
		event.preventDefault();
		// pages.eq(2).removeClass('invisible');
		c_animate11();
		setTimeout(totopscroll,550);
		// totopscroll();
		setTimeout(center_nav_down,600);
	});

	//MENU OVERLAY CENTER A "MAS..." DE RECURSOS ELECTRONICOS
	function c_animate12() {
		// btn_move.attr('disabled', 'disabled');
		// pages.eq(0).addClass("pt-page-moveToLeftEasing pt-page-ontop");
		// pages.eq(2).addClass("pt-page-current pt-page-moveFromRight");
		op6.addClass('cajas-select');
		op2.removeClass('cajas-select');
		op3.removeClass('cajas-select');
		op4.removeClass('cajas-select');
		op5.removeClass('cajas-select');
		op1.removeClass('cajas-select');
		cont6.addClass('d-block').removeClass('d-none');
		cont2.removeClass('d-block').addClass('d-none');
		cont3.removeClass('d-block').addClass('d-none');
		cont4.removeClass('d-block').addClass('d-none');
		cont5.removeClass('d-block').addClass('d-none');
		cont1.removeClass('d-block').addClass('d-none');  
	};

	function c_callback12() {
		pages.eq(0).removeClass("pt-page-current pt-page-moveToLeftEasing pt-page-ontop");
		pages.eq(2).removeClass("pt-page-moveFromRight");
		btn_move.removeAttr('disabled', 'disabled');
		curr = parent_element.find(".pt-page-current");
		center_nav_down();
		pages.eq(0).addClass('invisible');
	};

	$('.pt-page-center .move-mas-recursos').on('click', function() {
		event.preventDefault();
		// pages.eq(2).removeClass('invisible');
		c_animate12();
		// setTimeout(totopscroll,550);
		totopscroll();
		setTimeout(center_nav_down,600);
	});

	// MENU OVERLAY CENTER A EVENTOS

	$('.pt-page-center .move-eventos').on('click', function() {
		event.preventDefault();
		center_nav_down();
		$('.pt-page-center').animate({scrollTop:$('#noticias').position().top - $('#container-navbar-center').height()},400);
	});

	//MENU OVERLAY CENTER A GESTORES

	function c_animate13() {
		// btn_move.attr('disabled', 'disabled');
		// pages.eq(0).addClass("pt-page-moveToLeftEasing pt-page-ontop");
		// pages.eq(2).addClass("pt-page-current pt-page-moveFromRight");
		op3.addClass('cajas-select');
		op1.removeClass('cajas-select');
		op2.removeClass('cajas-select');
		op4.removeClass('cajas-select');
		op5.removeClass('cajas-select');
		op6.removeClass('cajas-select');
		cont3.addClass('d-block').removeClass('d-none');
		cont1.removeClass('d-block').addClass('d-none');
		cont2.removeClass('d-block').addClass('d-none');
		cont4.removeClass('d-block').addClass('d-none');
		cont5.removeClass('d-block').addClass('d-none');
		cont6.removeClass('d-block').addClass('d-none');
	};

	$('.pt-page-center .move-gestor').on('click', function() {
		event.preventDefault();
		// pages.eq(2).removeClass('invisible');
		c_animate13();
		// setTimeout(totopscroll,550);
		totopscroll();
		setTimeout(center_nav_down,600);
	});

	$('.pt-page-left .move-gestor').on('click', function() {
		event.preventDefault();
		// pages.eq(2).removeClass('invisible');
		c_animate13();
		// setTimeout(totopscroll,550);
		totopscroll();
		setTimeout(left_nav_down,600);
	});

	$('.pt-page-right .move-gestor').on('click', function() {
		event.preventDefault();
		// pages.eq(2).removeClass('invisible');
		c_animate13();
		// setTimeout(totopscroll,550);
		totopscroll();
		setTimeout(right_nav_down,600);
	});

	//MENU OVERLAY CENTER A CAPACITACIONES

	function c_animate14() {
		// btn_move.attr('disabled', 'disabled');
		// pages.eq(0).addClass("pt-page-moveToLeftEasing pt-page-ontop");
		// pages.eq(2).addClass("pt-page-current pt-page-moveFromRight");
		op5.addClass('cajas-select');
		op1.removeClass('cajas-select');
		op2.removeClass('cajas-select');
		op3.removeClass('cajas-select');
		op4.removeClass('cajas-select');
		op6.removeClass('cajas-select');
		cont5.addClass('d-block').removeClass('d-none');
		cont1.removeClass('d-block').addClass('d-none');
		cont2.removeClass('d-block').addClass('d-none');
		cont3.removeClass('d-block').addClass('d-none');
		cont4.removeClass('d-block').addClass('d-none');
		cont6.removeClass('d-block').addClass('d-none');
	};

	function c_callback14_2() {
		$('.pt-page-right').animate({scrollTop:$('.section2-right').position().top - $('#container-navbar-right').height()},400);
	};

	$('.pt-page-center .move-capacitaciones').on('click', function() {
		event.preventDefault();
		// pages.eq(2).removeClass('invisible');
		c_animate14();
		// setTimeout(totopscroll,550);
		totopscroll();
		// setTimeout(center_nav_down,600);
		setTimeout(c_callback14_2,600);
	});

	$('.pt-page-left .move-capacitaciones').on('click', function() {
		event.preventDefault();
		// pages.eq(2).removeClass('invisible');
		c_animate14();
		// setTimeout(totopscroll,550);
		totopscroll();
		setTimeout(left_nav_down,600);
		// setTimeout(c_callback14_2,600);
	});

	$('.pt-page-right .move-capacitaciones').on('click', function() {
		event.preventDefault();
		// pages.eq(2).removeClass('invisible');
		c_animate14();
		// setTimeout(totopscroll,550);
		totopscroll();
		setTimeout(right_nav_down,600);
		// setTimeout(c_callback14_2,600);
	});

	//MENU OVERLAY CENTER A PREGUNTAS FRECUENTES

	function c_animate15() {
		// btn_move.attr('disabled', 'disabled');
		// pages.eq(0).addClass("pt-page-moveToLeftEasing pt-page-ontop");
		// pages.eq(2).addClass("pt-page-current pt-page-moveFromRight");
		op6.addClass('cajas-select');
		op1.removeClass('cajas-select');
		op2.removeClass('cajas-select');
		op3.removeClass('cajas-select');
		op4.removeClass('cajas-select');
		op5.removeClass('cajas-select');
		cont6.addClass('d-block').removeClass('d-none');
		cont1.removeClass('d-block').addClass('d-none');
		cont2.removeClass('d-block').addClass('d-none');
		cont3.removeClass('d-block').addClass('d-none');
		cont4.removeClass('d-block').addClass('d-none');
		cont5.removeClass('d-block').addClass('d-none');
	};

	$('.pt-page-center .move-preguntas').on('click', function() {
		event.preventDefault();
		// pages.eq(2).removeClass('invisible');
		c_animate15();
		// setTimeout(totopscroll,550);
		totopscroll();
		setTimeout(center_nav_down,600);
	});

	$('.pt-page-left .move-preguntas').on('click', function() {
		event.preventDefault();
		// pages.eq(2).removeClass('invisible');
		c_animate15();
		// setTimeout(totopscroll,550);
		totopscroll();
		setTimeout(left_nav_down,600);
	});

	$('.pt-page-right .move-preguntas').on('click', function() {
		event.preventDefault();
		// pages.eq(2).removeClass('invisible');
		c_animate15();
		// setTimeout(totopscroll,550);
		totopscroll();
		setTimeout(right_nav_down,600);
	});

	// MENU OVERLAY CENTER A SISTEMA DE BIBLIOTECAS

	function c_animate16() {
		// btn_move.attr('disabled', 'disabled');
		// pages.eq(0).addClass("pt-page-moveToRightEasing pt-page-ontop");
		// pages.eq(1).addClass("pt-page-current pt-page-moveFromLeft");
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
		};
		$(op_bibliotecas).addClass('selected');
		$('.container-servicios').not(op_bibliotecas).removeClass('selected');
	}

	$(".pt-page-center .move-bibliotecas").on("click", function() {
		event.preventDefault();
		// pages.eq(1).removeClass('invisible');
		// whites.removeClass('invisible');
		c_animate16();
		// setTimeout(totopscroll,550);
		totopscroll();//CAMBIOHANS
		setTimeout(center_nav_down,600);//CAMBIOHANS
		// console.log('hansprueba');
	});

  ////////////////////////////////////////////////////////
 /////////////////// MENU - IZQUIERDA ///////////////////
////////////////////////////////////////////////////////
	
	// MENU OVERLAY LEFT A NOSOTROS

	$('.pt-page-left .move-nosotros').on('click', function() {
		// event.preventDefault();
		left_nav_down();
	});

	// MENU OVERLAY LEFT A CATÁLOGO

	$('.pt-page-left .move-catalogo').on('click', function() {
		// event.preventDefault();
		left_nav_down();
	});

	// MENU OVERLAY LEFT A SERVICIOS

	$(".pt-page-left .move-servi").on("click", function() {
		// event.preventDefault();
		left_nav_down();
	});

	// MENU OVERLAY LEFT A EN SALA

	$(".pt-page-left .move-todo-servicios").on("click", function() {
		event.preventDefault();
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
		$(op_todos_servicios).addClass('selected');
		$('.container-servicios').not(op_todos_servicios).removeClass('selected');
		left_nav_down();
	});

	$(".pt-page-left .sub-move-horarios").on("click", function() {
		event.preventDefault();
		if (!(op_todos_servicios.hasClass('selected'))) {
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
		$(op_todos_servicios).addClass('selected');
		$('.container-servicios').not(op_todos_servicios).removeClass('selected');
		left_nav_down();
		// $('.pt-page-right').animate({scrollTop:$('.section-todos-servicios').position().top - $('#container-navbar-center').height()},400);
	});

	// MENU OVERLAY LEFT A CARNÉ

	$(".pt-page-left .move-carne").on("click", function() {
		event.preventDefault();
		if (!(op_carne.hasClass('selected'))) {
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
		$(op_carne).addClass('selected');
		$('.container-servicios').not(op_carne).removeClass('selected');
		left_nav_down();
	});

	// MENU OVERLAY LEFT A RECEPCIÓN DE TESIS

	$(".pt-page-left .move-tesis").on("click", function() {
		event.preventDefault();
		if (!(op_tesis.hasClass('selected'))) {
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
		$(op_tesis).addClass('selected');
		$('.container-servicios').not(op_tesis).removeClass('selected');
		left_nav_down();
	});

	// MENU OVERLAY LEFT A MAS DE SERVICIOS BIBLIOTECARIOS

	$(".pt-page-left .move-mas-servicios").on("click", function() {
		event.preventDefault();
		if (!(op_todos_servicios.hasClass('selected'))) {
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
		$(op_todos_servicios).addClass('selected');
		$('.container-servicios').not(op_todos_servicios).removeClass('selected');
		left_nav_down();
	});

	// MENU OVERLAY LEFT A RECURSOS ELECTRONICOS

	function l_animate8() {
		btn_move.attr('disabled', 'disabled');
		pages.eq(1).addClass("pt-page-moveToRightEasing pt-page-ontop");
		pages.eq(2).addClass("pt-page-current pt-page-moveFromLeft");  
	};

	function l_callback8() {
		pages.eq(1).removeClass("pt-page-current pt-page-moveToRightEasing pt-page-ontop");
		pages.eq(2).removeClass("pt-page-moveFromLeft");
		btn_move.removeAttr('disabled', 'disabled');
		curr = parent_element.find(".pt-page-current");
		left_nav_down();
		pages.eq(1).addClass('invisible');
		whites.addClass('invisible');
	};

	$('.pt-page-left .move-rec-elec').on('click', function() {
		event.preventDefault();
		// pages.eq(2).removeClass('invisible');
		// l_animate8();
		// setTimeout(totopscroll,550);
		totopscroll();
		setTimeout(left_nav_down,600);
	});

	//MENU OVERLAY LEFT A BASE DE DATOS , MENU OCULTO LEFT A BD
	function l_animate9() {
		// btn_move.attr('disabled', 'disabled');
		// pages.eq(1).addClass("pt-page-moveToRightEasing pt-page-ontop");
		// pages.eq(2).addClass("pt-page-current pt-page-moveFromLeft"); 
		op1.addClass('cajas-select');
		op2.removeClass('cajas-select');
		op3.removeClass('cajas-select');
		op4.removeClass('cajas-select');
		op5.removeClass('cajas-select');
		op6.removeClass('cajas-select');
		cont1.addClass('d-block').removeClass('d-none');
		cont2.removeClass('d-block').addClass('d-none');
		cont3.removeClass('d-block').addClass('d-none');
		cont4.removeClass('d-block').addClass('d-none');
		cont5.removeClass('d-block').addClass('d-none');
		cont6.removeClass('d-block').addClass('d-none');
	};

	function l_callback9() {
		pages.eq(1).removeClass("pt-page-current pt-page-moveToRightEasing pt-page-ontop");
		pages.eq(2).removeClass("pt-page-moveFromLeft");
		btn_move.removeAttr('disabled', 'disabled');
		curr = parent_element.find(".pt-page-current");
		left_nav_down();
		pages.eq(1).addClass('invisible');
		whites.addClass('invisible');
	};

	$('.pt-page-left .move-bd, .pt-page-left .sub-move-bd').on('click', function() {
		event.preventDefault();
		// pages.eq(2).removeClass('invisible');
		l_animate9();
		// setTimeout(totopscroll,550);
		totopscroll();
		setTimeout(left_nav_down,600);
	});

	function l_callback9_2() {
		// pages.eq(1).removeClass("pt-page-current pt-page-moveToRightEasing pt-page-ontop");
		// pages.eq(2).removeClass("pt-page-moveFromLeft");
		// btn_move.removeAttr('disabled', 'disabled');
		// curr = parent_element.find(".pt-page-current");
		// pages.eq(1).addClass('invisible');
		// whites.addClass('invisible');
		$('.pt-page-right').animate({scrollTop:$('.blanco').position().top - $('#container-navbar-center').height()},400);
	};

	$('.pt-page-left .link-bd').on('click', function (event) {
		event.preventDefault();
		// pages.eq(2).removeClass('invisible');
		l_animate9();
		// setTimeout(totopscroll,550);
		totopscroll();
		setTimeout(l_callback9_2,600);
	});

	//MENU OVERLAY LEFT A REPOSITORIOS, MENU OCULTO LEFT A REPOSITORIOS

	function l_animate10() {
		// btn_move.attr('disabled', 'disabled');
		// pages.eq(1).addClass("pt-page-moveToRightEasing pt-page-ontop");
		// pages.eq(2).addClass("pt-page-current pt-page-moveFromLeft"); 
		op2.addClass('cajas-select');
		op1.removeClass('cajas-select');
		op3.removeClass('cajas-select');
		op4.removeClass('cajas-select');
		op5.removeClass('cajas-select');
		op6.removeClass('cajas-select');
		cont2.addClass('d-block').removeClass('d-none');
		cont1.removeClass('d-block').addClass('d-none');
		cont3.removeClass('d-block').addClass('d-none');
		cont4.removeClass('d-block').addClass('d-none');
		cont5.removeClass('d-block').addClass('d-none');
		cont6.removeClass('d-block').addClass('d-none');
	};

	function l_callback10() {
		pages.eq(1).removeClass("pt-page-current pt-page-moveToRightEasing pt-page-ontop");
		pages.eq(2).removeClass("pt-page-moveFromLeft");
		btn_move.removeAttr('disabled', 'disabled');
		curr = parent_element.find(".pt-page-current");
		left_nav_down();
		pages.eq(1).addClass('invisible');
		whites.addClass('invisible');
	};

	$('.pt-page-left .move-repo, .pt-page-left .sub-move-repo').on('click', function() {
		event.preventDefault();
		// pages.eq(2).removeClass('invisible');
		l_animate10();
		// setTimeout(totopscroll,550);
		totopscroll();
		setTimeout(left_nav_down,600);
	});

	//MENU OVERLAY LEFT A CAPACITACIONES
	function l_animate11() {
		// btn_move.attr('disabled', 'disabled');
		// pages.eq(1).addClass("pt-page-moveToRightEasing pt-page-ontop");
		// pages.eq(2).addClass("pt-page-current pt-page-moveFromLeft"); 
		op5.addClass('cajas-select');
		op2.removeClass('cajas-select');
		op3.removeClass('cajas-select');
		op4.removeClass('cajas-select');
		op1.removeClass('cajas-select');
		op6.removeClass('cajas-select');
		cont5.addClass('d-block').removeClass('d-none');
		cont2.removeClass('d-block').addClass('d-none');
		cont3.removeClass('d-block').addClass('d-none');
		cont4.removeClass('d-block').addClass('d-none');
		cont1.removeClass('d-block').addClass('d-none');
		cont6.removeClass('d-block').addClass('d-none');
	};

	function l_callback11() {
		pages.eq(1).removeClass("pt-page-current pt-page-moveToRightEasing pt-page-ontop");
		pages.eq(2).removeClass("pt-page-moveFromLeft");
		btn_move.removeAttr('disabled', 'disabled');
		curr = parent_element.find(".pt-page-current");
		left_nav_down();
		pages.eq(1).addClass('invisible');
		whites.addClass('invisible');
	};

	$('.pt-page-left .move-capa').on('click', function() {
		event.preventDefault();
		// pages.eq(2).removeClass('invisible');
		l_animate11();
		// setTimeout(totopscroll,550);
		totopscroll();
		setTimeout(left_nav_down,600);
	});

	function l_callback11_2() {
		// pages.eq(1).removeClass("pt-page-current pt-page-moveToRightEasing pt-page-ontop");
		// pages.eq(2).removeClass("pt-page-moveFromLeft");
		// btn_move.removeAttr('disabled', 'disabled');
		// curr = parent_element.find(".pt-page-current");
		// pages.eq(1).addClass('invisible');
		// whites.addClass('invisible');
		$('.pt-page-right').animate({scrollTop:$('.blanco').position().top - $('#container-navbar-center').height()},400);
	};

	$('.pt-page-left .link-cap').on('click', function() {
		event.preventDefault();
		// pages.eq(2).removeClass('invisible');
		l_animate11();
		// setTimeout(totopscroll,550);
		totopscroll();
		setTimeout(l_callback11_2,600);
	});

	//MENU OVERLAY LEFT A "MAS..." DE RECURSOS ELECTRONICOS
	function l_animate12() {
		// btn_move.attr('disabled', 'disabled');
		// pages.eq(1).addClass("pt-page-moveToRightEasing pt-page-ontop");
		// pages.eq(2).addClass("pt-page-current pt-page-moveFromLeft"); 
		op6.addClass('cajas-select');
		op2.removeClass('cajas-select');
		op3.removeClass('cajas-select');
		op4.removeClass('cajas-select');
		op5.removeClass('cajas-select');
		op1.removeClass('cajas-select');
		cont6.addClass('d-block').removeClass('d-none');
		cont2.removeClass('d-block').addClass('d-none');
		cont3.removeClass('d-block').addClass('d-none');
		cont4.removeClass('d-block').addClass('d-none');
		cont5.removeClass('d-block').addClass('d-none');
		cont1.removeClass('d-block').addClass('d-none');  
	};

	function l_callback12() {
		pages.eq(1).removeClass("pt-page-current pt-page-moveToRightEasing pt-page-ontop");
		pages.eq(2).removeClass("pt-page-moveFromLeft");
		btn_move.removeAttr('disabled', 'disabled');
		curr = parent_element.find(".pt-page-current");
		left_nav_down();
		pages.eq(1).addClass('invisible');
		whites.addClass('invisible');
	};

	$('.pt-page-left .move-mas-recursos').on('click', function() {
		event.preventDefault();
		// pages.eq(2).removeClass('invisible');
		l_animate12();
		// setTimeout(totopscroll,550);
		totopscroll();
		setTimeout(left_nav_down,600);
	});

	// MENU OVERLAY LEFT EVENTOS, EVENTOS SALA DE EXPOSICIONES

	function l_animate13() {
		// btn_move.attr('disabled', 'disabled');
		// pages.eq(1).addClass("pt-page-moveToLeftEasing pt-page-ontop");
		// pages.eq(0).addClass("pt-page-current pt-page-moveFromRight"); 
	};

	function l_callback13() {
		// pages.eq(1).removeClass("pt-page-current pt-page-moveToLeftEasing pt-page-ontop");
		// pages.eq(0).removeClass("pt-page-moveFromRight");
		// btn_move.removeAttr('disabled', 'disabled');
		// curr = parent_element.find(".pt-page-current");
		left_nav_down();
		// $('.pt-page-center').animate({scrollTop:1000},1000);
		// pages.eq(1).addClass('invisible');
		// whites.addClass('invisible');
		$('.pt-page-center').animate({scrollTop:$('#noticias').position().top - $('#container-navbar-center').height()},400);
	};

	$('.pt-page-left .move-eventos').on('click', function() {
		event.preventDefault();
		// pages.eq(0).removeClass('invisible');
		// l_animate13();
		// setTimeout(totopscroll,550);
		totopscroll();
		setTimeout(l_callback13,600);
	});

	function l_callback13_2() {
		// pages.eq(1).removeClass("pt-page-current pt-page-moveToLeftEasing pt-page-ontop");
		// pages.eq(0).removeClass("pt-page-moveFromRight");
		// btn_move.removeAttr('disabled', 'disabled');
		// curr = parent_element.find(".pt-page-current");
		// $('.pt-page-center').animate({scrollTop:1000},1000);
		// pages.eq(1).addClass('invisible');
		// whites.addClass('invisible');
		$('.pt-page-center').animate({scrollTop:$('#noticias').position().top - $('#container-navbar-center').height()},400);
	};

	$('.pt-page-left .eventos-sala').on('click', function() {
		event.preventDefault();
		// pages.eq(0).removeClass('invisible');
		// l_animate13();
		// setTimeout(totopscroll,550);
		totopscroll();
		setTimeout(l_callback13_2,600);
	});

	// MENU OVERLAY LEFT A SISTEMA DE BIBLIOTECAS

	function l_animate14() {

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
		};
		$(op_bibliotecas).addClass('selected');
		$('.container-servicios').not(op_bibliotecas).removeClass('selected');
	}

	$(".pt-page-left .move-bibliotecas").on("click", function() {
		event.preventDefault();
		// pages.eq(1).removeClass('invisible');
		// whites.removeClass('invisible');
		l_animate14();
		// setTimeout(totopscroll,550);
		totopscroll();//CAMBIOHANS
		setTimeout(left_nav_down,600);//CAMBIOHANS
		// console.log('hansprueba');
	});

  ////////////////////////////////////////////////////////
 /////////////////// MENU - DERECHA ///////////////////
////////////////////////////////////////////////////////
	
	// MENU OVERLAY RIGHT A NOSOTROS

	$('.pt-page-right .move-nosotros').on('click', function() {
		// event.preventDefault();
		right_nav_down();
	});

	// MENU OVERLAY RIGHT A CATÁLOGO

	$('.pt-page-right .move-catalogo').on('click', function() {
		// event.preventDefault();
		right_nav_down();
	});

	// MENU OVERLAY RIGHT A SERVICIOS

	function r_animate3() {
		btn_move.attr('disabled', 'disabled');
		pages.eq(2).addClass("pt-page-moveToLeftEasing pt-page-ontop");
		pages.eq(1).addClass("pt-page-current pt-page-moveFromRight");  
	};

	function r_callback3() {
		pages.eq(2).removeClass("pt-page-current pt-page-moveToLeftEasing pt-page-ontop");
		pages.eq(1).removeClass("pt-page-moveFromRight");
		btn_move.removeAttr('disabled', 'disabled');
		curr = parent_element.find(".pt-page-current");
		right_nav_down();
		pages.eq(2).addClass('invisible');
	};

	$('.pt-page-right .move-servi').on('click', function() {
		event.preventDefault();
		// pages.eq(1).removeClass('invisible');
		// whites.removeClass('invisible');
		// r_animate3();
		// setTimeout(totopscroll,550);
		totopscroll();
		setTimeout(right_nav_down,600);
	});

	// MENU OVERLAY RIGHT A EN SALA

	function r_animate4() {
		// btn_move.attr('disabled', 'disabled');
		// pages.eq(2).addClass("pt-page-moveToLeftEasing pt-page-ontop");
		// pages.eq(1).addClass("pt-page-current pt-page-moveFromRight"); 
		if (!(op_todos_servicios.hasClass('selected'))) {
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
		$(op_todos_servicios).addClass('selected');
		$('.container-servicios').not(op_todos_servicios).removeClass('selected');
	}
	
	function r_callback4() {
		pages.eq(2).removeClass("pt-page-current pt-page-moveToLeftEasing pt-page-ontop");
		pages.eq(1).removeClass("pt-page-moveFromRight");
		btn_move.removeAttr('disabled', 'disabled');
		curr = parent_element.find(".pt-page-current");
		right_nav_down();
		pages.eq(2).addClass('invisible');
	}

	$(".pt-page-right .move-todo-servicios, .pt-page-right .sub-move-horarios").on("click", function() {
		event.preventDefault();
		// pages.eq(1).removeClass('invisible');
		// whites.removeClass('invisible');
		r_animate4();
		// setTimeout(totopscroll,550);
		totopscroll();
		setTimeout(right_nav_down,600);
	});

	// MENU OVERLAY RIGHT A CARNÉ

	function r_animate5() {
		// btn_move.attr('disabled', 'disabled');
		// pages.eq(2).addClass("pt-page-moveToLeftEasing pt-page-ontop");
		// pages.eq(1).addClass("pt-page-current pt-page-moveFromRight");
		if (!(op_carne.hasClass('selected'))) {
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
		$(op_carne).addClass('selected');
		$('.container-servicios').not(op_carne).removeClass('selected');
	}
  
	function r_callback5() {
		pages.eq(2).removeClass("pt-page-current pt-page-moveToLeftEasing pt-page-ontop");
		pages.eq(1).removeClass("pt-page-moveFromRight");
		btn_move.removeAttr('disabled', 'disabled');
		curr = parent_element.find(".pt-page-current");
		right_nav_down();
		pages.eq(2).addClass('invisible');
	}

	$(".pt-page-right .move-carne").on("click", function() {
		event.preventDefault();
		// pages.eq(1).removeClass('invisible');
		// whites.removeClass('invisible');
		r_animate5();
		// setTimeout(totopscroll,550);
		totopscroll();
		setTimeout(right_nav_down,600);
	});

	// MENU OVERLAY RIGHT A RECEPCIÓN DE TESIS

	function r_animate6() {
		// btn_move.attr('disabled', 'disabled');
		// pages.eq(2).addClass("pt-page-moveToLeftEasing pt-page-ontop");
		// pages.eq(1).addClass("pt-page-current pt-page-moveFromRight");
		if (!(op_tesis.hasClass('selected'))) {
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
		$(op_tesis).addClass('selected');
		$('.container-servicios').not(op_tesis).removeClass('selected');
	}
  
	function r_callback6() {
		pages.eq(2).removeClass("pt-page-current pt-page-moveToLeftEasing pt-page-ontop");
		pages.eq(1).removeClass("pt-page-moveFromRight");
		btn_move.removeAttr('disabled', 'disabled');
		curr = parent_element.find(".pt-page-current");
		right_nav_down();
		pages.eq(2).addClass('invisible');
	}

	$(".pt-page-right .move-tesis").on("click", function() {
		event.preventDefault();
		// pages.eq(1).removeClass('invisible');
		// whites.removeClass('invisible');
		r_animate6();
		// setTimeout(totopscroll,550);
		totopscroll();
		setTimeout(right_nav_down,600);
	});

	// MENU OVERLAY RIGHT A MAS DE SERVICIOS BIBLIOTECARIOS

	function r_animate7() {
		// btn_move.attr('disabled', 'disabled');
		// pages.eq(2).addClass("pt-page-moveToLeftEasing pt-page-ontop");
		// pages.eq(1).addClass("pt-page-current pt-page-moveFromRight");
		if (!(op_todos_servicios.hasClass('selected'))) {
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
		$(op_todos_servicios).addClass('selected');
		$('.container-servicios').not(op_todos_servicios).removeClass('selected');
	}
	
	function r_callback7() {
		pages.eq(2).removeClass("pt-page-current pt-page-moveToLeftEasing pt-page-ontop");
		pages.eq(1).removeClass("pt-page-moveFromRight");
		btn_move.removeAttr('disabled', 'disabled');
		curr = parent_element.find(".pt-page-current");
		right_nav_down();
		pages.eq(2).addClass('invisible');
	}

	$(".pt-page-right .move-mas-servicios").on("click", function() {
		event.preventDefault();
		// pages.eq(1).removeClass('invisible');
		// whites.removeClass('invisible');
		r_animate7();
		// setTimeout(totopscroll,550);
		totopscroll();
		setTimeout(right_nav_down,600);
	});

	// MENU OVERLAY RIGHT A RECURSOS ELECTRONICOS

	$('.pt-page-right .move-rec-elec').on('click', function() {
		event.preventDefault();
		right_nav_down();
	});

	//MENU OVERLAY RIGHT A BASE DE DATOS , MENU OCULTO RIGHT A BD

	$('.pt-page-right .move-bd, .pt-page-right .sub-move-bd').on('click', function() {
		event.preventDefault();
		op1.addClass('cajas-select');
		op2.removeClass('cajas-select');
		op3.removeClass('cajas-select');
		op4.removeClass('cajas-select');
		op5.removeClass('cajas-select');
		op6.removeClass('cajas-select');
		cont1.addClass('d-block').removeClass('d-none');
		cont2.removeClass('d-block').addClass('d-none');
		cont3.removeClass('d-block').addClass('d-none');
		cont4.removeClass('d-block').addClass('d-none');
		cont5.removeClass('d-block').addClass('d-none');
		cont6.removeClass('d-block').addClass('d-none');
		right_nav_down();
	});

	//MENU OVERLAY RIGHT A REPOSITORIOS, MENU OCULTO RIGHT A REPOSITORIOS

	$('.pt-page-right .move-repo, .pt-page-right .sub-move-repo').on('click', function() {
		event.preventDefault();
		op2.addClass('cajas-select');
		op1.removeClass('cajas-select');
		op3.removeClass('cajas-select');
		op4.removeClass('cajas-select');
		op5.removeClass('cajas-select');
		op6.removeClass('cajas-select');
		cont2.addClass('d-block').removeClass('d-none');
		cont1.removeClass('d-block').addClass('d-none');
		cont3.removeClass('d-block').addClass('d-none');
		cont4.removeClass('d-block').addClass('d-none');
		cont5.removeClass('d-block').addClass('d-none');
		cont6.removeClass('d-block').addClass('d-none');
		right_nav_down();
	});

	//MENU OVERLAY RIGHT A CAPACITACIONES

	$('.pt-page-right .move-capa').on('click', function() {
		event.preventDefault();
		op5.addClass('cajas-select');
		op2.removeClass('cajas-select');
		op3.removeClass('cajas-select');
		op4.removeClass('cajas-select');
		op1.removeClass('cajas-select');
		op6.removeClass('cajas-select');
		cont5.addClass('d-block').removeClass('d-none');
		cont2.removeClass('d-block').addClass('d-none');
		cont3.removeClass('d-block').addClass('d-none');
		cont4.removeClass('d-block').addClass('d-none');
		cont1.removeClass('d-block').addClass('d-none');
		cont6.removeClass('d-block').addClass('d-none');
		right_nav_down();
	});

	$('.pt-page-right #goto_cont5').on('click', function() {
		event.preventDefault();
		$('#recursos-electronicos').val('capacitaciones');
		op5.addClass('cajas-select');
		op2.removeClass('cajas-select');
		op3.removeClass('cajas-select');
		op4.removeClass('cajas-select');
		op1.removeClass('cajas-select');
		op6.removeClass('cajas-select');
		cont5.addClass('d-block').removeClass('d-none');
		cont2.removeClass('d-block').addClass('d-none');
		cont3.removeClass('d-block').addClass('d-none');
		cont4.removeClass('d-block').addClass('d-none');
		cont1.removeClass('d-block').addClass('d-none');
		cont6.removeClass('d-block').addClass('d-none');
	});

	//MENU OVERLAY RIGHT A "MAS..." DE RECURSOS ELECTRONICOS

	$('.pt-page-right .move-mas-recursos').on('click', function() {
		event.preventDefault();
		op6.addClass('cajas-select');
		op2.removeClass('cajas-select');
		op3.removeClass('cajas-select');
		op4.removeClass('cajas-select');
		op5.removeClass('cajas-select');
		op1.removeClass('cajas-select');
		cont6.addClass('d-block').removeClass('d-none');
		cont2.removeClass('d-block').addClass('d-none');
		cont3.removeClass('d-block').addClass('d-none');
		cont4.removeClass('d-block').addClass('d-none');
		cont5.removeClass('d-block').addClass('d-none');
		cont1.removeClass('d-block').addClass('d-none'); 
		right_nav_down();
	});

	// MENU OVERLAY RIGHT EVENTOS

	function r_animate13() {
		btn_move.attr('disabled', 'disabled');
		pages.eq(2).addClass("pt-page-moveToRightEasing pt-page-ontop");
		pages.eq(0).addClass("pt-page-current pt-page-moveFromLeft");
	};

	function r_callback13() {
		// pages.eq(2).removeClass("pt-page-current pt-page-moveToRightEasing pt-page-ontop");
		// pages.eq(0).removeClass("pt-page-moveFromLeft");
		// btn_move.removeAttr('disabled', 'disabled');
		// curr = parent_element.find(".pt-page-current");
		right_nav_down();
		// $('.pt-page-center').animate({scrollTop:1000},1000);
		// pages.eq(2).addClass('invisible');
		$('.pt-page-center').animate({scrollTop:$('#noticias').position().top - $('#container-navbar-center').height()},400);
	};

	$('.pt-page-right .move-eventos').on('click', function() {
		event.preventDefault();
		// pages.eq(0).removeClass('invisible');
		// r_animate13();
		// setTimeout(totopscroll,550);
		totopscroll();
		setTimeout(r_callback13,600);
	});

	// MENU OVERLAY LEFT A SISTEMA DE BIBLIOTECAS

	function r_animate14() {

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
		};
		$(op_bibliotecas).addClass('selected');
		$('.container-servicios').not(op_bibliotecas).removeClass('selected');
	}

	$(".pt-page-right .move-bibliotecas").on("click", function() {
		event.preventDefault();
		// pages.eq(1).removeClass('invisible');
		// whites.removeClass('invisible');
		r_animate14();
		// setTimeout(totopscroll,550);
		totopscroll();//CAMBIOHANS
		setTimeout(right_nav_down,600);//CAMBIOHANS
		// console.log('hansprueba');
	});

	

////////////////////////////////

// });