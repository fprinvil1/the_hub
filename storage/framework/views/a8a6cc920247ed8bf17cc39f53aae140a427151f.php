<?php $__env->startSection('content'); ?>
    <h1>Posts</h1>
    <?php if(count($posts) > 0): ?>
    <div class="row">
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card p-4 mt-4 mb-4" style="width: 18rem ;margin-right:2rem">
            <img src="/storage/cover_images/<?php echo e($post->cover_image); ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><a href="/posts/<?php echo e($post->id); ?>"><?php echo e($post->title); ?></a></h5>
                    <small>Written on: <?php echo e($post->created_at); ?><br>By: <?php echo e($post->user->name); ?></small>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
    </div>
    <?php echo e($posts->links()); ?>

    <?php else: ?>
        <p>No Posts Found</p>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\virtual_advisors\resources\views/posts/index.blade.php ENDPATH**/ ?>