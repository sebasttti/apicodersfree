<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'Victor Arana Florez',
            'email'=>'victorarana@codersfree.com',
            'password'=>bcrypt('12345678')
        ]);

        User::factory(10)->create();
    }
}
