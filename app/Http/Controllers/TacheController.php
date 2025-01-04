<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tache;

class TacheController extends Controller
{
   public function index()
   {
    $taches = Tache::all();
    return view('taches.index', compact('taches'));
   }


   public function create()
   {
        return view('taches.create');
   }

   public function today(){
    $today= now()->toDateString();
    $taches = Tache::where('date_limite', $today)->get();
    return view('taches.today',compact('taches'));
   }

   public function show(Tache $tache)
   {
        return view('taches.show', compact('tache'));
   }

    // Enregistre une nouvelle tâche
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|max:255',
            'description' => 'nullable',
            'date_limite' => 'nullable|date',
        ]);

        Tache::create($request->all());

        return redirect()->route('taches.index')->with('success', 'Tâche créée avec succès.');
    }

    // Affiche le formulaire d'édition d'une tâche
    public function edit(Tache $tache)
    {
        return view('taches.edit', compact('tache'));
    }

    // Met à jour une tâche existante
    public function update(Request $request, Tache $tache)
    {
        $request->validate([
            'titre' => 'required|max:255',
            'description' => 'nullable',
            'date_limite' => 'nullable|date',
        ]);

        $tache->update($request->all());

        return redirect()->route('taches.index')->with('success', 'Tâche mise à jour avec succès.');
    }

    // Supprime une tâche
    public function destroy(Tache $tache)
    {
        $tache->delete();

        return redirect()->route('taches.index')->with('success', 'Tâche supprimée avec succès.');
    }
}
