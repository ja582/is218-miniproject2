<?php

use Illuminate\Database\Seeder;

class CarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('car')->insert([
            'make' => 'Toyota',
            'model' => 'Camry',
            'year' => 1990
        ]);
    }
}
