<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?><?php echo $__env->yieldSection(); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/backend.css')); ?>" rel="stylesheet">
</head>
<body>
    <div id="app">
        
        <header>
            <?php echo $__env->make('backend.partials.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('backend.partials.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </header>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>

        
        <?php echo $__env->make('backend.partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
</body>
</html>
