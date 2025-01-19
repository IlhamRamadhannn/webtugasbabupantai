<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articles;
use App\Models\Comment; // Import the Comment model

class ArticledetailController extends Controller
{
    public function index(string $id)
    {
        $article = Articles::with('comments.user')->findOrFail($id);
        return view('article_detail', compact('article'));
    }
}