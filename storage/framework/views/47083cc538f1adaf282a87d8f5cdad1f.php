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
</head>

<body class="font-sans antialiased bg-[#1c1c1c] min-h-screen">

    <?php echo $__env->make('nav2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="mx-auto max-w-7xl">

        <main class="mt-4 ">
            <?php echo e($slot); ?>

        </main>
    </div>

    <?php echo \Livewire\Livewire::scripts(); ?>


</body>

</html>
<?php /**PATH /var/www/html/Forum-OGUsers/resources/views/layouts/guest.blade.php ENDPATH**/ ?>