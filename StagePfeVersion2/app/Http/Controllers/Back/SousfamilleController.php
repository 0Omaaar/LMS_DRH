<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Formation;
use App\Models\SousCategorie;
use Illuminate\Http\Request;

class SousfamilleController extends Controller
{
    public function index()
    {
        $souscategories = SousCategorie::all();

        return view('admin.sousfamilles.index', compact('souscategories'));
    }

    // public function show($id)
    // {
    //     $souscategorie = Souscategorie::findOrFail($id);
    //     $categorie = $souscategorie->categorie;
    //     $formation = $souscategorie->formations->count();
    
    //     $formations = Formation::where('souscategorie_id', $souscategorie->id)->get();
    
    //     return view('admin.sousfamilles.show', compact('souscategorie', 'categorie', 'formation', 'formations'));
    // }
    


    public function create(Request $request)
    {
        $categories = Categorie::all();

        return view('admin.sousfamilles.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $souscategorie = $request->validate([
            'nom' => 'required|string|max:191',
            'categorie_id' => 'required',
        ]);

        Souscategorie::create($souscategorie);


        return redirect()->route('admin.sousfamilles.index')->with('success', 'La sous famille est ajoutée avec succes');
    }

    public function delete($id){
        $souscategorie = Souscategorie::findOrFail($id);
        $souscategorie->delete();

        return back()->with('successD', "La sous famille '$souscategorie->nom' est supprimée avec succes");
    }

}