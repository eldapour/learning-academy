<?php

use Illuminate\Database\Seeder;
use App\Cat;

class CatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cat::create([
            'name' => 'English',
        ]);

        Cat::create([
            'name' => 'web Developer',
        ]);

        Cat::create([
        'name' => 'doctor',
        ]);
    }
}
