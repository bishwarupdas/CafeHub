<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = array("Katti Roll", "Beverages", "Starters", "Soup", "Chowmein", "Rice", "Shawarma", "Grill", "Biriyani", "Luchi");
        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'name' => $category
            ]);
        }
    }
}
