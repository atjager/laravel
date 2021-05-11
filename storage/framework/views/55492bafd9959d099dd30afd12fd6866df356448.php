<!-- resources/views/dashboard/dashboard.blade.php -->

<?php $__env->startSection('title', 'Dashboard'); ?>
<?php $__env->startSection('content'); ?>
<div class="container text-center my-5">
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <h4 class="card-title">Management of previous entries</h4>
                <p class="card-text">If you won't go, please delete it in time.</p>
                <a href="/dashboard/reservations" class="btn btn-primary">Entries</a>
            </div>
            </div>
        </div>
   
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\02-Portable-Laravel-8.11.2-UI-Auth\Portable-Laravel-8.11.2-UI-Auth\resources\views/dashboard/dashboard.blade.php ENDPATH**/ ?>