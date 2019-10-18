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
        for ($i=0; $i < 30; $i++) { 
            Product::create([
                'name' => 'laptop' . $i,
                'slug' => 'laptop-' . $i,
                'details' => '15 inches 1TB SSD 16 GB RAM',
                'price' => rand(1000, 9999),
                'category_id' => 1,
                'image' => 'image0.jpg',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, nisi. Exercitationem, explicabo obcaecati dicta libero inventore soluta ducimus, necessitatibus quaerat magnam sapiente mollitia eum beatae quidem et perferendis quis similique.',
            ]);
        }
        for ($i=0; $i < 30; $i++) {
            Product::create([
                'name' => 'Desktop' . $i,
                'slug' => 'desktop-' . $i,
                'details' => '15 inches 1TB SSD 16 GB RAM',
                'price' => rand(1000, 9999),
                'category_id' => 2,
                'image' => 'image1.jpg',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, nisi. Exercitationem, explicabo obcaecati dicta libero inventore soluta ducimus, necessitatibus quaerat magnam sapiente mollitia eum beatae quidem et perferendis quis similique.',
            ]);
        }
        for ($i=0; $i < 30; $i++) {
            Product::create([
                'name' => 'Phone' . $i,
                'slug' => 'phone-' . $i,
                'details' => '15 inches 1TB SSD 16 GB RAM',
                'price' => rand(1000, 9999),
                'category_id' => 3,
                'image' => 'image2.jpg',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, nisi. Exercitationem, explicabo obcaecati dicta libero inventore soluta ducimus, necessitatibus quaerat magnam sapiente mollitia eum beatae quidem et perferendis quis similique.',
            ]);
        }
        for ($i=0; $i < 30; $i++) {
            Product::create([
                'name' => 'Tablet' . $i,
                'slug' => 'tablet-' . $i,
                'details' => '15 inches 1TB SSD 16 GB RAM',
                'price' => rand(1000, 9999),
                'category_id' => 4,
                'image' => 'image3.jpg',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, nisi. Exercitationem, explicabo obcaecati dicta libero inventore soluta ducimus, necessitatibus quaerat magnam sapiente mollitia eum beatae quidem et perferendis quis similique.',
            ]);
        }
        for ($i=0; $i < 30; $i++) {
            Product::create([
                'name' => 'TV' . $i,
                'slug' => 'tv-' . $i,
                'details' => '15 inches 1TB SSD 16 GB RAM',
                'price' => rand(1000, 9999),
                'category_id' => 5,
                'image' => 'image4.jpg',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, nisi. Exercitationem, explicabo obcaecati dicta libero inventore soluta ducimus, necessitatibus quaerat magnam sapiente mollitia eum beatae quidem et perferendis quis similique.',
            ]);
        }
        for ($i=0; $i < 30; $i++) {
            Product::create([
                'name' => 'Camera' . $i,
                'slug' => 'camera-' . $i,
                'details' => '15 inches 1TB SSD 16 GB RAM',
                'price' => rand(1000, 9999),
                'category_id' => 6,
                'image' => 'image5.jpg',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, nisi. Exercitationem, explicabo obcaecati dicta libero inventore soluta ducimus, necessitatibus quaerat magnam sapiente mollitia eum beatae quidem et perferendis quis similique.',
            ]);
        }
    }
}
