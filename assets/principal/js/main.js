$(document).ready(function() {
	 var cont1 = $('#cont1'),
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

		l1 = $('.l-fondor'),
		l3 = $('.l-salas'),
		l4 = $('.l-hemeroteca'),
		l6 = $('.l-prestamo'),
		l7 = $('.l-cubiculos'),
		l8 = $('.l-visual'),

		// VARIABLES - REVISTAS - HEMEROTECA

		// revista_current = 0,
		
		// $cont_revista = $('#hemeroteca_body .contenido'),
		// $list_revista_op = $('#hemeroteca_body .list-op'),
		// $revistas = $cont_revista.children('div'),
		// $op_revistas = $list_revista_op.children('a'),
		// revista_0 = $('#revista_0'),
		// revista_1 = $('#revista_1'),
		// revista_2 = $('#revista_2'),
		// revista_3 = $('#revista_3'),
		// revista_4 = $('#revista_4'),
		// revista_5 = $('#revista_5'),
		// revista_6 = $('#revista_6'),
		// revista_7 = $('#revista_7'),
		// cont_revista_0 = $('#contenido_revista_0'),
		// cont_revista_1 = $('#contenido_revista_1'),
		// cont_revista_2 = $('#contenido_revista_2'),
		// cont_revista_3 = $('#contenido_revista_3'),
		// cont_revista_4 = $('#contenido_revista_4'),
		// cont_revista_5 = $('#contenido_revista_5'),
		// cont_revista_6 = $('#contenido_revista_6'),
		// cont_revista_7 = $('#contenido_revista_7'),

		// VARIABLES - COLECCIONES FONDO RESERVADO

		// colec_current = 0,
		$cont_colec = $('#colecciones_body .contenido'),
		$list_colec_op = $('#colecciones_body .list-op'),
		$colecs = $cont_colec.children('div'),
		$op_colecs = $list_colec_op.children('a'),
		$tab_colec_referencia = $('#col-referencias-tab'),
		$tab_colec_descarga = $('#col-descargas-tab'),
		$tab_content_colec_referencia = $('#col-referencias'),
		$tab_content_colec_descarga = $('#col-descargas'),
		colec_0 = $('#colec_0'),
		colec_1 = $('#colec_1'),
		colec_2 = $('#colec_2'),
		colec_3 = $('#colec_3'),
		colec_4 = $('#colec_4'),
		colec_5 = $('#colec_5'),
		colec_6 = $('#colec_6'),
		colec_7 = $('#colec_7'),
		cont_colec_0 = $('#contenido_colec_0'),
		cont_colec_1 = $('#contenido_colec_1'),
		cont_colec_2 = $('#contenido_colec_2'),
		cont_colec_3 = $('#contenido_colec_3'),
		cont_colec_4 = $('#contenido_colec_4'),
		cont_colec_5 = $('#contenido_colec_5'),
		cont_colec_6 = $('#contenido_colec_6'),
		cont_colec_7 = $('#contenido_colec_7'),
		l_op1=$('#l-op1'),
		l_cont1=$('#l-cont1'),
		l_op2=$('#l-op2'),
		l_cont2=$('#l-cont2'),
		l_op3=$('#l-op3'),
		l_cont3=$('#l-cont3'),
		l_op4=$('#l-op4'),
		l_cont4=$('#l-cont4'),
		l_op5=$('#l-op5'),
		l_cont5=$('#l-cont5'),
		l_op6=$('#l-op6'),
		l_cont6=$('#l-cont6'),
		l_op7=$('#l-op7'),
		l_cont7=$('#l-cont7'),
		l_op8=$('#l-op8'),
		l_cont8=$('#l-cont8'),
		l_op9=$('#l-op9'),
		l_cont9=$('#l-cont9');
		// console.log(colec_current);

	/**************************************/
	// INICIO COLECCIONES FONDO RESERVADO
	/**************************************/

	$op_colecs.eq(colec_current).addClass('cajas-select');

	$colecs.eq(colec_current).addClass('current-colec');


	function tabsColec(){
		if (colec_current <= 5) {
			$tab_colec_referencia.addClass('active');
			$tab_content_colec_referencia.addClass('show active');
		} else {
			$tab_colec_descarga.addClass('active');
			$tab_content_colec_descarga.addClass('show active');
		}
	}
	tabsColec();

	$tab_colec_referencia.on('click', function() {
		colec_current = $(this).data('cur');
		$op_colecs.eq(colec_current).addClass('cajas-select');
		$colecs.eq(colec_current).addClass('current-colec');
		$op_colecs.not(':eq('+colec_current+')').removeClass('cajas-select');
		$colecs.not(':eq('+colec_current+')').removeClass('current-colec');
		console.log(colec_current);
	});

	$tab_colec_descarga.on('click', function() {
		colec_current = $list_colec_op[0].children.length;
		$op_colecs.eq(colec_current).addClass('cajas-select');
		$colecs.eq(colec_current).addClass('current-colec');
		$op_colecs.not(':eq('+colec_current+')').removeClass('cajas-select');
		$colecs.not(':eq('+colec_current+')').removeClass('current-colec');
		console.log(colec_current);
	});

	

	$op_colecs.on('click', function(event) {
		event.preventDefault();
		colec_current = $(this).data('cur');
		$op_colecs.eq(colec_current).addClass('cajas-select');
		$colecs.eq(colec_current).addClass('current-colec');
		$op_colecs.not(':eq('+colec_current+')').removeClass('cajas-select');
		$colecs.not(':eq('+colec_current+')').removeClass('current-colec');
		console.log(colec_current);
	});

	/***********************************/
	// FIN COLECCIONES FONDO RESERVADO
	/***********************************/

	/********************************/
	// INICIO REVISTAS - HEMEROTECA
	/********************************/

	// $op_revistas.eq(revista_current).addClass('cajas-select');

	// $revistas.eq(revista_current).addClass('current-colec');	

	// $op_revistas.on('click', function(event) {
	// 	event.preventDefault();
	// 	revista_current = $(this).data('cur');
	// 	$op_revistas.eq(revista_current).addClass('cajas-select');
	// 	$revistas.eq(revista_current).addClass('current-colec');
	// 	$op_revistas.not(':eq('+revista_current+')').removeClass('cajas-select');
	// 	$revistas.not(':eq('+revista_current+')').removeClass('current-colec');
	// 	console.log(revista_current);
	// });

	/*****************************/
	// FIN REVISTAS - HEMEROTECA
	/*****************************/

	function select_runo () {

		$('#recursos-electronicos').val('bases_datos');

		op1.addClass('cajas-select');
		op2.removeClass('cajas-select');
		op3.removeClass('cajas-select');
		op4.removeClass('cajas-select');
		op5.removeClass('cajas-select');
		op6.removeClass('cajas-select');

		cont1.addClass('d-block');
		cont2.removeClass('d-block');
		cont3.removeClass('d-block');
		cont4.removeClass('d-block');
		cont5.removeClass('d-block');
		cont6.removeClass('d-block');

	}

	op1.on('click', select_runo);
	$('.move-bd').on('click', select_runo);

	function select_rdos () {

		$('#recursos-electronicos').val('repositorios');

		op2.addClass('cajas-select');
		op1.removeClass('cajas-select');
		op3.removeClass('cajas-select');
		op4.removeClass('cajas-select');
		op5.removeClass('cajas-select');
		op6.removeClass('cajas-select');

		cont2.addClass('d-block');
		cont1.removeClass('d-block');
		cont3.removeClass('d-block');
		cont4.removeClass('d-block');
		cont5.removeClass('d-block');
		cont6.removeClass('d-block');

	}

	op2.on('click', select_rdos);
	$('.move-repo').on('click', select_rdos);

	function select_rtres () {

		$('#recursos-electronicos').val('gestores_bibliograficos');

		op3.addClass('cajas-select');
		op2.removeClass('cajas-select');
		op1.removeClass('cajas-select');
		op4.removeClass('cajas-select');
		op5.removeClass('cajas-select');
		op6.removeClass('cajas-select');

		cont3.addClass('d-block');
		cont1.removeClass('d-block');
		cont2.removeClass('d-block');
		cont4.removeClass('d-block');
		cont5.removeClass('d-block');
		cont6.removeClass('d-block');

	}

	op3.on('click', select_rtres);

	// op4.on('click', function() {
		
	// 	op4.addClass('cajas-select');
	// 	op2.removeClass('cajas-select');
	// 	op3.removeClass('cajas-select');
	// 	op1.removeClass('cajas-select');
	// 	op5.removeClass('cajas-select');
	// 	op6.removeClass('cajas-select');

	// 	cont4.addClass('d-block');
	// 	cont1.removeClass('d-block');
	// 	cont3.removeClass('d-block');
	// 	cont2.removeClass('d-block');
	// 	cont5.removeClass('d-block');
	// 	cont6.removeClass('d-block');
	// });

	function select_rcinco () {

		$('#recursos-electronicos').val('capacitaciones');

		op5.addClass('cajas-select');
		op2.removeClass('cajas-select');
		op3.removeClass('cajas-select');
		op4.removeClass('cajas-select');
		op1.removeClass('cajas-select');
		op6.removeClass('cajas-select');

		cont5.addClass('d-block');
		cont1.removeClass('d-block');
		cont3.removeClass('d-block');
		cont4.removeClass('d-block');
		cont2.removeClass('d-block');
		cont6.removeClass('d-block');

	}

	op5.on('click', select_rcinco);
	$('.move-capa').on('click', select_rcinco);

	function select_rseis () {

		$('#recursos-electronicos').val('preguntas_frecuentes');

		op6.addClass('cajas-select');
		op2.removeClass('cajas-select');
		op3.removeClass('cajas-select');
		op4.removeClass('cajas-select');
		op5.removeClass('cajas-select');
		op1.removeClass('cajas-select');

		cont6.addClass('d-block');
		cont1.removeClass('d-block');
		cont3.removeClass('d-block');
		cont4.removeClass('d-block');
		cont5.removeClass('d-block');
		cont2.removeClass('d-block');

	}

	op6.on('click', select_rseis);
	$('.move-mas-recursos').on('click', select_rseis);

	$('#recursos-electronicos').change(function(){
		var r = $('.input-option-recursos-e:checked').val();
		switch(r) {
			case "bases_datos":
				// console.log('bases de datos');
				select_runo();
				break;
			case "repositorios":
				// console.log('repositorios');
				select_rdos();
				break;
			case "gestores_bibliograficos":
				// console.log('gestores bibliograficos');
				select_rtres();
				break;
			case "capacitaciones":
				// console.log('capacitaciones en uso de Recursos Electrónicos');
				select_rcinco();
				break;
			case "preguntas_frecuentes":
				// console.log('preguntas frecuentes');
				select_rseis();
				break;
		}
	});

	/*****************************/
	// COLECCIONES FONDO RESERVADO
	/*****************************/

	// colec_0.on('click', function(event) {
	// 	event.preventDefault();
		
	// 	colec_0.addClass('cajas-select');
	// 	colec_1.removeClass('cajas-select');
	// 	colec_2.removeClass('cajas-select');
	// 	colec_3.removeClass('cajas-select');
	// 	colec_4.removeClass('cajas-select');
	// 	colec_5.removeClass('cajas-select');
	// 	colec_6.removeClass('cajas-select');
	// 	colec_7.removeClass('cajas-select');

	// 	cont_colec_0.addClass('d-block').removeClass('d-none');
	// 	cont_colec_1.removeClass('d-block').addClass('d-none');
	// 	cont_colec_2.removeClass('d-block').addClass('d-none');
	// 	cont_colec_3.removeClass('d-block').addClass('d-none');
	// 	cont_colec_4.removeClass('d-block').addClass('d-none');
	// 	cont_colec_5.removeClass('d-block').addClass('d-none');		
	// 	cont_colec_6.removeClass('d-block').addClass('d-none');		
	// 	cont_colec_7.removeClass('d-block').addClass('d-none');		

	// });

	// colec_1.on('click', function(event) {
	// 	event.preventDefault();
		
	// 	colec_1.addClass('cajas-select');
	// 	colec_0.removeClass('cajas-select');
	// 	colec_2.removeClass('cajas-select');
	// 	colec_3.removeClass('cajas-select');
	// 	colec_4.removeClass('cajas-select');
	// 	colec_5.removeClass('cajas-select');
	// 	colec_6.removeClass('cajas-select');
	// 	colec_7.removeClass('cajas-select');

	// 	cont_colec_1.addClass('d-block').removeClass('d-none');
	// 	cont_colec_0.removeClass('d-block').addClass('d-none');
	// 	cont_colec_2.removeClass('d-block').addClass('d-none');
	// 	cont_colec_3.removeClass('d-block').addClass('d-none');
	// 	cont_colec_4.removeClass('d-block').addClass('d-none');
	// 	cont_colec_5.removeClass('d-block').addClass('d-none');
	// 	cont_colec_6.removeClass('d-block').addClass('d-none');
	// 	cont_colec_7.removeClass('d-block').addClass('d-none');
	// });

	// colec_2.on('click', function(event) {
	// 	event.preventDefault();
		
	// 	colec_2.addClass('cajas-select');
	// 	colec_0.removeClass('cajas-select');
	// 	colec_1.removeClass('cajas-select');
	// 	colec_3.removeClass('cajas-select');
	// 	colec_4.removeClass('cajas-select');
	// 	colec_5.removeClass('cajas-select');
	// 	colec_6.removeClass('cajas-select');
	// 	colec_7.removeClass('cajas-select');

	// 	cont_colec_2.addClass('d-block').removeClass('d-none');
	// 	cont_colec_0.removeClass('d-block').addClass('d-none');
	// 	cont_colec_1.removeClass('d-block').addClass('d-none');
	// 	cont_colec_3.removeClass('d-block').addClass('d-none');
	// 	cont_colec_4.removeClass('d-block').addClass('d-none');
	// 	cont_colec_5.removeClass('d-block').addClass('d-none');
	// 	cont_colec_6.removeClass('d-block').addClass('d-none');
	// 	cont_colec_7.removeClass('d-block').addClass('d-none');
	// });

	// colec_3.on('click', function(event) {
	// 	event.preventDefault();
		
	// 	colec_3.addClass('cajas-select');
	// 	colec_0.removeClass('cajas-select');
	// 	colec_1.removeClass('cajas-select');
	// 	colec_2.removeClass('cajas-select');
	// 	colec_4.removeClass('cajas-select');
	// 	colec_5.removeClass('cajas-select');
	// 	colec_5.removeClass('cajas-select');
	// 	colec_6.removeClass('cajas-select');
	// 	colec_7.removeClass('cajas-select');

	// 	cont_colec_3.addClass('d-block').removeClass('d-none');
	// 	cont_colec_0.removeClass('d-block').addClass('d-none');
	// 	cont_colec_1.removeClass('d-block').addClass('d-none');
	// 	cont_colec_2.removeClass('d-block').addClass('d-none');
	// 	cont_colec_4.removeClass('d-block').addClass('d-none');
	// 	cont_colec_5.removeClass('d-block').addClass('d-none');
	// 	cont_colec_6.removeClass('d-block').addClass('d-none');
	// 	cont_colec_7.removeClass('d-block').addClass('d-none');
	// });
	
	// colec_4.on('click', function(event) {
	// 	event.preventDefault();
		
	// 	colec_4.addClass('cajas-select');
	// 	colec_0.removeClass('cajas-select');
	// 	colec_1.removeClass('cajas-select');
	// 	colec_2.removeClass('cajas-select');
	// 	colec_3.removeClass('cajas-select');
	// 	colec_5.removeClass('cajas-select');
	// 	colec_6.removeClass('cajas-select');
	// 	colec_7.removeClass('cajas-select');

	// 	cont_colec_4.addClass('d-block').removeClass('d-none');
	// 	cont_colec_0.removeClass('d-block').addClass('d-none');
	// 	cont_colec_1.removeClass('d-block').addClass('d-none');
	// 	cont_colec_2.removeClass('d-block').addClass('d-none');
	// 	cont_colec_3.removeClass('d-block').addClass('d-none');
	// 	cont_colec_5.removeClass('d-block').addClass('d-none');
	// 	cont_colec_6.removeClass('d-block').addClass('d-none');
	// 	cont_colec_7.removeClass('d-block').addClass('d-none');
	// });

	// colec_5.on('click', function(event) {
	// 	event.preventDefault();
		
	// 	colec_5.addClass('cajas-select');
	// 	colec_0.removeClass('cajas-select');
	// 	colec_1.removeClass('cajas-select');
	// 	colec_2.removeClass('cajas-select');
	// 	colec_3.removeClass('cajas-select');
	// 	colec_4.removeClass('cajas-select');
	// 	colec_6.removeClass('cajas-select');
	// 	colec_7.removeClass('cajas-select');

	// 	cont_colec_5.addClass('d-block').removeClass('d-none');
	// 	cont_colec_0.removeClass('d-block').addClass('d-none');
	// 	cont_colec_1.removeClass('d-block').addClass('d-none');
	// 	cont_colec_2.removeClass('d-block').addClass('d-none');
	// 	cont_colec_3.removeClass('d-block').addClass('d-none');
	// 	cont_colec_4.removeClass('d-block').addClass('d-none');
	// 	cont_colec_6.removeClass('d-block').addClass('d-none');
	// 	cont_colec_7.removeClass('d-block').addClass('d-none');
	// });

	// colec_6.on('click', function(event) {
	// 	event.preventDefault();
		
	// 	colec_6.addClass('cajas-select');
	// 	colec_0.removeClass('cajas-select');
	// 	colec_1.removeClass('cajas-select');
	// 	colec_2.removeClass('cajas-select');
	// 	colec_3.removeClass('cajas-select');
	// 	colec_4.removeClass('cajas-select');
	// 	colec_5.removeClass('cajas-select');
	// 	colec_7.removeClass('cajas-select');

	// 	cont_colec_6.addClass('d-block').removeClass('d-none');
	// 	cont_colec_0.removeClass('d-block').addClass('d-none');
	// 	cont_colec_1.removeClass('d-block').addClass('d-none');
	// 	cont_colec_2.removeClass('d-block').addClass('d-none');
	// 	cont_colec_3.removeClass('d-block').addClass('d-none');
	// 	cont_colec_4.removeClass('d-block').addClass('d-none');
	// 	cont_colec_5.removeClass('d-block').addClass('d-none');
	// 	cont_colec_7.removeClass('d-block').addClass('d-none');
	// });

	// colec_7.on('click', function(event) {
	// 	event.preventDefault();
		
	// 	colec_7.addClass('cajas-select');
	// 	colec_0.removeClass('cajas-select');
	// 	colec_1.removeClass('cajas-select');
	// 	colec_2.removeClass('cajas-select');
	// 	colec_3.removeClass('cajas-select');
	// 	colec_4.removeClass('cajas-select');
	// 	colec_5.removeClass('cajas-select');
	// 	colec_6.removeClass('cajas-select');

	// 	cont_colec_7.addClass('d-block').removeClass('d-none');
	// 	cont_colec_0.removeClass('d-block').addClass('d-none');
	// 	cont_colec_1.removeClass('d-block').addClass('d-none');
	// 	cont_colec_2.removeClass('d-block').addClass('d-none');
	// 	cont_colec_3.removeClass('d-block').addClass('d-none');
	// 	cont_colec_4.removeClass('d-block').addClass('d-none');
	// 	cont_colec_5.removeClass('d-block').addClass('d-none');
	// 	cont_colec_6.removeClass('d-block').addClass('d-none');
	// });

	/*********************/
	// SERVICIOS EN LISTA
	/*********************/

	var
		$navs_bc_s = $('.nav-services-bibcen'),
		$cont_bc_s = $('.content-services-bibcent'),
		$bc_s_op = $('.structlist-ops .cajas'),
		$bc_s_info = $('.structlist-info .movercont3');

	$navs_bc_s.eq( bc_v_current ).addClass('show active').attr('aria-selected', 'true');
	$cont_bc_s.eq( bc_v_current ).addClass('show active');
	$bc_s_op.eq( bc_s_current ).addClass('cajas-select');
	$bc_s_info.eq( bc_s_current ).removeClass('d-none').addClass('d-block');
	switch(bc_s_current) {
			case 0:
				// console.log('fondo reservado');
				select_luno();
				break;
			case 1:
				// console.log('archivo historico');
				select_ldos();
				break;
			case 2:
				// console.log('sala de lectura');
				select_ltres();
				break;
			case 3:
				// console.log('estanteria abierta');
				select_lcuatro();
				break;
			case 4:
				// console.log('estanteria abierta');
				select_lcinco();
				break;
			case 5:
				// console.log('prestamos de computadoras');
				select_lseis();
				break;
			case 6:
				// console.log('cubiculos de estudio');
				select_lsiete();
				break;
			case 7:
				// console.log('limitacion visual');
				select_locho();
				break;
			case 8:
				// console.log('auditorio sotano');
				select_lnueve();
				break;
		}



	function select_luno () {
		// event.preventDefault();
		$('#lista-servicios').val('fondo_reservado');
		
		l_op1.addClass('cajas-select');
		l_op2.removeClass('cajas-select');
		l_op3.removeClass('cajas-select');
		l_op4.removeClass('cajas-select');
		l_op5.removeClass('cajas-select');
		l_op6.removeClass('cajas-select');
		l_op7.removeClass('cajas-select');
		l_op8.removeClass('cajas-select');
		l_op9.removeClass('cajas-select');

		l_cont1.addClass('d-block').removeClass('d-none');
		l_cont2.removeClass('d-block').addClass('d-none');
		l_cont3.removeClass('d-block').addClass('d-none');
		l_cont4.removeClass('d-block').addClass('d-none');
		l_cont5.removeClass('d-block').addClass('d-none');
		l_cont6.removeClass('d-block').addClass('d-none');
		l_cont7.removeClass('d-block').addClass('d-none');
		l_cont8.removeClass('d-block').addClass('d-none');
		l_cont9.removeClass('d-block').addClass('d-none');
	}

	l_op1.on('click', select_luno);
	l1.on('click', select_luno);

	function select_ldos () {
		// event.preventDefault();
		$('#lista-servicios').val('archivo_historico');
		
		l_op2.addClass('cajas-select');
		l_op1.removeClass('cajas-select');
		l_op3.removeClass('cajas-select');
		l_op4.removeClass('cajas-select');
		l_op5.removeClass('cajas-select');
		l_op6.removeClass('cajas-select');
		l_op7.removeClass('cajas-select');
		l_op8.removeClass('cajas-select');
		l_op9.removeClass('cajas-select');

		l_cont2.addClass('d-block').removeClass('d-none');
		l_cont1.removeClass('d-block').addClass('d-none');
		l_cont3.removeClass('d-block').addClass('d-none');
		l_cont4.removeClass('d-block').addClass('d-none');
		l_cont5.removeClass('d-block').addClass('d-none');
		l_cont6.removeClass('d-block').addClass('d-none');
		l_cont7.removeClass('d-block').addClass('d-none');
		l_cont8.removeClass('d-block').addClass('d-none');
		l_cont9.removeClass('d-block').addClass('d-none');
	}

	l_op2.on('click', select_ldos);

	function select_ltres () {
		// event.preventDefault();
		$('#lista-servicios').val('sala_lectura');
		
		l_op3.addClass('cajas-select');
		l_op1.removeClass('cajas-select');
		l_op2.removeClass('cajas-select');
		l_op4.removeClass('cajas-select');
		l_op5.removeClass('cajas-select');
		l_op6.removeClass('cajas-select');
		l_op7.removeClass('cajas-select');
		l_op8.removeClass('cajas-select');
		l_op9.removeClass('cajas-select');

		l_cont3.addClass('d-block').removeClass('d-none');
		l_cont1.removeClass('d-block').addClass('d-none');
		l_cont2.removeClass('d-block').addClass('d-none');
		l_cont4.removeClass('d-block').addClass('d-none');
		l_cont5.removeClass('d-block').addClass('d-none');
		l_cont6.removeClass('d-block').addClass('d-none');
		l_cont7.removeClass('d-block').addClass('d-none');
		l_cont8.removeClass('d-block').addClass('d-none');
		l_cont9.removeClass('d-block').addClass('d-none');
	};

	l_op3.on('click', select_ltres);
	l3.on('click', select_ltres);

	function select_lcuatro () {
		// event.preventDefault();
		$('#lista-servicios').val('hemeroteca');
		
		l_op4.addClass('cajas-select');
		l_op1.removeClass('cajas-select');
		l_op2.removeClass('cajas-select');
		l_op3.removeClass('cajas-select');
		l_op5.removeClass('cajas-select');
		l_op6.removeClass('cajas-select');
		l_op7.removeClass('cajas-select');
		l_op8.removeClass('cajas-select');
		l_op9.removeClass('cajas-select');

		l_cont4.addClass('d-block').removeClass('d-none');
		l_cont1.removeClass('d-block').addClass('d-none');
		l_cont2.removeClass('d-block').addClass('d-none');
		l_cont3.removeClass('d-block').addClass('d-none');
		l_cont5.removeClass('d-block').addClass('d-none');
		l_cont6.removeClass('d-block').addClass('d-none');
		l_cont7.removeClass('d-block').addClass('d-none');
		l_cont8.removeClass('d-block').addClass('d-none');
		l_cont9.removeClass('d-block').addClass('d-none');
	}

	l_op4.on('click', select_lcuatro);
	l4.on('click', select_lcuatro);

	function select_lcinco () {
		// event.preventDefault();
		$('#lista-servicios').val('estanteria_abierta');
		
		l_op5.addClass('cajas-select');
		l_op1.removeClass('cajas-select');
		l_op2.removeClass('cajas-select');
		l_op3.removeClass('cajas-select');
		l_op4.removeClass('cajas-select');
		l_op6.removeClass('cajas-select');
		l_op7.removeClass('cajas-select');
		l_op8.removeClass('cajas-select');
		l_op9.removeClass('cajas-select');

		l_cont5.addClass('d-block').removeClass('d-none');
		l_cont1.removeClass('d-block').addClass('d-none');
		l_cont2.removeClass('d-block').addClass('d-none');
		l_cont3.removeClass('d-block').addClass('d-none');
		l_cont4.removeClass('d-block').addClass('d-none');
		l_cont6.removeClass('d-block').addClass('d-none');
		l_cont7.removeClass('d-block').addClass('d-none');
		l_cont8.removeClass('d-block').addClass('d-none');
		l_cont9.removeClass('d-block').addClass('d-none');
	}

	l_op5.on('click', select_lcinco);

	function select_lseis () {
		// event.preventDefault();
		$('#lista-servicios').val('prestamo_computadoras');
		
		l_op6.addClass('cajas-select');
		l_op1.removeClass('cajas-select');
		l_op2.removeClass('cajas-select');
		l_op3.removeClass('cajas-select');
		l_op4.removeClass('cajas-select');
		l_op5.removeClass('cajas-select');
		l_op7.removeClass('cajas-select');
		l_op8.removeClass('cajas-select');
		l_op9.removeClass('cajas-select');

		l_cont6.addClass('d-block').removeClass('d-none');
		l_cont1.removeClass('d-block').addClass('d-none');
		l_cont2.removeClass('d-block').addClass('d-none');
		l_cont3.removeClass('d-block').addClass('d-none');
		l_cont4.removeClass('d-block').addClass('d-none');
		l_cont5.removeClass('d-block').addClass('d-none');
		l_cont7.removeClass('d-block').addClass('d-none');
		l_cont8.removeClass('d-block').addClass('d-none');
		l_cont9.removeClass('d-block').addClass('d-none');
	}

	l_op6.on('click', select_lseis);
	l6.on('click', select_lseis);

	function select_lsiete () {
		// event.preventDefault();
		$('#lista-servicios').val('cubiculos_estudio');
		
		l_op7.addClass('cajas-select');
		l_op1.removeClass('cajas-select');
		l_op2.removeClass('cajas-select');
		l_op3.removeClass('cajas-select');
		l_op4.removeClass('cajas-select');
		l_op5.removeClass('cajas-select');
		l_op6.removeClass('cajas-select');
		l_op8.removeClass('cajas-select');
		l_op9.removeClass('cajas-select');

		l_cont7.addClass('d-block').removeClass('d-none');
		l_cont1.removeClass('d-block').addClass('d-none');
		l_cont2.removeClass('d-block').addClass('d-none');
		l_cont3.removeClass('d-block').addClass('d-none');
		l_cont4.removeClass('d-block').addClass('d-none');
		l_cont5.removeClass('d-block').addClass('d-none');
		l_cont6.removeClass('d-block').addClass('d-none');
		l_cont8.removeClass('d-block').addClass('d-none');
		l_cont9.removeClass('d-block').addClass('d-none');
	}

	l_op7.on('click', select_lsiete);
	l7.on('click', select_lsiete);

	function select_locho () {
		// event.preventDefault();
		$('#lista-servicios').val('limitacion_visual');
		
		l_op8.addClass('cajas-select');
		l_op1.removeClass('cajas-select');
		l_op2.removeClass('cajas-select');
		l_op3.removeClass('cajas-select');
		l_op4.removeClass('cajas-select');
		l_op5.removeClass('cajas-select');
		l_op6.removeClass('cajas-select');
		l_op7.removeClass('cajas-select');
		l_op9.removeClass('cajas-select');

		l_cont8.addClass('d-block').removeClass('d-none');
		l_cont1.removeClass('d-block').addClass('d-none');
		l_cont2.removeClass('d-block').addClass('d-none');
		l_cont3.removeClass('d-block').addClass('d-none');
		l_cont4.removeClass('d-block').addClass('d-none');
		l_cont5.removeClass('d-block').addClass('d-none');
		l_cont6.removeClass('d-block').addClass('d-none');
		l_cont7.removeClass('d-block').addClass('d-none');
		l_cont9.removeClass('d-block').addClass('d-none');
	}

	l_op8.on('click', select_locho);
	l8.on('click', select_locho);

	function select_lnueve () {
		// event.preventDefault();
		$('#lista-servicios').val('auditorio_sotano');
		
		l_op9.addClass('cajas-select');
		l_op1.removeClass('cajas-select');
		l_op2.removeClass('cajas-select');
		l_op3.removeClass('cajas-select');
		l_op4.removeClass('cajas-select');
		l_op5.removeClass('cajas-select');
		l_op6.removeClass('cajas-select');
		l_op7.removeClass('cajas-select');
		l_op8.removeClass('cajas-select');

		l_cont9.addClass('d-block').removeClass('d-none');
		l_cont1.removeClass('d-block').addClass('d-none');
		l_cont2.removeClass('d-block').addClass('d-none');
		l_cont3.removeClass('d-block').addClass('d-none');
		l_cont4.removeClass('d-block').addClass('d-none');
		l_cont5.removeClass('d-block').addClass('d-none');
		l_cont6.removeClass('d-block').addClass('d-none');
		l_cont7.removeClass('d-block').addClass('d-none');
		l_cont8.removeClass('d-block').addClass('d-none');
	}

	l_op9.on('click', select_lnueve);
	// l9.on('click', select_lnueve);

	$('#lista-servicios').change(function(){
		var s = $('.input-option-services-bibcen:checked').val();
		console.log(s);
		switch(s) {
			case "fondo_reservado":
				// console.log('fondo reservado');
				select_luno();
				break;
			case "archivo_historico":
				// console.log('archivo historico');
				select_ldos();
				break;
			case "sala_lectura":
				// console.log('sala de lectura');
				select_ltres();
				break;
			case "hemeroteca":
				// console.log('estanteria abierta');
				select_lcuatro();
				break;
			case "estanteria_abierta":
				// console.log('estanteria abierta');
				select_lcinco();
				break;
			case "prestamo_computadoras":
				// console.log('prestamos de computadoras');
				select_lseis();
				break;
			case "cubiculos_estudio":
				// console.log('cubiculos de estudio');
				select_lsiete();
				break;
			case "limitacion_visual":
				// console.log('limitacion visual');
				select_locho();
				break;
			case "auditorio_sotano":
				// console.log('auditorio sotano');
				select_lnueve();
				break;
		}
	});

	/**********************/
	// LINKS SERVICIOS MENU
	/**********************/

	$('.link-procrec').on('click', function(event) {
		event.preventDefault();
		setTimeout(function () {
			$('.pt-page-left').animate({scrollTop:$('.section-recepcion-tesis .part-1').position().top - 200},400);
		},600);
	});

	$('.link-const').on('click', function(event) {
		event.preventDefault();
		setTimeout(function () {
			$('.pt-page-left').animate({scrollTop:$('.section-recepcion-tesis .part-2').position().top - 200},400);
		},600);
	});

});


    
