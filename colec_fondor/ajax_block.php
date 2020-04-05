<?php
    include 'conex_hemeroteca_sisbib.php';
    if (isset($_POST['year'])) {
        $year = $_POST['year'];
    }
    if (isset($_POST['month'])) {
        $month = $_POST['month'];
    }
    if (isset($_POST['number'])) {
        $number = $_POST['number'];
    }
?>
<?php
	$id_revista = 1;
	$order_numero = " ORDER BY numero ASC";
	$query = "SELECT * FROM titulos WHERE id_revista = '".$id_revista."' AND año = '".$year."' AND mes = '".$month."' AND numero = '".$number."'".$order_numero;
	// echo $query;
	$resultado4 = $conexion->query($query);
	while ($row_titulos = $resultado4->fetch_assoc()) {
?>
<div>
	<div class="mb-1">
		<div class="d-inline-block h6 mr-5"><b><?php echo $row_titulos['nombre'] ?></b></div>
		<div class="d-inline-block">
			<a class="mx-3" href="#" data-target="#modal-titulo-indice" data-toggle="modal">ver índice</a>
			<!-- <a class="mx-3" href="pdf/titulos/<?php echo $row_titulos['link'] ?>" target="_blank">descargar</a> -->
			<?php
				if (!empty($row_titulos['link'])) {
			?>
					<a class="mx-3" href="pdf/titulos/<?php echo $row_titulos['link'] ?>.pdf" target="_blank">descargar</a>
			<?php
				}
			?>
			<!-- Modal índice titulos -->
					<div style="background-color: rgba(0, 0, 0, 0.5);" class="modal fade" id="modal-titulo-indice" tabindex="-1" role="dialog" aria-labelledby="modal-titulo-indice_Label" aria-hidden="true">
					  <div style="max-width: 1400px;" class="modal-dialog modal-dialog-centered" role="document">
					    <div class="modal-content" style="background-image: url('assets/principal/images/biblioteca-central.JPG'); background-position: center; background-repeat: no-repeat; background-size: cover;">
					      <div class="modal-header" style="background-color: rgba(255, 255, 255, .8);">
					        <h5 class="modal-title" id="modal-titulo-indice_Label">Índice</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div id="mbody-titulo-indice-1" class="modal-body" style="background-color: rgba(255, 255, 255, .8);">
							<!-- <main class="nos-main"> -->
						        <!-- <div class="float-left"> -->
						            <div class="box-txt">
						                <!-- <h1>NOSOTROS</h1> -->
						                <p>
						                	<?php echo $row_titulos['indice'] ?>
						                </p>
						            </div>
						            <!-- <div class="row box-map">

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

						            </div> -->
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
		</div>
	</div>
	<div>
		<p><?php echo $row_titulos['descripcion'] ?></p>
	</div>
</div>
<?php
	}
?>