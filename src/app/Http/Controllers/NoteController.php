<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use App\Http\Requests\NoteRequest;

class NoteController extends Controller
{
    public function show(Note $note)
    {
        return view('notes.show', compact('note'));
    }
    public function index()
    {
        $notes = Note::all();
        return view('notes.index', compact('notes'));
    }
    public function create()
    {
        return view('notes.create');
    }

    public function store(NoteRequest $request){

        $note = new Note();
        $note->title = $request->input('title');
        $note->description = $request->input('description');
        $note->date = $request->input('date');
        $note->done = $request->input('done') ? 1 : 0;
        $note->save();
        return redirect()->route('note.index')->with('success', 'Nota creada correctamente.');

    }
    public function edit(Note $note)
    {
        return view('notes.edit', compact('note'));
    }
    public function update(NoteRequest $request, Note $note)
    {
        $data = $request->all();
        $data['done'] = $request->has('done');
        $note->update($data);
        return redirect()->route('note.index')->with('success', 'Nota actualizada correctamente.');
    }

    public function destroy(Note $note)
    {
        $note->delete();
        return redirect()->route('note.index')->with('danger', 'Nota borrada correctamente.');
    }
}
