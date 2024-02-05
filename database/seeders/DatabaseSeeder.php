<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Maleakhi Ekklesia',
            'email'=> 'ekiputra234@gmail.com',
            'password' => Hash::make('Sayangmamih1.')
        ]);
    }
}
