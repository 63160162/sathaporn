<section class="shadow-md sm:rounded-lg">
    <div class="border rounded-md border-zinc-800">
        <header class="px-4 py-4 bg-transparent rounded-t-md">
            <h2 class="text-lg font-medium text-neutral-200">
                <?php echo e($title); ?>

            </h2>

            <p class="mt-1 text-sm text-neutral-400">
                <?php echo e($description); ?>

            </p>
        </header>
        <div class="px-4 py-4 bg-zinc-800/50">
            <?php echo e($slot); ?>

        </div>
    </div>
</section>
<?php /**PATH /var/www/html/Forum-OGUsers/resources/views/components/block.blade.php ENDPATH**/ ?>