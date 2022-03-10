<?php

namespace Database\Seeders;

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
        $this->call(CategoryTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(CouponsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(ProductTagSeeder::class);
    }
}
