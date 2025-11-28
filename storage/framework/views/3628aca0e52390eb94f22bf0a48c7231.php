

<?php $__env->startSection('title', 'Modifier ' . $contenu->titre . ' - Culture Bénin'); ?>

<?php $__env->startSection('content'); ?>
<div class="min-h-screen bg-gray-50 dark:bg-gray-900 py-8">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header -->
        <div class="text-center mb-12" data-aos="fade-down">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-4">
                Modifier le <span class="text-benin-green">contenu</span>
            </h1>
            <p class="text-xl text-gray-600 dark:text-gray-400">
                Mettez à jour votre contribution culturelle
            </p>
        </div>

        <!-- Form Card -->
        <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-2xl overflow-hidden" data-aos="fade-up">
            <div class="benin-gradient px-6 py-4">
                <div class="flex items-center justify-between">
                    <h2 class="text-xl font-bold text-white">Modification du contenu</h2>
                    <span class="bg-white/20 backdrop-blur-sm rounded-full px-3 py-1 text-sm">
                        <?php echo e($contenu->typeContenu->nom); ?>

                    </span>
                </div>
            </div>

            <form action="<?php echo e(route('contenus.update', $contenu)); ?>" method="POST" class="p-6 space-y-6">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>

                <!-- Titre -->
                <div data-aos="fade-up" data-aos-delay="100">
                    <label for="titre" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Titre du contenu *
                    </label>
                    <input type="text" 
                           id="titre" 
                           name="titre" 
                           required
                           class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-benin-green focus:border-transparent dark:bg-gray-700 dark:text-white transition-all duration-300"
                           placeholder="Ex: La légende du Roi Béhanzin"
                           value="<?php echo e(old('titre', $contenu->titre)); ?>">
                    <?php $__errorArgs = ['titre'];
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

                <!-- Type de contenu & Région -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6" data-aos="fade-up" data-aos-delay="150">
                    <!-- Type -->
                    <div>
                        <label for="id_type_contenu" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            Type de contenu *
                        </label>
                        <select id="id_type_contenu" 
                                name="id_type_contenu" 
                                required
                                class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-benin-green focus:border-transparent dark:bg-gray-700 dark:text-white transition-all duration-300">
                            <option value="">Sélectionnez un type</option>
                            <?php $__currentLoopData = $typesContenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($type->id); ?>" <?php echo e(old('id_type_contenu', $contenu->id_type_contenu) == $type->id ? 'selected' : ''); ?>>
                                <?php echo e($type->nom); ?>

                            </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <?php $__errorArgs = ['id_type_contenu'];
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

                    <!-- Région -->
                    <div>
                        <label for="id_region" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            Région *
                        </label>
                        <select id="id_region" 
                                name="id_region" 
                                required
                                class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-benin-green focus:border-transparent dark:bg-gray-700 dark:text-white transition-all duration-300">
                            <option value="">Sélectionnez une région</option>
                            <?php $__currentLoopData = $regions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $region): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($region->id); ?>" <?php echo e(old('id_region', $contenu->id_region) == $region->id ? 'selected' : ''); ?>>
                                <?php echo e($region->nom_region); ?>

                            </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <?php $__errorArgs = ['id_region'];
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

                <!-- Langue & Statut -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6" data-aos="fade-up" data-aos-delay="200">
                    <!-- Langue -->
                    <div>
                        <label for="id_langue" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            Langue *
                        </label>
                        <select id="id_langue" 
                                name="id_langue" 
                                required
                                class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-benin-green focus:border-transparent dark:bg-gray-700 dark:text-white transition-all duration-300">
                            <option value="">Sélectionnez une langue</option>
                            <?php $__currentLoopData = $langues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $langue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($langue->id); ?>" <?php echo e(old('id_langue', $contenu->id_langue) == $langue->id ? 'selected' : ''); ?>>
                                <?php echo e($langue->nom_langue); ?> (<?php echo e($langue->code_langue); ?>)
                            </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <?php $__errorArgs = ['id_langue'];
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

                    <!-- Statut -->
                    <div>
                        <label for="statut" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            Statut *
                        </label>
                        <select id="statut" 
                                name="statut"
                                required
                                class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-benin-green focus:border-transparent dark:bg-gray-700 dark:text-white transition-all duration-300">
                            <option value="brouillon" <?php echo e(old('statut', $contenu->statut) == 'brouillon' ? 'selected' : ''); ?>>Brouillon</option>
                            <option value="en_attente" <?php echo e(old('statut', $contenu->statut) == 'en_attente' ? 'selected' : ''); ?>>En attente de modération</option>
                            <option value="publié" <?php echo e(old('statut', $contenu->statut) == 'publié' ? 'selected' : ''); ?>>Publié</option>
                            <option value="rejeté" <?php echo e(old('statut', $contenu->statut) == 'rejeté' ? 'selected' : ''); ?>>Rejeté</option>
                        </select>
                        <?php $__errorArgs = ['statut'];
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

                <!-- Contenu -->
                <div data-aos="fade-up" data-aos-delay="250">
                    <label for="texte" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Contenu *
                    </label>
                    <textarea id="texte" 
                              name="texte" 
                              required
                              rows="12"
                              class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-benin-green focus:border-transparent dark:bg-gray-700 dark:text-white transition-all duration-300 resize-vertical"
                              placeholder="Racontez votre histoire, décrivez la recette ou expliquez la tradition..."><?php echo e(old('texte', $contenu->texte)); ?></textarea>
                    <?php $__errorArgs = ['texte'];
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
                <div class="flex flex-col sm:flex-row justify-between space-y-4 sm:space-y-0 sm:space-x-6 pt-6 border-t border-gray-200 dark:border-gray-600" data-aos="fade-up" data-aos-delay="300">
                    <div class="flex space-x-4">
                        <a href="<?php echo e(route('contenus.show', $contenu)); ?>" 
                           class="px-6 py-3 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700 transition-all duration-300 text-center font-medium">
                           Annuler
                        </a>
                        
                        <button type="button"
                                onclick="confirmDelete()"
                                class="px-6 py-3 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-all duration-300 transform hover:scale-105 font-medium shadow-lg">
                            Supprimer
                        </button>
                    </div>
                    
                    <div class="flex space-x-4">
                        <button type="submit" 
                                name="action" 
                                value="save"
                                class="px-6 py-3 bg-benin-green text-white rounded-lg hover:bg-benin-dark-green transition-all duration-300 transform hover:scale-105 font-medium shadow-lg">
                            Enregistrer
                        </button>
                    </div>
                </div>
            </form>

            <!-- Delete Form -->
            <form id="delete-form" action="<?php echo e(route('contenus.destroy', $contenu)); ?>" method="POST" class="hidden">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
            </form>
        </div>

    </div>
</div>

<script>
function confirmDelete() {
    if (confirm('Êtes-vous sûr de vouloir supprimer ce contenu ? Cette action est irréversible.')) {
        document.getElementById('delete-form').submit();
    }
}

// Auto-resize textarea
document.getElementById('texte').addEventListener('input', function() {
    this.style.height = 'auto';
    this.style.height = (this.scrollHeight) + 'px';
});
</script>

<style>
    textarea {
        min-height: 200px;
    }
    
    input:focus, select:focus, textarea:focus {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(0, 135, 81, 0.1);
    }
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laravel-projects\culture\resources\views/contenus/edit.blade.php ENDPATH**/ ?>