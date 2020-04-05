

<?php $__env->startSection('content'); ?>
    <div class="jumbotron text-center">
    <h1><?php echo e($title); ?></h1>
    <p>Post. Like. Share. A forum that fosters creativity and knowledge transfer.</p>
    <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/app/current/virtual_advisors/resources/views/pages/index.blade.php ENDPATH**/ ?>