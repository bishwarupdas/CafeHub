<?php

use Illuminate\Database\Seeder;

class TaxTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $tax = array(
            array(
                'name' => 'State',
                'amount' => 2.5
            ),
            array(
                'name' => 'Center',
                'amount' => 2.5
            )
        );

        foreach ($tax as $row) {
            DB::table('tax')->insert([
                'name' => $row['name'],
                'percentage' => $row['amount']
            ]);
        }

    }
}
