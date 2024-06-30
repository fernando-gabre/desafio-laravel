<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'category_id' => Category::all()->random()->id,
            'user_id' => User::all()->random()->id,
            'name' => "Disco voador modelo vs200",
            'value' => 50000
        ]);

        Product::create([
            'category_id' => Category::all()->random()->id,
            'user_id' => User::all()->random()->id,
            'name' => "Navegador GPS",
            'value' => 2000
        ]);

        Product::create([
            'category_id' => Category::all()->random()->id,
            'user_id' => User::all()->random()->id,
            'name' => "Teclado mecânico",
            'value' => 500
        ]);

        Product::create([
            'category_id' => Category::all()->random()->id,
            'user_id' => User::all()->random()->id,
            'name' => "Roteador Wi-Fi",
            'value' => 660
        ]);

        Product::create([
            'category_id' => Category::all()->random()->id,
            'user_id' => User::all()->random()->id,
            'name' => "Tv Smart",
            'value' => 6000
        ]);

        Product::create([
            'category_id' => Category::all()->random()->id,
            'user_id' => User::all()->random()->id,
            'name' => "Disco voador modelo vs200",
            'value' => 50000
        ]);

        Product::create([
            'category_id' => Category::all()->random()->id,
            'user_id' => User::all()->random()->id,
            'name' => "Dispositivos de escuta marcial",
            'value' => 50000
        ]);

    }
}
