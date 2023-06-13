<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\DemandeFormation;
use Illuminate\Http\Request;

class DemandeController extends Controller
{
    public function index()
    {
        $demandes = DemandeFormation::latest()->get();

        return view('admin.demandes.index', compact('demandes'));
    }

    public function delete($id)
    {
        $demande = DemandeFormation::findOrFail($id);
        $demande->delete();

        return back()->with('successD', "La demande '{$demande->titre}' est supprimée avec succes ");
    }

    public function traitee($id){
        $demande = DemandeFormation::findOrFail($id);

        $demande->statut = "Traitée";
        $demande->save();

        return back()->with('success', "La demande '{$demande->titre}' est marqué comme Traitée avec succes ");
    }

    public function enCoursDeTraitement($id){
        $demande = DemandeFormation::findOrFail($id);

        $demande->statut = "En Cours de traitement";
        $demande->save();

        return back()->with('success', "La demande '{$demande->titre}' est marqué comme En Cours de traitement avec succes ");
    }

    public function enAttente($id){
        $demande = DemandeFormation::findOrFail($id);

        $demande->statut = "En Attente";
        $demande->save();

        return back()->with('success', "La demande '{$demande->titre}' est marqué comme En Attente avec succes ");
    }
}
