
<?php $__env->startSection('main'); ?>
    <h4 align="center">View User</h4>
    <div class="jumbotron text-center">
        <div align="right">
            <a href="<?php echo e(route('crud.index')); ?>" class="btn btn-success">Back</a>
        </div>
        <br />
        <img src="<?php echo e(URL::to('/')); ?>/images/<?php echo e($data->image); ?>" class="img-thumbnail" />
        <h3>Title - <?php echo e($data->title); ?> </h3>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('parent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\02-Portable-Laravel-8.11.2-UI-Auth\Portable-Laravel-8.11.2-UI-Auth\resources\views/view.blade.php ENDPATH**/ ?>