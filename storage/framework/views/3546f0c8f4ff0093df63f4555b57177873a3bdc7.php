<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $__env->yieldContent('title'); ?> - Sun City Darts</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>"> 
    </head>
    <body>
        <?php echo $__env->make('partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <main><?php echo $__env->yieldContent('content'); ?></main>
    </body>
</html><?php /**PATH C:\02-Portable-Laravel-8.11.2-UI-Auth\Portable-Laravel-8.11.2-UI-Auth\resources\views/index.blade.php ENDPATH**/ ?>