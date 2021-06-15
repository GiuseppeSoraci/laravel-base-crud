<?php $__env->startSection('content'); ?>
    <div>
        <h1 class="mb-5">OUR COMICS</h1>
        <?php if(session('deleted')): ?>
            <div class="alert alert-success">
                <strong><?php echo e(session('deleted')); ?></strong>
                succesfully deleted.
            </div>
        <?php endif; ?>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Price</>
                    <th colspan="3">Actions</>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $comics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($comic->id); ?></td>
                        <td><?php echo e($comic->title); ?></td>
                        <td><?php echo e($comic->price); ?></td>
                        <td>
                            <a class="btn btn-success" href="<?php echo e(route('comics.show', $comic->id)); ?>">
                                SHOW</a>
                        </td>
                        <td>
                            <a class="btn btn-primary" href="<?php echo e(route('comics.edit', $comic->id)); ?>">
                                EDIT
                            </a>
                        </td>
                        <td>
                            <form action="<?php echo e(route('comics.destroy', $comic->id)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>

                                <input type="submit" class="btn btn-danger" value="DELETE">
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\giuse\Desktop\laravel-base-crud\resources\views/comics/index.blade.php ENDPATH**/ ?>