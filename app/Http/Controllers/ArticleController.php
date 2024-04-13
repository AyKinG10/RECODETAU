<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function index()
    {
        return view('articles.index',['articles'=>Article::all(),'categories'=>Category::all()]);
    }

    public function articlesByCat(Category $category)
    {
        return view('articles.index',['articles'=>$category->articles,'categories'=>Category::all()]);
    }
    public function create()
    {
        return view('articles.create',['categories'=>Category::all()]);
    }

    public function store(Request $request)
    {
        $validated= $request->validate([
            'title' => 'required|max:255',
            'img'=>'required|image|mimes:jpg,png,jpeg,gif,svg',
            'description'=>'required',
            'category_id' => 'required|numeric|exists:categories,id',
        ]);
        $fileName=time().$request->file('img')->getClientOriginalName();
        $image_path = $request->file('img')->storeAs('articles',$fileName,'public');
        $validated['img'] = '/storage/'.$image_path;
        Article::create($validated);
        return redirect(route('articles.index'))->with('message','Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('articles.edit',['articles'=>$article, 'categories'=>Category::all()]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $request->update([
            'name'=>$request->input('name'),
            'img'=>$request->input('img'),
            'description'=>$request->input('description'),
            'category_id'=>$request->category_id,
        ]);
        return redirect(route('article.index'))->with('message','Courses Updated Sucsessfully');
    }


    public function destroy(Article $article)
    {
        $article->delete();
        return redirect(route('article.index'))->with('message','Article deleted sucsessfully');
    }

}
