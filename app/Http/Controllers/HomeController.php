<?php

namespace App\Http\Controllers;

use App\Models\Contenu;
use App\Models\Region;
use App\Models\Langue;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    /**
     * Page d'accueil PUBLIQUE (layout guest)
     */
    public function home()
    {
        $stats = $this->getCachedStats();
        $latestContents = $this->getLatestContents();

        return view('home-public', compact('stats', 'latestContents'));
    }

    /**
     * Page d'accueil CONNECTÉE (layout app)
     */
    public function index()
    {
        $stats = $this->getCachedStats();
        $latestContents = $this->getLatestContents();

        return view('home-auth', compact('stats', 'latestContents'));
    }

    /**
     * Récupère les statistiques avec cache (15 minutes)
     */
    private function getCachedStats()
    {
        return Cache::remember('home_stats', 900, function () { // 15 minutes
            return [
                'contenus' => Contenu::count(),
                'regions' => Region::count(),
                'langues' => Langue::count(),
                'utilisateurs' => User::count(),
            ];
        });
    }

    /**
     * Récupère les derniers contenus avec cache (5 minutes)
     */
    private function getLatestContents()
    {
        return Cache::remember('latest_contents', 300, function () { // 5 minutes
            return Contenu::with(['typeContenu', 'auteur', 'region'])
                ->latest()
                ->take(6)
                ->get();
        });
    }

    /**
     * Méthode pour forcer le rafraîchissement du cache (optionnel)
     */
    public function refreshStats()
    {
        Cache::forget('home_stats');
        Cache::forget('latest_contents');

        return redirect()->route('home.auth')->with('success', 'Statistiques rafraîchies !');
    }
}
