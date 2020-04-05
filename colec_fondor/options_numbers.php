<?php
    include 'conex_hemeroteca_sisbib.php';
    if (isset($_POST['year'])) {
        $year = $_POST['year'];
    }
    if (isset($_POST['month'])) {
        $month = $_POST['month'];
    }
?>
<select class="db-search-input filter-change-numbers w-100" name="numberlist" id="numberlist">
<?php
    $id_revista = 1;
    $order_numero = " ORDER BY numero ASC";
    $query = "SELECT DISTINCT numero FROM titulos WHERE id_revista = '".$id_revista."' AND año = '".$year."' AND mes = '".$month."'".$order_numero;
    // echo $query;
    $resultado3 = $conexion->query($query);
    while ($row_numeros = $resultado3->fetch_assoc()) {
?>
        <option class="number" value="<?php echo $row_numeros['numero'] ?>"><?php echo $row_numeros['numero'] ?></option>
<?php
    }
?>
</select>

<script>

    function buscar_en_numeros() {


        number = get_filter('number');
        // var info = {year: year, month: month, number: number};
        // console.log(info);

        $.ajax({
            url: 'ajax_block.php',
            type: 'POST',
            dataType: 'html',
            data: {year: year, month: month, number: number},
        })
        .done(function(respuesta) {
            // console.log("success");
            $('#ajax_block').html(respuesta);
            number = get_filter('number');
            var info = {year: year, month: month, number: number};
            console.log(info);
        })
        .fail(function() {
            console.log("error");
        })
        .always(function() {
            // console.log("complete");
        });

    }

    $('.filter-change-numbers').change(function(){
        buscar_en_numeros();
        // console.log("Prueba");
    });

    function get_filter(class_name)
        {
            var filter = $('.'+class_name+':checked').val();
            return filter;
        }
</script>