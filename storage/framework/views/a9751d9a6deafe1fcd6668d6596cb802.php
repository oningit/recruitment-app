<?php $__env->startSection('content'); ?>

<div class="row justify-content-center">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Job Information
                </div>
            </div>
            <div class="card-body">

                    <div class="row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>Company Name:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            <?php echo e($product->name); ?>

                        </div>
                    </div>

                    <div class="row">
                        <label for="job" class="col-md-4 col-form-label text-md-end text-start"><strong>Job Title:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            <?php echo e($product->job); ?>

                        </div>
                    </div>

                    <div class="row">
                        <label for="location" class="col-md-4 col-form-label text-md-end text-start"><strong>Location:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            <?php echo e($product->location); ?>

                        </div>
                    </div>

                    <div class="row">
                        <label for="address" class="col-md-4 col-form-label text-md-end text-start"><strong>Address:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            <?php echo e($product->address); ?>

                        </div>
                    </div>

                    <div class="row">
                        <label for="email" class="col-md-4 col-form-label text-md-end text-start"><strong>Email:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            <?php echo e($product->email); ?>

                        </div>
                    </div>

                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Description:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            <?php echo nl2br(e($product->description)); ?>

                        </div>
                    </div>
        
            </div>
        </div>
    </div>    
</div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-10-roles\resources\views/search-show.blade.php ENDPATH**/ ?>