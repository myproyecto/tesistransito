<?php $__env->startSection('Contenido'); ?>
<div class="panel panel-primary">
    <div class="panel-body" style="background-color:    #212f3d ">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <h3 style="color: #fff">Nuevo Conductor</h3>
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

            <?php echo Form::open(array('url'=>'pagos/conductor','method'=>'POST','autocomplete'=>'off')); ?>

            <?php echo e(Form::token()); ?>

<div class="panel panel-primary">
    <div class="panel-body" style="background-color:  #e5e7e9">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" required value="<?php echo e(old('nombre')); ?>" class="form-control" placeholder="Nombre...">
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="form-group">
                    <label for="direccion">Direccion</label>
                    <input type="text" name="direccion" value="<?php echo e(old('direccion')); ?>" class="form-control" placeholder="Direccion...">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="form-group">
                    <label >Tipo Doc.</label>
                    <select name="tipo_documento" class="form-control">

                        <option value="Reg_conducir">Reg. Conducir</option>
                        <option value="CI">CI</option>
                        <option value="Id_policial">ID. Policial</option>
                    
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="form-group">
                    <label for="num_documento">Numero Doc.</label>
                    <input type="text" name="num_documento" value="<?php echo e(old('num_documento')); ?>" class="form-control" placeholder="Numero de Doc...">               
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label for="telefono">Telefono</label>
                    <input type="text" name="telefono" value="<?php echo e(old('telefono')); ?>" class="form-control" placeholder="Telefono...">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" value="<?php echo e(old('email')); ?>" class="form-control" placeholder="Email...">
                </div>
            </div>
        </div>
        

        <div class=" btn btn-block">
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