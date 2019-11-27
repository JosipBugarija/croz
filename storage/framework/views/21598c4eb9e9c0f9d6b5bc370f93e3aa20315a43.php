<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startSection('content'); ?>
    <div class="login-logo">
        <img width="152" class="my-5" src="<?php echo e(asset('img/auth-logo.png')); ?>"><br>

        <h5 class="mt-3">Login to start your session</h5>
    </div>

    <form action="<?php echo e(route('login')); ?>" method="post">
        <?php echo csrf_field(); ?>

        <div class="input-group mb-3">
            <div class="input-group-append">
                <span class="input-group-text bg-white">
                    <i class="fa fa-envelope-square mx-auto"></i>
                </span> 
            </div>

            <input id="email" type="email" placeholder="E-mail address" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required>

            <?php if($errors->has('email')): ?>
                <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($errors->first('email')); ?></strong>
                </span>
            <?php endif; ?>
        </div>

        <div class="input-group mb-3">
            <div class="input-group-append">
                <span class="input-group-text bg-white">
                    <i class="fa fa-lock mx-auto"></i>
                </span> 
            </div>

            <input id="password" type="password" placeholder="Password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required>
        </div>

        <div class="d-inline-block">
            <div class="icheck-material">
                <input type="checkbox" id="remember" name="remember" checked>
                <label for="remember">Remember me</label>
            </div>
        </div>

        <button type="submit" class="btn btn-warning btn-block mt-3 mb-3"><b>Login</b></button>
        <a href="<?php echo e(route('register')); ?>" class="text-underline"><b>Register a new membership</b></a>

        <div class="mt-3">
            <a href="<?php echo e(route('jokes.index')); ?>" class="text-underline"><b>Step in as a guest</b></a>
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('auth.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>