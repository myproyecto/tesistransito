 
<?php $__env->startSection('Contenido'); ?>
<div class="panel panel-primary">
	<div class="panel-body">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">

				<h5 style="color: black">Agregar Nuevo Conductor  <a href="conductor/create"><button class="btn btn-success" style="color: black">Nuevo</button></a></h5>
				<h3 style="color: black">Listados de Conductores</h3>
				<?php echo $__env->make('pagos.conductor.search', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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
							<th style="color: #fff">Nombre Apellidos</th>
							<th style="color: #fff">Tipo Doc.</th>
							<th style="color: #fff">Num. Doc.</th>
							<th style="color: #fff">Direccion</th>
							<th style="color: #fff">Telefono</th>
							<th style="color: #fff">Email</th>
							<th style="color: #fff">Opciones</th> 
						</thead>
               			<?php $__currentLoopData = $personas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $per): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td><?php echo e($per->idpersona); ?></td>
							<td><?php echo e($per->nombre); ?></td>
							<td><?php echo e($per->tipo_documento); ?></td>
							<td><?php echo e($per->num_documento); ?></td>
							<td><?php echo e($per->direccion); ?></td>
							<td><?php echo e($per->telefono); ?></td>
							<td><?php echo e($per->email); ?></td>
							<td>
								<a href="<?php echo e(URL::action('ConductorController@edit',$per->idpersona)); ?>"><button class="btn btn-info">Editar</button></a>
                         		<a href="" data-target="#modal-delete-<?php echo e($per->idpersona); ?>" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
							</td>
						</tr>
						<?php echo $__env->make('pagos.conductor.modal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</table>
				</div>
				<?php echo e($personas->render()); ?>

			</div>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>