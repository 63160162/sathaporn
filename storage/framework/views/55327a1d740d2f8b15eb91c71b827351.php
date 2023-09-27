<div>
    <table class="w-full">
        <tbody>
            <?php $__currentLoopData = $latestPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="flex items-center bg-[#212121] mb-3 rounded-md">
                    <td class="flex-none items-center justify-center px-5 py-3">
                        <img class="object-cover w-10 h-10 rounded-md" src="<?php echo e($post->user->avatar); ?> " alt="" />
                    </td>
                    <td class="flex-grow text-gray-300">
                        <a class="font-bold text-lg"
                            href="<?php echo e(route('topics.show', [$post->topic->category, $post->topic])); ?>#post-<?php echo e($post->id); ?>"><?php echo e(Str::limit($post->content, 125)); ?></a>
                        <div class="grid grid-cols-2 gap-2 font-bold w-[50%]">
                            <div class="flex space-x-1 text-sm">
                                <span class="text-neutral-500">in topic:</span><a
                                    href="<?php echo e(route('topics.show', [$post->topic->category, $post->topic])); ?>"
                                    class="font-bold">
                                    <?php echo e($post->topic->title); ?></a>
                            </div>
                        </div>
                    </td>

                    <td class="items-center shadow-md">
                        <div
                            class="p-2 px-4 text-sm text-center bg-[#191919] bg-opacity-50 rounded-md text-gray-400 font-bold">
                            <div>
                                <p><?php echo e($post->topic->post_count); ?> replies</p>
                            </div>
                            <div>
                                <p><?php echo e($post->topic->view_count); ?> views</p>
                            </div>
                        </div>
                    </td>
                    <td class="flex px-5 items-center">

                        <div
                            class="p-2 px-4 text-sm text-center bg-[#191919] bg-opacity-50 py-2 rounded-md text-gray-400 font-bold">
                            <div>
                                <span class="text-neutral-500">by <a
                                        href="<?php echo e(route('profile.show', $post->topic->user->username)); ?>"
                                        class="font-bold <?php echo e($post->topic->user->getUsernameColor()); ?>"><?php echo e($post->topic->user->username); ?></a></span>
                            </div>
                            <div>
                                <?php echo e($post->topic->created_at->diffForHumans()); ?>

                            </div>
                        </div>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <?php echo e($latestPosts->links()); ?>

</div>
<?php /**PATH /var/www/html/Forum-OGUsers/resources/views/livewire/latest-posts.blade.php ENDPATH**/ ?>