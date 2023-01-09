<?php


namespace App\Http\Controllers\admin;


use App\Models\Category;
use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function League\Flysystem\toArray;

class CategoryController
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index',compact('categories'));
    }

    public function create()
    {
        $notes = Note::all();
        return view('admin.categories.create',compact('notes'));
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'note_id' => 'required',
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->note_id = $request->note_id;
        $category->save();
        return redirect('admin/category');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        $notes = Note::all();
        return view('admin.categories.edit',compact('category','notes'));
    }

    public function update(Request $request,$id){
        $request->validate([
            'name' => 'required',
            'note_id' => 'required'
        ]);
        $category = Category::findOrFail($id);
        $category->update([
            'name' => $request->name,
            'note_id' =>$request->note_id
        ]);
        return redirect('/admin/category');
    }

    public function delete($id){
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect('/admin/category');
    }
}
