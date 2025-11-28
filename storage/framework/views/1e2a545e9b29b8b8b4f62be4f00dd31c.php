

<?php $__env->startSection('title', $langue->nom_langue . ' - Culture Bénin'); ?>

<?php $__env->startSection('content'); ?>
<div class="min-h-screen bg-white dark:bg-gray-900">
    <!-- Hero Section -->
    <section class="benin-gradient text-white py-20 relative overflow-hidden">
        <div class="absolute inset-0 bg-black/40"></div>
        
        <!-- Floating elements -->
        <div class="absolute top-10 left-10 w-20 h-20 bg-white/10 rounded-full animate-float"></div>
        <div class="absolute bottom-20 right-10 w-32 h-32 bg-white/10 rounded-full animate-float" style="animation-delay: 2s;"></div>
        
        <div class="relative z-10 max-w-4xl mx-auto px-4 text-center">
            <!-- Code Langue Badge -->
            <div class="inline-block bg-white/20 backdrop-blur-sm rounded-2xl px-6 py-3 mb-6" data-aos="fade-down">
                <span class="text-sm font-medium">Code : <?php echo e($langue->code_langue); ?></span>
            </div>
            
            <!-- Title -->
            <h1 class="text-4xl md:text-5xl font-bold mb-6 text-glow" data-aos="fade-up"><?php echo e($langue->nom_langue); ?></h1>
            
            <!-- Metadata -->
            <div class="flex flex-wrap justify-center items-center gap-6 text-sm mb-8" data-aos="fade-up" data-aos-delay="200">
                <!-- Utilisateurs -->
                <div class="flex items-center space-x-2 bg-white/10 backdrop-blur-sm rounded-full px-4 py-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"/>
                    </svg>
                    <span><?php echo e($langue->users_count); ?> utilisateurs</span>
                </div>
                
                <!-- Contenus -->
                <div class="flex items-center space-x-2 bg-white/10 backdrop-blur-sm rounded-full px-4 py-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                    <span><?php echo e($langue->contenus_count); ?> contenus</span>
                </div>
                
                <!-- Régions -->
                <div class="flex items-center space-x-2 bg-white/10 backdrop-blur-sm rounded-full px-4 py-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                    </svg>
                    <span><?php echo e($langue->regions->count()); ?> régions</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Content Section -->
    <section class="max-w-6xl mx-auto px-4 py-16">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
            <!-- Main Content -->
            <article class="lg:col-span-3 space-y-8">
                <!-- Description -->
                <?php if($langue->description): ?>
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg p-8" data-aos="fade-up">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Description</h2>
                    <div class="prose prose-lg dark:prose-invert max-w-none">
                        <p class="text-gray-700 dark:text-gray-300 leading-relaxed"><?php echo e($langue->description); ?></p>
                    </div>
                </div>
                <?php endif; ?>

                <!-- Contenus Section -->
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg p-8" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-center justify-between mb-6">
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Contenus récents</h2>
                        <span class="bg-benin-green/10 text-benin-green dark:text-benin-dark-green px-3 py-1 rounded-full text-sm font-medium">
                            <?php echo e($langue->contenus_count); ?> au total
                        </span>
                    </div>
                    
                    <div class="space-y-4">
                        <?php $__empty_1 = true; $__currentLoopData = $langue->contenus->take(5); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <a href="<?php echo e(route('contenus.show', $contenu)); ?>" 
                           class="block p-4 rounded-lg border border-gray-200 dark:border-gray-600 hover:border-benin-green dark:hover:border-benin-yellow hover:bg-gray-50 dark:hover:bg-gray-700 transition-all duration-300 group">
                            <div class="flex items-center justify-between">
                                <div class="flex-1 min-w-0">
                                    <h3 class="font-semibold text-gray-900 dark:text-white group-hover:text-benin-green dark:group-hover:text-benin-yellow transition-colors duration-300 truncate">
                                        <?php echo e($contenu->titre); ?>

                                    </h3>
                                    <div class="flex items-center space-x-4 mt-1 text-sm text-gray-500">
                                        <span class="flex items-center">
                                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                            </svg>
                                            <?php echo e($contenu->created_at->format('d/m/Y')); ?>

                                        </span>
                                        <span class="bg-gray-100 dark:bg-gray-600 px-2 py-1 rounded text-xs">
                                            <?php echo e($contenu->typeContenu->nom ?? 'Culture'); ?>

                                        </span>
                                    </div>
                                </div>
                                <svg class="w-5 h-5 text-gray-400 group-hover:text-benin-green dark:group-hover:text-benin-yellow transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </div>
                        </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <div class="text-center py-8">
                            <svg class="w-12 h-12 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                            <p class="text-gray-500 dark:text-gray-400">Aucun contenu disponible dans cette langue</p>
                        </div>
                        <?php endif; ?>
                    </div>

                    <?php if($langue->contenus_count > 5): ?>
                    <div class="mt-6 text-center">
                        <a href="<?php echo e(route('contenus.index')); ?>?langue=<?php echo e($langue->id); ?>" 
                           class="inline-flex items-center text-benin-green hover:text-benin-dark-green dark:hover:text-benin-yellow transition-colors duration-300 font-medium">
                           Voir tous les contenus
                           <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                           </svg>
                        </a>
                    </div>
                    <?php endif; ?>
                </div>

                <!-- Régions Section -->
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg p-8" data-aos="fade-up" data-aos-delay="200">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Régions où cette langue est parlée</h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <?php $__empty_1 = true; $__currentLoopData = $langue->regions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $region): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <a href="<?php echo e(route('regions.show', $region)); ?>" 
                           class="p-4 rounded-lg border border-gray-200 dark:border-gray-600 hover:border-benin-green dark:hover:border-benin-yellow hover:bg-gray-50 dark:hover:bg-gray-700 transition-all duration-300 group">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h3 class="font-semibold text-gray-900 dark:text-white group-hover:text-benin-green dark:group-hover:text-benin-yellow transition-colors duration-300">
                                        <?php echo e($region->nom_region); ?>

                                    </h3>
                                    <?php if($region->population): ?>
                                    <p class="text-sm text-gray-500 mt-1"><?php echo e(number_format($region->population, 0, ',', ' ')); ?> habitants</p>
                                    <?php endif; ?>
                                </div>
                                <svg class="w-5 h-5 text-gray-400 group-hover:text-benin-green dark:group-hover:text-benin-yellow transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </div>
                        </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <div class="col-span-2 text-center py-8">
                            <svg class="w-12 h-12 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            </svg>
                            <p class="text-gray-500 dark:text-gray-400">Cette langue n'est pas encore associée à une région</p>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </article>

            <!-- Sidebar -->
            <aside class="lg:col-span-1 space-y-6" data-aos="fade-left" data-aos-delay="300">
                <!-- Actions Card -->
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg p-6">
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-4">Actions</h3>
                    <div class="space-y-3">
                        <a href="<?php echo e(route('langues.edit', $langue)); ?>" 
                           class="w-full flex items-center justify-center space-x-2 bg-benin-green text-white px-4 py-3 rounded-lg hover:bg-benin-dark-green transition-all duration-300 transform hover:scale-105 font-medium">
                           <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                           </svg>
                           <span>Modifier</span>
                        </a>
                        
                        <a href="<?php echo e(route('langues.index')); ?>" 
                           class="w-full flex items-center justify-center space-x-2 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 px-4 py-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700 transition-all duration-300 font-medium">
                           <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                           </svg>
                           <span>Retour à la liste</span>
                        </a>
                    </div>
                </div>

                <!-- Info Card -->
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg p-6">
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-4">Informations</h3>
                    <div class="space-y-3 text-sm">
                        <div class="flex justify-between">
                            <span class="text-gray-600 dark:text-gray-400">Code</span>
                            <span class="font-medium text-gray-900 dark:text-white"><?php echo e($langue->code_langue); ?></span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600 dark:text-gray-400">Créée le</span>
                            <span class="font-medium text-gray-900 dark:text-white"><?php echo e($langue->created_at->format('d/m/Y')); ?></span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600 dark:text-gray-400">Modifiée le</span>
                            <span class="font-medium text-gray-900 dark:text-white"><?php echo e($langue->updated_at->format('d/m/Y')); ?></span>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </section>
</div>

<style>
    .prose {
        line-height: 1.75;
    }
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laravel-projects\culture\resources\views/langues/show.blade.php ENDPATH**/ ?>