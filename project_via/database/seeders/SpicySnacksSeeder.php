<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpicySnacksSeeder extends Seeder
{
    public function run()
    {
        DB::table('spicy_snacks')->insert([
            [
                'name' => 'Camilan Pedas 1',
                'description' => 'Camilan pedas dengan rasa yang menggugah selera.',
                'price' => 15000,
            ],
            [
                'name' => 'Camilan Pedas 2',
                'description' => 'Camilan pedas dengan level kepedasan tinggi.',
                'price' => 20000,
            ],
            [
                'name' => 'Camilan Pedas 3',
                'description' => 'Camilan pedas dengan kombinasi rasa asin dan pedas.',
                'price' => 18000,
            ],
        ]);
    }
}
