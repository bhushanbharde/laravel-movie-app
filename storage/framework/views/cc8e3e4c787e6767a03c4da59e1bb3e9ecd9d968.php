<?php $__env->startSection('content'); ?>
    <div class="movie-info border-b border-gray-800 ">
        <div class="container mx-auto md:px-24 px-4 py-16 flex flex-col md:flex-row">
            <div class="flex-none">
                <img src="<?php echo e($actor['profile_path']); ?>" alt="" class="w-full md:w-76">
                <ul class="flex items-center mt-4">
                    
                    <?php if($social['facebook']): ?>
                        <li class="ml-6">
                            <a href="<?php echo e($social['facebook']); ?>" title="">Fb</a>
                        </li>
                    <?php endif; ?>

                    <?php if($social['instagram']): ?>
                        <li class="ml-6">
                            <a href="<?php echo e($social['instagram']); ?>" title="">Insta</a>
                        </li>
                    <?php endif; ?>

                    <?php if($social['twitter']): ?>
                        <li class="ml-6">
                            <a href="<?php echo e($social['twitter']); ?>" title="">Tw</a>
                        </li>
                    <?php endif; ?>
                    <?php if($actor['homepage']): ?>
                        <li class="ml-6">
                            <a href="<?php echo e($actor['homepage']); ?>" title="">Web</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="md:ml-24">
                <h2 class="text-4xl font-semibold"><?php echo e($actor['name']); ?></h2>
                <div class="mt-2">
                    <div class="flex flex-wrap items-center to-gray-400 text-sm mt-1">
                        <span>
                            
                        </span>
                        <span class=""><?php echo e($actor['birthday']); ?> (<?php echo e($actor['age']); ?> years old) in <?php echo e($actor['place_of_birth']); ?></span>

                    <p class="text-gray-300 mt-8">
                        <?php echo e($actor['biography']); ?>

                    </p>

                    <h4 class="font-semibol mt-12">Known For</h4>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8">
                        <?php $__currentLoopData = $knownForMovies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="mt-4">
                                <a href="<?php echo e($movie['linkToPage']); ?>">
                                    <img src="<?php echo e($movie['poster_path']); ?>" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                                </a>
                                <a href="" class="text-sm leading-normal text-gray-400 hover:text-white mt-1"><?php echo e($movie['title']); ?> </a>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="credits border-b border-gray-800">
        <div class="container mx-auto md:px-24 px-4 py-16">
            <h2 class="text-4xl font-semibold">Credits</h2>
            <ul class="list-disc leading-loose pl-5 mt-8">
                <?php $__currentLoopData = $credits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $credit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($credit['release_year']); ?> &middot; <strong><?php echo e($credit['title']); ?></strong> as <?php echo e($credit['character']); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Disk H\7.Study\Laravel\laravel-movies\resources\views/actors/show.blade.php ENDPATH**/ ?>