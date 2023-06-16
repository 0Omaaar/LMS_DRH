<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Formation;
use App\Models\Signal;
use Illuminate\Http\Request;

class SignalController extends Controller
{
    public function index()
    {
        $formations = Signal::latest()->get();

        return view('admin.formationsSig.index', compact('formations'));
    }

    public function traitee($id)
    {
        $formation = Signal::findOrFail($id);
        $formation->statut = "Traitée";
        $formation->save();

        return redirect()->back()->with('success', 'La formation signalée est marquée comme Traitée');
    }
    public function nontraitee($id)
    {
        $formation = Signal::findOrFail($id);
        $formation->statut = "Non Traitée";
        $formation->save();

        return redirect()->back()->with('successD', 'La formation signalée est marquée comme Non Traitée');
    }
}