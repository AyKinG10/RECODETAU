<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryContoller extends Controller
{
    public function index(){
        $categories= Category::all();
        return view('adm.categories.index',['categories'=>$categories]);
    }
    public function create(){
        return view('adm.categories.create',['categories'=>Category::all()]);
    }
    public function store(Request $request){
        $validated = $request->validate([
            'name'=>'required|max:50',
            'img'=>'required|image|mimes:jpg,png,jpg,webp,jpeg,gif,svg|max:2048'
        ]);
        $fileName=time().$request->file('img')->getClientOriginalName();
        $image_path = $request->file('img')->storeAs('categories',$fileName,'public');
        $validated['img'] = '/storage/'.$image_path;
        Category::create($validated);
        return redirect()->route('adm.categories.index',['categories'=>Category::all()])->with('Successfully','Added a new category');
    }
    public function destroy(Category $category){
        $category->delete();
        return redirect()->route('adm.categories.index');
    }
}
