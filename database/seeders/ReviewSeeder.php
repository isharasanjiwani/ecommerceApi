<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Review;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Review::create([
            'product_id'=>1,
            'review'=>'good',
            'star'=>2
        ]);
    }
}
