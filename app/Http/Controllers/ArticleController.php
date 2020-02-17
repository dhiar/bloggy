<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo 'index';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Article::create([
            'title'=>'Hello World',
            'body'=>'Content Hello WOrld',
            'user_id'=>'5'
        ]);

        Article::create([
            'title'=>'Artikel Natural',
            'body'=>'Content Artikel Natural',
            'user_id'=>'5'
        ]);

        Article::create([
            'title'=>'Sea On Bali',
            'body'=>'Content Sea On Bali',
            'user_id'=>'6'
        ]);

        Article::create([
            'title'=>'Indonesian Food',
            'body'=>'Content Indonesian Food',
            'user_id'=>'7'
        ]);

        Article::create([
            'title'=>'East From Asia',
            'body'=>'Content East From Asia',
            'user_id'=>'7'
        ]);

        echo response()->json(['success' => true]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        dd(Article::all()->toArray());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }

    public function onetomany(Article $article){
        $articles = $article::all();

        foreach ($articles as $article) {
            echo $article->title.'__Name='.$article->user->name.'__<br>';
        }
    }

    public function showByUser($id)
    {
        echo 'id = '.$id;
    }
}
