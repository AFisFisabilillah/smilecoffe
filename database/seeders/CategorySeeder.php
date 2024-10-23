<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class CategorySeeder extends Seeder
{
    
    public function run(): void
    {
        Categories::create([
            "name" => "Coffe Beans",
            "slug" => "coffe-beans"
        ]);
        Categories::create([
            "name" => "Alat Kopi",
            "slug" => "alat-kopi"
        ]);
        Categories::create([
            "name" => "Minuman",
            "slug" => "minuman"
        ]);
        Categories::create([
            "name" => "Makanan",
            "slug" => "makanan"
        ]);
    }
}
