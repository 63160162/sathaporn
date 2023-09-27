<div x-data>
    <div class="">
        <table class="w-full bg-[#222222] text-neutral-300 shadow-md ">
            <thead class="bg-[#151515]">
                <tr>
                    <th class="border-b border-neutral-800 px-4 py-2 text-left">Name</th>
                    <th class="border-b border-neutral-800 px-4 py-2 text-left">Description</th>
                    <th class="border-b border-neutral-800 px-4 py-2 text-left">Icon</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $awards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="hover:bg-neutral-800">
                        <td class="border-b border-neutral-800 px-4 py-2"><?php echo e($item->name); ?></td>
                        <td class="border-b border-neutral-800 px-4 py-2"><?php echo e($item->description); ?></td>
                        <td class="border-b border-neutral-800 px-4 py-2">
                            <img class="object-cover w-8 h-8 rounded-md"
                                src="<?php echo e(asset('storage/' . Str::after($item->icon, 'public/'))); ?>" alt="" />
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
    <div class="mt-4">
        <?php echo e($awards->links()); ?>

    </div>
</div>
<?php /**PATH /var/www/html/Forum-OGUsers/resources/views/livewire/award-list.blade.php ENDPATH**/ ?>