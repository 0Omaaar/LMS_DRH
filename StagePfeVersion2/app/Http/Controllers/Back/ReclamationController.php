<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Reclamation;
use Illuminate\Http\Request;

class ReclamationController extends Controller
{
    public function index()
    {
        $reclamations = Reclamation::latest()->get();

        return view('admin.reclamations.index', compact('reclamations'));
    }

    public function delete($id)
    {
        $reclamation = Reclamation::findOrFail($id);
        $reclamation->delete();

        return back()->with('successD', "La reclamation '{$reclamation->titre}' est supprimée avec succes ");
    }

    public function traitee($id){
        $reclamation = Reclamation::findOrFail($id);

        $reclamation->statut = "Traitée";
        $reclamation->save();

        return back()->with('success', "La reclamation '{$reclamation->titre}' est marqué comme Traitée avec succes ");
    }

    public function enCoursDeTraitement($id){
        $reclamation = Reclamation::findOrFail($id);

        $reclamation->statut = "En Cours de traitement";
        $reclamation->save();

        return back()->with('success', "La reclamation '{$reclamation->titre}' est marqué comme En Cours de traitement avec succes ");
    }

    public function enAttente($id){
        $reclamation = Reclamation::findOrFail($id);

        $reclamation->statut = "En Attente";
        $reclamation->save();

        return back()->with('success', "La reclamation '{$reclamation->titre}' est marqué comme En Attente avec succes ");
    }

}
