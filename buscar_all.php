<?php
	// error_reporting(0);
	include 'conex_bd_sisbib.php';
	// $principal_query = "SELECT * FROM t_bdatos WHERE mostrar = 1";
	$order_nombre = " ORDER BY nombre";
	$salida = "";
	$query = "SELECT * FROM t_bdatos WHERE mostrar = 1";

	if (isset($_POST['letter'])) {
		if ($_POST['letter'] != 'TODO') {
			$query .= " AND nombre LIKE '".$_POST['letter']."%'";
		}
	}

	if (isset($_POST['keyword'])) {
		$q = mysqli_real_escape_string($conexion, $_POST['keyword']);
		// $query .= " AND nombre LIKE '%".$q."%' OR descrip LIKE '%".$q."%'";
		// $query .= " AND nombre REGEXP '".$q."' OR nombre REGEXP ' ".$q."'";
		$query .= " AND ((nombre LIKE '% ".$q."%' OR nombre LIKE '".$q."%') OR (descrip LIKE '% ".$q."%' OR descrip LIKE '".$q."%'))";
	}

	if (isset($_POST['category'])) {
		if ($_POST['category'] != 'cat_all') {
			$query .= " AND ".$_POST['category']." = 1";
		}
	}

	if (isset($_POST['access'])) {

		// $access_filtro = implode(",", $_POST['access']);
		// if (empty($_POST['access'])){
		// 	echo $access_filtro;
		// 	echo '<br>';
		// 	echo 'HANS';
		// 	echo '<br>';
		// }else{
			// $query .= " AND acceso_libre IN(".$access_filtro.")";
			// echo $access_filtro;
			// echo '<br>';
		// }

		if ($_POST['access'] == 'libre') {
			$query .= " AND acceso_libre = 1";
		} elseif ($_POST['access'] == 'suscripcion') {
			$query .= " AND acceso_libre = 0";
		}
		// elseif ($_POST['access'] == 'acc_all') {
		// 	$query .= " AND acceso_libre = 0";
		// }
	}
	// else{
	// 		$query .= " AND 0";
	// 		echo '<br>';
	// 		echo 'HANS';
	// 		echo '<br>';
	// }



	$query .= $order_nombre;


	// CODE

	$resultado = mysqli_query($conexion, $query);
	$num_row = mysqli_num_rows($resultado);
	// $page = $_POST['page'];
	$limit = $_POST['limit'];
	$pages = ceil($num_row/$limit);

	if ($pages == 1) {
		$page = 1;
	}elseif ($pages == 0) {
		$page = 0;
	}else {
		$page = $_POST['page'];
	}

	if ($page > $pages) {
		$page = 1;
	}

	$offset = max((($page - 1) * $limit),0);
	// echo "pag ".$page." de ".$pages;
	// echo "<br>";
	?>

	<nav aria-label="Page navigation example">
	  <ul class="pagination">
	    <li class="page-item noselect <?php echo ($page <= 1) ? 'disabled' : ''; ?> <?php echo ($page == 0) ? 'invisible' : ''; ?>">
	      <a data-page="page-prev" id="btn-pag-prev" class="page-link page-action" href="#" aria-label="Previous" rel="prev">
	        <span class="position-relative" style="top:-38%;" aria-hidden="true">&laquo;</span>
	        <span class="sr-only">Previous</span>
	      </a>
	    </li>
	    <?php
	    	for ($i = 1; $i <= $pages; $i++) {
	    		?>
	    		<li class="page-item noselect <?php echo ($page == $i) ? 'active' : ''; ?>"><a data-page="<?php echo $i; ?>" id="btn-pag-<?php echo $i; ?>" class="page-link page-num" href="#"><?php echo $i; ?></a></li>
	    		<?php
	    	}
	    ?>
	    <li class="page-item noselect <?php echo $pr = ($page >= $pages) ? 'disabled' : ''; ?> <?php echo ($page == 0) ? 'invisible' : ''; ?>">
	      <a data-page="page-next" id="btn-pag-next" class="page-link page-action" href="#" aria-label="Next" rel="next">
	        <span class="position-relative" style="top:-38%;" aria-hidden="true">&raquo;</span>
	        <span class="sr-only">Next</span>
	      </a>
	    </li>
	  </ul>
	</nav>

	<?php

	$query .= " LIMIT ".$offset.",".$limit;

	// Highlight words in text
	function highlightWords($text, $word){
	    $text = preg_replace(array('/\s'.preg_quote($word).'/i','/^'.preg_quote($word).'/i'), '<span style="background-color: #F9F902;">\0</span>', $text);
	    return $text;
	}

	// CODE FIN

	// echo $query;
	$resultado = mysqli_query($conexion, $query);
	if(!$resultado){
		echo mysqli_error($conexion);
	}

	if (mysqli_num_rows($resultado) > 0) {
		$salida .= "<div class='cont-bds mb-3' style='overflow:auto;'>";
		$salida .= "<p class='mb-2 pl-1'>".$num_row." resultados</p>";
		$salida .= "<div id='bd_table' class='tabBD'>";

		while ($fila = mysqli_fetch_assoc($resultado)) {
			if ($fila['mostrar'] == 1) {

			$nombre = !empty($q)?highlightWords($fila['nombre'],$q):$fila['nombre'];
			$descripcion = !empty($q)?highlightWords($fila['descrip'],$q):$fila['descrip'];

			$salida .= "<div class='bordered' align='center'>
							<div class='d-flex align-items-center justify-content-center' style='grid-area: img;'>
								<div class='padd'>
									<a class='link-image' href='".$fila['link']."' target='_blank'>";

									$rest_foto = substr($fila['foto'], -4);
									$ext_foto = array(".png",".jpg",".gif",".svg");

									if (in_array($rest_foto, $ext_foto)) {
										$salida .= "<img src='assets/principal/images/bd/".$fila['foto']."' alt='".$fila['nombre']."' width='90%' class='bd_img'>";
									} else {
										$salida .= $fila['foto'];
									}
									
						$salida .= "</a>
									<strong><i class='fas ";
									
									if ($fila['acceso_libre'] == 1) {
										$salida .= "fa-lock-open";
									} elseif ($fila['acceso_libre'] == 0) {
										$salida .= "fa-lock";
									}
						$salida .= "'></i>&nbsp;&nbsp;<a class='text-body' href='".$fila['link']."' target='_blank'>".$nombre."</a></strong>
								</div>
							</div>
							<div style='grid-area: desc;'>
								<div class='w-100'>
									<div class='padd'>
										<p class='text-justify'>".$descripcion."</p>
    
										<div class='flxtbl'>";

										if (isset($fila['guia'])) {
											$salida .= "<ul class='nav nav-pills'>
														   <li class='active'><b><a href='".$fila['guia']."' target='_blank'>Gu&iacute;a de uso</a></b></li>
														</ul>";
										}

										if (isset($fila['titulos'])) {
											$salida .= "<ul class='nav nav-pills'>
														   <li class='active'><b>
														   <a href='";
														  	$rest_titulo = substr($fila['titulos'], 0, 4);
														  	$sub_titulo = array("http", "www.");
														  	if (in_array($rest_titulo, $sub_titulo)) {
														  		$salida .= $fila['titulos'];
														  	} else {
														  		$salida .= 	"archivos/documentos/publicacion/".$fila['titulos'];
														  	}
											
											$salida .= 	"' target='_blank'>Listado de t&iacute;tulos</a>
														   </b></li>
														</ul>";
										}

											$salida .= "<ul class='nav nav-pills'>
														   <li class='active'><b><a href='".$fila['link']."' target='_blank'>Acceder</a></b></li>
														</ul>
										</div>
									</div>
								</div>
							</div>
						</div>";
			}
		}

		$salida .= "</div>";
		$salida .= "</div>";
	}else {
		$salida .= "<div>
						<div class='text-center' style='font-family:monospace;font-size:60px;'>(^-^*)</div>
						<p class='text-center h5'>No se encontraron resultados</p>
					</div>";
	}

	echo $salida;

	mysqli_close($conexion);
?>