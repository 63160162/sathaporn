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
    $html = \Livewire\Livewire::mount('breadcrumb', ['category' => $category, 'subcategory' => $subcategory ?? null])->html();
} elseif ($_instance->childHasBeenRendered('wtraWAX')) {
    $componentId = $_instance->getRenderedChildComponentId('wtraWAX');
    $componentTag = $_instance->getRenderedChildComponentTagName('wtraWAX');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('wtraWAX');
} else {
    $response = \Livewire\Livewire::mount('breadcrumb', ['category' => $category, 'subcategory' => $subcategory ?? null]);
    $html = $response->html();
    $_instance->logRenderedChild('wtraWAX', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

        <?php echo $__env->make('partials.flash-messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="mt-4 ">
            <?php if(Route::currentRouteName() !== 'subcategory.topics.index' && $category->subcategories->count() > 0): ?>
                <table class="w-full mb-6">
                    <thead>
                        <tr>
                            <th class="pb-4 text-left text-gray-300">Subcategories</th>
                        </tr>
                    </thead>
                    <tbody class="grid grid-cols-2 gap-4">
                        <?php $__currentLoopData = $category->subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $topic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="flex items-center px-4 mb-3 space-x-2 rounded-md bg-zinc-800/60">
                                <td class="flex-grow text-gray-300">
                                    <div class="flex items-center space-x-1">
                                        <a class="text-lg font-bold"
                                            href="<?php echo e(route('subcategory.topics.index', [$category, $topic])); ?>"><?php echo e($topic->name); ?></a>
                                    </div>
                                    <div class="grid grid-cols-2 gap-2 font-bold w-[50%]">
                                        <div class="flex space-x-1">
                                            <a href="#" class="text-neutral-500"><?php echo e($topic->name); ?></a>
                                        </div>
                                    </div>
                                </td>
                                <td class="items-center">
                                    <div
                                        class="p-4 text-center bg-[#1c1c1c2e] bg-opacity-40 rounded-md text-gray-400 font-bold">
                                        <div>
                                            <p>replies</p>
                                        </div>
                                        <div>
                                            <p>views</p>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            <?php endif; ?>
            <div class="flex justify-end">
                <a href="<?php echo e(isset($subcategory) ? route('subcategory.topics.create', [$category->slug, $subcategory->slug]) : route('topics.create', $category->slug)); ?>"
                    class="inline-flex items-center md:px-4 px-3 md:py-2 py-1 bg-zinc-800/60 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-[#191919] focus:bg-[#191919] active:bg-[#222222] focus:outline-none transition ease-in-out duration-150">

                    <svg class="inline-flex w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd"
                            d="M12 3.75a.75.75 0 01.75.75v6.75h6.75a.75.75 0 010 1.5h-6.75v6.75a.75.75 0 01-1.5 0v-6.75H4.5a.75.75 0 010-1.5h6.75V4.5a.75.75 0 01.75-.75z"
                            clip-rule="evenodd" />
                    </svg>

                    Create topic
                </a>
            </div>

            <?php if($pinnedTopics->count() > 0): ?>
                <table class="w-full mb-6">
                    <thead>
                        <tr>
                            <th class="pb-4 text-left text-gray-300">Pinned Topics</th>
                        </tr>
                    </thead>
                    <tbody class="">
                        <?php $__currentLoopData = $pinnedTopics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $topic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                // Retrieve the latest post in the topic
                                $latestPost = $topic
                                    ->posts()
                                    ->with('user')
                                    ->latest('created_at')
                                    ->first();

                                $latestUser = $latestPost ? $latestPost->user : null;
                                $timeAgo = $latestPost ? $latestPost->created_at->diffForHumans() : null;
                            ?>

                            <tr class="flex items-center bg-[#212121] mb-3 rounded-md">
                                <td class="items-center justify-center flex-none px-5 py-3">
                                    <img class="object-cover w-12 h-12 rounded-md" src="<?php echo e($topic->user->avatar); ?>"
                                        alt="" />
                                </td>
                                <td class="flex-grow text-gray-300">
                                    <div class="flex items-center space-x-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="w-4 h-4 text-neutral-400">
                                            <path fill-rule="evenodd"
                                                d="M12 1.5a5.25 5.25 0 00-5.25 5.25v3a3 3 0 00-3 3v6.75a3 3 0 003 3h10.5a3 3 0 003-3v-6.75a3 3 0 00-3-3v-3c0-2.9-2.35-5.25-5.25-5.25zm3.75 8.25v-3a3.75 3.75 0 10-7.5 0v3h7.5z"
                                                clip-rule="evenodd" />
                                        </svg>

                                        <a class="text-lg font-bold"
                                            href="<?php echo e(route('topics.show', [$category, $topic])); ?>"><?php echo e($topic->title); ?></a>
                                    </div>
                                    <div class="grid grid-cols-2 gap-2 font-bold w-[50%]">
                                        <div class="flex space-x-1">
                                            <span class="text-neutral-500">by</span><a
                                                href="<?php echo e(route('profile.show', $topic->user)); ?>" class="font-bold"
                                                style="color: <?php echo e($topic->user->getUsernameColor()); ?>;">
                                                <?php echo e($topic->user->username); ?></a>
                                        </div>
                                    </div>
                                </td>
                                <td class="items-center">
                                    <div
                                        class="p-4 text-center bg-[#191a1e] bg-opacity-40 rounded-md text-gray-400 font-bold">
                                        <div>
                                            <p><?php echo e($topic->post_count); ?> replies</p>
                                        </div>
                                        <div>
                                            <p><?php echo e($topic->view_count); ?> views</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="flex items-center px-5">
                                    <?php if($latestPost && $latestUser): ?>
                                        <div
                                            class="p-4 text-center bg-[#1c1c1c2e] bg-opacity-40 rounded-md text-gray-400 font-bold">
                                            <div>
                                                <span class="text-neutral-500">by <a
                                                        href="<?php echo e(route('profile.show', $latestUser->username)); ?>"
                                                        class="font-bold"
                                                        style="color: <?php echo e($latestUser->getUsernameColor()); ?>;"><?php echo e($latestPost->user->username); ?></a></span>
                                            </div>
                                            <div>
                                                <?php echo e($timeAgo); ?>

                                            </div>
                                        </div>
                                    <?php else: ?>
                                        <div
                                            class="p-4 text-center bg-[#1c1c1c2e] bg-opacity-40 rounded-md text-gray-400 font-bold">
                                            <p>No replies available</p>
                                        </div>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            <?php endif; ?>
            <table class="w-full">
                <thead>
                    <tr>
                        <th class="pb-4 text-left text-gray-300">Normal Topics</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $normalTopics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $topic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            // Retrieve the latest post in the topic
                            $latestPost = $topic
                                ->posts()
                                ->latest('created_at')
                                ->first();

                            $latestUser = $latestPost ? $latestPost->user : null;
                            $timeAgo = $latestPost ? $latestPost->created_at->diffForHumans() : null;

                            // Check if the topic is deleted
                            $isDeleted = $topic->deleted_at !== null;
                            $isHidden = $topic->is_hidden === 1;
                        ?>


                        <tr class="flex items-center mb-3 rounded-md bg-zinc-800/60">
                            <td class="items-center justify-center flex-none px-5">
                                <img class="object-cover w-10 h-10 rounded-md" src="<?php echo e($topic->user->avatar); ?> "
                                    alt="" />
                            </td>
                            <td class="flex-grow text-gray-300">
                                <a class="text-lg font-bold"
                                    href="<?php echo e(isset($subcategory) ? route('subcategory.topics.show', [$category, $subcategory, $topic]) : route('topics.show', [$category, $topic])); ?>"><?php echo e($topic->title); ?></a>
                                <?php if($isDeleted): ?>
                                    <span class="ml-2 font-semibold text-red-600">Deleted</span>
                                <?php endif; ?>
                                <?php if($isHidden): ?>
                                    <span class="ml-2 font-semibold text-red-600">Hidden</span>
                                <?php endif; ?>
                                <div class="grid grid-cols-2 gap-2 font-bold w-[50%]">
                                    <div class="flex space-x-1 text-sm">
                                        <span class="text-neutral-500">by</span><a
                                            href="<?php echo e(route('profile.show', $topic->user)); ?>" class="font-bold"
                                            style="color: <?php echo e($topic->user->getUsernameColor()); ?>;">
                                            <?php echo e($topic->user->username); ?></a>
                                    </div>
                                </div>
                            </td>
                            <td class="items-center p-2 shadow-md">
                                <div
                                    class="p-2 px-4 text-center text-sm bg-[#191919] bg-opacity-50 rounded-md text-gray-400 font-bold">
                                    <div>
                                        <p><?php echo e($topic->post_count); ?> replies</p>
                                    </div>
                                    <div>
                                        <p><?php echo e($topic->view_count); ?> views</p>
                                    </div>
                                </div>
                            </td>
                            <td class="flex items-center px-5">
                                <?php if($latestPost && $latestUser): ?>
                                    <div
                                        class="px-4 py-1 text-sm text-center bg-[#191919] bg-opacity-50 rounded-md text-gray-400 font-bold">
                                        <div>
                                            <span class="text-neutral-500">by <a
                                                    href="<?php echo e(route('profile.show', $latestUser->username)); ?>"
                                                    class="font-bold"
                                                    style="color: <?php echo e($latestUser->getUsernameColor()); ?>;"><?php echo e($latestUser->username); ?></a></span>
                                        </div>
                                        <div>
                                            <?php echo e($timeAgo); ?>

                                        </div>
                                    </div>
                                <?php else: ?>
                                    <div
                                        class="p-4 text-center bg-[#1c1c1c2e] bg-opacity-40 rounded-md text-gray-400 font-bold">
                                        <p>No replies available</p>
                                    </div>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <?php echo e($normalTopics->links()); ?>

        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH /var/www/html/Forum-OGUsers/resources/views/forum/topics/index.blade.php ENDPATH**/ ?>