<?php $__env->startSection('content'); ?>
  <div class="jumbotron">
    <div class="container">
        <h1 class="display-3"><?php echo e($title); ?></h1>
        <p>Post. Like. Share. A forum that fosters creativity and knowledge transfer.</p>
        <p><a class="btn btn-primary btn-lg" href="/about" role="button">Learn more &raquo;</a></p>
    </div>
  </div>
  
  <div class="row">
    <div class="col-sm-8 blog-main">
      <?php if(count($posts) > 0 ): ?>
        <h2>Trending Posts</h2><br>
        <div class="container">
          <div class="row">
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="col-md-4">
                <h2><?php echo e($post->title); ?></h2>
                <p><?php echo $post->body; ?> </p>
                <p><a class="btn btn-secondary" href="/posts/<?php echo e($post->id); ?>" role="button">View details &raquo;</a></p>
              </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>
      <?php endif; ?>
    </div>
    <?php echo $__env->make('inc.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\virtual_advisors\resources\views/pages/index.blade.php ENDPATH**/ ?>