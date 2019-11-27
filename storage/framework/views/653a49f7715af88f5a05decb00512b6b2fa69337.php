<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="csrf-token" content=<?php echo e(csrf_token()); ?>>

        <title>Jokes - <?php echo $__env->yieldContent('title'); ?></title>

        <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo e(asset('img/favicon/apple-touch-icon-57x57.png')); ?>" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo e(asset('img/favicon/apple-touch-icon-114x114.png')); ?>" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo e(asset('img/favicon/apple-touch-icon-72x72.png')); ?>" />
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo e(asset('img/favicon/apple-touch-icon-144x144.png')); ?>" />
        <link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?php echo e(asset('img/favicon/apple-touch-icon-60x60.png')); ?>" />
        <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo e(asset('img/favicon/apple-touch-icon-120x120.png')); ?>" />
        <link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php echo e(asset('img/favicon/apple-touch-icon-76x76.png')); ?>" />
        <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo e(asset('img/favicon/apple-touch-icon-152x152.png')); ?>" />
        <link rel="icon" type="image/png" href="<?php echo e(asset('img/favicon/favicon-196x196.png')); ?>" sizes="196x196" />
        <link rel="icon" type="image/png" href="<?php echo e(asset('img/favicon/favicon-96x96.png')); ?>" sizes="96x96" />
        <link rel="icon" type="image/png" href="<?php echo e(asset('img/favicon/favicon-32x32.png')); ?>" sizes="32x32" />
        <link rel="icon" type="image/png" href="<?php echo e(asset('img/favicon/favicon-16x16.png')); ?>" sizes="16x16" />
        <link rel="icon" type="image/png" href="<?php echo e(asset('img/favicon/favicon-128.png')); ?>" sizes="128x128" />
        <meta name="application-name" content="&nbsp;"/>
        <meta name="msapplication-TileColor" content="#FFFFFF" />
        <meta name="msapplication-TileImage" content="<?php echo e(asset('img/favicon/mstile-144x144.png')); ?>" />
        <meta name="msapplication-square70x70logo" content="<?php echo e(asset('img/favicon/mstile-70x70.png')); ?>" />
        <meta name="msapplication-square150x150logo" content="<?php echo e(asset('img/favicon/mstile-150x150.png')); ?>" />
        <meta name="msapplication-wide310x150logo" content="<?php echo e(asset('img/favicon/mstile-310x150.png')); ?>" />
        <meta name="msapplication-square310x310logo" content="<?php echo e(asset('img/favicon/mstile-310x310.png')); ?>" />

        <link href="<?php echo e(asset(mix('css/app.css'))); ?>" rel="stylesheet">

        <?php echo $__env->yieldContent('css'); ?>
    </head>

    <body class="hold-transition">
        <div class="wrapper" id="app">
            <div id="pageloader" class="content-wrapper">
                <div class="loader loader-2"><div class="lds-ripple"><div></div><div></div></div></div>
            </div>

            <!-- Header -->
            <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!-- Sidebar -->

            <div class="content-wrapper pt-3">
                <?php echo $__env->yieldContent('content'); ?>
            </div>

            <!-- Footer -->
            <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
        <!-- ./wrapper -->

        <script type="text/javascript" src="<?php echo e(asset(mix('js/app.js'))); ?>"></script>

        <?php $__currentLoopData = ['warning','success','error']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(Session::has('alert-'.$message)): ?>
                <script>
                    toastr.options = {positionClass:"toast-bottom-right"};
                    toastr.<?php echo $message; ?>("<?php echo Session::get('alert-'.$message); ?>",{timeOut: 10000});
                </script>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php echo $__env->yieldContent('javascript'); ?>
    </body>
</html>