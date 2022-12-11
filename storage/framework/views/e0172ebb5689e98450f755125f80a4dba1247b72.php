<div class="relative mt-3 md:mt-0" x-data="{isOpen: true}" @click.away="isOpen = false">
    <input 
        wire:model.debounce.700ms="search"
        type="text" 
        class="mt-3 md:mt-0 bg-gray-800 rounded-full w-64 px-4 py-1 focus:outline-none focus:shadow-outline" 
        placeholder="Search"
        @focus="isOpen = true"
        @keydown="isOpen = true"
        @keydown.escape.window="isOpen = false"
        @keydown.shift.tab="isOpen = false"
    >
    <div wire:loading class="spinner top-0 right-0 mr-3 mt-4"></div>
    <?php if(strlen($search) >= 2): ?>  
        <div class="absolute bg-gray-800 text-sm rounded w-64 mt-4 z-50" 
            x-show.transition.opacity="isOpen"
        >
            <?php if($searchResults->count() > 0): ?>
                <ul>
                    <?php $__currentLoopData = $searchResults; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="border-b border-gray-700">
                            <a href="/movies/<?php echo e($result['id']); ?>" class="hover:bg-gray-700 px-3 py-3 flex items-center"
                                <?php if($loop->last): ?> @keydown.tab="isOpen = false" <?php endif; ?>
                            >
                                <?php if($result['poster_path']): ?>
                                    <img src="https://image.tmdb.org/t/p/w92/<?php echo e($result['poster_path']); ?>" alt="" class="w-8"> 
                                <?php else: ?>
                                    <img src="https://via.placeholder.com/50x75" alt="" class="w-8">
                                <?php endif; ?>
                                <span class="ml-4"><?php echo e($result['title']); ?></span>
                            </a>
                        </li> 
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            <?php else: ?>
                <div class="px-3 py-3">
                    No results for "<?php echo e($search); ?>"
                </div>
            <?php endif; ?>

        </div>
    <?php endif; ?>
</div><?php /**PATH D:\Disk H\7.Study\Laravel\laravel-movies\resources\views/livewire/search-dropdown.blade.php ENDPATH**/ ?>