<!-- resources/views/hotels.blade.php -->

<?php $__env->startSection('title', 'Hotels'); ?>
<?php $__env->startSection('content'); ?>
<div class="container my-5">
    <div class="row">
        <!-- Loop through hotels returned from controller -->
        <?php $__currentLoopData = $hotels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hotel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-sm-4">
            <div class="card mb-3">
                <div style="background-image:url('<?php echo e($hotel->image); ?>');height:300px;background-size:cover;" class="img-fluid" alt="Front of hotel"></div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo e($hotel->name); ?></h5>
                    <small class="text-muted"><?php echo e($hotel->location); ?></small>
                    <p class="card-text"><?php echo e($hotel->description); ?></p>
                    <a href="/dashboard/reservations/create/<?php echo e($hotel->id); ?>" class="btn btn-primary">Nevezés</a>
                </div>
            </div>    
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\02-Portable-Laravel-8.11.2-UI-Auth\Portable-Laravel-8.11.2-UI-Auth\resources\views/hotels.blade.php ENDPATH**/ ?>