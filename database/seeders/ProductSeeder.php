<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $price = rand(80, 150);

        for ($i = 0; $i <= 50; $i++) {
            DB::table('products')->insert([
                'name' => Str::random(10),
                'slug' => Str::random(5),
                'description' => Str::random(30),
                'image_name' => 'no_image.jpg',
                'price' => $price,
                'sales_price' => $price - 10,
            ]);
        }
    }
}
