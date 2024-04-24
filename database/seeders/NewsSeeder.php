<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Categorie;

use App\Models\news;

class NewsSeeder extends Seeder
{ public function run()
    {
        news::factory(100)->create();

        }
    
}
