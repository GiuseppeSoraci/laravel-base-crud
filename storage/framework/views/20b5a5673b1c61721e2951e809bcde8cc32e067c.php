<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1 class="mb-5">CREATE NEW COMIC</h1>

        <div class="row">
            <div class="col-md-8 offset md-2">
                <form action="<?php echo e(route('comics.store')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('POST'); ?>

                    <div class="mb-3">
                        <label for="title" class="control-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>

                    <div class="mb-3">
                        <label for="series" class="control-label">Series</label>
                        <input type="text" class="form-control" id="series" name="series">
                    </div>

                    <div class="mb-3">
                        <label for="sale_date" class="control-label">Sale Date</label>
                        <input type="text" class="form-control" id="sale_date" name="sale_date">
                    </div>

                    <div class="mb-3">
                        <label for="price" class="control-label">Price</label>
                        <input type="price" class="form-control" id="price" name="price">
                    </div>

                    <div class="mb-3">
                        <label for="type" class="control-label">Type</label>
                        <select class="form-control" id="type" name="type">
                            <option value="Comic Book">Comic Book</option>
                            <option value="Graphic Novel">Graphic Novel</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="control-label">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="6"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="thumb" class="control-label">Image</label>
                        <input type="text" class="form-control" id="thumb" name="thumb">
                    </div>

                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\giuse\Desktop\laravel-base-crud\resources\views/comics/create.blade.php ENDPATH**/ ?>