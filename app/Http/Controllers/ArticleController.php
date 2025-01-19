<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use App\Models\Comments;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Articles::paginate(10);
        
        return view('articles', compact('articles'));
    }
    public function show($id)
    {

        // Fetch the article with its comments and their users
        $article = Articles::findOrFail($id);
        // with('comments.user')->
        // Retrieve the current visibility state of comments from the session
        $commentsVisible = session('comments_visible', true);

        return view('articles.show', compact('article', 'commentsVisible'));
    }

    public function toggleComments($id)
    {
        // Toggle the comments' visibility in the session
        $currentState = session('comments_visible', true);
        session(['comments_visible' => !$currentState]);

        // Redirect back to the article's show page
        return redirect()->route('articles.show', $id);

    }

    public function postcomment(Request $request, int $id){
        // $user = Auth::user();

        // Comments::create([

        // ]);

    }

    public function editcomment(Request $request, int $id){

    }

    public function deletecomment(int $id){

    }

}
