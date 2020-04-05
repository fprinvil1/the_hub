<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
  <div class="container">
      <?php if(!Auth::guest()): ?>
        <a class="navbar-brand" href="<?php echo e(url('/home')); ?>">
            <?php echo e(config('app.name', 'Virtual Advisors')); ?>

        </a>
      <?php else: ?>
        <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
          <?php echo e(config('app.name', 'Virtual Advisors')); ?>

        </a>
      <?php endif; ?>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto">

          </ul>
          <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <?php if(!Auth::guest()): ?>
                  <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
                <?php else: ?>
                  <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                <?php endif; ?>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/posts">Blog</a>
              </li>      
            </ul>
            <?php if(!Auth::guest()): ?>
              <ul class="nav navbar-nav mr-right navbar-right">
                <li class="nav-item">
                  <a class="nav-link" href="/posts/create">Create Post</a>
                </li>
              </ul>
            <?php endif; ?>
          </div>

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
              <!-- Authentication Links -->
              <?php if(auth()->guard()->guest()): ?>
                  <li class="nav-item">
                      <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                  </li>
                  <?php if(Route::has('register')): ?>
                      <li class="nav-item">
                          <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                      </li>
                  <?php endif; ?>
              <?php else: ?>
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/home">Dashboard</a>
                          <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                              onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                              <?php echo e(__('Logout')); ?>

                          </a>

                          <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                              <?php echo csrf_field(); ?>
                          </form>
                      </div>
                  </li>
              <?php endif; ?>
          </ul>
      </div>
  </div>
</nav>
<br><?php /**PATH C:\xampp\htdocs\virtual_advisors\resources\views/inc/navbar.blade.php ENDPATH**/ ?>