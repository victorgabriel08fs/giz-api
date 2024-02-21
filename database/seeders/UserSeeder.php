<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create(['name' => 'Victor Gabriel', 'email' => 'victor@victor.com', 'password' => bcrypt('password')]);
        $user2 = User::create(['name' => 'Andressa Francine', 'email' => 'andressa@andressa.com', 'password' => bcrypt('password')]);
        $user->assignRole('student');
        $user2->assignRole('student');
        $users = User::factory(5)->create();
        foreach ($users as $user) {
            $user->assignRole('student');
        }
    }
}