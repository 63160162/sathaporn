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
            <span>Vouch log</span>

        </div>
    </div>
    <div class="py-4">
        <table class="w-full bg-[#222222] text-neutral-300 rounded-md shadow-md ">
            <thead>
                <tr>
                    <th class="px-4 py-2 text-left border-b border-neutral-800">Date</th>
                    <th class="px-4 py-2 text-left border-b border-neutral-800">From</th>
                    <th class="px-4 py-2 text-left border-b border-neutral-800">To</th>
                    <th class="px-4 py-2 text-left border-b border-neutral-800">Reason</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $vouchLogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="hover:bg-neutral-800">
                        <td class="px-4 py-2 border-b border-neutral-800"><?php echo e($log->created_at->format('d-m-Y H:i')); ?>

                        </td>
                        <td class="px-4 py-2 border-b border-neutral-800" style="color: <?php echo e($log->vouchedByUser->getUsernameColor()); ?>;">
                            <a href="<?php echo e(route('profile.show', $log->vouchedByUser)); ?>">
                                <?php echo e($log->vouchedByUser->username); ?>

                            </a>
                        </td>
                        <td class="px-4 py-2 border-b border-neutral-800" style="color: <?php echo e($log->user->getUsernameColor()); ?>;">
                            <a href="<?php echo e(route('profile.show', $log->user)); ?>">
                                <?php echo e($log->user->username); ?>

                            </a>
                        </td>
                        <td class="px-4 py-2 border-b border-neutral-800"><?php echo e($log->reason); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH /var/www/html/Forum-OGUsers/resources/views/forum/vouch/index.blade.php ENDPATH**/ ?>