
<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="container-fluid">
            <div class="">
                <div col-md-12>
                    <form action="<?php echo e(route('users.update', $user->id)); ?>" method="POST" class="form-horizontal">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Usuario</h4>
                                <p class="card-category">Editar datos</p>
                            </div>
                            <div clas="card-body">
                                <div class="row">
                                    <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" name="name" value="<?php echo e(($user->name)); ?>" autofocus>
                                    </div>
                                    </div>
                                    <div class="row">
                                    <label for="username" class="col-sm-2 col-form-label">Nombre de usuario</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="username" value="<?php echo e(($user->username)); ?>" autofocus>
                                    </div>
                                    </div>        
                                    <div class="row">
                                    <label for="email" class="col-sm-2 col-form-label">correo</label>
                                    <div class="col-sm-7">
                                        <input type="email" class="form-control" name="email" value="<?php echo e(($user->email)); ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="password" class="col-sm-2 col-form-label">contraseña</label>
                                    <div class="col-sm-7">
                                        <input type="password" class="form-control" name="password" placeholder="ingresa la contraseña solo para modificar" autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary">Actualizar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main',['activePage' => 'users', 'titlePage' => ('Editar usuario')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\proyectou5\resources\views/users/edit.blade.php ENDPATH**/ ?>