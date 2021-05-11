
<?php $__env->startSection('content'); ?>
<!-- <h1>Style-1:</h1>
<div align="right">
    <a href="<?php echo e(route('crud.create')); ?>" class="btn btn-primary">Add +</a>
</div>
<div class="row">
    <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-6 col-lg-4 col-xl-3">
          <a href="<?php echo e(route('crud.show', $row->id)); ?>">
              <img src="<?php echo e(URL::to('/')); ?>/images/<?php echo e($row->image); ?>"  style="width:100%" >
          </a>
          <div class="caption">
            <p><strong>Title: </strong><?php echo e($row->title); ?></p>
          </div>
          <form action="<?php echo e(URL::route('crud.destroy',$row->id)); ?>" method="POST">
            <a href="<?php echo e(route('crud.show', $row->id)); ?>" class="btn btn-success">Show </a>
            <a href="<?php echo e(route('crud.edit', $row->id)); ?>" class="btn btn-info">Edit </a>          
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
            <button class="btn btn-danger">Delete </button>
          </form>                
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php echo e($images->links('pagination::bootstrap-4')); ?> -->

<h1>Photo Gallery</h1>
<div align="right">
    <a href="<?php echo e(route('crud.create')); ?>" class="btn btn-primary">Add +</a>
</div>
<table class="table table-bordered table-striped">
    <tr>
        <th width="10%">Image</th>
        <th width="30%">Title</th>
        <th width="20%">Action</th>
    </tr>
    <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td ><a href="<?php echo e(route('crud.show', $row->id)); ?>"><img src="<?php echo e(URL::to('/')); ?>/images/<?php echo e($row->image); ?>"  width="100" /></a></td>
        <td><?php echo e($row->title); ?></td>
        <td>
        <form action="<?php echo e(URL::route('crud.destroy',$row->id)); ?>" method="POST">
          <a href="<?php echo e(route('crud.show', $row->id)); ?>" class="btn btn-success">Show </a>
          <a href="<?php echo e(route('crud.edit', $row->id)); ?>" class="btn btn-info">Edit </a>
          <input type="hidden" name="_method" value="DELETE">
          <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
          <button class="btn btn-danger">Delete </button>
        </form>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php echo e($images->links('pagination::bootstrap-4')); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\02-Portable-Laravel-8.11.2-UI-Auth\Portable-Laravel-8.11.2-UI-Auth\resources\views/crudview.blade.php ENDPATH**/ ?>