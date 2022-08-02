<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Description::truncate();
        User::truncate();
        Product::truncate();

        \App\Models\User::factory(2)->create();

        $des1 = Description::create(['description' => "1. Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, ratione.", 'slug' => "desc-1"]);
        $des2 = Description::create(['description' => "2. Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, ratione.", 'slug' => "desc-2"]);
        $des3 = Description::create(['description' => "3. Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, ratione.", 'slug' => "desc-3"]);
        $des4 = Description::create(['description' => "4. Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, ratione.", 'slug' => "desc-4"]);
        $des5 = Description::create(['description' => "5. Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, ratione.", 'slug' => "desc-5"]);

        $pro1 = Product::create(['name' => "Product One", 'slug' => "product-one", 'description' => "Dest one", 'price' => "100.00", "description_id" => $des1->id]);
        $pro1 = Product::create(['name' => "Product Two", 'slug' => "product-tow", 'description' => "Dest two", 'price' => "200.00", "description_id" => $des2->id]);
        $pro1 = Product::create(['name' => "Product Three", 'slug' => "product-three", 'description' => "Dest three", 'price' => "300.00", "description_id" => $des3->id]);
    }
}
