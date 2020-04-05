<?php $__env->startSection('content'); ?>
    <a href="/posts" class="btn  btn-outline-dark">Go Back</a>
    <br><br>
    <h1><?php echo e($post->title); ?></h1>
    <img src="/storage/cover_images/<?php echo e($post->cover_image); ?>" style="width:50%; height:50%" alt="...">
    <br><br>
    <div>
        <?php echo $post->body; ?>

    </div>
    <hr>
        <small>Written on: <?php echo e($post->created_at); ?><br>By: <?php echo e($post->user->name); ?></small>

    <?php if(!Auth::guest()): ?>
        <?php if(Auth::user()->id == $post->user_id): ?>
            <hr>
            <a href="/posts/<?php echo e($post->id); ?>/edit" class="btn btn-outline-dark">Edit</a>

            <?php echo Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'class' => 'float-right']); ?>

                <?php echo e(Form::hidden('_method','DELETE')); ?>

                <?php echo e(Form::submit('Delete',['class' => 'btn btn-danger'])); ?>

            <?php echo Form::close(); ?>

        <?php endif; ?>
    <?php endif; ?>

    <div class="comments">
        <ul class="list-group">
            <?php if(count($post->comments) > 0): ?>
                <hr>
                <?php $__currentLoopData = $post->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="list-group-item">
                        <strong>
                            <?php echo e($comment->created_at->diffForHumans()); ?>: &nbsp;
                        </strong>
                        <?php echo $comment->body; ?>

                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </ul>
    </div>
    <hr>
    <?php if(!Auth::guest()): ?>
        <div>
            <div class="card-block">
                <form method="POST" action="/posts/<?php echo e($post->id); ?>/comments">
                    <?php echo e(csrf_field()); ?>

                    
                    <div class="form-group">
                        <textarea name="body" placeholder="Your comment here..." class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add Comment</button>
                    </div>
                </form>
            </div>
        </div>
    <?php else: ?>

    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\virtual_advisors\resources\views/posts/show.blade.php ENDPATH**/ ?>