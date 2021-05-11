
<?php $__env->startSection('title', 'Reservations'); ?>
<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <h2>Your entries</h2>
    <table class="table mt-3">
        <thead>
            <tr>
            <th scope="col">Tournament</th>
            <th scope="col">Date</th>
            <th scope="col">Conduct</th>
            <th scope="col">Num of entries</th>
            <th scope="col">Fee</th>
            <th scope="col">Modify</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $reservations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reservation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($reservation->category->competition['name']); ?></td>
                <td><?php echo e($reservation->arrival); ?></td>
                <td><?php echo e($reservation->category['type']); ?></td>
                <td><?php echo e($reservation->num_of_guests); ?></td>
                <td>$<?php echo e($reservation->category['price']); ?></td>
                <td><form action="/dashboard/reservations/<?php echo e($reservation->id); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?> 
                    <a href="/dashboard/reservations/<?php echo e($reservation->id); ?>" class="btn btn-sm btn-primary">Show</a>
                    <a href="/dashboard/reservations/<?php echo e($reservation->id); ?>/edit" class="btn btn-sm btn-success">Edit</a>
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>            
        </tbody>
    </table>
    <?php if(!empty(Session::get('success'))): ?>
        <div class="alert alert-success"> <?php echo e(Session::get('success')); ?></div>
    <?php endif; ?>
    <?php if(!empty(Session::get('error'))): ?>
        <div class="alert alert-danger"> <?php echo e(Session::get('error')); ?></div>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\02-Portable-Laravel-8.11.2-UI-Auth\Portable-Laravel-8.11.2-UI-Auth\resources\views/dashboard/reservations.blade.php ENDPATH**/ ?>