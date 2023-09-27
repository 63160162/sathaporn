<div x-data="{ activeTab: localStorage.getItem('activeTab') || '<?php echo e($tabs->first()->slug); ?>' }">

    <nav class="grid grid-flow-col mx-auto mb-4 space-x-4 text-center">
        <?php $__currentLoopData = $tabs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <button wire:click="setActiveTab('<?php echo e($tab->slug); ?>')"
                @click="activeTab = '<?php echo e($tab->slug); ?>'; localStorage.setItem('activeTab', '<?php echo e($tab->slug); ?>')"
                class="py-2 text-lg font-bold text-white rounded-md"
                :class="activeTab === '<?php echo e($tab->slug); ?>' ? 'bg-cyan-700' : 'bg-zinc-800'"><?php echo e(ucfirst($tab->name)); ?></button>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </nav>

    <main class="" x-data="{ minHeight: 'auto' }" x-on:update-container-height.window="minHeight = $event.detail + 'px'"
        x-bind:style="'min-height:' + minHeight">
        <?php $__currentLoopData = $tabs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <section class="">
                <div class="space-y-4" x-show.transition.opacity="activeTab === '<?php echo e($tab->slug); ?>'"
                    x-on:show="updateHeight" x-cloak>
                    <?php $__currentLoopData = $tab->sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if (isset($component)) { $__componentOriginald0d1d1d86750fa9b83ac7b3e346001c3 = $component; } ?>
<?php $component = App\View\Components\Block::resolve(['title' => __('' . $section->name),'description' => __('Recent activity like posts, topics, reputation and vouch')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Block::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                            <table class="w-full">
                                <tbody>
                                    <?php $__currentLoopData = $section->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr class="flex items-center">
                                            <td class="flex-grow py-3 text-gray-300">
                                                <a href="<?php echo e(route('topics.index', $category)); ?>"
                                                    class="text-xl font-bold"><?php echo e($category->name); ?></a>
                                                <?php if($category->subcategories->count() > 0): ?>
                                                    <div class="grid grid-cols-2 gap-2 mt-2">
                                                        <?php $__currentLoopData = $category->subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <div class="flex items-center space-x-2">
                                                                <a class="font-bold break-words"
                                                                    href="<?php echo e(route('subcategory.topics.index', [$category, $subcategory])); ?>"
                                                                    style="max-width: calc(70% - 0.5rem);">
                                                                    <span class="flex items-center gap-2">
                                                                        <span class="inline-flex items-center">
                                                                            <svg class="w-4 h-4 text-cyan-300"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 24 24" fill="currentColor"
                                                                                class="w-6 h-6">
                                                                                <path fill-rule="evenodd"
                                                                                    d="M4.72 3.97a.75.75 0 011.06 0l7.5 7.5a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L11.69 12 4.72 5.03a.75.75 0 010-1.06zm6 0a.75.75 0 011.06 0l7.5 7.5a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 11-1.06-1.06L17.69 12l-6.97-6.97a.75.75 0 010-1.06z"
                                                                                    clip-rule="evenodd" />
                                                                            </svg>
                                                                        </span>
                                                                        <?php echo e($subcategory->name); ?>

                                                                    </span>
                                                                </a>
                                                            </div>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </div>
                                                <?php endif; ?>
                                            </td>
                                            <td class="flex items-center py-3">
                                                <?php
                                                    $latestPost = $category->topics
                                                        ->flatMap(function ($topic) {
                                                            return $topic->posts;
                                                        })
                                                        ->sortByDesc('created_at')
                                                        ->first();

                                                    $latestTopic = $latestPost ? $latestPost->topic : null;
                                                    $latestUser = $latestPost ? $latestPost->user : null;
                                                    $timeAgo = $latestPost ? $latestPost->created_at->diffForHumans() : null;
                                                ?>

                                                <?php if($latestTopic && $latestUser): ?>
                                                    <div
                                                        class="flex items-center py-2 text-right rounded-md shadow-md bg-zinc-800/60">
                                                        <div class="flex-row ml-4">
                                                            <?php if($latestTopic && $latestTopic->topic && $latestTopic->tags->count() > 0): ?>
                                                                <?php $__currentLoopData = $latestTopic->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <span
                                                                        class="text-[<?php echo e($tag->color); ?>]
                                                            font-bold text-sm"><?php echo e($tag->name); ?></span>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            <?php endif; ?>
                                                            <a href="<?php echo e(route('topics.show', [$category, $latestTopic])); ?>"
                                                                class="font-bold text-neutral-300"><?php echo e(Str::limit($latestTopic->title, 35)); ?></a>
                                                            <div>
                                                                <a href="<?php echo e(route('profile.show', $latestUser)); ?>"
                                                                    class="text-sm font-bold"
                                                                    style="color: <?php echo e($latestUser->getUsernameColor()); ?>;"><?php echo e($latestUser->username); ?></a>
                                                                <span class="text-sm font-bold text-neutral-500">-
                                                                    <?php echo e($latestUser->created_at->diffForHumans()); ?></span>
                                                            </div>
                                                        </div>
                                                        <img class="object-cover w-10 h-10 ml-4 mr-4 rounded-md"
                                                            src="<?php echo e($latestUser->avatar); ?>" alt="" />
                                                    </div>
                                                <?php else: ?>
                                                    <div class="font-bold text-gray-400">
                                                        <p>No topics available</p>
                                                    </div>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald0d1d1d86750fa9b83ac7b3e346001c3)): ?>
<?php $component = $__componentOriginald0d1d1d86750fa9b83ac7b3e346001c3; ?>
<?php unset($__componentOriginald0d1d1d86750fa9b83ac7b3e346001c3); ?>
<?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </section>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </main>
</div>
<?php /**PATH /var/www/html/Forum-OGUsers/resources/views/livewire/forum-tabs.blade.php ENDPATH**/ ?>