<?php $__env->startSection('Contenido'); ?>
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">

		<h5>Agregar Nuevas Categorias  <a href="categoria/create"><button class="btn btn-success">Nuevo</button></a></h5>
		<h3>Listados de Categorias</h3>
		<?php echo $__env->make('almacen.categoria.search', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead style="background-color: teal">
					<th style="color: #fff">Id</th>
					<th style="color: #fff">Nombre</th>
					<th style="color: #fff">Descripción</th>
					<th style="color: #fff">Opciones</th>
				</thead>
               <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td><?php echo e($cat->idcategoria); ?></td>
					<td><?php echo e($cat->nombre); ?></td>
					<td><?php echo e($cat->descripcion); ?></td>
					<td>
						<a href="<?php echo e(URL::action('CategoriaController@edit',$cat->idcategoria)); ?>"><button class="btn btn-info">Editar</button></a>
                         <a href="" data-target="#modal-delete-<?php echo e($cat->idcategoria); ?>" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
					</td>
				</tr>
				<?php echo $__env->make('almacen.categoria.modal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</table>
		</div>
		<?php echo e($categorias->render()); ?>

	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>