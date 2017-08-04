<?php

namespace App\Http\Controllers;

use App\Article;
use App\Province;
use App\Municipality;
use Illuminate\Http\Request;
use App\Alert;
class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.articles.index', ['articles' => $articles]);
    }

    public function table(Request $request){
        if($request->ajax()){
            $articles = Article::all();
            return view('admin.articles.table')->with('articles', $articles); 
        }
        else {
            return redirect(route('article.index'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provinces = Province::all();
        $municipalities = Municipality::all();
        return view('admin.articles.form')  
                    ->with('provinces', $provinces)
                    ->with('municipalities', $municipalities)
                    ->with('type', "CREATE")
                    ->with('title', "ADD")
                    ->with('action', 'btn-success add')
                    ->with('button_text', 'Add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->ajax()){

        $this->validate($request, [
            // Name of input in form
            'fkarticle_municipality' => 'required',
            'article_name' => 'required',
            'article_desc' => 'required'
        ]);

        $article = new Article([
            //Name of column in database
            'fkarticle_municipalities' => $request->input('fkarticle_municipality'),
            'article_name' => $request->input('article_name'),
            'article_desc' => $request->input('article_desc')
        ]);
        
        $article->save();
        //Alert::success('Good job!')->persistent("Close");
        //$destination->tags()->attach($request->input('tags') === null ? [] : $request->input('tags'));
        return redirect()->route('article.index')->with('info', 'Article Added, Article name is: ' . $request->input('article_name'));
    }
            else {
            return redirect(route('article.index'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        if($request->ajax()) {
            $article = Article::findOrFail($id);
            $provinces = Province::all();
            $municipalities = Municipality::all();            
            $title = "Official";
           return view('admin.articles.form')
                ->with('provinces', $provinces)
                ->with('municipalities', $municipalities)
                ->with('article', $article)
                ->with('title', $title)
                ->with('type', "SHOW")
                ->with('button_text', "Save Changes")
                ->with('action', "btn-warning view");
        }else{
            return redirect(route('article.index'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        if($request->ajax()) {

            $article = Article::findOrFail($id);
            $provinces = Province::all();
            $municipalities = Municipality::all(); 
            $title= "Edit Article";
           return view('admin.articles.form')
                ->with('provinces', $provinces)
                ->with('municipalities', $municipalities)
                ->with('article', $article)
                ->with('title', $title)
                ->with('type', "EDIT")
                ->with('button_text', "Save Changes")
                ->with('action', "btn-primary edit");
        }else{
            return redirect(route('article.index'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        if($request->ajax()){
        $this->validate($request, [
            'fkarticle_municipality' => 'required',
            'article_name' => 'required',
            'article_desc' => 'required'
        ]);

        $article = Article::find($request->input('id'));
        $article->fkarticle_municipalities = $request->input('fkarticle_municipality');
        $article->article_name = $request->input('article_name');
        $article->article_desc = $request->input('article_desc');

        $article->update();

        return redirect()->route('article.index')->with('info', 'Article edited for: ' . $request->input('article_name'));
        }else{
            return redirect(route('article.index'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $article = $article->destroy($id)
            ? [
                    'message'    => "Successfully deleted article",
                    'alert' => 'success',
            ]
            : [
                    'message'    => "Sorry it appears there was a problem deleting this article",
                    'alert' => 'error',
            ];

        return response()->json($article);
    }
}
