<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Univerre</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <?php echo $__env->yieldContent('styles'); ?>
        <!-- Styles / Scripts -->
        <?php if(file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot'))): ?>
            <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
        <?php else: ?>

        <?php endif; ?>
    </head>
    <body class="font-sans antialiased bg-black text-white">
        <header class="sticky top-0 bg-black w-full py-6 px-5">
            <nav class="flex justify-between">
            <img class="logo__img" src="https://www.univerre.ch/wp-content/themes/multi-shop-child/assets/images/logo.svg" alt="logotype">
            <span>EN</span>
            </nav>
        </header>

        <main class="mt-10 grid grid-cols-1 gap-10">
            <div class="flex justify-center">
                <?php echo $__env->make('sections.letter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="flex justify-center">
                <?php echo $__env->make('sections.contact', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </main>

        <footer class="sticky bottom-0 w-full bg-black text-white text-center text-sm py-4 ">
            Copyright: © [2025] A Smart Packaging Experience by Univerre
        </footer>

    </body>
</html>
<?php /**PATH C:\Users\33634\Desktop\dev-info\it-test\Univerre\landing-page\resources\views/home.blade.php ENDPATH**/ ?>