<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Article;
use App\Models\Testimonial;
use Inertia\Inertia;
use App\Models\Media;

class HomeController extends Controller
{

    public function dashboard()
    {
        // Get the latest 3 articles
        $articles = Article::with(['media', 'user', 'category'])
                    ->orderBy('created_at', 'desc')
                    ->take(3)
                    ->get();
    
        // Get all categories
        $categories = Category::with('media')->get();

        $testimonials = Testimonial::get();
    
        return Inertia::render('Dashboard', [
            'categories' => $categories,
            'articles' => $articles,
            'testimonials' => $testimonials
        ]);
    }
    
    
}
