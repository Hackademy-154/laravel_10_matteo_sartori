<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles=Article::all();
        return view("articles.index",compact("articles"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $articles = Article::all();
        return view("articles.create", compact("articles"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $article = Article::create([
            "title" => $request->title,
            "description" => $request->description, 
            "image" => $request->has("image") ? $request->file("image") : null,
            "user_id" => Auth::user()->id,
        ]);

        // Usa `categories()` con le parentesi per chiamare la relazione
        $article->categories()->sync($request->categories);

        return redirect()->route('index')->with("success", "Articolo aggiunto con successo");
    }


    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view("articles.show", compact("article"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        if ($request->image) {
            $article->update([
                'image' => $request->file('image')->store('media', 'public')
            ]);
        }

        $article->update([
            'title' => $request->title,
            'plot' => $request->plot,
            'duration' => $request->duration,
        ]);

        if ($request->has('categories')) {
            $article->categories()->sync($request->categories);
        } else {
            $article->categories()->detach();
        }
        return redirect()->route('index', compact('article'))->with('success', 'article modificato correttamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('index')->with('success','');
    }
    
}
