<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, $articleId)
    {
        $request->validate([
            'author' => 'required',
            'content' => 'required',
        ]);

        $comment = new Comments([
            'article_id' => $articleId,
            'author' => $request->author,
            'content' => $request->content,
        ]);

        $comment->save();

        return redirect()->route('post.affichage', $articleId);
    }
}
