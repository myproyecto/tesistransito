<?php $__env->startSection('Contenido'); ?>
	 
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="form-group">
                <label for="proveedor">Proveedor</label>
                <p><?php echo e($ingreso->nombre); ?></p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="form-group">
                <label >Tipo Comprobante</label>
                <p><?php echo e($ingreso->tipo_comprobante); ?></p>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="form-group">
                <label for="serie_comprobante">Serie Comprobante</label>
                <p><?php echo e($ingreso->serie_comprobante); ?></p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="form-group">
                <label for="num_comprobante">Numero Comprobante</label>
                <p><?php echo e($ingreso->num_comprobante); ?></p>            
            </div>
        </div>

        <div class="row">
            <div class="panel panel-primary">
                <div class="body">
                    <div class="col-sm-12 col-lg-12 col-md-12 col-xs-12">
                        <div class="table-responsive">

                            <table id="detalles" class="table table-striped table-bordered table-condensed table-hover">


                                <thead style="background-color: teal">
                                    <th style="color: #fff">Articulo</th>
                                    <th style="color: #fff">Cantidad</th>
                                    <th style="color: #fff">Precio Compra</th>
                                    <th style="color: #fff">Precio Venta</th>
                                    <th style="color: #fff">Subtotal</th>
                                </thead>
                                <tfoot>
                                    
                                    <th></th>
                                    <th></th>

                                    <th></th>
                                    <th><h3>Total ></h3></th>
                                    <th><h3 id="total"><?php echo e($ingreso->total); ?></h3></th>
                                </tfoot>
                                <tbody>
                                    <?php $__currentLoopData = $detalles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $det): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($det->articulo); ?></td>
                                        <td><?php echo e($det->cantidad); ?></td>
                                        <td><?php echo e($det->precio_compra); ?></td>
                                        <td><?php echo e($det->precio_venta); ?></td>
                                        <td><?php echo e($det->cantidad*$det->precio_compra); ?></td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>       
    </div>	

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>