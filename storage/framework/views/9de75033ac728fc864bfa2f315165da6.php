<div class="pt-4">
    <div class="mb-4">
        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-label','data' => ['class' => 'text-neutral-300','for' => 'search','value' => __('Search topics')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'text-neutral-300','for' => 'search','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Search topics'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['id' => 'search','class' => 'block mt-1 w-full','type' => 'search','wire:model.lazy' => 'search','required' => true,'autofocus' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'search','class' => 'block mt-1 w-full','type' => 'search','wire:model.lazy' => 'search','required' => true,'autofocus' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
    </div>

    <ul>
        <?php $__currentLoopData = $topics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $topic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="bg-[#252525] px-4 py-4 mb-4 text-neutral-400 rounded-md border border-[#303030]">
            <div class="flex items-center">
                <img class="object-cover w-8 h-8 rounded-md mr-4" src="<?php echo e(asset('/storage/' . $topic->user->avatar)); ?>" alt="" />
                <a href="<?php echo e(route('topics.show', [$topic->category, $topic])); ?>" class="font-bold"><?php echo e($topic->title); ?></a>
            </div>
            <div class="text-sm">
                <a href="<?php echo e(route('profile.show', $topic->user)); ?>" class="text-neutral-300" style="color: <?php echo e($topic->user->getUsernameColor()); ?>;"><?php echo e($topic->user->username); ?></a>
                <span class="text-neutral-500">- <?php echo e($topic->created_at->diffForHumans()); ?></span>
            </div>
            <div class="text-sm">
                <span><?php echo e($topic->post_count); ?> replies</span>
                <span class="ml-2"><?php echo e($topic->view_count); ?> views</span>
            </div>
        </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <div wire:loading>
        <p class="text-neutral-300">Searching...</p>
    </div>

    <?php if($topics instanceof \Illuminate\Pagination\LengthAwarePaginator): ?>
    <?php echo e($topics->links()); ?>

    <?php endif; ?>
</div>
<?php /**PATH /var/www/html/Forum-OGUsers/resources/views/livewire/search-posts.blade.php ENDPATH**/ ?>