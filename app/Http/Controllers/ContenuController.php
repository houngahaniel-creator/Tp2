<?php

namespace App\Http\Controllers;

use App\Models\Contenu;
use App\Models\TypeContenu;
use App\Models\Region;
use App\Models\Langue;
use Illuminate\Http\Request;

class ContenuController extends Controller
{
    public function index()
    {
        // Récupération des contenus avec pagination
        $contenus = Contenu::with(['auteur', 'region', 'langue', 'typeContenu'])
            ->orderBy('created_at', 'desc')
            ->paginate(9);

        // Données pour les filtres
        $typesContenu = TypeContenu::all();
        $regions = Region::all();
        $langues = Langue::all();

        // Statistiques
        $stats = [
            'publies' => Contenu::where('statut', 'publié')->count(),
            'brouillons' => Contenu::where('statut', 'brouillon')->count(),
            'en_attente' => Contenu::where('statut', 'en_attente')->count(),
        ];

        return view('contenus.index', compact('contenus', 'typesContenu', 'regions', 'langues', 'stats'));
    }

    // Les autres méthodes restent identiques...
    public function create()
    {
        $typesContenu = TypeContenu::all();
        $regions = Region::all();
        $langues = Langue::all();
        
        return view('contenus.create', compact('typesContenu', 'regions', 'langues'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'texte' => 'required|string',
            'id_type_contenu' => 'required|exists:type_contenus,id',
            'id_region' => 'required|exists:regions,id',
            'id_langue' => 'required|exists:langues,id',
        ]);

        $validated['id_auteur'];
        $validated['date_creation'] = now();
        $validated['statut'] = 'brouillon';

        Contenu::create($validated);

        return redirect()->route('contenus.index')
                        ->with('success', 'Contenu créé avec succès!');
    }

    public function show(Contenu $contenu)
{
    $contenu->load(['auteur', 'region', 'langue', 'typeContenu', 'medias', 'commentaires.utilisateur']);
    
    // Contenus similaires (même région)
    $relatedContents = Contenu::with(['auteur', 'typeContenu'])
        ->where('id_region', $contenu->id_region)
        ->where('id', '!=', $contenu->id)
        ->where('statut', 'publié')
        ->orderBy('created_at', 'desc')
        ->take(3)
        ->get();

    return view('contenus.show', compact('contenu', 'relatedContents'));
}

    public function edit(Contenu $contenu)
    {
        $typesContenu = TypeContenu::all();
        $regions = Region::all();
        $langues = Langue::all();
        
        return view('contenus.edit', compact('contenu', 'typesContenu', 'regions', 'langues'));
    }

    public function update(Request $request, Contenu $contenu)
    {
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'texte' => 'required|string',
            'id_type_contenu' => 'required|exists:type_contenus,id',
            'id_region' => 'required|exists:regions,id',
            'id_langue' => 'required|exists:langues,id',
            'statut' => 'required|in:brouillon,en_attente,publié,rejeté',
        ]);

        $contenu->update($validated);

        return redirect()->route('contenus.index')
                        ->with('success', 'Contenu mis à jour avec succès!');
    }

    public function destroy(Contenu $contenu)
    {
        $contenu->delete();

        return redirect()->route('contenus.index')
                        ->with('success', 'Contenu supprimé avec succès!');
    }
}