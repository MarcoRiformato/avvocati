<?php

namespace Database\Factories;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => 'Case study title',
            'meta_description' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            'body' => $this->faker->paragraphs(3, true),
            'category_id' => Category::factory()->create()->id,
        ];
    }
}
