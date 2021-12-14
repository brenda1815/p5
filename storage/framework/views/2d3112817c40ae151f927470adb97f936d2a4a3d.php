
<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="container-fluid">
            <div class="">
                <div col-md-12>
                    <form action="" method="POST" class="form-horizontal">
                        <?php echo csrf_field(); ?>
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Articulos</h4>
                                <p class="card-category">Ingresar datos del articulo</p>
                            </div>
                            <div clas="card-body">
                                <div class="row">
                                    <label for="name" class="col-sm-2 col-form-label">Nombre del articulo</label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" name="name" placeholder="ingresa nombre del articulo" autofocus>
                                    </div>
                                    </div>
                                    
                                <div class="row">
                                    <label for="precio" class="col-sm-2 col-form-label">precio</label>
                                    <div class="col-sm-7">
                                        <input type="number" class="form-control" name="prescio" placeholder="ingresa el precio del articulo" autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main',['activePage' => 'articulos', 'titlePage' => ('Nuevo articulo')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\proyectou5\resources\views/articulos/create.blade.php ENDPATH**/ ?>