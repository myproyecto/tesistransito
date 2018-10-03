<?php $__env->startSection('Contenido'); ?>
<div class="panel panel-primary" >
	<div class="panel-body">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">

				<h5 style="color: black">Agregar Nuevos Articulos  <a href="articulo/create"><button class="btn btn-success" style="color: black">Nuevo</button></a></h5>
					<h3 style="color: black">Listados de Articulos</h3>
					<?php echo $__env->make('almacen.articulo.search', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			</div>
		</div>

	</div>
	
</div>

<div class="panel panel-primary">
	<div class="panel-body" style="background-image:  #e5e7e9 ">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-condensed table-hover">
						<thead style="background-color: teal">
							<th style="color: #fff">Id</th>
							<th style="color: #fff">Nombre</th>
							<th style="color: #fff">Codigo</th>
							<th style="color: #fff">Categoria</th>
							<th style="color: #fff">Stock</th>
							<th style="color: #fff">Imagen</th>
							<th style="color: #fff">Estado</th>
							<th style="color: #fff">Opciones</th>
						</thead>
               			<?php $__currentLoopData = $articulos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $art): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td><?php echo e($art->idarticulo); ?></td>
							<td><?php echo e($art->nombre); ?></td>
							<td><?php echo e($art->codigo); ?></td>
							<td><?php echo e($art->categoria); ?></td>
							<td><?php echo e($art->stock); ?></td>
							<td>

								<img src="<?php echo e(asset('imagenes/articulos/'.$art->imagen)); ?>" alt="<?php echo e($art->nombre); ?>" height="50px" width="50px" class="img-thumbnail">
							</td>
							<td><?php echo e($art->estado); ?></td>

							<td>
								<a href="<?php echo e(URL::action('ArticuloController@edit',$art->idarticulo)); ?>"><button class="btn btn-info">Editar</button></a>
                         		<a href="" data-target="#modal-delete-<?php echo e($art->idarticulo); ?>" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
							</td>
						</tr>
						<?php echo $__env->make('almacen.articulo.modal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</table>
				</div>
				<?php echo e($articulos->render()); ?>

			</div>
		</div>
	</div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>