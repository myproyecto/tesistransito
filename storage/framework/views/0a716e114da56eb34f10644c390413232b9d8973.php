<?php $__env->startSection('Contenido'); ?>
<div class="panel panel-primary">
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <h3>Editar Policia: <?php echo e($persona->nombre); ?></h3>
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
        
    </div>
</div>
	

			<?php echo Form::model($persona,['method'=>'PATCH','route'=>['policia.update',$persona->idpersona]]); ?>

            <?php echo e(Form::token()); ?>

<div class="panel panel-primary">
    <div class="panel-body" style="background-color:  #e5e7e9">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" required value="<?php echo e($persona->nombre); ?>" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="form-group">
                    <label for="direccion">Direccion</label>
                    <input type="text" name="direccion" value="<?php echo e($persona->direccion); ?>" class="form-control">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="form-group">
                    <label >Tipo Doc.</label>
                    <select name="tipo_documento" class="form-control">
                    <?php if($persona->tipo_doc=='Reg_conducir'): ?>
                        <option value="CI">CI</option>
                        <option value="Reg_conducir" selected>Reg. Conducir</option>
                        <option value="Id_policial">ID. Policial</option>
                    <?php elseif($persona->tipo_documento=='CI'): ?>
                        <option value="CI"selected>CI</option>
                        <option value="Reg_conducir">Reg. Conducir</option>
                        <option value="Id_policial">ID. Policial</option>
                    <?php else: ?>
                        <option value="CI">CI</option>
                        <option value="Reg_conducir">Reg. Conducir</option>
                        <option value="Id_policial" selected>ID. Policial</option>
                    <?php endif; ?>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="form-group">
                    <label for="num_doc">Numero Doc.</label>
                    <input type="text" name="num_documento" value="<?php echo e($persona->num_documento); ?>" class="form-control">             
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="form-group">
                    <label for="telefono">Telefono</label>
                    <input type="text" name="telefono" value="<?php echo e($persona->telefono); ?>" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" value="<?php echo e($persona->email); ?>" class="form-control">
                </div>
            </div>
        </div>
        
    </div>
</div>
        <div class="btn btn-block">
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
        </div>    

			<?php echo Form::close(); ?>		
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>