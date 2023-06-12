<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Formation;
use App\Models\SousCategorie;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function index()
    {
        $formations = Formation::latest()->get();
        return view('admin.formations.index', compact('formations'));
    }

    public function show($id)
    {
        $formation = Formation::findOrFail($id);
        $souscategorie = $formation->souscategorie->nom;

        $link = $formation->youtube_url;
        $video_url = str_replace("https://youtu.be/", "https://www.youtube.com/embed/", $link);


        return view('admin.formations.show', compact('formation', 'video_url', 'souscategorie'));
    }

    public function create()
    {
        $souscategories = Souscategorie::all();

        return view('admin.formations.create', compact('souscategories'));
    }
    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'titre' => 'required|string|max:191',
            'description' => 'required|max:1000',
            'objectif' => 'required|max:1000',
            'souscategorie_id' => 'required',
            'image' => 'required|image|max:8192',
            'youtube_url' => 'nullable|url',
            'pdf' => 'nullable|mimes:pdf|max:8192',
            'videos.*' => 'nullable|mimes:mp4,mov,avi|max:1048576',
        ]);

        $image = $request->file('image');
        $nom_image = uniqid() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('img/imgann'), $nom_image);

        $formation = new Formation([
            'titre' => $validated_data['titre'],
            'description' => $validated_data['description'],
            'objectif' => $validated_data['objectif'],
            'souscategorie_id' => $validated_data['souscategorie_id'],
            'image' => $nom_image,
        ]);

        if ($request->has('youtube_url')) {
            $formation->youtube_url = $request->youtube_url;
        }

        if ($request->hasFile('pdf')) {
            $pdf = $request->file('pdf');
            $nom_pdf = uniqid() . '.' . $pdf->getClientOriginalExtension();
            $pdf->move(public_path('pdf'), $nom_pdf);
            $formation->pdf_chemin = $nom_pdf;
        }

        $formation->save();

        if ($request->hasFile('videos')) {
            $videos = $request->file('videos');

            foreach ($videos as $video) {
                $nom_video = uniqid() . '.' . $video->getClientOriginalExtension();
                $video->move(public_path('videos'), $nom_video);

                $formation->videos()->create([
                    'chemin' => $nom_video,
                    'formation_id' => $formation->id,
                ]);
            }
        }

        return redirect()->route('admin.formations')->with('success', 'La formation a été ajoutée avec succès');
    }


    public function edit($id)
    {
        $formation = Formation::findOrFail($id);
        $souscategories = SousCategorie::all();

        return view('admin.formations.edit', compact('formation', 'souscategories'));
    }

    public function update(Request $request, $id)
    {
        $formation = Formation::findOrFail($id);

        $validated_data = $request->validate([
            'titre' => 'required|string|max:191',
            'description' => 'required|max:1000',
            'objectif' => 'required|max:1000',
            'souscategorie_id' => 'required',
            'image' => 'required|image|max:8192',
            'youtube_url' => 'nullable|url',
            'pdf' => 'nullable|mimes:pdf|max:8192',
            'videos.*' => 'nullable|mimes:mp4,mov,avi|max:1048576',
        ]);

        $old_image = $formation->image;
        $old_path = public_path('img/imgann/' . $old_image);
        if ($old_path) {
            unlink($old_path);
        }

        $image = $request->file('image');
        $nom_image = uniqid() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('img/imgann'), $nom_image);

        $formation->update([
            'titre' => $validated_data['titre'],
            'description' => $validated_data['description'],
            'objectif' => $validated_data['objectif'],
            'souscategorie_id' => $validated_data['souscategorie_id'],
            'image' => $nom_image,
            'youtube_url' => $validated_data['youtube_url'],
        ]);

        if ($request->hasFile('pdf')) {
            $pdf = $request->file('pdf');
            $nom_pdf = uniqid() . '.' . $pdf->getClientOriginalExtension();
            $pdf->move(public_path('pdf'), $nom_pdf);

            $old_pdf = $formation->pdf_chemin;
            if ($old_pdf) {
                $old_pdf_path = public_path('pdf/' . $old_pdf);
                unlink($old_pdf_path);
            }

            $formation->pdf_chemin = $nom_pdf;
            $formation->save();
        }

        if ($request->hasFile('videos')) {
            $videos = $request->file('videos');

            foreach ($videos as $video) {
                $nom_video = uniqid() . '.' . $video->getClientOriginalExtension();
                $video->move(public_path('videos'), $nom_video);

                // Supprimez l'ancienne vidéo après avoir enregistré la nouvelle
                $old_videos = $formation->videos;

                foreach ($old_videos as $old_video) {
                    $old_video_path = public_path('videos/' . $old_video->chemin);
                    if (file_exists($old_video_path)) {
                        unlink($old_video_path);
                    }
                    $old_video->delete();
                }

                // Enregistrez la nouvelle vidéo dans la base de données
                $formation->videos()->create([
                    'chemin' => $nom_video,
                ]);
            }
        }

        return redirect()->route('admin.formations')->with('success', 'La formation est modifiée avec succès');
    }

    public function delete($id)
    {
        $formation = Formation::findOrFail($id);

        $ancien_nom = $formation->image;
        $ancien_pdf = $formation->pdf_chemin;
        $ancien_videos = $formation->videos;

        if ($ancien_nom) {
            unlink(public_path('img/imgann/' . $ancien_nom));
        }
        if ($ancien_pdf) {
            unlink(public_path('pdf/' . $ancien_pdf));
        }

        if ($ancien_videos) {
            foreach ($ancien_videos as $ancien_video) {
                $chemin_video = $ancien_video->chemin;
                unlink(public_path('videos/' . $chemin_video));
            }
        }

        $formation->delete();

        return redirect()->route('admin.formations')->with('successD', 'La formation est supprimée avec succès');
    }


}