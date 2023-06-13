<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Evenement;
use Illuminate\Http\Request;

class EvenementController extends Controller
{
    public function index(){
        $evenements = Evenement::latest()->get();

        return view('admin.evenements.index', compact('evenements'));
    }

    public function create(){
        return view('admin.evenements.create');
    }

    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'image' => 'required',
            'description' => 'required|max:1000',
            'titre' => 'required',
            'jour' => 'required',
            'mois' => 'required',
            'horaire' => 'required',
            'lieu' => 'required',
        ]);

        $image = $request->file('image');
        $nom_image = uniqid() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('img/even'), $nom_image);

        $evenement = new Evenement([
            'titre' => $validated_data['titre'],
            'description' => $validated_data['description'],
            'jour' => $validated_data['jour'],
            'mois' => $validated_data['mois'],
            'horaire' => $validated_data['horaire'],
            'lieu' => $validated_data['lieu'],
            'image' => $nom_image,
        ]);

        $evenement->save();

        return redirect()->route('admin.evenements.index')->with('success', 'L\'evenement a été ajoutée avec succès');
    }

    public function delete($id)
    {
        $evenement = Evenement::findOrFail($id);

        $ancien_nom = $evenement->image;

        if ($ancien_nom) {
            unlink(public_path('img/even/' . $ancien_nom));
        }
        
        $evenement->delete();

        return redirect()->route('admin.evenements.index')->with('successD', 'L\'evenement est supprimé avec succès');
    }
}
