$(document).ready(function(){

var page = 1;
var page_action = 'no-action';
var limit = 4;
var letter = 'TODO';

buscar_datos();

function buscar_datos(keyword) {

	var category = get_filter('category');
	var access = get_filter('access');

	var info = {keyword: keyword, letter: letter, page: page, page_action: page_action, limit: limit, category: category, access: access};
	// console.log(info);

	// $('#bdatos_all').html('<div class="text-center"><img src="assets/principal/css/ajax-loader.gif" /></div>');

	$.ajax({
		url: 'buscar_all.php',
		type: 'POST',
		dataType: 'html',
		data: {keyword: keyword, letter: letter, category: category, access: access, page: page, limit: limit},
	})
	.done(function(respuesta) {
		$('#bdatos_all').html(respuesta);
	})
	.fail(function() {
		// console.log("error");
	})
	.always(function() {
		// console.log("complete");
	});
	
}

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

function search_all_filters(){
	var value = $('#caja_busqueda').val();
	var valor = value.trim();
	if (valor != "") {
		buscar_datos(valor);
	}
	// else if (!valor){}
	else {
		buscar_datos();
	}
}

$(document).on('click', '.letter-link', function(event) {
	event.preventDefault();
	letter = $(this).text();
	$(this).addClass('letter-link-select');
	$('.letter-link').not(this).removeClass('letter-link-select');
	search_all_filters();
});

$(document).on('click', '.page-num', function(event) {
	event.preventDefault();
	page = $(this).data('page');
	page_action = 'no-action';
	search_all_filters();
});

$(document).on('click', '.page-action', function(event) {
	event.preventDefault();
	page_action = $(this).data('page');
	if (page_action == 'page-next') {
		page = page + 1;
	}else if (page_action == 'page-prev') {
		page = page - 1;
	}
	search_all_filters();
});

$('.filter-change').change(function(){
	page = 1;
	search_all_filters();
});

$('.access').click(function(){
	page = 1;
	search_all_filters();
});

$(document).on('keyup', '#caja_busqueda', function(event) {
	event.preventDefault();
	page = 1;
	search_all_filters();
});

$(document).on('click', '#caja_busqueda', function(event) {
	// event.preventDefault();
	setTimeout(
	function () {
		page = 1;
		search_all_filters();
	}, 100)
});





});