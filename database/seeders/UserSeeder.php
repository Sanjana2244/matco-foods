<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'role' => admin(),
                'name' => 'Admin',
                'email' => 'admin@matco.com',
                'password' => bcrypt('secret@matco'),
                'is_active' => 1,
                'created_at' => now(),
            ],
        ]);
    }
}
