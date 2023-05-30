<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::create([
        //     'name' => 'Chantikka Riffka',
        //     'email' => 'chantikkariffka@gmail.com',
        //     'password' => Hash::make('12345678')
        // ]);

        $faker = Faker::create('id_ID');

        for ($i=1; $i <= 10; $i++) {
            User::create([
                'name' => $faker->address,
                'email' => $faker->email,
                'password' => '',
            ]);
        }
    }
}
