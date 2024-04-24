<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'nom' => 'Actualités',
                'sous_categories' => [
                    ['nom' => 'Politique'],
                    ['nom' => 'Économie'],
                    ['nom' => 'Sport'],
                ],
            ],
            [
                'nom' => 'Divertissement',
                'sous_categories' => [
                    ['nom' => 'Cinéma'],
                    ['nom' => 'Musique'],
                    ['nom' => 'Sorties'],
                ],
            ],
            [
                'nom' => 'Technologie',
                'sous_categories' => [
                    [
                        'nom' => 'Informatique',
                        'sous_categories' => [
                            ['nom' => 'Ordinateurs de bureau'],
                            ['nom' => 'PC portable'],
                            ['nom' => 'Connexion internet'],
                        ],
                    ],
                    [
                        'nom' => 'Gadgets',
                        'sous_categories' => [
                            [
                                'nom' => 'Smartphones',
                                'sous_categories' => [
                                    ['nom' => 'Tablettes'],
                                ],
                            ],
                            ['nom' => 'Jeux vidéo'],
                        ],
                    ],
                ],
            ],
            [
                'nom' => 'Santé',
                'sous_categories' => [
                    ['nom' => 'Médecine'],
                    ['nom' => 'Bien-être'],
                ],
            ],
            // Ajoutez d'autres catégories ici...
        ];
    
        foreach ($categories as $categoryData) {
            $category = Category::create([
                'nom' => $categoryData['nom'],
            ]);
    
            $this->createSubCategories($categoryData['sous_categories'], $category);
        }
    }
    
    protected function createSubCategories($subCategories, $parentCategory)
    {
        foreach ($subCategories as $subCategoryData) {
            $subCategory = Category::create([
                'nom' => $subCategoryData['nom'],
                'parent_id' => $parentCategory->id,
            ]);
    
            if (isset($subCategoryData['sous_categories'])) {
                $this->createSubCategories($subCategoryData['sous_categories'], $subCategory);
            }
        }
    }
}
