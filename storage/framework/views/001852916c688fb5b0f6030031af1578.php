<div>
    <?php $__currentLoopData = $recentPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="flex items-center rounded-md py-2">
            <img class="object-cover w-8 h-8 rounded-md" src="<?php echo e($post->user->avatar); ?>"
                alt="" />
            <div class="flex-row ml-4">
                
                <a href="<?php echo e(route('topics.show', [$post->topic->category, $post->topic])); ?>#post-<?php echo e($post->id); ?>"
                    class="text-neutral-300 font-bold"><?php echo e(Str::limit($post->topic->title, 35)); ?></a>
                <div>
                    <a href="<?php echo e(route('profile.show', $post->user)); ?>" class="font-bold text-sm" style="color: <?php echo e($post->user->getUsernameColor()); ?>;"><?php echo e($post->user->username); ?></a>
                    <span class="font-bold text-neutral-500 text-sm">- <?php echo e($post->created_at->diffForHumans()); ?></span>
                </div>
            </div>
        </div>
        <?php if(!$loop->last): ?>
            <!-- Do not add the line after the last post -->
            <hr class="border-neutral-800 my-1"> <!-- Add the horizontal line with a custom class -->
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH /var/www/html/Forum-OGUsers/resources/views/livewire/recent-posts.blade.php ENDPATH**/ ?>