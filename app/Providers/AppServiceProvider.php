<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Inertia\Inertia;
use App\Models\Categories;
use App\Models\Category;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Inertia::share([
            'categories' => function () {
                return Category::get()->map(function ($category) {
                    return [
                        'id' => $category->id,
                        'name' => $category->name,
                        'meta_description' => $category->meta_description
                    ];
                });
            },
        ]);
    }
}
