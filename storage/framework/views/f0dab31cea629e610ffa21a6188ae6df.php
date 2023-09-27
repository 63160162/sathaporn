<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="mx-auto">
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('breadcrumb', ['category' => $category, 'topic' => $topic])->html();
} elseif ($_instance->childHasBeenRendered('xoCfhKb')) {
    $componentId = $_instance->getRenderedChildComponentId('xoCfhKb');
    $componentTag = $_instance->getRenderedChildComponentTagName('xoCfhKb');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('xoCfhKb');
} else {
    $response = \Livewire\Livewire::mount('breadcrumb', ['category' => $category, 'topic' => $topic]);
    $html = $response->html();
    $_instance->logRenderedChild('xoCfhKb', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

        <?php echo $__env->make('partials.flash-messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="flex items-center mb-4">
            <h1 class="text-2xl font-extrabold text-neutral-200">
                <?php echo e($topic->title); ?>

            </h1>
        </div>
        <div x-data="{ replyTo: '' }" x-ref="replyContainer">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('post-list', ['topicId' => $topic->id])->html();
} elseif ($_instance->childHasBeenRendered('XvAMBOb')) {
    $componentId = $_instance->getRenderedChildComponentId('XvAMBOb');
    $componentTag = $_instance->getRenderedChildComponentTagName('XvAMBOb');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('XvAMBOb');
} else {
    $response = \Livewire\Livewire::mount('post-list', ['topicId' => $topic->id]);
    $html = $response->html();
    $_instance->logRenderedChild('XvAMBOb', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
    <?php $__env->startPush('scripts'); ?>
        <script>
            Livewire.on('setReplyTo', username => {
                document.querySelector('[x-ref="replyContainer"]').__x.$data.replyTo = username;
            });
        </script>
    <?php $__env->stopPush(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH /var/www/html/Forum-OGUsers/resources/views/forum/topics/show.blade.php ENDPATH**/ ?>