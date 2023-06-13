<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::latest()->get();

        return view('admin.contacts.index', compact('contacts'));
    }

    public function delete($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return back()->with('successD', "Le message '{$contact->sujet}' est supprimé avec succes ");
    }

}
