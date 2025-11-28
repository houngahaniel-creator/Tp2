<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ContenuController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\LangueController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\CommentaireController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatsboardController;


// ==================== ROUTES PUBLIQUES (layout guest) ====================
Route::middleware(['guest'])->group(function () {
    Route::get('/', [HomeController::class, 'home'])->name('home');
});

// ==================== ROUTES CONNECTÉES (layout app) ====================
Route::middleware(['auth'])->group(function () {
    // Page d'accueil après connexion
    Route::get('/home-auth', [HomeController::class, 'index'])->name('home.auth');

    // Routes CRUD pour utilisateurs connectés (LECTEURS)
    Route::get('/contenus', [ContenuController::class, 'index'])->name('contenus.index');
    Route::get('/regions', [RegionController::class, 'index'])->name('regions.index');
    Route::get('/langues', [LangueController::class, 'index'])->name('langues.index');

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// ==================== ROUTES ADMIN (layout admin) ====================
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/refresh-stats', [AdminController::class, 'refreshStats'])->name('admin.refresh-stats');

    // Routes CRUD admin (avec toutes les actions)
    Route::resource('contenus', ContenuController::class)->except(['index']);
    Route::resource('regions', RegionController::class)->except(['index']);
    Route::resource('langues', LangueController::class)->except(['index']);
    Route::resource('users', UserController::class);
    Route::resource('medias', MediaController::class);
    Route::resource('commentaires', CommentaireController::class);
    Route::get('/statsboard', [StatsboardController::class, 'index'])->name('statsboard');
});


// ==================== REDIRECTIONS ====================
// Rediriger /dashboard selon le rôle - VERSION AVEC FACADE
Route::get('/dashboard', function () {
    if (Auth::check() && Auth::user()->id_role === 1) {
        return redirect()->route('admin.dashboard');
    }
    return redirect()->route('home.auth');
})->name('dashboard');

require __DIR__ . '/auth.php';
