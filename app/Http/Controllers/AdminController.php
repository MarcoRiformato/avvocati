<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Article;
use App\Models\Category;
use App\Models\CaseStudy;

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

    public function indexCategories()
    {
        $categories = Category::all();
        return Inertia::render('Admin/Categories/Index', compact('categories'));
    }

    public function indexCases()
    {
        $cases = CaseStudy::all();
        return Inertia::render('Admin/Cases/Index', compact('cases'));
    }
    
    
}
