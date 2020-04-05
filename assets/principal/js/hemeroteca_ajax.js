$(document).ready(function(){



buscar_datos();

function buscar_datos() {

	year = get_filter('year');
	// month = get_filter('month');

	// var info = {year: year, month: month};
	// console.log(info);

	// $('#bdatos_all').html('<div class="text-center"><img src="assets/principal/css/ajax-loader.gif" /></div>');

	$.ajax({
		url: 'options_months.php',
		type: 'POST',
		dataType: 'html',
		data: {year: year},
	})
	.done(function (respuesta) {
		$('#options_months').html(respuesta);
		// month = get_filter('month');

		// $.ajax({
		// 	url: '../options_numbers.php',
		// 	type: 'POST',
		// 	dataType: 'html',
		// 	data: {year: year, month: month},
		// })
		// .done(function(respuesta) {
		// 	// console.log("success");
		// 	$('#options_numbers').html(respuesta);
		// 	number = get_filter('number');
		// 	var info = {year: year, month: month, number: number};
		// 	console.log(info);
		// })
		// .fail(function() {
		// 	// console.log("error");
		// })
		// .always(function() {
		// 	// console.log("complete");
		// });

		buscar_en_meses();
		

	})
	.fail(function() {
		// console.log("error");
	})
	.always(function() {
		// console.log("complete");
	});
	
}

// function buscar_en_meses() {


// 	month = get_filter('month');
// 	// var info = {year: year, month: month, number: number};
// 	// console.log(info);

// 	$.ajax({
// 		url: '../options_numbers.php',
// 		type: 'POST',
// 		dataType: 'html',
// 		data: {year: year, month: month},
// 	})
// 	.done(function(respuesta) {
// 		// console.log("success");
// 		$('#options_numbers').html(respuesta);
// 		number = get_filter('number');
// 		var info = {year: year, month: month, number: number};
// 		console.log(info);
// 	})
// 	.fail(function() {
// 		console.log("error");
// 	})
// 	.always(function() {
// 		// console.log("complete");
// 	});

// }

// $('.filter-change-month').change(function(){
// 	buscar_en_meses();
// 	console.log("Prueba");
// });

function get_filter(class_name)
    {
    	var filter = $('.'+class_name+':checked').val();
    	return filter;
    }

// function get_filtro(nomre_clase)
//     {
//         var filtro = [];
//         $('.'+nomre_clase+':checked').each(function(){
//             filtro.push($(this).val());
//         });
//         return filtro;
//     }

// function search_all_filters(){
// 	var value = $('#caja_busqueda').val();
// 	var valor = value.trim();
// 	if (valor != "") {
// 		buscar_datos(valor);
// 	}
// 	else {
// 		buscar_datos();
// 	}
// }

// $(document).on('click', '.letter-link', function(event) {
// 	event.preventDefault();
// 	letter = $(this).text();
// 	$(this).addClass('letter-link-select');
// 	$('.letter-link').not(this).removeClass('letter-link-select');
// 	search_all_filters();
// });

// $(document).on('click', '.page-num', function(event) {
// 	event.preventDefault();
// 	page = $(this).data('page');
// 	page_action = 'no-action';
// 	search_all_filters();
// });

// $(document).on('click', '.page-action', function(event) {
// 	event.preventDefault();
// 	page_action = $(this).data('page');
// 	if (page_action == 'page-next') {
// 		page = page + 1;
// 	}else if (page_action == 'page-prev') {
// 		page = page - 1;
// 	}
// 	search_all_filters();
// });

$('.filter-change-year').change(function(){
	buscar_datos();
});

// $('.access').click(function(){
// 	page = 1;
// 	search_all_filters();
// });

// $(document).on('keyup', '#caja_busqueda', function(event) {
// 	event.preventDefault();
// 	page = 1;
// 	search_all_filters();
// });

// $(document).on('click', '#caja_busqueda', function(event) {
// 	setTimeout(
// 	function () {
// 		page = 1;
// 		search_all_filters();
// 	}, 100)
// });





});