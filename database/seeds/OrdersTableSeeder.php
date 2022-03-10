<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Order;
use Faker\Factory as Faker;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=0; $i < 10; $i++) {
            Order::create([
                'user_id' => rand(1, 2) == 1? 1 : null,
                'billing_email' => $faker->email,
                'billing_name' => $faker->userName,
                'billing_address' => $faker->secondaryAddress,
                'billing_city' => $faker->city,
                'billing_province' => $faker->city,
                'billing_postalcode' => $faker->postcode,
                'billing_phone' => $faker->phoneNumber,
                'billing_name_on_card' => $faker->userName,
                'billing_discount' => 0,
                'billing_discount_code' => null,
                'billing_subtotal' => 1000,
                'billing_tax' => 200,
                'billing_total' => 1200,
                'shipped' => rand(0,1),
                'error' => $i%4 == 0 ? 'Error' : null,
            ]);
        }
    }
}
