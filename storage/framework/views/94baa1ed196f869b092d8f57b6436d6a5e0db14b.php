<!-- resources/views/dashboard/dashboard.blade.php -->

<?php $__env->startSection('title', 'Edit Reservation'); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="card my-5">
        <div class="card-header">
            <h2>You're all booked for the <?php echo e($competitionInfo->name); ?> in <?php echo e($competitionInfo->location); ?>!</h2>
        </div>
        <div class="card-body">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="<?php echo e($competitionInfo->image); ?>" class="img-fluid" alt="Front of competition">
                    </div>
                    <div class="col-sm-6">
                        <h3 class="card-title">
                            <?php echo e($competitionInfo->name); ?> - <small><?php echo e($competitionInfo->location); ?></small>
                        </h3>
                        <p class="card-text"><?php echo e($competitionInfo->description); ?></p>
                        <p class="card-text"><strong>Arrival: </strong><?php echo e($reservation->arrival); ?></p>
                        <p class="card-text"><strong>Departure: </strong><?php echo e($reservation->departure); ?></p>
                        <p class="card-text"><strong>category: </strong><?php echo e($reservation->category['type']); ?></p>
                        <p class="card-text"><strong>Guests: </strong><?php echo e($reservation->num_of_guests); ?></p>
                        <p class="card-text"><strong>Price: </strong>$<?php echo e($reservation->category['price']); ?></p>
                        <p class="card-text"><strong>competition name: </strong><?php echo e($reservation->category->competition['name']); ?></p>
                        <p class="card-text"><strong>competition location: </strong><?php echo e($reservation->category->competition['location']); ?></p>
                    </div>                    
                </div>
                <div class="text-center mt-3">                    
                    <form action="/dashboard/reservations/<?php echo e($reservation->id); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?> 
                        <a href="/dashboard/reservations/<?php echo e($reservation->id); ?>/edit" class="btn btn-lg btn-success">Edit this reservation</a>
                        <button type="submit" class="btn btn-lg btn-danger">Delete</button>
                    </form>    
                </div>
            </div>            
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\02-Portable-Laravel-8.11.2-UI-Auth\Portable-Laravel-8.11.2-UI-Auth\resources\views/dashboard/reservationSingle.blade.php ENDPATH**/ ?>