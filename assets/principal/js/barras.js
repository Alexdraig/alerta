$(document).ready(function() {
		var caja=$('#caja'),
		boton1=$('#boton1'),
		boton2=$('#boton2'),
		boton3=$('#boton3'),
		boton4=$('#boton4'),
		boton5=$('#boton5'),
		uno=$('#collapseOne'),
		dos=$('#collapseTwo'),
		tres=$('#collapseThree'),
		cuatro=$('#collapseFour'),
		cinco=$('#collapseFive'),

		btn_carne_1=$('#buttonCollapseOneCarne'),
		btn_carne_2=$('#buttonCollapseTwoCarne'),
		btn_carne_3=$('#buttonCollapseThreeCarne'),
		carne_1=$('#collapseOneCarne'),
		carne_2=$('#collapseTwoCarne'),
		carne_3=$('#collapseThreeCarne'),

		structure_tab=$('#estructure-tab'),
		struclist_tab=$('#estruclist-tab'),
		structure=$('#estructure'),
		struclist=$('#estruclist'),

		capacitar=$('#capacitar'),
		base=$('#base'),
		gestor=$('#gestor'),
		cyber=$('#cyber'),
		op6=$('#op6'),
		cont6=$('#cont6'),
		op5=$('#op5'),
		cont5=$('#cont5'),		
		op1=$('#op1'),
		cont1=$('#cont1'),
		op2=$('#op2'),
		cont2=$('#cont2');

	function openBarras (a, b) {
		a.addClass('show');
		b.removeClass('collapsed').attr('aria-expanded', 'true');
	}

	function closeBarras (a, b) {
		a.removeClass('show');
		b.addClass('collapsed').attr('aria-expanded', 'false');
	}

	function openTabs (a, b) {
		a.addClass('active').attr('aria-selected', 'true');
		b.addClass('active show');
	}

	function closeTabs (a, b) {
		a.removeClass('active').attr('aria-selected', 'false');
		b.removeClass('active show');
	}

	$('.por-nivel').on('click', function(event) {
		event.preventDefault();
		openTabs(structure_tab, structure);
		closeTabs(struclist_tab, struclist);
		setTimeout(function(){
			$('.pt-page-left').animate({scrollTop:$('.white-containers').position().top - $('#container-navbar-left').height()},400);
		}, 600)
	});

	$('.por-lista').on('click', function(event) {
		event.preventDefault();
		openTabs(struclist_tab, struclist);
		closeTabs(structure_tab, structure);
		setTimeout(function(){
			$('.pt-page-left').animate({scrollTop:$('.white-containers').position().top - $('#container-navbar-left').height()},400);
		}, 600)
	});

	$('.como-bd').on('click', function(event) {
		event.preventDefault();
		openBarras(dos, boton2);
		closeBarras(uno, boton1);
		closeBarras(tres, boton3);
		closeBarras(cuatro, boton4);
		closeBarras(cinco, boton5);
	});

	$('.que-bd').on('click', function(event) {
		event.preventDefault();
		openBarras(uno, boton1);
		closeBarras(dos, boton2);
		closeBarras(tres, boton3);
		closeBarras(cuatro, boton4);
		closeBarras(cinco, boton5);
	});

	$('.link-grad').on('click', function(event) {
		event.preventDefault();
		openBarras(carne_1, btn_carne_1);
		closeBarras(carne_2, btn_carne_2);
		closeBarras(carne_3, btn_carne_3);
		setTimeout(function () {
			$('.pt-page-left').animate({scrollTop:$('#headingOneCarne').position().top - $('#container-navbar-center').height()},400);
		},600);
		// $('.pt-page-left').animate({scrollTop:$('#headingOneCarne').position().top},400);
	});

	$('.link-visit').on('click', function(event) {
		event.preventDefault();
		openBarras(carne_2, btn_carne_2);
		closeBarras(carne_1, btn_carne_1);
		closeBarras(carne_3, btn_carne_3);
		setTimeout(function () {
			$('.pt-page-left').animate({scrollTop:$('#headingTwoCarne').position().top - $('#container-navbar-center').height()},400);
		},600);
		// $('.pt-page-left').animate({scrollTop:$('#headingTwoCarne').position().top},400);
		// setTimeout(function(){
		// 	$('.pt-page-left').animate({scrollTop:$('.white-containers').position().top - $('#container-navbar-center').height()},400);
		// }, 600)
	});

	$('.link-regular').on('click', function(event) {
		event.preventDefault();
		openBarras(carne_3, btn_carne_3);
		closeBarras(carne_1, btn_carne_1);
		closeBarras(carne_2, btn_carne_2);
		setTimeout(function () {
			$('.pt-page-left').animate({scrollTop:$('#headingThreeCarne').position().top - $('#container-navbar-center').height()},400);
		},600);
		// $('.pt-page-left').animate({scrollTop:$('#headingOneCarne').position().top},400);
	});

	$('.como-gestores').on('click', function(event) {
		event.preventDefault();
		openBarras(tres, boton3);
		closeBarras(uno, boton1);
		closeBarras(dos, boton2);
		closeBarras(cuatro, boton4);
		closeBarras(cinco, boton5);
	});
							
	capacitar.on('click', function() {
		$('#recursos-electronicos').val('capacitaciones');
		op6.removeClass('cajas-select');
		cont6.removeClass('d-block').addClass('d-none');
		op5.addClass('cajas-select');
		cont5.removeClass('d-none').addClass('d-block');
		uno.removeClass('show');
		boton1.addClass('collapsed');
		boton1.attr('aria-expanded', 'false');
		// caja.removeClass('d-none').addClass('d-block');
	});
							
	base.on('click', function() {
		$('#recursos-electronicos').val('bases_datos');
		op6.removeClass('cajas-select');
		cont6.removeClass('d-block').addClass('d-none');
		op1.addClass('cajas-select');
		cont1.removeClass('d-none').addClass('d-block');
		dos.removeClass('show');
		boton2.addClass('collapsed');
		boton2.attr('aria-expanded', 'false');
		// caja.removeClass('d-none').addClass('d-block');
	});
						
	gestor.on('click', function() {
		$('#recursos-electronicos').val('capacitaciones');
		op6.removeClass('cajas-select');
		cont6.removeClass('d-block').addClass('d-none');
		op5.addClass('cajas-select');
		cont5.removeClass('d-none').addClass('d-block');
		tres.removeClass('show');
		boton3.addClass('collapsed');
		boton3.attr('aria-expanded', 'false');
		// caja.removeClass('d-none').addClass('d-block');
	});

	cyber.on('click', function() {
		$('#recursos-electronicos').val('repositorios');
		op6.removeClass('cajas-select');
		cont6.removeClass('d-block').addClass('d-none');
		op2.addClass('cajas-select');
		cont2.removeClass('d-none').addClass('d-block');
		cuatro.removeClass('show');
		boton4.addClass('collapsed');
		boton4.attr('aria-expanded', 'false');
		// caja.removeClass('d-none').addClass('d-block');
	});
						
});