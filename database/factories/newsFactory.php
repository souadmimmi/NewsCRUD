<?php

namespace Database\Factories;
use App\Models\Category;
use App\Models\news;


use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\news>
 */
class newsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array

    {  $categories = Category::whereNotNull('parent_id')->get();

        return [
            'titre' => fake()->sentence(),
            'categorie' => function () use ($categories) {
                $randomCategory = $categories->random();
                return $randomCategory->nom;
            },
            'contenu' => fake()->paragraph(400),
            'category_id' => function ($attributes) use ($categories) {
                $categoryName = $attributes['categorie'];
                $category = $categories->firstWhere('nom', $categoryName);
                return $category->id;
            },
            'date_debut' => fake()->dateTimeBetween('-1 month', 'now')->format('Y-m-d'),
            'date_expiration' => fake()->dateTimeBetween('now', '+2 month')->format('Y-m-d'),
        ];
    }
}
