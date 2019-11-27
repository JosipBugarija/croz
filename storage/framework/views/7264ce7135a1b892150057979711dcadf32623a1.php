 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand bg-dark navbar-light border-bottom">
    <ul class="navbar-nav">
        <a href="<?php echo e(route('jokes.index')); ?>" class="ml-1 my-0">
            <img src="<?php echo e(asset('/img/logo.png')); ?>" width="33" class="float-left"><h3 class="ml-2 my-0 float-left text-white">Jokes</h3>
        </a> 
    </ul>

    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <?php if(auth()->guard()->check()): ?>
                <a class="text-white nav-user mr-1" data-toggle="dropdown" href="#">
                    <i class="fa fa-user"></i>
                </a>

                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-header">
                        <?php echo e(auth()->user()->name); ?>

                        <br>
                        <?php echo e(auth()->user()->email); ?>

                    </span>
                    <div class="dropdown-divider"></div>
                    <a href="<?php echo e(route('profile.index')); ?>" class="dropdown-item dropdown-footer">Profile</a>
                    <div class="dropdown-divider"></div>
                    <a href="<?php echo e(route('logout')); ?>" class="dropdown-item dropdown-footer">Logout</a>
                </div>
            <?php else: ?>
                <a class="nav-link d-inline-block text-white" href="<?php echo e(route('login')); ?>">
                    Login
                </a>

                <a class="nav-link d-inline-block text-white" href="<?php echo e(route('register')); ?>">
                    Register
                </a>
            <?php endif; ?>
        </li>
    </ul>
</nav>