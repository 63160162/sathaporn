<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

    <?php echo \Livewire\Livewire::styles(); ?>


</head>

<body class="min-h-screen font-sans antialiased bg-zinc-900">

    <?php echo $__env->make('nav2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="mx-auto max-w-screen-2xl">

        <main class="">
            <?php echo e($slot); ?>

        </main>

        <?php echo $__env->make('layouts._partials.footer2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <?php echo \Livewire\Livewire::scripts(); ?>

</body>

</html>
<?php /**PATH /var/www/html/Forum-OGUsers/resources/views/layouts/app.blade.php ENDPATH**/ ?>