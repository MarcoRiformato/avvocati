<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use Inertia\Inertia;
use App\Models\Media;

class HomeController extends Controller
{


    public function dashboard()
    {
        $categories = Category::with('media')->get();
        return Inertia::render('Dashboard', [
            'categories' => $categories,
        ]);
    }
    

}
