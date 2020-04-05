<?php
    include 'conex_hemeroteca_sisbib.php';
    if (isset($_POST['year'])) {
        $year = $_POST['year'];
    }
?>
<select class="db-search-input filter-change-month w-100" name="monthlist" id="monthlist">
<?php
    $id_revista = 1;
    $order_mes = " ORDER BY mes ASC";
    $query = "SELECT DISTINCT mes FROM titulos WHERE id_revista = '".$id_revista."' AND año = '".$year."'".$order_mes;
    // echo $query;
    $resultado2 = $conexion->query($query);
    while ($row_meses = $resultado2->fetch_assoc()) {
    	$query = "SELECT * FROM titulos WHERE id_revista = '".$id_revista."' AND año = '".$year."' AND mes = '".$row_meses['mes']."'";
    	$resultado5 = $conexion->query($query);
    	// $row_cnt = $resultado5->num_rows;
?>
        <option class="month" value="<?php echo $row_meses['mes'] ?>"><?php echo $row_meses['mes'] ?></option>
<?php
    }
?>
</select>

<script>

	function buscar_en_meses() {


		month = get_filter('month');
		// var info = {year: year, month: month, number: number};
		// console.log(info);

		$.ajax({
			url: 'options_numbers.php',
			type: 'POST',
			dataType: 'html',
			data: {year: year, month: month},
		})
		.done(function(respuesta) {
			// console.log("success");
			$('#options_numbers').html(respuesta);
			// number = get_filter('number');
			// var info = {year: year, month: month, number: number};
			// console.log(info);
			buscar_en_numeros();
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			// console.log("complete");
		});

	}

	$('.filter-change-month').change(function(){
		buscar_en_meses();
		// console.log("Prueba");
	});

	function get_filter(class_name)
	    {
	    	var filter = $('.'+class_name+':checked').val();
	    	return filter;
	    }
</script>