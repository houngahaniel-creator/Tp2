<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Culture Bénin'); ?></title>
    
    <!-- INCLUSION VITE - CORRECTE -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <span class="text-2xl font-bold text-[#008751]">
                        Culture<span class="text-[#FCD116]">Bénin</span>
                    </span>
                </div>
                <div class="flex items-center space-x-8">
                    <a href="<?php echo e(route('home')); ?>" class="text-gray-700 hover:text-[#008751] transition duration-300">Accueil</a>
                    <a href="<?php echo e(route('contenus.index')); ?>" class="text-gray-700 hover:text-[#008751] transition duration-300">Contenus</a>
                    <a href="<?php echo e(route('regions.index')); ?>" class="text-gray-700 hover:text-[#008751] transition duration-300">Régions</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white mt-12 py-8">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <p>&copy; 2024 Culture Bénin. Tous droits réservés.</p>
        </div>
    </footer>
</body>
</html><?php /**PATH C:\laravel-projects\culture\resources\views/app.blade.php ENDPATH**/ ?>