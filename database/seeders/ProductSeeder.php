<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
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
        Product::create([
            'name'=>'fruite',
            'detail'=>'fresh fruite',
            'price'=>'50.00',
            'stock'=>'5',
            'discount'=>'5.00'
        ]);
    }
}
