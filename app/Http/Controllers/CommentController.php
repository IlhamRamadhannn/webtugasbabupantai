<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comments;
use App\Models\Articles;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request, $id)
    {
        $article = Articles::findOrFail($id);

        $validated = $request->validate([
            'comment' => 'required|string|max:1000',
        ]);

        $article->comments()->create([
            'user_id' => auth()->id(),
            'comment' => $validated['comment'],
        ]);

        return redirect()->route('articles.show', $id)->with('success', 'Comment posted!');
    }
    public function edit(Comments $comment)
    {

        if ($comment->user_id !== auth()->id()) {
            return redirect()->route('articles.show', $comment->article_id)->with('error', 'You are not authorized to edit this comment.');
        }
        return view('comments.edit', compact('comment'));
    }

    public function update(Request $request, $id)
    {
        // Validate the updated comment
        $validated = $request->validate([
            'comment' => 'required|string|max:1000',
        ]);
    
        // Find the comment you want to update
        $comment = Comments::findOrFail($id);
    
        // Update the comment
        $comment->update([
            'comment' => $validated['comment'],
        ]);
    
        // Get the article ID for redirecting
        $articleId = $comment->articles_id;
    
        // Debug: print the articleId to see if it's correct
        // dd($articleId); // Dump and Die to check the value of $articleId
    
        if ($articleId) {
            // Redirect back to the article page with the updated comment
            return redirect()->route('articles.show', ['id' => $articleId])->with('success', 'Comment updated!');
        }
    
        // Fallback if articleId is not found
        return redirect()->route('homepage')->with('error', 'Article not found!');
    }

    public function destroy(Comments $comment)
    {
        $articleId = $comment->articles_id; // Retrieve the associated article ID

        $comment->delete(); // Delete the comment

        return redirect()->route('articles.show', $articleId)->with('success', 'Comment deleted successfully!');
    }
}
