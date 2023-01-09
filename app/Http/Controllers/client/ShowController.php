<?php


namespace App\Http\Controllers\client;


use App\Models\Category;
use App\Models\Note;

class ShowController
{
    public function index(){
        $categories = Category::all();
        $notes = Note::all();
        return view('layouts.app',compact('categories','notes'));
    }

    public function show($id){
        $categories = Category::all();
        $note = Note::findOrFail($id);
        return view('show.show',compact('note','categories'));
    }
}
