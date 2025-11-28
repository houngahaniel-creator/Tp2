

<?php $__env->startSection('title', 'Modifier ' . $langue->nom_langue . ' - Culture Bénin'); ?>

<?php $__env->startSection('content'); ?>
<div class="min-h-screen bg-gray-50 dark:bg-gray-900 py-8">
    <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header -->
        <div class="text-center mb-12" data-aos="fade-down">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-4">
                Modifier la <span class="text-benin-green">langue</span>
            </h1>
            <p class="text-xl text-gray-600 dark:text-gray-400">
                Mettez à jour les informations de <?php echo e($langue->nom_langue); ?>

            </p>
        </div>

        <!-- Form Card -->
        <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-2xl overflow-hidden" data-aos="fade-up">
            <div class="benin-gradient px-6 py-4">
                <div class="flex items-center justify-between">
                    <h2 class="text-xl font-bold text-white">Modification de la langue</h2>
                    <span class="bg-white/20 backdrop-blur-sm rounded-full px-3 py-1 text-sm text-white">
                        <?php echo e($langue->code_langue); ?>

                    </span>
                </div>
            </div>

            <form action="<?php echo e(route('langues.update', $langue)); ?>" method="POST" class="p-6 space-y-6">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>

                <!-- Nom de la langue -->
                <div data-aos="fade-up" data-aos-delay="100">
                    <label for="nom_langue" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Nom de la langue *
                    </label>
                    <input type="text" 
                           id="nom_langue" 
                           name="nom_langue" 
                           required
                           class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-benin-green focus:border-transparent dark:bg-gray-700 dark:text-white transition-all duration-300"
                           placeholder="Ex: Fon, Yoruba, Goun..."
                           value="<?php echo e(old('nom_langue', $langue->nom_langue)); ?>">
                    <?php $__errorArgs = ['nom_langue'];
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

                <!-- Code de la langue -->
                <div data-aos="fade-up" data-aos-delay="150">
                    <label for="code_langue" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Code de la langue *
                    </label>
                    <input type="text" 
                           id="code_langue" 
                           name="code_langue" 
                           required
                           class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-benin-green focus:border-transparent dark:bg-gray-700 dark:text-white transition-all duration-300"
                           placeholder="Ex: fon, yo, gu..."
                           value="<?php echo e(old('code_langue', $langue->code_langue)); ?>">
                    <?php $__errorArgs = ['code_langue'];
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
                <div data-aos="fade-up" data-aos-delay="200">
                    <label for="description" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Description
                    </label>
                    <textarea id="description" 
                              name="description" 
                              rows="4"
                              class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-benin-green focus:border-transparent dark:bg-gray-700 dark:text-white transition-all duration-300 resize-vertical"
                              placeholder="Décrivez cette langue, son origine, ses particularités..."><?php echo e(old('description', $langue->description)); ?></textarea>
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

                <!-- Actions -->
                <div class="flex flex-col sm:flex-row justify-between space-y-4 sm:space-y-0 sm:space-x-6 pt-6 border-t border-gray-200 dark:border-gray-600" data-aos="fade-up" data-aos-delay="250">
                    <div class="flex space-x-4">
                        <a href="<?php echo e(route('langues.show', $langue)); ?>" 
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
            <form id="delete-form" action="<?php echo e(route('langues.destroy', $langue)); ?>" method="POST" class="hidden">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
            </form>
        </div>

    </div>
</div>

<script>
function confirmDelete() {
    if (confirm('Êtes-vous sûr de vouloir supprimer cette langue ? Cette action est irréversible.')) {
        document.getElementById('delete-form').submit();
    }
}
</script>

<style>
    input:focus, textarea:focus {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(0, 135, 81, 0.1);
    }
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laravel-projects\culture\resources\views/langues/edit.blade.php ENDPATH**/ ?>