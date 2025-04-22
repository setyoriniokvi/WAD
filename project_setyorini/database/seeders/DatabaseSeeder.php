<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

DB::table('users')->insert([
    'name' => 'Admin',
    'email' => 'setyoriniokviana27@gmail.com',
    'password' => Hash::make('12345678'),
]);

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
{
    $this->call([
        SpicySnacksSeeder::class,
    ]);
}}