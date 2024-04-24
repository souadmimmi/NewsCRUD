<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
   

    public function getArticlesByCategory($categoryId)
    {
        $category = Category::find($categoryId);
        if (!$category) {
            abort(404); 
        }

        $articles = $this->recursiveArticleSearch($category);
        $categoryname=$category->nom;

        return view('NewsByCategory', compact('articles','categoryname'));
    }


    

    private function recursiveArticleSearch($category)
    {
        $articles = $category->news;
    
        foreach ($category->subCategories as $subCategory) {
            $articles = $articles->merge($this->recursiveArticleSearch($subCategory));
        }
    
        return $articles;
 
 
    }


    // api recherche


    public function searchByCategoryName($categoryName)
{
    $category = Category::where('nom', $categoryName)->first();

    if (!$category) {
        return response()->json(['message' => 'Categorie intouvale'], 400);
    }

    $articles = $this->recursiveArticleSearch($category);

    $currentDate = now();

    //afficher  que les news non expirées
    $articles = $articles->where('date_expiration', '>=', $currentDate);

    return response()->json(['articles' => $articles],200);
}
}
