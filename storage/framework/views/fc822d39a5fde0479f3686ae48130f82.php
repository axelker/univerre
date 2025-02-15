<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Univerre</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">

        <!-- Styles / Scripts -->
        <?php if(file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot'))): ?>
            <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
        <?php else: ?>

        <?php endif; ?>
    </head>
    <body class="font-sans antialiased bg-black text-white">
        <header class="sticky top-0 bg-black w-full py-6 px-8">
            <nav class="flex justify-between">
                <img width="32" height="32" [src]="favicon" alt="logo">
                <span>EN</span>
            </nav>
        </header>

        <main class="mt-6">
            <?php echo $__env->make('sections.letter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('sections.contact', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </main>

        <footer class="sticky bottom-0 w-full bg-black text-white text-center text-sm py-4 ">
            Copyright: © [2025] A Smart Packaging Experience by Univerre
        </footer>

    </body>
</html>
<?php /**PATH C:\Users\33634\Desktop\dev-info\it-test\Univerre\landing-page\resources\views/home.blade.php ENDPATH**/ ?>