<!-- resources/views/dashboard/reservationCreate.blade.php -->

<?php $__env->startSection('title', 'Create reservation'); ?>
<?php $__env->startSection('content'); ?>
<div class="container my-5">
    <div class="card">
        <div class="card-header">
            <h2><?php echo e($competitionInfo->name); ?> - <small class="text-muted"><?php echo e($competitionInfo->location); ?></small></h2>
        </div>
        <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text">Please enter the competition if you wish to participate, otherwise you are not guaranteed a place.</p>
            <form action="<?php echo e(route('reservations.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select class="form-control" name="category_id">
                                <?php $__currentLoopData = $competitionInfo->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($option->id); ?>"><?php echo e($option->type); ?> - $<?php echo e($option->price); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="guests">Number of guests</label>
                            <input class="form-control" name="num_of_guests" value="1">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="arrival">Arrival</label>
                            <input type="date" class="form-control" name="arrival" value="<?php echo date("Y-m-d");?>" placeholder="03/21/2020">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-lg btn-primary">Book it</button>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\02-Portable-Laravel-8.11.2-UI-Auth\Portable-Laravel-8.11.2-UI-Auth\resources\views/dashboard/reservationCreate.blade.php ENDPATH**/ ?>