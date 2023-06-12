<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Formation;
use App\Models\SousCategorie;
use Illuminate\Http\Request;

class FamilleController extends Controller
{
    public function index()
    {
        $categories = Categorie::all();

        return view('admin.familles.index', compact('categories'));
    }

    public function show($id)
    {
        $categorie = Categorie::findOrFail($id);
        //pour afficher le nombre des sous categories de la categorie
        $souscategorie = SousCategorie::where('categorie_id', $categorie->id)->count();
        //pour afficher la liste des sous categories de cette categorie
        $souscategories = Souscategorie::where('categorie_id', $categorie->id)->get();
        //pour afficher la liste des formations associees a la categorie choisie
        $formation = Formation::whereHas('souscategorie', function ($query) use ($souscategories) {
            $query->whereIn('id', $souscategories->pluck('id'));
        })->get();
        //pour afficher le nombre des formations de cette categorie
        $formations = Formation::whereIn('souscategorie_id', $souscategories->pluck('id'))->count();
        
        return view('admin.familles.show', compact('categorie', 'souscategorie', 'formations', 'souscategories', 'formation'));
    }


    public function create()
    {
        return view('admin.familles.create');
    }

    public function store(Request $request)
    {
        $categorie = $request->validate([
            'nom' => 'required|string|max:191',
        ]);

        Categorie::create($categorie);

        return redirect()->route('admin.familles.index')->with('success', "La Famille est ajoutée avec succes ");
    }

    public function delete($id)
    {
        $categorie = Categorie::findOrFail($id);
        $categorie->delete();

        return back()->with('successD', "La famille '{$categorie->nom}' est supprimée avec succes");
    }
}