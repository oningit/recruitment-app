<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><?php echo e(__('Dashboard')); ?></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <?php echo e(__('You are logged in!')); ?>


                    <p>This is your application dashboard.</p>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['create-role', 'edit-role', 'delete-role'])): ?>
                        <a class="btn btn-primary" href="<?php echo e(route('roles.index')); ?>">
                            <i class="bi bi-person-fill-gear"></i> Manage Roles</a>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['create-user', 'edit-user', 'delete-user'])): ?>
                        <a class="btn btn-success" href="<?php echo e(route('users.index')); ?>">
                            <i class="bi bi-people"></i> Manage Users</a>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['create-product', 'edit-product', 'delete-product'])): ?>
                        <a class="btn btn-warning" href="<?php echo e(route('products.index')); ?>">
                            <i class="bi bi-bag"></i> Manage Products</a>
                    <?php endif; ?>
                    <p>&nbsp;</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-10-roles\resources\views/home.blade.php ENDPATH**/ ?>