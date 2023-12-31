<!-- resources/views/livewire/latest-topics.blade.php -->

<div>
    

    <table class="w-full">
        <thead>
            <tr>
                <th class="text-left text-gray-300  pb-4">Normal Topics</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $topics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $topic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="flex items-center bg-[#212121] mb-3 rounded-md">
                    <td class="flex-none items-center justify-center px-5 py-3">
                        <img class="object-cover w-10 h-10 rounded-md"
                            src="<?php echo e($topic->user->avatar); ?> " alt="" />
                    </td>
                    <td class="flex-grow text-gray-300">
                        <a class="font-bold text-lg" href="<?php echo e(route('topics.show', [$topic->category, $topic])); ?>"><?php echo e($topic->title); ?></a>
                        <div class="grid grid-cols-2 gap-2 font-bold w-[50%]">
                            <div class="flex space-x-1 text-sm">
                                <span class="text-neutral-500 font-bold">by</span><a
                                    href="<?php echo e(route('profile.show', $topic->user)); ?>"
                                    class="font-bold" style="color: <?php echo e($topic->user->getUsernameColor()); ?>;">
                                    <?php echo e($topic->user->username); ?></a>
                            </div>
                        </div>
                    </td>
                    <td class="items-center shadow-md">
                        <div class="p-2 px-4 text-sm text-center bg-[#191919] bg-opacity-50 rounded-md text-gray-400 font-bold">
                            <div>
                                <p><?php echo e($topic->post_count); ?> replies</p>
                            </div>
                            <div>
                                <p><?php echo e($topic->view_count); ?> views</p>
                            </div>
                        </div>
                    </td>
                    <td class="flex px-5 items-center">

                        <div class="p-2 px-4 text-sm text-center bg-[#191919] bg-opacity-50 rounded-md text-gray-400 font-bold">
                            <div>
                                <span class="text-neutral-500">by <a
                                        href="<?php echo e(route('profile.show', $topic->user->username)); ?>"
                                        class="font-bold <?php echo e($topic->user->getUsernameColor()); ?>"><?php echo e($topic->user->username); ?></a></span>
                            </div>
                            <div>
                                <?php echo e($topic->created_at->diffForHumans()); ?>

                            </div>
                        </div>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <?php echo e($topics->links()); ?>

</div>
<?php /**PATH /var/www/html/Forum-OGUsers/resources/views/livewire/latest-topics.blade.php ENDPATH**/ ?>