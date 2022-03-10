<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\OrderProduct;
use App\Order;

class OrderProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 30; $i++) {
            OrderProduct::create([
                'product_id' => rand(1, 120),
                'order_id' => Order::all()->random()->id,
                'quantity' => rand(1,3),
            ]);
        }
    }
}
