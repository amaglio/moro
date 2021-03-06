<section id="producto">

	<section id="productos_spa">

		<div class="container">

			

			<!-- BUSCADOR DE PRODUCTOS -->
			<div class="row div_buscador">
				<div class="col-lg-12" >
				  	<form id="form_buscar_productos" name="form_buscar_productos" class="form-inline" method="post" action="<?=site_url('producto/buscar_productos')?>">
							<div class="form-group col-lg-5" >
								<label for="id_producto_tipo" class="col-lg-2">Tipo</label>
								<select class="custom-select col-lg-8 phone-group" id="id_producto_tipo" name="id_producto_tipo">

									<option selected value="">Elegir...</option>
									<? foreach ($producto_tipos as $row_tipo_producto): ?>
									    
									    <option value="<?=$row_tipo_producto['id_producto_tipo']?>"><?=$row_tipo_producto['descripcion']?></option> 

									<?	endforeach; ?>
								</select>
							</div>
							<div class="form-group col-lg-2">
								<button type="submit" class="btn btn-block btn-primary my-1"> <i class="fa fa-search" style="color:white !important;"></i> Buscar</button>
							</div>
					</form>
				</div>
			</div>

			<!-- INFORMACION DEL PRODUCTO -->
			<div class="row div_row">

				<!-- Informaciopn -->
				<div class="col-lg-8" ">
					<div class="row">
						<div class="col-lg-4" ">
							<img class="img-rounded img-thumbnail thumbnail" src="<?=base_url()?>assets/img/productos/<?=$producto['foto']?>">
						</div>
						<div class="col-lg-8" ">
							 
								<h5><?=$producto['nombre']?></h5>
						 
							<div class="form-group row"> 
							    <div class="col-sm-10">
							     	<?=$producto['descripcion_tipo_producto']?>
							    </div>
							</div>
							<div class="form-group row">
								<div class="col-sm-12">
							    	<?=$producto['descripcion']?>
							   </div>
							</div>
						</div>
					</div>
				</div> 

				<!-- Contacto -->
				<div class="col-lg-4">

					 <?php ver_formulario_contacto(); ?>

				</div>

			</div>
			
			<!-- PRODUCTOS RELACIONADOS -->
			<div class="row div_row">

				<?  for ($i=0; $i < count($productos) ; $i++): 

					$id_producto = $productos[$i]['id_producto'];
				?>			

					<div class="col-lg-4" >
						<div class="row">
							<div class="col-lg-6" >
								<img class="img-rounded img-thumbnail thumbnail" src="<?=base_url()?>assets/img/productos/<?=$productos[$i]['foto']?>">
							</div>
							<div class="col-lg-6" >
								
								<a href='<?=site_url("producto/ver_producto/$id_producto")?>'>
									<h5><?=$producto['nombre']?></h5>
								</a>

								<div class="form-group row">
									<div class="col-sm-12">
								    	<?=$productos[$i]['descripcion']?>
								   </div>
								</div>
							</div>
						</div>  
					</div>

					<?  $i++;

						if( isset($productos[$i]) ): 

							$id_producto = $productos[$i]['id_producto'];

							?>

							<div class="col-lg-4" >
								<div class="row">
									<div class="col-lg-6" >
										<img class="img-rounded img-thumbnail thumbnail" src="<?=base_url()?>assets/img/productos/<?=$productos[$i]['foto']?>">
									</div>
									<div class="col-lg-6" >
										<a href='<?=site_url("producto/ver_producto/$id_producto")?>'>
											<h5><?=$producto['nombre']?></h5>
										</a>
													 
										<div class="form-group row">
											<div class="col-sm-12">
										    	<?=$productos[$i]['descripcion']?>
										   </div>
										</div>
									</div>
								</div>    
							</div>
 

					<?	endif;	?>

					<?  $i++;

						if( isset($productos[$i]) ): 

							$id_producto = $productos[$i]['id_producto'];

							?>

							<div class="col-lg-4" >
								<div class="row">
									<div class="col-lg-6" >
										<img class="img-rounded img-thumbnail thumbnail" src="<?=base_url()?>assets/img/productos/<?=$productos[$i]['foto']?>">
									</div>
									<div class="col-lg-6" >
										<a href='<?=site_url("producto/ver_producto/$id_producto")?>'>
											<h5><?=$producto['nombre']?></h5>
										</a> 
										
										<div class="form-group row">
											<div class="col-sm-12">
										    	<?=$productos[$i]['descripcion']?>
										   </div>
										</div>
									</div>
								</div>  
							</div>
 

					<?	endif;	?> 
				
				<? endfor; ?>

				<div class="col-lg-12" style="text-align: right; font-size: 12px" >
					<a href="<?=site_url('producto/index')?>" class="btn btn_home">   <i class="fa fa-plus"></i> Productos </a>
				</div>
			</div>
		 
		</div>

	</section>
	
</section>