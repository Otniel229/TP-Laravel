<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class PostController extends Controller
{
    public function list_post(){
        $articles = Article::withCount('comments')->Paginate(10); 
        return view('post.liste', compact('articles'));
    }

    public function ajouts_post(){
        return view('post.ajouts');
    }

    public function ajouts_post_traitement(Request $request){
       $request->validate([
        'titre' => 'required',
        'contenu' => 'required',
       ]);

       $post = new Article();
       $post->titre = $request->titre;
       $post->contenu = $request->contenu;
       $post->save();

       return redirect('/ajouts')->with('status','Un article a été ajouté avec succes.');

    }
       public function affichage($id)
    {
        $article = Article::with('comments')->findOrFail($id);
        return view('post.affichage', compact('article'));
    }

    public function modifier($id){
        $article = Article::find($id);
        return view('post.modifier',compact('article'));
    }

    public function modifier_post_traitement(Request $request){
        $request->validate([
            'titre' => 'required',
            'contenu' => 'required',
           ]);
           $post = Article::find($request->id);
           $post->titre = $request->titre;
           $post->contenu = $request->contenu;
           $post->update();
            return redirect('/post')->with('status','Un article a été modifié avec succes.');


    }

    public function supprimer($id){
        $article =Article::find($id);
        $article->delete();
        return redirect('/post')->with('status','Un article a bien été supprimé.');

    }


}
