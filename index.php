<?php 
include 'header.php';
/**
* 	@author Amilkhael Chávez Delgado;
*	Documento: Index del micrositio
*/
?>
<section class="container nuestrasUniversidades" style="margin-left: 5%; margin-right: 5%; margin-top: 5%;">
<div class="row">
		<div class="col-sm-6 col-xs-12">
			<div class="row">
				<h2 class="titulo">Nuestras universidades <br><span class="mexico">en México</span></h2><br>
			</div>
			<div class="row">
				<p class="contenidoNU">contribuyen al desarrollo y transformación de nuestra sociedad. Cada una es autónoma y su oferta académica responde a las necesidades del contexto geográfico y social.</p>
				<hr class="lineaRoja">
				<?php include 'controlador/ControladorPlantel.php'; ?>		
			</div>
		</div>
		<div class="col-sm-6 col-xs-12">
			<figure>
				<img src="images/contenido/mapa.png" alt="Mapa de red de universidades" class="img-responsive">
			</figure>
		</div>
	</div>

	<div class="col-sm-12">
		<figure>
				<img src="images/contenido/fotos.png" alt="Foto de las diferentes universidades de La Salle" class="img-responsive">
			</figure>
	</div>
</section>

<section class="container-fluid">	
	<?php include 'controlador/ControladorOEdu.php'; ?>
</section>

<?php include 'footer.php';?>