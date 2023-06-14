<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Contact;
use App\Models\DemandeFormation;
use App\Models\Evenement;
use App\Models\Formation;
use App\Models\Reclamation;
use App\Models\SousCategorie;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $formations = Formation::all();
        $familles = Categorie::all();
        $sousfamilles = SousCategorie::all();
        $contacts = Contact::all();
        $reclamations = Reclamation::all();
        $demandes = DemandeFormation::all();
        $evenements = Evenement::all();
        $topformations = Formation::orderBy('vues', 'desc')->get();

        return view('admin.index', compact('formations', 'topformations', 'familles', 'sousfamilles', 'contacts', 'reclamations', 'demandes', 'evenements'));
    }
}