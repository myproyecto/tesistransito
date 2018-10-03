<?php $__env->startSection('Contenido'); ?>
<div class="panel panel-primary">
	<div class="panel-body">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
				<h5 style="color: black">Agregar Nueva Multa  <a href="multa/create"><button class="btn btn-success">Nuevo</button></a></h5>
					<h3 style="color: black">Listas de Multas</h3>
					<?php echo $__env->make('fallas.falla.search', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead style="background-color: teal">
					<th style="color: #fff">Fecha/Hora</th>
					<th style="color: #fff">Policia</th>
					<th style="color: #fff">Conductor</th>
					<th style="color: #fff">Comprobante</th>
					<th style="color: #fff">I.V.A.</th>
					<th style="color: #fff">Total</th>
					<th style="color: #fff">Estado</th>
					<th style="color: #fff">Opciones</th>
				</thead>
               <?php $__currentLoopData = $multas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mul): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td><?php echo e($mul->fecha_hora); ?></td>
					<td><?php echo e($mul->nombre); ?></td>
					<td><?php echo e($mul->nombre); ?></td>
					<td><?php echo e($mul->tipo_comprobante.'-'.$mul->num_comprobante); ?></td>
					<td><?php echo e($mul->impuesto); ?></td>
					<td><?php echo e($mul->total); ?></td>
					<td><?php echo e($mul->estado); ?></td>
					<td>
						<a href="<?php echo e(URL::action('MultasController@show',$mul->idmulta)); ?>"><button class="btn btn-primary">Detalle</button></a>
                         <a href="" data-target="#modal-delete-<?php echo e($mul->idmulta); ?>" data-toggle="modal"><button class="btn btn-danger">Anular</button></a>
					</td>
				</tr>
				<?php echo $__env->make('fallas.falla.modal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</table>
		</div>
		<?php echo e($multas->render()); ?>

	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>