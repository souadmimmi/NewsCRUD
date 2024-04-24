<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable =[
     'titre',
    'contenu',
    'categorie',
    'date_debut',
     'date_expiration'];


     public function Category()
     {
        return $this->belongsTo(Category::class);
    }
}
