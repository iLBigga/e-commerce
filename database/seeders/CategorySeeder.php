<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Eletronics', 'Home', 'Pet', 'Fashion'];

        foreach($categories as $n){
            $c = new Category();
            $c->name = $n;
            
            $c->save();
        }
    }
}
