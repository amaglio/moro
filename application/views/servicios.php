<section id="servicios">
	
 

	<section id="productos">	
		<div class="container">
			<div class="row div_buscador">
				<div class="col-lg-12" >
				  	<form id="form_buscar_servicios_spa" name="form_buscar_servicios_spa" class="form-inline" method="post" action="<?=site_url('servicio/buscar_servicios')?>">
							<div class="form-group col-lg-5" >
								<label for="id_tipo_servicio" class="col-lg-2">Tipo</label>
								<select class="custom-select col-lg-8 phone-group" id="id_tipo_servicio" name="id_tipo_servicio">

									<option selected value="">Elegir...</option>
									<? foreach ($servicio_tipo as $row_servicio): ?>
									    
									    <option value="<?=$row_servicio['id_tipo_servicio']?>"><?=$row_servicio['descripcion']?></option> 

									<?	endforeach; ?>
								</select>
							</div>
							<div class="form-group col-lg-2">
								<button type="submit" class="btn btn-primary my-1">Buscar</button>
							</div>
					</form>
				</div>
				 
			</div>
		</div>

	</section>

	<section id="servicios_spa">

		<div class="container">
 

			<?  for ($i=0; $i < count($servicios_spa) ; $i++): ?>

				<div class="row div_row">

					<div class="col-lg-6" >
						<div class="row">
							<div class="col-lg-4" >
								<img class="img-rounded img-thumbnail thumbnail" src="<?=base_url()?>assets/img/servicios/<?=$servicios_spa[$i]['foto']?>">
							</div>
							<div class="col-lg-8" >
								<h5><?=$servicios_spa[$i]['titulo']?></h5> 
								<div class="form-group row">
								    <label class="col-sm-2">Tipo</label>
								    <div class="col-sm-3">
								     <?=$servicios_spa[$i]['descripcion_tipo_servicio']?>
								    </div>
								</div>
								<div class="form-group row">
									<div class="col-sm-12">
								    	<?=$servicios_spa[$i]['descripcion']?>
								   </div>
								</div>
							</div>
						</div>  
					</div>

					<?   ?>

					<?  $i++;

						if( isset($servicios_spa[$i]) ): ?>

							<div class="col-lg-6" >
								<div class="row">
									<div class="col-lg-4"  >
										<img class="img-rounded img-thumbnail thumbnail" src="<?=base_url()?>assets/img/servicios/<?=$servicios_spa[$i]['foto']?>">
									</div>
									<div class="col-lg-8" >
										<h5><?=$servicios_spa[$i]['titulo']?></h5> 
										<div class="form-group row">
										    <label class="col-sm-2">Tipo</label>
										    <div class="col-sm-8">
										     <?=$servicios_spa[$i]['descripcion_tipo_servicio']?>
										    </div>
										</div>
										<div class="form-group row">
											<div class="col-sm-12">
										    	<?=$servicios_spa[$i]['descripcion']?>
										   </div>
										</div>

									</div>
								</div>  
							</div> 

						<?	endif;	?>

				</div>
 
			<? endfor; ?>
		 

		</div>

	</section>
	
</section>