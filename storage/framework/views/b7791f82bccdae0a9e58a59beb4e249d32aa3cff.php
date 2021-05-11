
<?php $__env->startSection('main'); ?>
    <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
    <?php endif; ?>
    <h4 align="center">Create User</h4>
    <div align="right">
        <a href="<?php echo e(route('crud.index')); ?>" class="btn btn-success">Back</a>
    </div>
    <form method="post" action="<?php echo e(route('crud.store')); ?>" enctype="multipart/form-data">
        <div class="form-group">
            <label class="col-md-4 text-right">Title</label>
            <div>
                <input type="text" name="title" class="form-control input-lg" />
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 font-weight-bold">Select Profile Image</label>
            <div class="col-md-8">
                <input type="file" name="image" />
            </div>
        </div>
        <div class="form-group text-center">
            <input type="submit" name="add" class="btn btn-primary input-lg" value="Add" />
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('parent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\02-Portable-Laravel-8.11.2-UI-Auth\Portable-Laravel-8.11.2-UI-Auth\resources\views/create.blade.php ENDPATH**/ ?>