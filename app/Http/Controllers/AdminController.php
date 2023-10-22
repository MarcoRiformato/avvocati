<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Article;

class AdminController extends Controller
{
    public function index()
    {
        return Inertia::render('Admin/AdminDashboard');
    }

    public function indexArticles()
    {
        $articles = Article::with(['user', 'category'])->orderBy('created_at', 'desc')->get();
        return Inertia::render('Admin/Articles/Index', [
            'articles' => $articles
        ]);
    }
    
}
