<?php $__env->startSection('content'); ?>
    <div class="container mx-auto md:px-24 px-8 py-16">
        <div class="popoular-tv">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">popular shows</h2>
            <div class="grid grid-cols-1  sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                <?php $__currentLoopData = $popularTv; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tvshow): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if (isset($component)) { $__componentOriginal80f5b95c8947710578ff213f804f57287b4f20c3 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TvCard::class, ['tvshow' => $tvshow]); ?>
<?php $component->withName('tv-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal80f5b95c8947710578ff213f804f57287b4f20c3)): ?>
<?php $component = $__componentOriginal80f5b95c8947710578ff213f804f57287b4f20c3; ?>
<?php unset($__componentOriginal80f5b95c8947710578ff213f804f57287b4f20c3); ?>
<?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>

        <div class="top-rated-tv py-24">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">top rated shows</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                <?php $__currentLoopData = $topRatedTv; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tvshow): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if (isset($component)) { $__componentOriginal80f5b95c8947710578ff213f804f57287b4f20c3 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TvCard::class, ['tvshow' => $tvshow]); ?>
<?php $component->withName('tv-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal80f5b95c8947710578ff213f804f57287b4f20c3)): ?>
<?php $component = $__componentOriginal80f5b95c8947710578ff213f804f57287b4f20c3; ?>
<?php unset($__componentOriginal80f5b95c8947710578ff213f804f57287b4f20c3); ?>
<?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/vijayabharde/Desktop/Lara/movie-app/resources/views/tv/index.blade.php ENDPATH**/ ?>