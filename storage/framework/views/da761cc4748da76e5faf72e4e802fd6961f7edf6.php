<?php $__env->startSection('Contenido'); ?>
<div class="panel panel-primary" >
	<div class="panel-body">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">

				<h5 style="color: black">Agregar Nuevas Infracciones  <a href="falla/create"><button class="btn btn-success" style="color: black">Nuevo</button></a></h5>
					<h3 style="color: black">Listados de Infracciones</h3>
					<?php echo $__env->make('fallas.falla.search', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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
							<th style="color: #fff">Descripción</th>
							<th style="color: #fff">Imagen</th>
							<th style="color: #fff">Estado</th>
							<th style="color: #fff">Opciones</th>
						</thead>
               			<?php $__currentLoopData = $fallas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td><?php echo e($fa->idfalla); ?></td>
							<td><?php echo e($fa->nombre); ?></td>
							<td><?php echo e($fa->descripcion); ?></td>
							<td>

								<img src="<?php echo e(asset('imagenes/fallas/'.$fa->imagen)); ?>" alt="<?php echo e($fa->nombre); ?>" height="40px" width="70px" class="img-thumbnail">
							</td>
							<td><?php echo e($fa->estado); ?></td>

							<td>
								<a href="<?php echo e(URL::action('FallaController@edit',$fa->idfalla)); ?>"><button class="btn btn-info">Editar</button></a>
                         		<a href="" data-target="#modal-delete-<?php echo e($fa->idfalla); ?>" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
							</td>
						</tr>
						<?php echo $__env->make('fallas.falla.modal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</table>
				</div>
				<?php echo e($fallas->render()); ?>

			</div>
		</div>
	</div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>