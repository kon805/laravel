<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\moi;

class ElementController extends Controller
{
    //
    public function create()
    {
        return view('formulaire');
    }
    
    public function processForm(Request $request)
    {
        // Validation des données
        $request->validate([
            'nom'=>'required',
           'prenom'=>'required',
           'mail'=>'required',
           'events'=>'required',
           'group'=>'required',
          
        
        ]);

        // Enregistrement des données dans la base de données
            moi::create([
               'nom' => $request->input('nom'),
               'prenom' => $request->input('prenom'),
               'mail' => $request->input('mail'),
               'events' => $request->input('events'),
               'group' => $request->input('group'),
            
        ]);
 
        
        return redirect('/formulaire')->with('success', 'Données enregistrées avec succès!');
    }

    public function index()
    {
        $mois = moi::all();
        return view('vision', compact('mois'));
    }

    public function groupe()
    {
        return view('groupe');
    }
}
