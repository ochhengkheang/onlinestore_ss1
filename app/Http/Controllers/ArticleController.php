<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        return view('admin.articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Article::create($request->all());
        return redirect()->back()->with('successullyMessage',
            'The article has been inserted successully!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view("admin.articles.show");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $article = Article::find($id);
        return view("admin.articles.edit", compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       Article::find($id)->update([
            'title'=>$request->input('title'),
            'description'=>$request->input('description'),
            'publish'=>$request->input('publish')
       ]);
       return redirect('/admin/articles');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "The Destroy Method has been called";
    }
}
