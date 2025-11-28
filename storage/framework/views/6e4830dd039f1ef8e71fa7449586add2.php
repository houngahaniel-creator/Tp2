

<?php $__env->startSection('title', 'Créer une Région - Culture Bénin'); ?>

<?php $__env->startSection('content'); ?>
<div class="min-h-screen bg-gray-50 dark:bg-gray-900 py-8">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header -->
        <div class="text-center mb-12" data-aos="fade-down">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-4">
                Créer une <span class="text-benin-green">Région</span>
            </h1>
            <p class="text-xl text-gray-600 dark:text-gray-400">
                Ajoutez une nouvelle région du Bénin à la plateforme
            </p>
        </div>

        <!-- Form Card -->
        <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-2xl overflow-hidden" data-aos="fade-up">
            <div class="benin-gradient px-6 py-4">
                <h2 class="text-xl font-bold text-white">Nouvelle région</h2>
            </div>

            <form action="<?php echo e(route('regions.store')); ?>" method="POST" class="p-6 space-y-6">
                <?php echo csrf_field(); ?>

                <!-- Nom de la région -->
                <div data-aos="fade-up" data-aos-delay="100">
                    <label for="nom_region" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Nom de la région *
                    </label>
                    <input type="text" 
                           id="nom_region" 
                           name="nom_region" 
                           required
                           class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-benin-green focus:border-transparent dark:bg-gray-700 dark:text-white transition-all duration-300"
                           placeholder="Ex: Atlantique, Zou, Borgou..."
                           value="<?php echo e(old('nom_region')); ?>">
                    <?php $__errorArgs = ['nom_region'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="mt-1 text-sm text-red-600"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <!-- Description -->
                <div data-aos="fade-up" data-aos-delay="150">
                    <label for="description" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Description
                    </label>
                    <textarea id="description" 
                              name="description" 
                              rows="4"
                              class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-benin-green focus:border-transparent dark:bg-gray-700 dark:text-white transition-all duration-300 resize-vertical"
                              placeholder="Décrivez la région, ses particularités culturelles, son histoire..."><?php echo e(old('description')); ?></textarea>
                    <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="mt-1 text-sm text-red-600"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <!-- Localisation & Population -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6" data-aos="fade-up" data-aos-delay="200">
                    <!-- Localisation -->
                    <div>
                        <label for="localisation" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            Localisation
                        </label>
                        <input type="text" 
                               id="localisation" 
                               name="localisation" 
                               class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-benin-green focus:border-transparent dark:bg-gray-700 dark:text-white transition-all duration-300"
                               placeholder="Ex: Sud du Bénin"
                               value="<?php echo e(old('localisation')); ?>">
                        <?php $__errorArgs = ['localisation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="mt-1 text-sm text-red-600"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <!-- Population -->
                    <div>
                        <label for="population" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            Population
                        </label>
                        <input type="number" 
                               id="population" 
                               name="population" 
                               min="0"
                               class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-benin-green focus:border-transparent dark:bg-gray-700 dark:text-white transition-all duration-300"
                               placeholder="Ex: 1500000"
                               value="<?php echo e(old('population')); ?>">
                        <?php $__errorArgs = ['population'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="mt-1 text-sm text-red-600"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>

                <!-- Superficie & Langues -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6" data-aos="fade-up" data-aos-delay="250">
                    <!-- Superficie -->
                    <div>
                        <label for="superficie" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            Superficie (km²)
                        </label>
                        <input type="number" 
                               id="superficie" 
                               name="superficie" 
                               min="0" 
                               step="0.01"
                               class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-benin-green focus:border-transparent dark:bg-gray-700 dark:text-white transition-all duration-300"
                               placeholder="Ex: 3255.25"
                               value="<?php echo e(old('superficie')); ?>">
                        <?php $__errorArgs = ['superficie'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="mt-1 text-sm text-red-600"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <!-- Langues -->
                    <div>
                        <label for="langues" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            Langues parlées
                        </label>
                        <select id="langues" 
                                name="langues[]" 
                                multiple
                                class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-benin-green focus:border-transparent dark:bg-gray-700 dark:text-white transition-all duration-300 h-32">
                            <?php $__currentLoopData = $langues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $langue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($langue->id); ?>" <?php echo e(in_array($langue->id, old('langues', [])) ? 'selected' : ''); ?>>
                                <?php echo e($langue->nom_langue); ?> (<?php echo e($langue->code_langue); ?>)
                            </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <p class="mt-1 text-sm text-gray-500">Maintenez Ctrl (ou Cmd) pour sélectionner plusieurs langues</p>
                        <?php $__errorArgs = ['langues'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="mt-1 text-sm text-red-600"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>

                <!-- Actions -->
                <div class="flex flex-col sm:flex-row justify-between space-y-4 sm:space-y-0 sm:space-x-6 pt-6 border-t border-gray-200 dark:border-gray-600" data-aos="fade-up" data-aos-delay="300">
                    <a href="<?php echo e(route('regions.index')); ?>" 
                       class="px-6 py-3 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700 transition-all duration-300 text-center font-medium">
                       Annuler
                    </a>
                    
                    <button type="submit" 
                            class="px-6 py-3 bg-benin-green text-white rounded-lg hover:bg-benin-dark-green transition-all duration-300 transform hover:scale-105 font-medium shadow-lg">
                        Créer la région
                    </button>
                </div>
            </form>
        </div>

        <!-- Help Section -->
        <div class="mt-8 bg-blue-50 dark:bg-blue-900/20 rounded-2xl p-6" data-aos="fade-up" data-aos-delay="350">
            <div class="flex items-start space-x-4">
                <div class="w-8 h-8 bg-blue-100 dark:bg-blue-800 rounded-full flex items-center justify-center flex-shrink-0">
                    <svg class="w-4 h-4 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <div>
                    <h3 class="font-semibold text-blue-900 dark:text-blue-100 mb-2">Conseils pour créer une région</h3>
                    <ul class="text-blue-700 dark:text-blue-300 text-sm space-y-1">
                        <li>• Utilisez le nom officiel de la région</li>
                        <li>• Incluez les langues principales parlées dans la région</li>
                        <li>• Fournissez une description riche du patrimoine culturel</li>
                        <li>• Les données de population et superficie aident à la contextualisation</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>

<style>
    input:focus, select:focus, textarea:focus {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(0, 135, 81, 0.1);
    }
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laravel-projects\culture\resources\views/regions/create.blade.php ENDPATH**/ ?>