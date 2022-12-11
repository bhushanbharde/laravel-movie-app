<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie App</title>

    <link rel="stylesheet" href="/css/app.css">
    
    <?php echo \Livewire\Livewire::styles(); ?>

    <script defer src="https://unpkg.com/alpinejs@3.10.5/dist/cdn.min.js"></script>
</head>
<body class="font-sans bg-gray-900 text-white">

    <nav class="border-b border-gray-800">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-24 py-6">
            <ul class="flex flex-col md:flex-row items-center">
                <li>
                    <a href="/" class="text-xl bold">MovieApp</a>
                </li>
                <li class="md:ml-16">
                    <a href="/" class="hover:text-gray-300 mt-3 md:mt-0">Movies</a>
                </li>
                <li class="md:ml-6">
                    <a href="/tv" class="hover:text-gray-300 mt-3 md:mt-0">TV Shows</a>
                </li>
                <li class="md:ml-6">
                    <a href="/actors" class="hover:text-gray-300 mt-3 md:mt-0">Actors</a>
                </li>
            </ul>

            <div class="flex flex-col md:flex-row items-center">
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('search-dropdown', [])->html();
} elseif ($_instance->childHasBeenRendered('dloy8gR')) {
    $componentId = $_instance->getRenderedChildComponentId('dloy8gR');
    $componentTag = $_instance->getRenderedChildComponentTagName('dloy8gR');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('dloy8gR');
} else {
    $response = \Livewire\Livewire::mount('search-dropdown', []);
    $html = $response->html();
    $_instance->logRenderedChild('dloy8gR', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                <div class="md:ml-4 mt-3 md:mt-0">
                    <a href="#">
                        <img src="/img/avtar.jpg" alt="" class="rounded-full w-8 h-8">
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo \Livewire\Livewire::scripts(); ?>

    <?php echo $__env->yieldContent('scripts'); ?>
</body>
</html><?php /**PATH D:\Disk H\7.Study\Laravel\laravel-movies\resources\views/layout/main.blade.php ENDPATH**/ ?>