<!-- resources/views/dashboard/reservationEdit.blade.php -->

<?php $__env->startSection('title', 'Edit Reservation'); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="card my-5">
        <div class="card-header">
            <h2><?php echo e($competitionInfo->name); ?> - <small class="text-muted"><?php echo e($competitionInfo->location); ?></small></h2>
        </div> 
        <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text">Book your stay now at the most magnificent resort in the world!</p>
            <form action="<?php echo e(route('reservations.update', $reservation->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="category">category Type</label>
                            <select class="form-control" name="category_id" value="<?php echo e(old('category_id', $reservation->category_id)); ?>">
                                <?php $__currentLoopData = $competitionInfo->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($option->id); ?>"><?php echo e($option->type); ?> - $<?php echo e($option->price); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="guests">Number of guests</label>
                            <input class="form-control" name="num_of_guests" value="<?php echo e(old('num_of_guests', $reservation->num_of_guests)); ?>">
                        </div>
                    </div>
                    <!-- <div class="col-sm-6">
                        <div class="form-group">
                            <label for="arrival">Arrival</label>
                            <input type="date" class="form-control" name="arrival" placeholder="03/21/2020" value="<?php echo e(old('arrival', $reservation->arrival)); ?>">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="departure">Departure</label>
                            <input type="date" class="form-control" name="departure" placeholder="03/23/2020" value="<?php echo e(old('departure', $reservation->departure)); ?>">
                        </div>
                    </div> -->
                </div>
                <button type="submit" class="btn btn-lg btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <form action="<?php echo e(route('reservations.destroy', $reservation->id)); ?>" method="POST">
        <?php echo method_field('DELETE'); ?>
        <?php echo csrf_field(); ?>
        <p class="text-right">
            <button type="submit" class="btn btn-sm btn-danger">Delete reservation</button>
        </p>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\02-Portable-Laravel-8.11.2-UI-Auth\Portable-Laravel-8.11.2-UI-Auth\resources\views/dashboard/reservationEdit.blade.php ENDPATH**/ ?>