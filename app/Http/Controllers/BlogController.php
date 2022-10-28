<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\User;


class BlogController extends Controller
{
    public function show($id){
        $article = Article::find($id);
        $author = User::find($id);
        return view('article', ['data'=> $article,'author'=>$author]);
    }

    public function showAll(){
        $articles = Article::all();
        return view('home', ['data'=> $articles]);
    }

    public function showCreateForm(){
        return view('createArticle');
    }

    public function save(){

    } 
}
