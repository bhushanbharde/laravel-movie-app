<?php $__env->startSection('content'); ?>
    <div class="tv-info border-b border-gray-800 ">
        <div class="container mx-auto md:px-24 px-4 py-16 flex flex-col md:flex-row">
            <img src="<?php echo e($tvshow['poster_path']); ?>" alt="" class="w-full md:w-96">

            <div class="md:ml-24">
                <h2 class="text-4xl font-semibold"><?php echo e($tvshow['name']); ?></h2>
                <div class="mt-2">
                    <div class="flex flex-wrap items-center to-gray-400 text-sm mt-1">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path style="marker:none" fill="#f8b84e" d="M-1220 1212.362c-11.656 8.326-86.446-44.452-100.77-44.568-14.324-.115-89.956 51.449-101.476 42.936-11.52-8.513 15.563-95.952 11.247-109.61-4.316-13.658-76.729-69.655-72.193-83.242 4.537-13.587 96.065-14.849 107.721-23.175 11.656-8.325 42.535-94.497 56.86-94.382 14.323.116 43.807 86.775 55.327 95.288 11.52 8.512 103.017 11.252 107.334 24.91 4.316 13.658-68.99 68.479-73.527 82.066-4.536 13.587 21.133 101.451 9.477 109.777z" color="#000" overflow="visible" transform="matrix(.04574 0 0 .04561 68.85 -40.34)"/></svg>
                        </span>
                        <span class="ml-2"><?php echo e($tvshow['vote_average']); ?></span>
                        <span class="mx-2">|</span>         
                        <span><?php echo e($tvshow['first_air_date']); ?></span>
                        <span class="mx-2">|</span>
                        <span><?php echo e($tvshow['genres']); ?></span>
                    </div>

                    <p class="text-gray-300 mt-8">
                        <?php echo e($tvshow['overview']); ?>

                    </p>

                    <div class="mt-12">
                        <div class="flex mt-4">
                            <?php $__currentLoopData = $tvshow['created_by']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $crew): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="mr-12">
                                    <div><?php echo e($crew['name']); ?></div>
                                    <div class="text-sm text-gray-400">Creator</div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    
                    <div x-data="{isOpen: false }">
                        <?php if(count($tvshow['videos']['results']) > 0): ?>
                            <div class="mt-12">
                                <button 
                                    href="https://youtube.com/watch?v=<?php echo e($tvshow['videos']['results'][0]['key']); ?>" 
                                    class="flex w-fit items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150"
                                    @click="isOpen=true"
                                >
                                    <span>Play Trailer</span>
                                </button>
                            </div>
                        <?php endif; ?>

                        
                        <div
                            style="background-color: rgba(0, 0, 0, .8);"
                            class="fixed top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto"
                            x-show="isOpen"
                            x-transition.duration.200ms
                        >
                            <div class="container mx-auto lg:px-32 rounded-lg overflow-y-auto">
                                <div class="bg-gray-900 rounded">
                                    <div class="flex justify-end pr-4 pt-2">
                                        <button
                                            @click="isOpen = false"
                                            @keydown.escape.window="isOpen = false"
                                            class="text-3xl leading-none hover:text-gray-300">&times;
                                        </button>
                                    </div>
                                    <div class="modal-body px-8 py-8">
                                        <div class="responsive-container overflow-hidden relative" style="padding-top: 56.25%">
                                            <iframe class="responsive-iframe absolute top-0 left-0 w-full h-full" src="https://www.youtube.com/embed/<?php echo e($tvshow['videos']['results'][0]['key']); ?>" style="border:0;" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 

                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="tv-cast border-b border-gray-800">
        <div class="container mx-auto md:px-24 px-4 py-16">
            <h2 class="text-xl font-semibold">Cast</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                 
                <?php $__currentLoopData = $tvshow['cast']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cast): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($loop->index < 10): ?>
                        <div class="mt-8">
                            <a href="/actors/<?php echo e($cast['id']); ?>" >
                                <?php if($cast['profile_path'] == null): ?>
                                    <img src="https://via.placeholder.com/400x600" alt="actor" class="hover:opacity-75 transition ease-in-out duration-150">
                                <?php else: ?>
                                    <img src="<?php echo e('https://image.tmdb.org/t/p/w300/'.$cast['profile_path']); ?>" alt="actor" class="hover:opacity-75 transition ease-in-out duration-150">
                                <?php endif; ?>
                            </a>
                            <div class="mt-2">
                                <a href="/actors/<?php echo e($cast['id']); ?>" class="text-lg mt-3 hover:text-gray-300"><?php echo e($cast['name']); ?></a>
                                <span class="flex items-center to-gray-400 text-sm">
                                    <?php echo e($cast['character']); ?>

                                </span>
                            </div>
                        </div>
                    <?php else: ?>
                        <?php break; ?>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
    </div>

    <div class="tvshow-images" x-data="{ isOpen: false, image: '' }">
        <div class="container mx-auto px-24 py-16">
            <h2 class="text-4xl font-semibold mb-2">Images</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <?php $__currentLoopData = $tvshow['images']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="mt-8">
                        <a href="#" 
                            @click.prevent="
                                isOpen = true 
                                image='<?php echo e('https://image.tmdb.org/t/p/original/'.$image['file_path']); ?>'
                            "
                        >
                            <img src="<?php echo e('https://image.tmdb.org/t/p/w500/'.$image['file_path']); ?>" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div> --}}

            
            
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Disk H\7.Study\website\laravel-movie-app\resources\views/tv/show.blade.php ENDPATH**/ ?>