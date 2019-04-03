<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();

        foreach (range(1,10) as $index) {

            DB::table('customers')->insert([
                'name' => $faker->name,
                'email' => $faker->unique()->email,
                'phone' => $faker->unique()->numberBetween(100000000, 999999999),
                'address' => $faker->address,
                'discount' => 0,
                'area' => "N. S. Avenue"
            ]);
        }
    }
}
