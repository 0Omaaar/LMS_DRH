<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Category;
use App\Models\Contact;
use App\Models\DemandeFormation;
use App\Models\Evenement;
use App\Models\Formation;
use App\Models\Reclamation;
use App\Models\SousCategorie;
use Illuminate\Http\Request;
use Alert;

class HomeController extends Controller
{
    public function index()
    {
        $familles = Categorie::all();
        $sousfamilles = SousCategorie::all();
        $formations = Formation::latest()->get();
        $evenements = Evenement::latest()->get();

        //for counter
        $nombre_familles = $familles->count();
        $nombre_sousfamilles = $sousfamilles->count();
        $nombre_formations = $formations->count();

        return view('front.index', compact('familles', 'sousfamilles', 'formations', 'nombre_familles', 'nombre_sousfamilles', 'nombre_formations', 'evenements'));
    }

    public function formation($id)
    {

        $formation = Formation::findOrFail($id);
        $link = $formation->youtube_url;
        $formations = Formation::latest()->get();
        $video_url = str_replace("https://youtu.be/", "https://www.youtube.com/embed/", $link);

        return view('front.formations.formation', compact('formation', 'video_url', 'formations'));
    }

    public function recherche(Request $request)
    {
        $familles = Categorie::all();
        $sousfamilles = SousCategorie::all();
        $formations = Formation::query();

        if ($request->input('categorie')) {
            $formations->whereHas('souscategorie', function ($query) use ($request) {
                $query->where('categorie_id', $request->input('categorie'));
            });
        }

        if ($request->input('souscategorie')) {
            $formations->where('souscategorie_id', $request->input('souscategorie'));
        }

        $formations = $formations->get();

        return view('front.formations.index', compact('formations', 'familles', 'sousfamilles'));
    }

    public function rechercheFormations(Request $request)
    {
        $familles = Categorie::all();
        $sousfamilles = SousCategorie::all();
        $formations = Formation::query();
        $formationsrecentes = Formation::latest()->get();


        if ($request->input('categorie')) {
            $formations->whereHas('souscategorie', function ($query) use ($request) {
                $query->where('categorie_id', $request->input('categorie'));
            });
        }

        if ($request->input('souscategorie')) {
            $formations->where('souscategorie_id', $request->input('souscategorie'));
        }

        $formations = $formations->get();

        return view('front.formations.formations', compact('formations', 'familles', 'sousfamilles', 'formationsrecentes'));
    }

    public function formationsFamille($id)
    {
        $familles = Categorie::all();
        $sousfamilles = SousCategorie::all();
        $categorie = Categorie::findOrFail($id);
        $formations = Formation::whereHas('souscategorie', function ($query) use ($categorie) {
            $query->where('categorie_id', $categorie->id);
        })->get();
        $formationsrecentes = Formation::latest()->get();


        return view('front.formations.formations', compact('categorie', 'formations', 'familles', 'sousfamilles', 'formationsrecentes'));
    }


    public function formations()
    {
        $familles = Categorie::all();
        $sousfamilles = SousCategorie::all();
        $formationsrecentes = Formation::latest()->get();

        $formations = Formation::latest()->get();

        return view('front.formations.formations', compact('familles', 'sousfamilles', 'formations', 'formationsrecentes'));

    }

    public function demandeFormation(Request $request)
    {

        $validated = $request->validate([
            'nom' => 'required',
            'email' => 'required|email',
            'objet' => 'required',
            'message' => 'required',
        ]);


        $demande = new DemandeFormation();
        $demande->nom = $validated['nom'];
        $demande->email = $validated['email'];
        $demande->objet = $validated['objet'];
        $demande->message = $validated['message'];

        $demande->save();

        \RealRashid\SweetAlert\Facades\Alert::success('Merci', 'Nous avons bien reçu votre demande et nous la traiterons dans les plus brefs délais. Merci pour votre soumission !');

        return redirect()->back();

    }

    public function contact()
    {
        return view('front.contact.contact');
    }

    public function contactSubmit(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required',
            'email' => 'email|required',
            'message' => 'required',
            'sujet' => 'string|max:50',
        ]);

        $contact = new Contact();
        $contact->nom = $validated['nom'];
        $contact->email = $validated['email'];
        $contact->sujet = $validated['sujet'];
        $contact->message = $validated['message'];

        $contact->save();

        \RealRashid\SweetAlert\Facades\Alert::success('Merci', 'Nous avons bien reçu votre message.');

        return redirect()->back();
    }

    public function reclamation()
    {
        return view('front.reclamation.reclamation');
    }

    public function reclamationSubmit(Request $request)
    {
        $validated = $request->validate([
            'titre' => 'required',
            'description' => 'required',
        ]);

        $reclamation = new Reclamation();
        $reclamation->titre = $validated['titre'];
        $reclamation->description = $validated['description'];

        $reclamation->save();

        \RealRashid\SweetAlert\Facades\Alert::success('Merci', 'Votre réclamation a été reçue avec succès. Notre équipe s\'en occupera dès que possible.');


        return redirect()->back();
    }


}