<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::all();
        return view('notes.index', compact('notes'));
    }

    public function create()
    {
        return view('notes.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'contenu' => 'required',
        ]);

        Note::create($validatedData);

        return redirect()->route('notes.index')->with('success', 'Note created successfully!');
    }
 

    //delete notes

    public function delete($id)
    {
        $note = $this->getUserById($id);
    
        if ($note->id != Auth::note()->id) {
            abort(404);
        }
    
        $note->delete();
    
        return redirect()->route('home')->with('success', 'Profile deleted successfully.');
    }

    public function show($id)
{
    $note = $this->getUserById($id);

    // Pass the $note variable to the view
    return view('note.delete', compact('note'));
}


    }
    



