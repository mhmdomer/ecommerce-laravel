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
        Product::create([
            'name' => 'laptop1',
            'slug' => 'laptop-1',
            'details' => '15 inches 1TB SSD 16 GB RAM',
            'price' => 1000,
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, nisi. Exercitationem, explicabo obcaecati dicta libero inventore soluta ducimus, necessitatibus quaerat magnam sapiente mollitia eum beatae quidem et perferendis quis similique.',
        ]);
        Product::create([
            'name' => 'laptop2',
            'slug' => 'laptop-2',
            'details' => '15 inches 1TB SSD 16 GB RAM',
            'price' => 1000,
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, nisi. Exercitationem, explicabo obcaecati dicta libero inventore soluta ducimus, necessitatibus quaerat magnam sapiente mollitia eum beatae quidem et perferendis quis similique.',
        ]);
        Product::create([
            'name' => 'laptop3',
            'slug' => 'laptop-3',
            'details' => '15 inches 1TB SSD 16 GB RAM',
            'price' => 1000,
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, nisi. Exercitationem, explicabo obcaecati dicta libero inventore soluta ducimus, necessitatibus quaerat magnam sapiente mollitia eum beatae quidem et perferendis quis similique.',
        ]);
        Product::create([
            'name' => 'laptop4',
            'slug' => 'laptop-4',
            'details' => '15 inches 1TB SSD 16 GB RAM',
            'price' => 1000,
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, nisi. Exercitationem, explicabo obcaecati dicta libero inventore soluta ducimus, necessitatibus quaerat magnam sapiente mollitia eum beatae quidem et perferendis quis similique.',
        ]);
        Product::create([
            'name' => 'laptop5',
            'slug' => 'laptop-5',
            'details' => '15 inches 1TB SSD 16 GB RAM',
            'price' => 1000,
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, nisi. Exercitationem, explicabo obcaecati dicta libero inventore soluta ducimus, necessitatibus quaerat magnam sapiente mollitia eum beatae quidem et perferendis quis similique.',
        ]);
        Product::create([
            'name' => 'laptop6',
            'slug' => 'laptop-6',
            'details' => '15 inches 1TB SSD 16 GB RAM',
            'price' => 1000,
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, nisi. Exercitationem, explicabo obcaecati dicta libero inventore soluta ducimus, necessitatibus quaerat magnam sapiente mollitia eum beatae quidem et perferendis quis similique.',
        ]);
        Product::create([
            'name' => 'laptop7',
            'slug' => 'laptop-7',
            'details' => '15 inches 1TB SSD 16 GB RAM',
            'price' => 1000,
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, nisi. Exercitationem, explicabo obcaecati dicta libero inventore soluta ducimus, necessitatibus quaerat magnam sapiente mollitia eum beatae quidem et perferendis quis similique.',
        ]);
        Product::create([
            'name' => 'laptop8',
            'slug' => 'laptop-8',
            'details' => '15 inches 1TB SSD 16 GB RAM',
            'price' => 1000,
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, nisi. Exercitationem, explicabo obcaecati dicta libero inventore soluta ducimus, necessitatibus quaerat magnam sapiente mollitia eum beatae quidem et perferendis quis similique.',
        ]);
    }
}
