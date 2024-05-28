<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    //
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom_events' => 'required|string|max:255',
            'date_events' => 'required|date',
            'prix_events' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
           ]);

           $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
           
    
            Event :: create([
            'nom_events' => $request->input('nom_events'),
           'date_events' => $request->input('date_events'),
           'prix_events' => $request->input('prix_events') ,
           'image' => $imageName,
          ]);

    
    
              
        return redirect()->route('create')->with('success', 'Événement enregistré avec succès.');
    }

    public function index()
    {
        $Events=Event::all();
        return view('vision', compact('Events'));
    }
}
