<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $user_id = User::all()->pluck('id');
        $categories = Category::all()->pluck('id');

        for($i = 0; $i < 20; $i++){
            $product = new Product();
            $product->user_id = $faker->randomElement($user_id);
            $product->category_id = $faker->randomElement($categories);
            $product->name = $faker->sentence();
            $product->description = $faker->text(100);
            $product->price = $faker->numberBetween(1, 200);

            $product->save();
        }
    }
}
