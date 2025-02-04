<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Eletrônicos'
        ]);

        Category::create([
            'name' => 'Voadores'
        ]);

        Category::create([
            'name' => 'Extra terrestre'
        ]);

        Category::create([
            'name' => 'Comunicação'
        ]);

        Category::create([
            'name' => 'Solidos'
        ]);

        Category::create([
            'name' => 'Meio de transporte'
        ]);
    }
}
