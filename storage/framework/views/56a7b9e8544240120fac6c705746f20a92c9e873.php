<?php $__env->startSection('content'); ?>
    <div class="container text-center">
        <h1>404</h1>

        <p class="mb-5">
            Ops... something went wrong! The resource you are looking for is not on this site.
        </p>

        <a href="<?php echo e(route('home')); ?>">Back to home</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\giuse\Desktop\laravel-base-crud\resources\views/errors/404.blade.php ENDPATH**/ ?>