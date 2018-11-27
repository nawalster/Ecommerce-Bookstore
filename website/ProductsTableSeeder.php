<?php

use Illuminate\Database\Seeder;

use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(\App\Product::class, 30)->create();

        $p1 = [

          'name' => 'Learn to build websites in HTML5',
          'image' => 'uploads/products/book.png',
          'price' => 5000,
          'description' => "Lorem epsum"
        ];

        Product::create($p1);



    }
}
