<?php


namespace App\Http\Controllers\admin;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController
{
    public function index(){
        $notes = Note::all();
        return view('admin.notes.index',compact('notes'));
    }

    public function create(){
        return view('admin.notes.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
        Note::create([
            'name' => $request->name,
            'description' => $request->description
        ]);
        return redirect('admin/note');
    }

    public function edit($id){
        $note = Note::findOrFail($id);
        return view('admin.notes.edit',compact('note'));
    }

    public function delete($id){
        $note = Note::findOrFail($id);
        $note->delete();
        return redirect('/admin/note');
    }
}
