<?php $suscripciones = get_suscripcion( ); ?>
<article class="row profile-content whereisit-kmibox">

	<div class="col-md-4 col-xs-12 col-md-offset-2"
		style="margin-top:20px;">
		<h3 class="responsive-marca">Selecciona una suscripción</h3>
		<select class="form-control" id="select_kmibox_ubicacion">
			<option>Selecciona una Marca</option>
			<?php foreach ($suscripciones as $key => $kmibox) { ?>
				<option value="<?php echo $key; ?>"> Orden No.: <?php echo "{$key} " . $kmibox['meta']['kmibox_size']; ?> </option>
			<?php } ?>
		</select>
		<span class="loading hidden">
			<i class="fa fa-circle-o-notch fa-spin fa-fw"></i>
			<span>Cargando datos, porfavor espere...</span>
		</span>
	</div>



	<div class="col-md-8 col-xs-12 col-md-offset-2 progreso-entrega">
		<div class="row">
			<div class=" col-md-12 col-sm-12 col-md-12 text-center">				
				<div class="row" id="content-estatus">
					<div data-ubicacion="armada" class="col-xs-6 col-sm-3 col-md-3 pull-left selected">
						<img src="<?php echo get_home_url(); ?>/img/progress-box.png" class="img-responsive" >
						<label class="hidden-xs hidden-sm">Armada</label>
						<li class="hidden-sm hidden-md hidden-lg list-inline list-unstyle" id="leyenda"><span></span><label>Armada</label></li>
					</div>
					<div class="col-md-2 col-sm-2 flecha hidden-xs ">
						<img src="<?php echo get_home_url(); ?>/img/flecha.png" width="128">
					</div>
					<div data-ubicacion="enviada" class="col-xs-6 col-md-3 col-sm-3 selected">
						<img src="<?php echo get_home_url(); ?>/img/progress-cart.png" class="img-responsive" >
						<label class="hidden-xs hidden-sm">Enviada</label>
						<li class="hidden-sm hidden-md hidden-lg list-inline list-unstyle" id="leyenda"><span></span><label>Enviada</label></li>

					</div>
					<div class="col-md-2 col-sm-2 flecha hidden-xs">
						<img src="<?php echo get_home_url(); ?>/img/flecha.png" width="128">
					</div>
					<div data-ubicacion="recibida" class="col-xs-12 col-md-3 col-sm-3 selected">
						<img src="<?php echo get_home_url(); ?>/img/progress-house.png" class="img-responsive text-center" >
						<label class="hidden-xs hidden-sm">Recibida</label>
						<li class="hidden-sm hidden-md hidden-lg list-inline list-unstyle" id="leyenda"><span></span><label>Recibida</label></li>

					</div>
					<label id="mobile-estatus" class="hidden-md hidden-lg"></label>
				</div>
			</div>
		</div>
	</div>

</article>