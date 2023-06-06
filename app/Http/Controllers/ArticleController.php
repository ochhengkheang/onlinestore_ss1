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
        $articles = Article::where('trash','=',0)->orderbyDesc('id')->get();
        return view('admin.articles.index',compact('articles'));
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
        // Form Validation
        $request->validate([
            'title'=>'required|min:5|max:60000',
            'description'=>'required|min:5|max:60000',
            'email'=>'required|email|regex:/.+@.+\..+/iu',
            'url'=>'required|url',
        ],[
            'title.required'=>'you have to provide title!!!',
            'title.min'=>'you have to provide the at least 5 char!!!',
            'email.regex'=>'the email doesnt matchthe format. ex. namedomain.extension',
        ]);

        Article::create($request-> all());
        return redirect()->back()->with('SuccessfullMessage',
        'This articles has been inntered successful');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $article = Article::find($id);
        return view("admin.articles.show",['article'=>$article]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $article = Article :: find($id);
        return view("admin.articles.edit",compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if($request->input('publish') == null){
            $publish = 0;
        }
        else{
            $publish = $request-> input('publish');

        }
        Article::find($id)->update([
            'title'=>$request->input('title'),
            'description'=>$request ->input('description'),
            //'publish'=>$request ->input('publish')
            'publish'=>$publish
        ]);
        // $article = Article::find($id);
        // $article->title = $request->input('title');
        // $article->description = $request->input('description');
        // $article->publish = $publish;
        // $article->save();
        $data = $request->all();
        $data['publish'] = $publish;
        Article::find($id)-> update ($data);
        return redirect('/admin/articles');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Article::find($id)->update(['trash'=>1]);
        return redirect('/admin/articles') ->with('delSuccess',
        'This article has been delete successful.');

    }

    public function deleteAll(Request $request){
        $ids = $request -> input('chkIds');

    }
}
