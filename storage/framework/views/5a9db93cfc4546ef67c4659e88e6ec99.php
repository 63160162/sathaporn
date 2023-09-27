<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

    <header class="px-4 py-2 mt-4 mb-4 font-bold text-gray-400 rounded-md shadow-md bg-zinc-800/40 border-zinc-800">
        <nav class="flex items-center space-x-2">
            <a href="<?php echo e(route('home')); ?>">Home</a>
            <?php if($user): ?>
                <p>Profile of <span class=""
                        style="color: <?php echo e($user->getUsernameColor()); ?>;"><?php echo e($user->username); ?></span>
                </p>
            <?php endif; ?>
        </nav>
    </header>

    <?php echo $__env->make('partials.flash-messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php if($user->is_banned): ?>
        <section class="bg-[#191a1e] shadow-md py-2 px-4 rounded-md mt-4 mb-4 text-gray-400 uppercase font-bold">
            <div class="flex items-center space-x-2">
                <span class="text-red-500">This user is banned.</span>
            </div>
        </section>
    <?php endif; ?>


    <div class="flex justify-between border rounded-md shadow-md bg-zinc-800/10 border-zinc-800"
        style="<?php if($user->show_cover && $user->cover): ?> background-image: linear-gradient(rgba(32, 32, 32, 0.5), rgba(32, 32, 32, 0.5)), url('<?php echo e($user->cover); ?>');
            background-color: #202020;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            object-fit: cover;
            width: 100%; <?php endif; ?>
            ">
        <div class="flex items-center p-4 space-x-2 md:space-x-4">
            <img class="rounded-md inline-block text-6xl md:h-32 h-24 md:w-32 w-24 object-cover bg-center overflow-hidden align-bottom <?php echo e($user->hasBeenOnlinePast15Minutes() ? 'online-border' : ''); ?>"
                src="<?php echo e($user->avatar); ?>" alt="">
            <div class="flex-row space-y-2">
                <h2 class="text-2xl font-bold md:text-4xl" style="color: <?php echo e($user->getUsernameColor()); ?>;">
                    <?php echo e($user->username); ?></h2>
                <p class="font-bold text-gray-300">
                    <?php echo e($user->title); ?>

                </p>
            </div>
        </div>
        <div class="flex items-center mr-10 space-x-2">

            <a href="<?php echo e(route('users.scan', $user)); ?>"
                class="py-2 border border-[#303030] inline-flex gap-0.5 justify-center overflow-hidden text-sm font-medium transition rounded-md px-3 bg-zinc-800 text-zinc-400 ring-1 ring-inset ring-zinc-800 hover:bg-zinc-800 hover:text-zinc-300">Scan</a>

            <a href="<?php echo e(route('report.create', $user)); ?>"
                class="py-2 border border-[#303030] inline-flex gap-0.5 justify-center overflow-hidden text-sm font-medium transition rounded-md px-3 bg-zinc-800 text-zinc-400 ring-1 ring-inset ring-zinc-800 hover:bg-zinc-800 hover:text-zinc-300">Report</a>

            <a href="#"
                class="py-2 border border-[#303030] inline-flex gap-0.5 justify-center overflow-hidden text-sm font-medium transition rounded-md px-3 bg-zinc-800 text-zinc-400 ring-1 ring-inset ring-zinc-800 hover:bg-zinc-800 hover:text-zinc-300">Send
                message</a>

        </div>
    </div>
    <div class="grid grid-cols-4 gap-4">
        <!-- First col -->
        <div class="flex-row col-span-1">
            <section class="py-5 text-neutral-400">
                <?php if (isset($component)) { $__componentOriginald0d1d1d86750fa9b83ac7b3e346001c3 = $component; } ?>
<?php $component = App\View\Components\Block::resolve(['title' => __('User stats'),'description' => __('Stats related to the user')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Block::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                    <article class="flex justify-between mb-4">
                        <p class="">Last seen at:</p>
                        <p><?php echo e($user->last_login_at ? $user->last_login_at : 'Nothing found'); ?></p>
                    </article>
                    <article class="flex justify-between mb-4">
                        <p class="flex items-center gap-2">
                            <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('heroicon-s-user'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 text-neutral-400']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                            UID
                        </p>
                        <p><?php echo e($user->id); ?></p>
                    </article>
                    <article class="flex justify-between mb-4">
                        <p class="flex items-center gap-2">
                            <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('heroicon-s-cake'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 text-neutral-400']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                            Registrated
                        </p>
                        <p><?php echo e($user->created_at->diffForHumans()); ?></p>
                    </article>
                    <article class="flex justify-between mb-4">
                        <p class="flex items-center gap-2">
                            <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('heroicon-s-finger-print'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 text-neutral-400']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                            Username history
                        </p>
                        <p>0</p>
                    </article>
                    <article class="flex justify-between mb-4">
                        <p class="flex items-center gap-2">
                            <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('heroicon-s-trophy'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 text-neutral-400']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                            Awards
                        </p>
                        <p><?php echo e($user->awards->count()); ?></p>
                    </article>
                    <article class="flex justify-between mb-4">
                        <?php if($lastVisitor): ?>
                            <p class="flex items-center gap-2 font-bold">
                                <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('heroicon-s-user'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 text-neutral-400']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                                Last visitor:
                            </p>
                            <a href="<?php echo e(route('profile.show', $lastVisitor)); ?>"
                                style="color: <?php echo e($lastVisitor->getUsernameColor()); ?>;"><?php echo e($lastVisitor->username); ?></a>
                        <?php else: ?>
                            <p>No visitors yet.</p>
                        <?php endif; ?>
                    </article>
                    <article>
                        <p>Profile views: <?php echo e($profileViews); ?></p>
                    </article>
                    <?php if($user->discord_id): ?>
                        <article class="flex justify-between mb-4">
                            <p class="flex items-center gap-2">
                                <!-- Discord icon code -->
                                Discord
                            </p>
                            <p><?php echo e($user->discord_id); ?></p>
                        </article>
                    <?php endif; ?>
                    <?php if($user->telegram_id): ?>
                        <article class="flex justify-between mb-4">
                            <p class="flex items-center gap-2">
                                <!-- Telegram icon code -->
                                Telegram
                            </p>
                            <p><?php echo e($user->telegram_id); ?></p>
                        </article>
                    <?php endif; ?>
                    <?php if($user->btc_address): ?>
                        <article class="flex justify-between mb-4">
                            <p class="flex items-center gap-2">
                                <!-- Btc icon code -->
                                Btc:
                            </p>
                            <p><?php echo e($user->btc_address); ?></p>
                        </article>
                    <?php endif; ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald0d1d1d86750fa9b83ac7b3e346001c3)): ?>
<?php $component = $__componentOriginald0d1d1d86750fa9b83ac7b3e346001c3; ?>
<?php unset($__componentOriginald0d1d1d86750fa9b83ac7b3e346001c3); ?>
<?php endif; ?>
            </section>
            <div class="flex space-x-4">
                <div class="w-full border rounded-md shadow-md bg-zinc-800/10 border-zinc-800">
                    <div class="px-10 py-4 text-center">
                        <span
                            class="font-bold text-2xl <?php echo e($user->totalReputation() > 0 ? 'text-green-600' : ($user->totalReputation() < 0 ? 'text-red-600' : 'text-gray-600')); ?>"><?php echo e($user->totalReputation()); ?></span>
                        <p class="text-lg font-bold text-neutral-500 ">Reputation</p>
                    </div>
                    <div class="flex py-3 justify-evenly bg-zinc-800/60">
                        <!-- Reputation report -->
                        <a href="<?php echo e(route('users.reputation.show', $user)); ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-neutral-500">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                            </svg>

                        </a>

                        <!-- Add reputation -->
                        <a href="<?php echo e(route('users.reputation.give', $user)); ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-6 h-6 text-neutral-500">
                                <path fill-rule="evenodd"
                                    d="M12 3.75a.75.75 0 01.75.75v6.75h6.75a.75.75 0 010 1.5h-6.75v6.75a.75.75 0 01-1.5 0v-6.75H4.5a.75.75 0 010-1.5h6.75V4.5a.75.75 0 01.75-.75z"
                                    clip-rule="evenodd" />
                            </svg>

                        </a>

                        <!-- Reputation given -->
                        <a href="<?php echo e(route('users.reputation.given', $user)); ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-neutral-500"">
                                <path stroke-linecap=" round" stroke-linejoin="round"
                                    d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                            </svg>

                        </a>
                    </div>
                </div>

                <div class="w-full border rounded-md shadow-md bg-zinc-800/10 border-zinc-800">
                    <div class="px-10 py-4 text-center">
                        <span
                            class="font-bold text-2xl <?php echo e($user->vouches->count() > 0 ? 'text-green-600' : ($user->vouches->count() < 0 ? 'text-red-600' : 'text-gray-600')); ?>"><?php echo e($user->vouches->count()); ?></span>
                        <p class="text-lg font-bold text-neutral-500 ">Vouches</p>
                    </div>
                    <div class="flex py-3 justify-evenly bg-zinc-800/60">
                        <a href="<?php echo e(route('users.vouch.show', $user)); ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-neutral-500">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                            </svg>

                        </a>
                        <a href="<?php echo e(route('users.vouch.give', $user)); ?>" x-data="{ open: false }" @click="open = true">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-neutral-500"">
                                <path stroke-linecap=" round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                        </a>
                        <a href="<?php echo e(route('users.vouch.given', $user)); ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-neutral-500"">
                                <path stroke-linecap=" round" stroke-linejoin="round"
                                    d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                            </svg>

                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Second col -->
        <section class="flex-row col-span-2 py-5 space-y-4">
            <?php if (isset($component)) { $__componentOriginald0d1d1d86750fa9b83ac7b3e346001c3 = $component; } ?>
<?php $component = App\View\Components\Block::resolve(['title' => __('Recent activity'),'description' => __('Recent activity like posts, topics, reputation and vouch')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Block::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <?php $__empty_1 = true; $__currentLoopData = $latestActivities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $activity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <?php if($activity instanceof App\Models\Post): ?>
                        <div class="pb-4 space-y-4">
                            <header class="flex items-center space-x-4">
                                <img class="w-12 h-12 rounded-md" src="<?php echo e($activity->user->avatar); ?>"
                                    alt="">
                                <span
                                    style="color: <?php echo e($activity->user->getUsernameColor()); ?>"><?php echo e($activity->user->username); ?></span>
                                <time class="text-neutral-500"><?php echo e($activity->created_at->diffForHumans()); ?></time>
                            </header>
                            <div class="">
                                <a class="font-bold text-neutral-200 hover:text-neutral-400"
                                    href="<?php echo e(route('topics.show', ['category' => $activity->topic->category, 'topic' => $activity->topic])); ?>">
                                    <?php echo e(Str::limit($activity->topic->title, 30)); ?>

                                </a>
                            </div>
                            <div class="">
                                <p class="text-neutral-400"><?php echo e(Str::limit($activity->content, 250)); ?></p>
                            </div>
                            <footer
                                class="inline-flex gap-0.5 justify-center overflow-hidden text-sm font-medium transition rounded-full bg-zinc-900 py-1 px-3 hover:bg-zinc-700 bg-emerald-400/10 text-emerald-400 ring-1 ring-inset ring-emerald-400/20 hover:bg-emerald-400/10 hover:text-emerald-300 hover:ring-emerald-300">
                                Post
                            </footer>
                            <hr class="my-1 border rounded-md border-zinc-700">
                        </div>
                    <?php elseif($activity instanceof App\Models\Topic): ?>
                        <div class="pb-4 space-y-4">
                            <header class="flex items-center space-x-4">
                                <img class="w-12 h-12 rounded-md" src="<?php echo e($activity->user->avatar); ?>"
                                    alt="">
                                <span
                                    style="color: <?php echo e($activity->user->getUsernameColor()); ?>"><?php echo e($activity->user->username); ?></span>
                                <time class="text-neutral-500"><?php echo e($activity->created_at->diffForHumans()); ?></time>
                            </header>
                            <div class="">
                                <a class="text-neutral-200"
                                    href="<?php echo e(route('topics.show', ['category' => $activity->category, 'topic' => $activity])); ?>">
                                    <h2 class="font-bold text-neutral-400"><?php echo e(Str::limit($activity->title, 30)); ?>

                                    </h2>
                                </a>
                            </div>
                            <footer
                                class="inline-flex gap-0.5 justify-center overflow-hidden text-sm font-medium transition rounded-full bg-zinc-900 py-1 px-3 hover:bg-zinc-700 bg-emerald-400/10 text-emerald-400 ring-1 ring-inset ring-emerald-400/20 hover:bg-emerald-400/10 hover:text-emerald-300 hover:ring-emerald-300">
                                Topic
                            </footer>
                            <hr class="my-1 border rounded-md border-zinc-700">
                        </div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <p class="font-bold text-neutral-500">No recent activities.</p>
                <?php endif; ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald0d1d1d86750fa9b83ac7b3e346001c3)): ?>
<?php $component = $__componentOriginald0d1d1d86750fa9b83ac7b3e346001c3; ?>
<?php unset($__componentOriginald0d1d1d86750fa9b83ac7b3e346001c3); ?>
<?php endif; ?>
        </section>

        <!-- Third col -->
        <div class="flex-row col-span-1 py-5 space-y-4">
            <?php if (isset($component)) { $__componentOriginald0d1d1d86750fa9b83ac7b3e346001c3 = $component; } ?>
<?php $component = App\View\Components\Block::resolve(['title' => __('Awards'),'description' => __('All of the users awards')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Block::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <div class="flex overflow-hidden">
                    <ul class="">
                        <?php $__empty_1 = true; $__currentLoopData = $user->awards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $award): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <li>
                                <img class="w-6 h-6"
                                    src="<?php echo e(asset('storage/' . Str::after($award->icon, 'public/'))); ?>"
                                    alt="">
                            </li>
                    </ul>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <li class="font-bold text-neutral-500">This user does not have any awards.</li>
                    <?php endif; ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald0d1d1d86750fa9b83ac7b3e346001c3)): ?>
<?php $component = $__componentOriginald0d1d1d86750fa9b83ac7b3e346001c3; ?>
<?php unset($__componentOriginald0d1d1d86750fa9b83ac7b3e346001c3); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginald0d1d1d86750fa9b83ac7b3e346001c3 = $component; } ?>
<?php $component = App\View\Components\Block::resolve(['title' => __('Group(s)'),'description' => __('The groups the user is part of')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Block::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <div class="flex overflow-hidden">
                    <ul>
                        <?php $__empty_1 = true; $__currentLoopData = $user->groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <li class="list-none">
                                <img class="object-contain w-full h-12"
                                    src="<?php echo e(asset('storage/' . $group->group_avatar)); ?>" alt="">
                            </li>
                    </ul>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <li class="font-bold text-neutral-500">This user is not part of any group.</li>
                    <?php endif; ?>
                </div>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald0d1d1d86750fa9b83ac7b3e346001c3)): ?>
<?php $component = $__componentOriginald0d1d1d86750fa9b83ac7b3e346001c3; ?>
<?php unset($__componentOriginald0d1d1d86750fa9b83ac7b3e346001c3); ?>
<?php endif; ?>
        </div>
    </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH /var/www/html/Forum-OGUsers/resources/views/profile/show.blade.php ENDPATH**/ ?>