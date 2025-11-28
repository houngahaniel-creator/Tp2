

<?php $__env->startSection('title', 'Modifier ' . $region->nom_region . ' - Culture Bénin'); ?>

<?php $__env->startSection('content'); ?>
<div class="min-h-screen bg-gray-50 dark:bg-gray-900 py-8">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header -->
        <div class="text-center mb-12" data-aos="fade-down">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-4">
                Modifier la <span class="text-benin-green">région</span>
            </h1>
            <p class="text-xl text-gray-600 dark:text-gray-400">
                Mettez à jour les informations de <?php echo e($region->nom_region); ?>

            </p>
        </div>

        <!-- Form Card -->
        <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-2xl overflow-hidden" data-aos="fade-up">
            <div class="benin-gradient px-6 py-4">
                <h2 class="text-xl font-bold text-white">Modification de la région</h2>
            </div>

            <form action="<?php echo e(route('regions.update', $region)); ?>" method="POST" class="p-6 space-y-6">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>

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
                           placeholder="Ex: Atlantique"
                           value="<?php echo e(old('nom_region', $region->nom_region)); ?>">
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
                              placeholder="Décrivez cette région, ses particularités culturelles..."><?php echo e(old('description', $region->description)); ?></textarea>
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

                <!-- Population & Superficie -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6" data-aos="fade-up" data-aos-delay="200">
                    <!-- Population -->
                    <div>
                        <label for="population" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            Population
                        </label>
                        <input type="number" 
                               id="population" 
                               name="population" 
                               class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-benin-green focus:border-transparent dark:bg-gray-700 dark:text-white transition-all duration-300"
                               placeholder="Ex: 1500000"
                               value="<?php echo e(old('population', $region->population)); ?>">
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

                    <!-- Superficie -->
                    <div>
                        <label for="superficie" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            Superficie (km²)
                        </label>
                        <input type="number" 
                               id="superficie" 
                               name="superficie" 
                               step="0.01"
                               class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-benin-green focus:border-transparent dark:bg-gray-700 dark:text-white transition-all duration-300"
                               placeholder="Ex: 3250"
                               value="<?php echo e(old('superficie', $region->superficie)); ?>">
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
                </div>

                <!-- Localisation -->
                <div data-aos="fade-up" data-aos-delay="250">
                    <label for="localisation" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Localisation
                    </label>
                    <input type="text" 
                           id="localisation" 
                           name="localisation" 
                           class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-benin-green focus:border-transparent dark:bg-gray-700 dark:text-white transition-all duration-300"
                           placeholder="Ex: Sud du Bénin"
                           value="<?php echo e(old('localisation', $region->localisation)); ?>">
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

                <!-- Langues parlées -->
<div data-aos="fade-up" data-aos-delay="300">
    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-4">
        Langues parlées dans cette région
    </label>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3">
        <?php $__currentLoopData = $langues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $langue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="flex items-center">
                <input type="checkbox" 
                       name="langues[]" 
                       id="langue_<?php echo e($langue->id); ?>"
                       value="<?php echo e($langue->id); ?>"
                       <?php echo e(in_array($langue->id, old('langues', $region->langue ? $region->langue->pluck('id')->toArray() : [])) ? 'checked' : ''); ?>

                       class="h-4 w-4 text-benin-green border-gray-300 rounded focus:ring-benin-green dark:focus:ring-benin-yellow">
                <label for="langue_<?php echo e($langue->id); ?>" class="ml-2 text-sm text-gray-700 dark:text-gray-300">
                    <?php echo e($langue->nom_langue); ?>

                </label>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
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

                <!-- Actions -->
                <div class="flex flex-col sm:flex-row justify-between space-y-4 sm:space-y-0 sm:space-x-6 pt-6 border-t border-gray-200 dark:border-gray-600" data-aos="fade-up" data-aos-delay="350">
                    <div class="flex space-x-4">
                        <a href="<?php echo e(route('regions.show', $region)); ?>" 
                           class="px-6 py-3 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700 transition-all duration-300 text-center font-medium">
                           Annuler
                        </a>
                        
                        <button type="button"
                                onclick="confirmDelete()"
                                class="px-6 py-3 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-all duration-300 transform hover:scale-105 font-medium shadow-lg">
                            Supprimer
                        </button>
                    </div>
                    
                    <button type="submit" 
                            class="px-6 py-3 bg-benin-green text-white rounded-lg hover:bg-benin-dark-green transition-all duration-300 transform hover:scale-105 font-medium shadow-lg">
                        💾 Enregistrer les modifications
                    </button>
                </div>
            </form>

            <!-- Delete Form -->
            <form id="delete-form" action="<?php echo e(route('regions.destroy', $region)); ?>" method="POST" class="hidden">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
            </form>
        </div>

    </div>
</div>

<script>
function confirmDelete() {
    if (confirm('Êtes-vous sûr de vouloir supprimer cette région ? Cette action est irréversible.')) {
        document.getElementById('delete-form').submit();
    }
}
</script>

<style>
    input:focus, select:focus, textarea:focus {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(0, 135, 81, 0.1);
    }
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laravel-projects\culture\resources\views/regions/edit.blade.php ENDPATH**/ ?>