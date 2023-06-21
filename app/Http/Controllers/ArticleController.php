<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Rules\WebsiteChecker;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::where('trash', '=', 0)->orderByDesc('id')->get();

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
        // Form Validation
        $request->validate([
            'title'=>'required|min:5|max:60000',
            'description'=>'required|min:5|max:60000',
            'email'=>'required|email|regex:/.+@.+\..+/iu',
            'url'=>['required', 'url', new WebsiteChecker],
            'newsId'=>'numeric',
        ], [
            'title.required'=>'You have to provide title!!!',
            'title.min'=>'you have to provide the title at least 5 chars!!!',
            'email.regex'=>'The email doesnt match the format. ex. name@domain.extesion',
        ]);

        Article::create($request->all());
        return redirect()->back()->with('successullyMessage',
            'The article has been inserted successully!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $article = Article::find($id);
        return view("admin.articles.show", ['article'=>$article]);
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

    //    Article::find($id)->update([
    //         'title'=>$request->input('title'),
    //         'description'=>$request->input('description'),
    //         'publish'=> $publish
    //    ]);


        // $article = Article::find($id);
        // $article->title = $request->input('title');
        // $article->description = $request->input('description');
        // $article->publish = $publish;
        // $article->save();
        if($request->input('publish') == null){
            $publish = 0;
        }else{
                $publish = $request->input('publish');
        }

        $data = $request->all();
        $data['publish'] = $publish;
        Article::find($id)->update($data);

       return redirect('/admin/articles');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Article::find($id)->delete();
        Article::find($id)->update(['trash'=>1]);
        return redirect('/admin/articles')->with('delSuccess',
            'The article has been deleted successfully!!!');
    }
    public function deleteAll(Request $request){
        $ids = $request->input('chkIds');
        foreach($ids as $id){
            Article::find($id)->update(['trash'=>1]);
        }
        return redirect()->back();
    }

    public function createUserSession(Request $request){
        // create session for user
        //$request -> session() -> put ('user', 'Meas SoksophornReaksmey');

        //create session first time use only then automatically delete sesssion
        session() -> flash ('user', 'Meas SoksophornReaksmey');
    }

    public function useUserSession(Request $request){

        if($request -> session() -> has('user')){ //check if user exist yet b4 use
            return $request->session()->get('user');
            dd($request->session()->get('user')); //output for debug
        }
    }

    public function deleteUserSession(Request $request){
        $request -> session() -> pull('user');

        //$request -> session() -> forget('user'); => Same use

        //$request -> session() -> flush(); => Delete all session
    }
}
