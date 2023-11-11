<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Article;
use Inertia\Inertia;
use App\Models\Media;

class HomeController extends Controller
{


    public function dashboard()
    {
        $articles = Article::with(['media', 'user', 'category'])->orderBy('created_at', 'desc')->get();
        $categories = Category::with('media')->get();
        return Inertia::render('Dashboard', [
            'categories' => $categories,
            'articles' => $articles
        ]);
    }
    

}
