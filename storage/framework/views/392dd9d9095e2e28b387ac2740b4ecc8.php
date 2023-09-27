<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="bg-[#242424] py-2 px-4 rounded-md mt-4 text-gray-400 uppercase font-bold">
        <div class="flex items-center space-x-2">
            <a href="<?php echo e(route('home')); ?>">Home</a>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                class="w-4 h-4 text-neutral-500">
                <path fill-rule="evenodd"
                    d="M4.72 3.97a.75.75 0 011.06 0l7.5 7.5a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L11.69 12 4.72 5.03a.75.75 0 010-1.06zm6 0a.75.75 0 011.06 0l7.5 7.5a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 11-1.06-1.06L17.69 12l-6.97-6.97a.75.75 0 010-1.06z"
                    clip-rule="evenodd" />
            </svg>
            <span>Leaderboard</span>

        </div>
    </div>
    <div class="container px-4 mx-auto">
        <h1 class="py-4 mb-4 text-xl text-neutral-200">Leaderboard</h1>
        <div class="grid grid-cols-4 gap-4">
            <?php if (isset($component)) { $__componentOriginald0d1d1d86750fa9b83ac7b3e346001c3 = $component; } ?>
<?php $component = App\View\Components\Block::resolve(['title' => 'Topics','description' => ''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Block::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <?php $__currentLoopData = $topTopicUsers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="bg-[#202020] rounded-md shadow-md">
                        <div class="flex items-center py-2 rounded-md">
                            <img class="object-cover w-12 h-12 rounded-md" src="<?php echo e($user->user->avatar); ?>"
                                alt="" />
                            <div class="flex-row ml-4">
                                <p class="font-bold text-neutral-300">Topics: <?php echo e($user->total); ?></p>
                                <div>
                                    <a href="<?php echo e(route('profile.show', $user->user)); ?>" class="font-bold"
                                        style="color: <?php echo e($user->user->getUsernameColor()); ?>;"><?php echo e($user->user->username); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald0d1d1d86750fa9b83ac7b3e346001c3)): ?>
<?php $component = $__componentOriginald0d1d1d86750fa9b83ac7b3e346001c3; ?>
<?php unset($__componentOriginald0d1d1d86750fa9b83ac7b3e346001c3); ?>
<?php endif; ?>

            <?php if (isset($component)) { $__componentOriginald0d1d1d86750fa9b83ac7b3e346001c3 = $component; } ?>
<?php $component = App\View\Components\Block::resolve(['title' => 'Posts','description' => ''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Block::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <?php $__currentLoopData = $topPostUsers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="bg-[#202020] rounded-md shadow-md">
                        <div class="flex items-center py-2 rounded-md">
                            <img class="object-cover w-12 h-12 rounded-md" src="<?php echo e($user->user->avatar); ?>"
                                alt="" />
                            <div class="flex-row ml-4">
                                <p class="font-bold text-neutral-300">Posts: <?php echo e($user->total); ?></p>
                                <div>
                                    <a href="<?php echo e(route('profile.show', $user->user)); ?>" class="font-bold"
                                        style="color: <?php echo e($user->user->getUsernameColor()); ?>;"><?php echo e($user->user->username); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald0d1d1d86750fa9b83ac7b3e346001c3)): ?>
<?php $component = $__componentOriginald0d1d1d86750fa9b83ac7b3e346001c3; ?>
<?php unset($__componentOriginald0d1d1d86750fa9b83ac7b3e346001c3); ?>
<?php endif; ?>

            <?php if (isset($component)) { $__componentOriginald0d1d1d86750fa9b83ac7b3e346001c3 = $component; } ?>
<?php $component = App\View\Components\Block::resolve(['title' => 'Rep','description' => ''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Block::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <?php $__currentLoopData = $topRepUsers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="bg-[#202020] rounded-md shadow-md px-4 py-5">
                        <div class="flex items-center py-2 rounded-md">
                            <img class="object-cover w-16 h-16 rounded-md" src="<?php echo e($user->user->avatar); ?>"
                                alt="" />
                            <div class="flex-row ml-4">
                                <p class="font-bold text-neutral-300">Total rep: <?php echo e($user->total); ?></p>
                                <div>
                                    <a href="<?php echo e(route('profile.show', $user->user)); ?>" class="font-bold"
                                        style="color: <?php echo e($user->user->getUsernameColor()); ?>;"><?php echo e($user->user->username); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald0d1d1d86750fa9b83ac7b3e346001c3)): ?>
<?php $component = $__componentOriginald0d1d1d86750fa9b83ac7b3e346001c3; ?>
<?php unset($__componentOriginald0d1d1d86750fa9b83ac7b3e346001c3); ?>
<?php endif; ?>

            <?php if (isset($component)) { $__componentOriginald0d1d1d86750fa9b83ac7b3e346001c3 = $component; } ?>
<?php $component = App\View\Components\Block::resolve(['title' => 'Vouches','description' => ''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Block::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <?php $__currentLoopData = $topVouchUsers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="bg-[#202020] rounded-md shadow-md px-4 py-5">
                        <div class="flex items-center py-2 rounded-md">
                            <img class="object-cover w-16 h-16 rounded-md" src="<?php echo e($user->user->avatar); ?>"
                                alt="" />
                            <div class="flex-row ml-4">
                                <p class="font-bold text-neutral-300">Total vouch: <?php echo e($user->total); ?></p>
                                <div>
                                    <a href="<?php echo e(route('profile.show', $user->user)); ?>" class="font-bold"
                                        style="color: <?php echo e($user->user->getUsernameColor()); ?>;"><?php echo e($user->user->username); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald0d1d1d86750fa9b83ac7b3e346001c3)): ?>
<?php $component = $__componentOriginald0d1d1d86750fa9b83ac7b3e346001c3; ?>
<?php unset($__componentOriginald0d1d1d86750fa9b83ac7b3e346001c3); ?>
<?php endif; ?>
        </div>
    </div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH /var/www/html/Forum-OGUsers/resources/views/forum/extra/leaderboard.blade.php ENDPATH**/ ?>