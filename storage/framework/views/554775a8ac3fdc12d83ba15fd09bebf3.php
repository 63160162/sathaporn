<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <section class="">
        <div class="bg-[#242424] py-2 px-4 rounded-md mt-4 text-gray-400 uppercase font-bold">
            <div class="flex space-x-2 items-center">
                <a href="<?php echo e(route('home')); ?>">Home</a>

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 text-neutral-500">
                    <path fill-rule="evenodd" d="M4.72 3.97a.75.75 0 011.06 0l7.5 7.5a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L11.69 12 4.72 5.03a.75.75 0 010-1.06zm6 0a.75.75 0 011.06 0l7.5 7.5a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 11-1.06-1.06L17.69 12l-6.97-6.97a.75.75 0 010-1.06z" clip-rule="evenodd" />
                </svg>
                <span>Awards</span>

            </div>
        </div>
        <h1 class="text-xl font-bold text-white py-4">Awards</h1>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('award-list', [])->html();
} elseif ($_instance->childHasBeenRendered('f6dwK2o')) {
    $componentId = $_instance->getRenderedChildComponentId('f6dwK2o');
    $componentTag = $_instance->getRenderedChildComponentTagName('f6dwK2o');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('f6dwK2o');
} else {
    $response = \Livewire\Livewire::mount('award-list', []);
    $html = $response->html();
    $_instance->logRenderedChild('f6dwK2o', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </section>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH /var/www/html/Forum-OGUsers/resources/views/forum/extra/awards.blade.php ENDPATH**/ ?>