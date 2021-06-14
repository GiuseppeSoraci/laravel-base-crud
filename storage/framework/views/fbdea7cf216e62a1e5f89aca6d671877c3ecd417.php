<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1><?php echo e($comics->title); ?></h1>
        <div class="mb-5">
            <span class="badge bg-primary"><?php echo e($comics->series); ?></span>
            <div>Type: <?php echo e($comics->type); ?></div>
            <div>Sale Date: <?php echo e($comics->sale_date); ?></div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <img class="img-fluid" src="<?php echo e($comics->thumb); ?>" alt="<?php echo e($comics->title); ?>">
            </div>

            <div class="col-md-6">
                <?php echo $comics->description; ?>

            </div>
        </div>

        <a href="<?php echo e(route('comics.index')); ?>">Back to archive</a>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\giuse\Desktop\laravel-base-crud\resources\views/comics/show.blade.php ENDPATH**/ ?>