<div x-data>
    <div class="grid grid-cols-4 gap-4">
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="flex items-center rounded-md space-x-4 bg-[#222222] px-5 py-5">
            <img class="object-cover w-16 h-16 rounded-md" src="<?php echo e($member->avatar); ?>" alt="" />
            <div class="flex-row">
                <a href="<?php echo e(route('profile.show', $member)); ?>" class="text-neutral-300 font-bold"><?php echo e($member->username); ?></a>
                <p class="text-neutral-600 font-bold text-sm">Posts: <?php echo e($member->posts->count()); ?> : Topics: <?php echo e($member->topics->count()); ?></p>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="mt-4">
        <?php echo e($users->links()); ?>

    </div>
</div>
<?php /**PATH /var/www/html/Forum-OGUsers/resources/views/livewire/user-list.blade.php ENDPATH**/ ?>