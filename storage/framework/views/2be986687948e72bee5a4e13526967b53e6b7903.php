<?php $__env->startSection('content'); ?>
    <div class="container mx-auto md:px-24 px-8 py-16">
        <div class="popoular-actors">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">popular actors</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                <?php $__currentLoopData = $popularActors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $actor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="actor mt-8">
                        <a href="/actors/<?php echo e($actor['id']); ?>">
                            <img src="<?php echo e($actor['profile_path']); ?>" 
                                alt="proflie-pic"
                                class="hover:opacity-75 transition ease-in-out duration-150"
                            >
                        </a>
                        <div class="mt-2">
                            <a href="/actors/<?php echo e($actor['id']); ?>" class="text-lg hover:text-gray-300"><?php echo e($actor['name']); ?></a>
                            <div class="text-sm truncate text-gray-400"><?php echo e($actor['known_for']); ?></div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>

        <div class="page-load-status my-8">
            <div class="flex justify-center">
                <div class="infinite-scroll-request spinner my-12 text-4xl">&nbsp;</div>
            </div>
            
            <p class="infinite-scroll-last">End of content</p>
        </div>

        
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="https://unpkg.com/infinite-scroll@4/dist/infinite-scroll.pkgd.js"></script>

    <script>
        let elem = document.querySelector('.grid');
        let infScroll = new InfiniteScroll( elem, {
            // options
            path: '/actors/page/{{#}}',
            append: '.actor',
            status: '.page'
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/vijayabharde/Desktop/Lara/movie-app/resources/views/actors/index.blade.php ENDPATH**/ ?>