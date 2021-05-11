<!-- resources/views/Competitions.blade.php -->

<?php $__env->startSection('title', 'Competitions'); ?>
<?php $__env->startSection('content'); ?>
<div class="container my-5">
    <div class="row">
        <!-- Loop through Competitions returned from controller -->
        <?php $__currentLoopData = $comps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-sm-4">
            <div class="card mb-3">
                <div style="background-image:url('<?php echo e($comp->image); ?>');height:300px;background-size:cover;" class="img-fluid" alt="Front of competition"></div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo e($comp->name); ?></h5>
                    <small class="text-muted"><?php echo e($comp->location); ?></small>
                    <p class="card-text"><?php echo e($comp->description); ?></p>
                    <a href="/dashboard/reservations/create/<?php echo e($comp->id); ?>" class="btn btn-primary">Entry</a>
                </div>
            </div>    
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\02-Portable-Laravel-8.11.2-UI-Auth\Portable-Laravel-8.11.2-UI-Auth\resources\views/comps.blade.php ENDPATH**/ ?>