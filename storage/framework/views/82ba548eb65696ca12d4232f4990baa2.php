

<?php $__env->startSection('title', 'Ajouter un Utilisateur - Culture Bénin'); ?>

<?php $__env->startSection('content'); ?>
<div class="min-h-screen bg-gray-50 py-8">
    <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header -->
        <div class="text-center mb-12" data-aos="fade-down">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                Ajouter un <span class="text-benin-green">Utilisateur</span>
            </h1>
            <p class="text-xl text-gray-600">
                Créez un nouveau compte utilisateur
            </p>
        </div>

        <!-- Form Card -->
        <div class="bg-white rounded-2xl shadow-2xl overflow-hidden" data-aos="fade-up">
            <div class="benin-gradient px-6 py-4">
                <h2 class="text-xl font-bold text-white">Nouvel utilisateur</h2>
            </div>

            <form action="<?php echo e(route('users.store')); ?>" method="POST" enctype="multipart/form-data" class="p-6 space-y-6">
                <?php echo csrf_field(); ?>

                <!-- Personal Information -->
                <div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Informations personnelles</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Prénom -->
                        <div>
                            <label for="prenom" class="block text-sm font-medium text-gray-700 mb-2">
                                Prénom *
                            </label>
                            <input type="text" 
                                   id="prenom" 
                                   name="prenom" 
                                   required
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-benin-green focus:border-transparent transition-all duration-300"
                                   placeholder="Ex: Koffi"
                                   value="<?php echo e(old('prenom')); ?>">
                            <?php $__errorArgs = ['prenom'];
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

                        <!-- Nom -->
                        <div>
                            <label for="nom" class="block text-sm font-medium text-gray-700 mb-2">
                                Nom *
                            </label>
                            <input type="text" 
                                   id="nom" 
                                   name="nom" 
                                   required
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-benin-green focus:border-transparent transition-all duration-300"
                                   placeholder="Ex: Johnson"
                                   value="<?php echo e(old('nom')); ?>">
                            <?php $__errorArgs = ['nom'];
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

                        <!-- Sexe -->
                        <div>
                            <label for="sexe" class="block text-sm font-medium text-gray-700 mb-2">
                                Sexe *
                            </label>
                            <select id="sexe" 
                                    name="sexe" 
                                    required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-benin-green focus:border-transparent transition-all duration-300">
                                <option value="">Sélectionnez</option>
                                <option value="M" <?php echo e(old('sexe') == 'M' ? 'selected' : ''); ?>>Masculin</option>
                                <option value="F" <?php echo e(old('sexe') == 'F' ? 'selected' : ''); ?>>Féminin</option>
                            </select>
                            <?php $__errorArgs = ['sexe'];
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

                        <!-- Date de naissance -->
                        <div>
                            <label for="date_naissance" class="block text-sm font-medium text-gray-700 mb-2">
                                Date de naissance *
                            </label>
                            <input type="date" 
                                   id="date_naissance" 
                                   name="date_naissance" 
                                   required
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-benin-green focus:border-transparent transition-all duration-300"
                                   value="<?php echo e(old('date_naissance')); ?>">
                            <?php $__errorArgs = ['date_naissance'];
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
                </div>

                <!-- Account Information -->
                <div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Informations du compte</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Email -->
                        <div class="md:col-span-2">
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                                Email *
                            </label>
                            <input type="email" 
                                   id="email" 
                                   name="email" 
                                   required
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-benin-green focus:border-transparent transition-all duration-300"
                                   placeholder="Ex: koffi.johnson@example.com"
                                   value="<?php echo e(old('email')); ?>">
                            <?php $__errorArgs = ['email'];
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

                        <!-- Mot de passe -->
                        <div>
                            <label for="mot_de_passe" class="block text-sm font-medium text-gray-700 mb-2">
                                Mot de passe *
                            </label>
                            <input type="password" 
                                   id="mot_de_passe" 
                                   name="mot_de_passe" 
                                   required
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-benin-green focus:border-transparent transition-all duration-300"
                                   placeholder="Minimum 8 caractères">
                            <?php $__errorArgs = ['mot_de_passe'];
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

                        <!-- Confirmation mot de passe -->
                        <div>
                            <label for="mot_de_passe_confirmation" class="block text-sm font-medium text-gray-700 mb-2">
                                Confirmer le mot de passe *
                            </label>
                            <input type="password" 
                                   id="mot_de_passe_confirmation" 
                                   name="mot_de_passe_confirmation" 
                                   required
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-benin-green focus:border-transparent transition-all duration-300"
                                   placeholder="Répétez le mot de passe">
                        </div>
                    </div>
                </div>

                <!-- Preferences & Role -->
                <div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Préférences et rôle</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Langue -->
                        <div>
                            <label for="id_langue" class="block text-sm font-medium text-gray-700 mb-2">
                                Langue préférée *
                            </label>
                            <select id="id_langue" 
                                    name="id_langue" 
                                    required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-benin-green focus:border-transparent transition-all duration-300">
                                <option value="">Sélectionnez une langue</option>
                                <?php $__currentLoopData = $langues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $langue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($langue->id); ?>" <?php echo e(old('id_langue') == $langue->id ? 'selected' : ''); ?>>
                                    <?php echo e($langue->nom_langue); ?>

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

                        <!-- Rôle -->
                        <div>
                            <label for="id_role" class="block text-sm font-medium text-gray-700 mb-2">
                                Rôle *
                            </label>
                            <select id="id_role" 
                                    name="id_role" 
                                    required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-benin-green focus:border-transparent transition-all duration-300">
                                <option value="">Sélectionnez un rôle</option>
                                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($role->id); ?>" <?php echo e(old('id_role') == $role->id ? 'selected' : ''); ?>>
                                    <?php echo e($role->nom); ?>

                                </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php $__errorArgs = ['id_role'];
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
                            <label for="statut" class="block text-sm font-medium text-gray-700 mb-2">
                                Statut *
                            </label>
                            <select id="statut" 
                                    name="statut" 
                                    required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-benin-green focus:border-transparent transition-all duration-300">
                                <option value="">Sélectionnez un statut</option>
                                <option value="actif" <?php echo e(old('statut') == 'actif' ? 'selected' : ''); ?>>Actif</option>
                                <option value="inactif" <?php echo e(old('statut') == 'inactif' ? 'selected' : ''); ?>>Inactif</option>
                                <option value="en_attente" <?php echo e(old('statut') == 'en_attente' ? 'selected' : ''); ?>>En attente</option>
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

                        <!-- Photo -->
                        <div>
                            <label for="photo" class="block text-sm font-medium text-gray-700 mb-2">
                                Photo de profil
                            </label>
                            <input type="file" 
                                   id="photo" 
                                   name="photo" 
                                   accept="image/*"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-benin-green focus:border-transparent transition-all duration-300 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-benin-green file:text-white hover:file:bg-benin-dark-green">
                            <?php $__errorArgs = ['photo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="mt-1 text-sm text-red-600"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            <p class="mt-1 text-sm text-gray-500">Formats: JPG, PNG, WEBP. Max: 2MB</p>
                        </div>
                    </div>
                </div>

                <!-- Actions -->
                <div class="flex flex-col sm:flex-row justify-between space-y-4 sm:space-y-0 sm:space-x-6 pt-6 border-t border-gray-200">
                    <a href="<?php echo e(route('users.index')); ?>" 
                       class="px-6 py-3 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-all duration-300 text-center font-medium">
                       Annuler
                    </a>
                    
                    <button type="submit" 
                            class="px-6 py-3 bg-benin-green text-white rounded-lg hover:bg-benin-dark-green transition-all duration-300 transform hover:scale-105 font-medium shadow-lg">
                        👤 Créer l'utilisateur
                    </button>
                </div>
            </form>
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
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laravel-projects\culture\resources\views/users/create.blade.php ENDPATH**/ ?>