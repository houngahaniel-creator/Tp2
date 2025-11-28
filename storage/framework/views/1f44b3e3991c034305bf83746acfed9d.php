

<?php $__env->startSection('title', 'Uploader un Média - Culture Bénin'); ?>

<?php $__env->startSection('content'); ?>
<div class="min-h-screen bg-gray-50 dark:bg-gray-900 py-8">
    <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header -->
        <div class="text-center mb-12" data-aos="fade-down">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-4">
                Uploader un <span class="text-benin-green">Média</span>
            </h1>
            <p class="text-xl text-gray-600 dark:text-gray-400">
                Ajoutez une image, vidéo ou audio à un contenu culturel
            </p>
        </div>

        <!-- Form Card -->
        <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-2xl overflow-hidden" data-aos="fade-up">
            <div class="benin-gradient px-6 py-4">
                <h2 class="text-xl font-bold text-white">Nouveau média</h2>
            </div>

            <form action="<?php echo e(route('medias.store')); ?>" method="POST" enctype="multipart/form-data" class="p-6 space-y-6">
                <?php echo csrf_field(); ?>

                <!-- Type de média -->
                <div data-aos="fade-up" data-aos-delay="100">
                    <label for="id_type_media" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Type de média *
                    </label>
                    <select id="id_type_media" 
                            name="id_type_media" 
                            required
                            class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-benin-green focus:border-transparent dark:bg-gray-700 dark:text-white transition-all duration-300">
                        <option value="">Sélectionnez un type</option>
                        <?php $__currentLoopData = $typesMedia; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($type->id); ?>" <?php echo e(old('id_type_media') == $type->id ? 'selected' : ''); ?>>
                            <?php echo e($type->nom); ?>

                        </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php $__errorArgs = ['id_type_media'];
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

                <!-- Contenu associé -->
                <div data-aos="fade-up" data-aos-delay="150">
                    <label for="id_contenu" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Contenu associé *
                    </label>
                    <select id="id_contenu" 
                            name="id_contenu" 
                            required
                            class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-benin-green focus:border-transparent dark:bg-gray-700 dark:text-white transition-all duration-300">
                        <option value="">Sélectionnez un contenu</option>
                        <?php $__currentLoopData = $contenus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($contenu->id); ?>" <?php echo e(old('id_contenu') == $contenu->id ? 'selected' : ''); ?>>
                            <?php echo e($contenu->titre); ?> (<?php echo e($contenu->typeContenu->nom ?? 'Culture'); ?>)
                        </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php $__errorArgs = ['id_contenu'];
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

                <!-- Fichier -->
                <div data-aos="fade-up" data-aos-delay="200">
                    <label for="chemin" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Fichier *
                    </label>
                    <input type="file" 
                           id="chemin" 
                           name="chemin" 
                           required
                           accept="image/*,video/*,audio/*"
                           class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-benin-green focus:border-transparent dark:bg-gray-700 dark:text-white transition-all duration-300 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-benin-green file:text-white hover:file:bg-benin-dark-green">
                    <?php $__errorArgs = ['chemin'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="mt-1 text-sm text-red-600"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <p class="mt-1 text-sm text-gray-500">Formats acceptés: Images (JPG, PNG, WEBP), Vidéos (MP4, AVI), Audio (MP3, WAV)</p>
                </div>

                <!-- Description -->
                <div data-aos="fade-up" data-aos-delay="250">
                    <label for="description" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Description
                    </label>
                    <textarea id="description" 
                              name="description" 
                              rows="3"
                              class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-benin-green focus:border-transparent dark:bg-gray-700 dark:text-white transition-all duration-300 resize-vertical"
                              placeholder="Décrivez brièvement ce média..."><?php echo e(old('description')); ?></textarea>
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

                <!-- Preview -->
                <div id="preview-container" class="hidden" data-aos="fade-up" data-aos-delay="300">
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Aperçu
                    </label>
                    <div id="media-preview" class="bg-gray-100 dark:bg-gray-700 rounded-lg p-4 text-center">
                        <!-- Preview will be inserted here -->
                    </div>
                </div>

                <!-- Actions -->
                <div class="flex flex-col sm:flex-row justify-between space-y-4 sm:space-y-0 sm:space-x-6 pt-6 border-t border-gray-200 dark:border-gray-600" data-aos="fade-up" data-aos-delay="350">
                    <a href="<?php echo e(route('medias.index')); ?>" 
                       class="px-6 py-3 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700 transition-all duration-300 text-center font-medium">
                       Annuler
                    </a>
                    
                    <button type="submit" 
                            class="px-6 py-3 bg-benin-green text-white rounded-lg hover:bg-benin-dark-green transition-all duration-300 transform hover:scale-105 font-medium shadow-lg">
                        📁 Uploader le média
                    </button>
                </div>
            </form>
        </div>

    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const fileInput = document.getElementById('chemin');
    const previewContainer = document.getElementById('preview-container');
    const mediaPreview = document.getElementById('media-preview');

    fileInput.addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                mediaPreview.innerHTML = '';
                
                if (file.type.startsWith('image/')) {
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.className = 'max-w-full max-h-64 mx-auto rounded-lg';
                    img.alt = 'Aperçu';
                    mediaPreview.appendChild(img);
                } else if (file.type.startsWith('video/')) {
                    const video = document.createElement('video');
                    video.src = e.target.result;
                    video.controls = true;
                    video.className = 'max-w-full max-h-64 mx-auto rounded-lg';
                    mediaPreview.appendChild(video);
                } else if (file.type.startsWith('audio/')) {
                    const audio = document.createElement('audio');
                    audio.src = e.target.result;
                    audio.controls = true;
                    audio.className = 'w-full';
                    mediaPreview.appendChild(audio);
                } else {
                    mediaPreview.innerHTML = `
                        <div class="text-gray-500">
                            <svg class="w-16 h-16 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                            <p>Aperçu non disponible</p>
                        </div>
                    `;
                }
                
                previewContainer.classList.remove('hidden');
            };
            reader.readAsDataURL(file);
        } else {
            previewContainer.classList.add('hidden');
        }
    });
});
</script>

<style>
    input:focus, select:focus, textarea:focus {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(0, 135, 81, 0.1);
    }
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laravel-projects\culture\resources\views/medias/create.blade.php ENDPATH**/ ?>