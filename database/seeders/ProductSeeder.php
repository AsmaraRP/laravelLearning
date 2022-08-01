<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // Product::factory(3)->create();
        // or
        //
        Product::insert(
            [
                [
                    'product_name' => 'Sepatu',
                    'product_category' => 'Alat Olahraga',
                    'product_description' => 'Alat untuk melindungi kaki',
                    'price' => 20000,
                    'stock' => 8,
                ],
                [
                    'product_name' => 'Laptop',
                    'product_category' => 'Alat Elektronik',
                    'product_description' => 'Alat untuk mempermudah pekerjaan digital',
                    'price' => 5500000,
                    'stock' => 21,
                ],
                [
                    'product_name' => 'Kulkas',
                    'product_category' => 'Alat Elektronik',
                    'product_description' => 'Alat untuk mendinginkan makanan',
                    'price' => 1000000,
                    'stock' => 100,
                ],
            ]
        );
    }
}
