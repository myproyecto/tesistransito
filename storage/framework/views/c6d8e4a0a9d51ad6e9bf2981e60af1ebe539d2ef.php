<?php $__env->startSection('Contenido'); ?>
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nueva Compra</h3>
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

			<?php echo Form::open(array('url'=>'compras/ingreso','method'=>'POST','autocomplete'=>'off')); ?>

            <?php echo e(Form::token()); ?>

    <div class="row">
    	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
    		<div class="form-group" >
    			<label for="proveedor">Seleccionar Proveedor</label>
                <select name="idproveedor" id="idproveedor" class="form-control selectpicker" data-live-search="true">            
                    <?php $__currentLoopData = $personas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $persona): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($persona->idpersona); ?>"><?php echo e($persona->nombre); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
    		</div>
    	</div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="form-group">
                <label >Seleccionar Comprobante</label>
                <select name="tipo_comprobante" class="form-control">
                    <option value="Boleta">Boleta</option>
                    <option value="Factura">Factura</option>
                    <option value="Ticket">Ticket</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
    	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="form-group">
                <label for="serie_comprobante">Serie Comprobante</label>
                <input type="text" name="serie_comprobante" value="<?php echo e(old('serie_comprobante')); ?>" class="form-control" placeholder="Serie de Comprobante...">
            </div>
        </div>
    	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
    		<div class="form-group">
    			<label for="num_comprobante">Numero Comprobante</label>
    			<input type="text" name="num_comprobante" value="<?php echo e(old('num_comprobante')); ?>" class="form-control" placeholder="Numero de Comprobante...">   			
    		</div>
    	</div>
    </div>

    <div class="row">
    	<div class="panel panel-primary">
            <div class="panel-body" style="background-color:  #B3B6B7">
                <div class="col-sm-4 col-md-4 col-lg-4 col-xs-12">
                    <div class="form-group" style="color: black">
                        <label>Seleccionar Articulo</label>
                        <select name="pidarticulo" class="form-control selectpicker" id="pidarticulo"  data-live-search="true"> 
                            <?php $__currentLoopData = $articulos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $articulo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($articulo->idarticulo); ?>"><?php echo e($articulo->articulo); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-2 col-lg-2 col-md-2 col-xs-12">
                    <div class="form-group">
                        <label for="cantidad" style="color: black">Cantidad</label>
                        <input type="number" name="pcantidad" id="pcantidad" class="form-control" placeholder="Cantidad...">
                     </div>
                </div>
                <div class="col-sm-2 col-lg-2 col-md-2 col-xs-12">
                    <div class="form-group" style="color: black">
                        <label for="precio_compra">Precio Compra</label>
                        <input type="number" name="pprecio_compra" id="pprecio_compra" class="form-control" placeholder="Precio compra...">
                    </div>
                </div>
                <div class="col-sm-2 col-lg-2 col-md-2 col-xs-12">
                    <div class="form-group" style="color: black">
                        <label for="precio_venta">Precio Venta</label>
                        <input type="number" name="pprecio_venta" id="pprecio_venta" class="form-control" placeholder="Precio Venta...">
                    </div>
                </div>
                <div class="col-sm-2 col-lg-2 col-md-2 col-xs-12">
                    <div class="form-group">
                        <button type="button" id="bt_add" class="btn btn-primary">Agregar</button>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-12 col-md-12 col-xs-12">
                    <div class="table-responsive">
                        <table id="detalles" class="table table-striped table-bordered table-condensed table-hover">

                            <thead style="background-color: teal">
                                <th style="color: #fff">Opciones</th>
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
                                <th></th>
                                <th style="color: black"><h3>Total ></h3> </th>
                                <th style="color: black"><h3 id="total">GS/. 0.00</h3></th>
                            </tfoot>
                            <tbody>
                            
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        
            <div class="col-sm-6 col-lg-6 col-md-6 col-xs-12" id="guardar">
                <div class="form-group">
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token ()); ?>"></input>
                    <button class="btn btn-primary" type="submit">Guardar</button>
                    <button class="btn btn-danger" type="reset">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
			<?php echo Form::close(); ?>	
<?php $__env->startPush('scripts'); ?>	 
<script>
    $(document).ready(function(){
        $('#bt_add').click(function(){
            agregar();
        });

    });
    var cont=0;
    total=0;
    subtotal=[];
    $("#guardar").hide();

    function agregar ()
    {
        idarticulo=$("#pidarticulo").val();
        articulo=$("#pidarticulo option:selected").text();
        cantidad=$("#pcantidad").val();
        precio_compra=$("#pprecio_compra") .val();
        precio_venta=$("#pprecio_venta") .val();

        if (idarticulo!="" && cantidad!="" && cantidad>0 && precio_compra!="" && precio_venta!="")
        {

            subtotal[cont]=(cantidad*precio_compra);
            total=total+subtotal[cont];

            var fila='<tr class="select" id="fila'+cont+'"><td><button type="button" class="btn btn-warning" onclick="eliminar ('+cont+');">X</button></td><td><input type="hidden" name="idarticulo[]" value="'+idarticulo+'">'+articulo+'</td><td><input type="number" name="cantidad[]" value="'+cantidad+'"></td><td><input type="number" name="precio_compra[]" value="'+precio_compra+'"></td><td><input type="number" name="precio_venta[]" value="'+precio_venta+'"></td><td>'+subtotal[cont]+'</td></tr>';  
            cont++;

            limpiar();
            $("#total").html("GS/. " + total);
            evaluar();
            $('#detalles').append(fila);
        }
        else
        {
            alert("Error al agregar. Verifica que los campos no esten vacios");

        }
    }
    function limpiar (){
        $("#pcantidad").val("");
        $("#pprecio_compra").val("");
        $("#pprecio_venta").val("");
    }

    function evaluar()
    {
        if (total>0)
        {
            $("#guardar").show();
        }
        else
        {
            $("#guardar").hide();
        }
    }
    function eliminar (index)
    {
        total=total-subtotal[index];
        $("#total") .html("GS/. " + total);
        $("#fila" + index).remove();
        evaluar();
    }

</script>
<?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>