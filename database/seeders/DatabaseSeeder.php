<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Article;
use App\Models\Category;
use App\Models\CaseStudy;
use App\Models\Testimonial;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'prova',
            'email' => 'prova@gmail.com',
            'password' => Hash::make('123456789')
        ]);
        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.it',
            'password' => Hash::make('123456789'),
            'is_admin' => '1'
        ]);

        Article::factory()->count(2)->create();
        Category::factory()->count(1)->create();
        CaseStudy::factory()->count(2)->create();
        Testimonial::factory()->count(3)->create();
    }
}
