<?php $__env->startSection('Contenido'); ?>
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Infracciones: <?php echo e($falla->nombre); ?></h3>
			<?php if(count($errors)>0): ?>
			<div class="alert alert-danger">
				<ul>
				<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<li><?php echo e($error); ?></li>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</ul>
			</div>
			<?php endif; ?>
		</div>
	</div>


			<?php echo Form::model($falla,['method'=>'PATCH','route'=>['falla.update',$falla->idfalla],'files'=>'true']); ?>

            <?php echo e(Form::token()); ?>

<div class="panel panel-primary">
    <div class="panel-body" style="background-color:  #e5e7e9">
        <div class="row">
    	    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
    		    <div class="form-group">

    			    <label for="nombre">Nombre</label>
    			    <input type="text" name="nombre" required value="<?php echo e($falla->nombre); ?>" class="form-control">
    		    </div>
    	    </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <input type="text" name="descripcion" value="<?php echo e($falla->descripcion); ?>" class="form-control" placeholder="Descripcion...">
                </div>
            </div>
    	</div>

        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label for="imagen">Imagen</label>
                    <input type="file" name="imagen" class="form-control">
                    <?php if(($falla->imagen)!=""): ?>
                        <img src="<?php echo e(asset('imagenes/fallas/'.$falla->imagen)); ?>" height="100px" width="100px">
                    <?php endif; ?>
                </div>
            </div>

        </div>
        
        <div class="row">
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
        </div>
    </div>
</div>
            

			<?php echo Form::close(); ?>		
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>