<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        Category::create([
            'name' => 'Laptops',
            'slug' => 'laptops'
        ]);
        Category::create([
            'name' => 'Desktops',
            'slug' => 'desktops'
        ]);
        Category::create([
            'name' => 'Phones',
            'slug' => 'phones'
        ]);
        Category::create([
            'name' => 'Tablets',
            'slug' => 'tablets'
        ]);
        Category::create([
            'name' => 'TVs',
            'slug' => 'tvs'
        ]);
        Category::create([
            'name' => 'Cameras',
            'slug' => 'cameras'
        ]);
    
    }
}
